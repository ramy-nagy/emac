<div class="row tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
    <div class="px-4 py-3 mb-8  rounded-lg shadow-md dark:bg-gray-800">
        Projects NO :: {{$project_id}} <br>
        Pending Distance Per Side :: 15 MM .
        <form action="{{route('RecDuct')}}" method="post">
            @csrf
            <input type="hidden" value="{{$project_id}}" name="project_id">
            <div class="row">
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Width (mm)</span>
                    <input type="number" min="50" id="Width" value="50" name="width"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Depth (mm)</span>
                    <input type="number" min="50" id="Depth" value="50" name="depth"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                    <input type="number" min="0" id="Length" name="length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="Area" readonly name="area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <select id="Thickness" name="thermal_thickness"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0"></option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
                    <input type="number" min="0" value="0" id="Area_1_inch" readonly name="Area_1_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
                    <input type="number" min="0" value="0" id="Area_2_inch" readonly name="Area_2_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Cladding</span>
                    <select id="Cladding" name="cladding_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="Cladding_Area" readonly name="Cladding_Area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Accoustic</span>
                    <select id="Accoustic" name="accoustic_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                    <input type="number" min="0" id="Accoustic_Length" name="accoustic_length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" id="Accoustic_Area" readonly name="Accoustic_Area" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="duct_gage text-gray-700 dark:text-gray-400">Duct Gage</span>
                    <select id="duct_gage" name="duct_gage"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="20">20</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                        <option value="22">22</option>
                        <option value="24">24</option>
                        <option value="26">26</option>
                        <option value="28">28</option>
                        <option value="30">30</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <input type="number" readonly id="thickness" name="thickness" value="1.006"
                        class="thickness block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
                    <input type="number" readonly id="duct_weight" name="duct_weight" value="0"
                        class="duct_weight block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <div class="col-md-4 row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success mt-4">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0 text-left">
                    <thead>
                        {{-- @if($project->RecDucts->count()) @foreach ($project->RecDucts as
                        $RecDuct)@endforeach
                        <tr class="dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <td class="cell" colspan="3" class="table-active">Tag NO :
                                {{$RecDuct->tag_no ?? ''}}</td>
                            <td class="cell" colspan="3" class="table-active">Description :
                                {{$RecDuct->description ??
                                ''}}</td>
                            <td class="cell" colspan="3" class="table-active">location :
                                {{$RecDuct->location ?? ''}}
                            </td>
                            <td class="cell" colspan="3" class="table-active">Section No :
                                {{$RecDuct->section_no ??
                                ''}}</td>
                            <td class="cell" colspan="3" class="table-active">Pending = 15mm</td>
                            <td class="cell" colspan="2" class="table-active"></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <td class="cell" class="table-active"></td>
                            <td class="cell" colspan="4" class="table-active">Duct Data</td>
                            <td class="cell" colspan="3" class="table-active">Thermal insulation
                                data
                            </td>
                            <td class="cell" colspan="2" class="table-active">Cladding</td>
                            <td class="cell" colspan="3" class="table-active">Accoustic</td>
                            <td class="cell" colspan="3" class="table-active">Duct Gage</td>
                            {{-- <td class="cell" class="table-active">action</td>
                        </tr>
                        @endif --}}
                        <tr class="dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="cell">#</th>
                            <th class="cell">Width</th>
                            <th class="cell">Depth</th>
                            <th class="cell">Length</th>
                            <th class="cell">Area</th>
                            <th class="cell">Thickness</th>
                            <th class="cell">Area 1 inch</th>
                            <th class="cell">Area 1 inch</th>
                            <th class="cell">Cladding</th>
                            <th class="cell">Area</th>
                            <th class="cell">Accoustic</th>
                            <th class="cell">Length</th>
                            <th class="cell">Area</th>
                            <th class="cell">Duct Gage</th>
                            <th class="cell">Thickness</th>
                            <th class="cell">Duct weight</th>
                            {{-- <th class="cell">Pending</th> --}}
                            {{-- <th class="cell">action</th> --}}
                        </tr>
                    </thead>
                    <tbody class=" dark:bg-gray-800">
                        @forelse ($RecDucts->RecDucts as $RecDuct)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="cell">{{$RecDuct->id ?? ''}}</td>

                            <td class="cell">{{$RecDuct->width ?? ''}}</td>
                            <td class="cell">{{$RecDuct->depth ?? ''}}</td>
                            <td class="cell">{{$RecDuct->length ?? ''}}</td>
                            <td class="cell">{{$RecDuct->area ?? ''}}</td>
                            <td class="cell">{{$RecDuct->thermal_thickness ?? ''}}</td>
                            <td class="cell">{{$RecDuct->area_1_inch ?? ''}}</td>
                            <td class="cell">{{$RecDuct->area_2_inch ?? ''}}</td>
                            <td class="cell">{{$RecDuct->cladding_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RecDuct->cladding_area ?? ''}}</td>
                            <td class="cell">{{$RecDuct->accoustic_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RecDuct->accoustic_length ?? ''}}</td>
                            <td class="cell">{{$RecDuct->accoustic_area ?? ''}}</td>
                            <td class="cell">{{$RecDuct->duct_gage ?? ''}}</td>
                            <td class="cell">{{$RecDuct->thickness ?? ''}}</td>
                            <td class="cell">{{$RecDuct->duct_weight ?? ''}}</td>
                            {{-- <td class="cell">{{$RecDuct->pending_distance_per_side ?? ''}}</td>
                            --}}
                            {{-- <td>
                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </button>
                            </td> --}}
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                    <tfoot class=" dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Loss Factor
                            </td>
                            <td colspan="12" class="text-lg">
                                15%
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total galvanized sheet metal duct [KG]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_duct_weight * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total galvanized sheet metal Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total galvanized sheet metal Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_length * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total insulation Area [m2] 1 inch thickness
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_area_1_inch * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total insulation Area [m2] 2 inch thickness
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_area_2_inch * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total Acoustic insulation Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_accoustic_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total Cladding Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_cladding_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!--//table-responsive-->
        </div>
        <!--//app-card-body-->
    </div>
</div>
@push('scripts')
<script>
    // every input in form
        $("input[type='number']").change(function(){
            var result = ((parseInt($("#Width").val())+parseInt($("#Depth").val())+(2*15))*2*($("#Length").val()/1000));
            // area change
            $( "#Area" ).val(result.toFixed(1));
            // duct_weight change
            $( "#duct_weight" ).val($("#Area").val() * duct_weight[$("#duct_gage").val()]);
            //-------------------
            var resultAccoustic = 0 ;
            if ( $('select#Accoustic').val() == 1 ) {
            resultAccoustic = ((parseInt($("#Width").val()) + parseInt($("#Depth").val())) *2* (parseInt($("#Accoustic_Length").val())/1000)) ;
                $( "#Accoustic_Area" ).val(resultAccoustic.toFixed(2));
            }else{
                $( "#Accoustic_Area" ).val(resultAccoustic);
            }
        });
        $("#duct_gage").on('change', function() {
            // thickness duct_weight change in  duct_gage change
            $('#thickness').val(thickness[this.value]);
            $( "#duct_weight" ).val($("#Area").val() * duct_weight[$("#duct_gage").val()]);
        });
        // ---------------------
        $('select#Thickness').on('change', function() {
            var result1 = ((parseInt($("#Width").val())+50+parseInt($("#Depth").val())+50)*(.002)*($("#Length").val()));
            var result2 = ((parseInt($("#Width").val())+100+parseInt($("#Depth").val())+100)*(.002)*($("#Length").val()));
            if ( this.value == 25 ) {
                $( "#Area_1_inch" ).val(result1.toFixed(2));
                $( "#Area_2_inch" ).val(0);
            }else if(this.value == 50){
                $( "#Area_2_inch" ).val(result2);
                $( "#Area_1_inch" ).val(0);
            }else{
                $( "#Area_1_inch" ).val(0);
                $( "#Area_2_inch" ).val(0);
            }
        });
        //-------------------------
        $('select#Cladding').on('change', function() {
            var resultCladding = 0 ;
            if ( this.value == 1 ) {
                if ($("select#Thickness").val() == '') {
                    resultCladding =  $("#Area").val() * 1.006 ;
                    $( "#Cladding_Area" ).val(resultCladding);
                } else {
                    resultCladding = ($("#Area_1_inch" ).val() * 1.006) + ($("#Area_2_inch" ).val() * 1.006) ;
                    $( "#Cladding_Area" ).val(resultCladding.toFixed(4));
                }
            }else{
                $( "#Cladding_Area" ).val(resultCladding);
            }
        });
        // -----------------------
        $('select#Accoustic').on('change', function() {
            var resultAccoustic = 0 ;
            if ( this.value == 1 ) {
            resultAccoustic = ((parseInt($("#Width").val()) + parseInt($("#Depth").val())) *2* (parseInt($("#Accoustic_Length").val())/1000)) ;
            $( "#Accoustic_Area" ).val(resultAccoustic.toFixed(2));
            }else{
                $( "#Accoustic_Area" ).val(resultAccoustic);
            }
        });
</script>
@endpush