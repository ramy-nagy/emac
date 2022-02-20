<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
    <div class="px-4 py-3 mb-8  rounded-lg shadow-md dark:bg-gray-800">
        Projects NO :: {{$project_id}} <br>
        Pending Distance Per Side :: 15 MM .
        <form action="{{route('RoundDust')}}" method="post">
            @csrf
            <input type="hidden" value="{{$project_id}}" name="project_id">
            <div class="row">
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Diameter(m)</span>
                    <input type="number" min="0" id="round-ruct-diameter" value="0" name="diameter"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length(m)</span>
                    <input type="number" min="0" id="round-ruct-length" name="length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="round-ruct-area" readonly name="area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <select id="round-ruct-Thickness" name="thermal_thickness"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0"></option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
                    <input type="number" min="0" value="0" id="round-ruct-Area_1_inch" readonly name="Area_1_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
                    <input type="number" min="0" value="0" id="round-ruct-Area_2_inch" readonly name="Area_2_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Cladding</span>
                    <select id="round-ruct-Cladding" name="cladding_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="round-ruct-Cladding_Area" readonly name="Cladding_Area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Accoustic</span>
                    <select id="round-ruct-Accoustic" name="accoustic_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                    <input type="number" min="0" id="round-ruct-Accoustic_Length" name="accoustic_length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" id="round-ruct-Accoustic_Area" readonly name="Accoustic_Area" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <br>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Duct Gage</span>
                    <select id="round-ruct-duct_gage" name="duct_gage"
                        class="duct_gage block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="24">24</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                        <option value="20">20</option>
                        <option value="22">22</option>
                        <option value="26">26</option>
                        <option value="28">28</option>
                        <option value="30">30</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <input type="number" readonly id="round-ruct-thickness" name="thickness" value="0.701"
                        class="thickness block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
                    <input type="number" readonly id="round-ruct-duct_weight" name="duct_weight" value="0"
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
    <div class="app-card app-card-orders-table mb-5">
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
                            <th class="cell">Diameter</th>
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
                        @forelse ($RecDucts->RoundDucts as $RoundDuct)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="cell">{{$RoundDuct->id ?? ''}}</td>

                            <td class="cell">{{$RoundDuct->diameter ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->length ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->area ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->thermal_thickness ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->area_1_inch ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->area_2_inch ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->cladding_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RoundDuct->cladding_area ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->accoustic_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RoundDuct->accoustic_length ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->accoustic_area ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->duct_gage ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->thickness ?? ''}}</td>
                            <td class="cell">{{$RoundDuct->duct_weight ?? ''}}</td>
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
                                {{ round($totalsRoundDust->total_duct_weight * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total galvanized sheet metal Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totalsRoundDust->total_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total galvanized sheet metal Length ( LM )					
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totalsRoundDust->total_length * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total insulation Area [m2] 1 inch thickness
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totalsRoundDust->total_area_1_inch * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total insulation Area [m2] 2 inch thickness
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totalsRoundDust->total_area_2_inch * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total Acoustic insulation Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totalsRoundDust->total_accoustic_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total Cladding Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totalsRoundDust->total_cladding_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!--//table-responsive-->
        </div>
        <!--//app-card-body-->
    </div>
    <!--//app-card-->
</div>
@push('scripts')
    <script>
        // every input in form
        $("input[type='number']").change(function(){
            var result = (( 3.14 * parseInt($("#round-ruct-diameter").val()) + 15 *2) *($("#round-ruct-length").val()/1000));
            // area change
            $( "#round-ruct-area" ).val(result.toFixed(4));
            // duct_weight change
            $( "#round-ruct-duct_weight" ).val($("#round-ruct-area").val() * duct_weight[$("#round-ruct-duct_gage").val()]);
            //-------------------
            var resultAccoustic = 0 ;
            if ( $('select#Accoustic').val() == 1 ) {
            resultAccoustic = ((parseInt($("#Width").val()) + parseInt($("#Depth").val())) *2* (parseInt($("#Accoustic_Length").val())/1000)) ;
                $( "#Accoustic_Area" ).val(resultAccoustic.toFixed(2));
            }else{
                $( "#Accoustic_Area" ).val(resultAccoustic);
            }
        });
        $("#round-ruct-duct_gage").on('change', function() {
            // thickness duct_weight change in  duct_gage change
            $('#round-ruct-thickness').val(thickness[this.value]);
            $( "#round-ruct-duct_weight" ).val($("#round-ruct-area").val() * duct_weight[$(".round-ruct-duct_gage").val()]);
        });
        // --------------------------------
        $('select#round-ruct-Thickness').on('change', function() {
            var round_ruct_diameter = parseInt($("#round-ruct-diameter").val());
            var round_ruct_length = parseInt($("#round-ruct-length").val());
            var result1 = ( ( 3.14 *( Math.pow(((round_ruct_diameter + this.value * 2 ) / 1000),2 ) /4)) * round_ruct_length );
            //var result2 = ( ( 3.14 *( Math.pow(((round_ruct_diameter + this.value * 2 ) / 1000),2 ) /4)) * round_ruct_length );
            if ( this.value == 25 ) {
                $( "#round-ruct-Area_1_inch" ).val(result1.toFixed(2));
                $( "#round-ruct-Area_2_inch" ).val(0);
            }else if(this.value == 50){
                $( "#round-ruct-Area_2_inch" ).val(result1);
                $( "#round-ruct-Area_1_inch" ).val(0);
            }else{
                $( "#round-ruct-Area_1_inch" ).val(0);
                $( "#round-ruct-Area_2_inch" ).val(0);
            }
        });
        // -----------------------------------
        $('select#round-ruct-Cladding').on('change', function() {
            var resultCladding = 0 ;
            if ( this.value == 1 ) {
                if ($("select#round-ruct-Thickness").val() == '') {
                    resultCladding =  $("#round-ruct-area").val() * 1.006 ;
                    $( "#round-ruct-Cladding_Area" ).val(resultCladding);
                } else {
                    resultCladding = ($("#round-ruct-Area_1_inch" ).val() * 1.006) + ($("#round-ruct-Area_2_inch" ).val() * 1.006) ;
                    $( "#round-ruct-Cladding_Area" ).val(resultCladding.toFixed(4));
                }
            }else{
                $( "#round-ruct-Cladding_Area" ).val(resultCladding);
            }
        });
        // --------------------------------------=IF(M9="Yes";ROUNDUP((3.14*E9+$S$4*2)*N9/1000;2);0)
        $('select#round-ruct-Accoustic').on('change', function() {
            var resultAccoustic = 0 ;
            var round_ruct_diameter = parseInt($("#round-ruct-diameter").val());
            var round_ruct_Accoustic_Length = parseInt($("#round-ruct-Accoustic_Length").val());

            if ( this.value == 1 ) {
            resultAccoustic = ((3.14 * round_ruct_diameter + 15 * 2) * round_ruct_Accoustic_Length / 1000 );
            $( "#round-ruct-Accoustic_Area" ).val(resultAccoustic.toFixed(2));
            }else{
                $( "#round-ruct-Accoustic_Area" ).val(resultAccoustic);
            }
        });
    </script>
@endpush