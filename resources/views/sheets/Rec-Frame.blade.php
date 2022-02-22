<div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
    <div class="px-4 py-3 mb-8  rounded-lg shadow-md dark:bg-gray-800">
        Projects NO :: {{$project_id}}<br>
        Duct Bending distance :: 0.05 <br>
        Cladding Bending distance :: 0.07 <br>
        <form action="{{route('RecFrame')}}" method="post">
            @csrf
            <input type="hidden" value="{{$project_id}}" name="project_id">
            <div class="row">
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Width (mm)</span>
                    <input type="number" min="50" id="rec-frame-Width" value="50" name="width"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Depth (mm)</span>
                    <input type="number" min="50" id="rec-frame-Depth" value="50" name="depth"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                    <input type="number"  id="rec-frame-Length" name="length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number"  value="0" id="rec-frame-Area" readonly name="area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <select id="rec-frame-Thickness" name="thermal_thickness"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0"></option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
                    <input type="number" min="0" value="0" id="rec-frame-Area_1_inch" readonly name="Area_1_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
                    <input type="number" min="0" value="0" id="rec-frame-Area_2_inch" readonly name="Area_2_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Cladding</span>
                    <select id="rec-frame-Cladding" name="cladding_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="rec-frame-Cladding_Area" readonly name="Cladding_Area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                {{-- <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Accoustic</span>
                    <select id="rec-frame-Accoustic" name="accoustic_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                    <input type="number" min="0" id="rec-frame-Accoustic_Length" name="accoustic_length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" id="rec-frame-Accoustic_Area" readonly name="Accoustic_Area" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label> --}}
                <label class="block text-sm col-md-1">
                    <span class="duct_gage text-gray-700 dark:text-gray-400">Duct Gage</span>
                    <select id="rec-frame-duct_gage" name="duct_gage"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="22">22</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                        <option value="20">20</option>
                        <option value="24">24</option>
                        <option value="26">26</option>
                        <option value="28">28</option>
                        <option value="30">30</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <input type="number" readonly id="rec-frame-thickness" name="thickness" value=".853"
                        class="thickness block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
                    <input type="number" readonly id="rec-frame-duct_weight" name="duct_weight" value="0"
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
                        @forelse ($RecDucts->RecFrames as $RecFrame)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="cell">{{$RecFrame->id ?? ''}}</td>

                            <td class="cell">{{$RecFrame->width ?? ''}}</td>
                            <td class="cell">{{$RecFrame->depth ?? ''}}</td>
                            <td class="cell">{{$RecFrame->length ?? ''}}</td>
                            <td class="cell">{{$RecFrame->area ?? ''}}</td>
                            <td class="cell">{{$RecFrame->thermal_thickness ?? ''}}</td>
                            <td class="cell">{{$RecFrame->area_1_inch ?? ''}}</td>
                            <td class="cell">{{$RecFrame->area_2_inch ?? ''}}</td>
                            <td class="cell">{{$RecFrame->cladding_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RecFrame->cladding_area ?? ''}}</td>
                            <td class="cell">{{$RecFrame->accoustic_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RecFrame->accoustic_length ?? ''}}</td>
                            <td class="cell">{{$RecFrame->accoustic_area ?? ''}}</td>
                            <td class="cell">{{$RecFrame->duct_gage ?? ''}}</td>
                            <td class="cell">{{$RecFrame->thickness ?? ''}}</td>
                            <td class="cell">{{$RecFrame->duct_weight ?? ''}}</td>
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
                    {{-- <tfoot class=" dark:bg-gray-800">
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
                    </tfoot> --}}
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
            var rec_frame_Width = parseInt($("#rec-frame-Width").val());
            var rec_frame_Depth = parseInt($("#rec-frame-Depth").val());
            var rec_frame_Length = parseInt($("#rec-frame-Length").val());

            if (rec_frame_Length > 1.5) {
                var result = (rec_frame_Width/1000+rec_frame_Depth/1000) * 2 * (2*.05) * Math.round(rec_frame_Length/1.5);
            }else{
                var result = (rec_frame_Width/1000+rec_frame_Depth/1000)*2*(.1)
            }
            // area change
            $( "#rec-frame-Area" ).val(result.toFixed(2));
            // duct_weight change
            $( "#rec-frame-duct_weight" ).val($("#rec-frame-Area").val() * duct_weight[$("#rec-frame-duct_gage").val()]);
            //-------------------
        });
        $("#duct_gage").on('change', function() {
            // thickness duct_weight change in  duct_gage change
            $('#thickness').val(thickness[this.value]);
            $( "#duct_weight" ).val($("#Area").val() * duct_weight[$("#duct_gage").val()]);
        });
        // ---------------------
        // =IF(I3=50;
        $('select#rec-frame-Thickness').on('change', function() {
            var rec_frame_Width = parseInt($("#rec-frame-Width").val());
            var rec_frame_Depth = parseInt($("#rec-frame-Depth").val());
            var rec_frame_Length = parseInt($("#rec-frame-Length").val());
            console.log(rec_frame_Length);            
            if ( this.value == 25 ) {
                var result1 =   ( ( (rec_frame_Width + (50) + rec_frame_Depth + (50)) *.002) * rec_frame_Length);
                $( "#rec-frame-Area_1_inch" ).val(result1.toFixed(2));
                $( "#rec-frame-Area_2_inch" ).val(0);
            }else if(this.value == 50){
                var result2 = (((rec_frame_Width+(100)+rec_frame_Depth+(100))*.002)*rec_frame_Length)
                $( "#rec-frame-Area_2_inch" ).val(result2);
                $( "#rec-frame-Area_1_inch" ).val(0);
            }else{
                $( "#rec-frame-Area_1_inch" ).val(0);
                $( "#rec-frame-Area_2_inch" ).val(0);
            }
        });
        //-------------------------
        $('select#rec-frame-Cladding').on('change', function() {
            var rec_frame_Length = parseInt($("#rec-frame-Length").val());
            var rec_frame_Area = parseInt($("#rec-frame-Area").val());

            var resultCladding =  rec_frame_Length*1.006+rec_frame_Area*1.006 ;
            if ( this.value == 1 ) {
                $( "#rec-frame-Cladding_Area" ).val(resultCladding);
            }else{
                $( "#rec-frame-Cladding_Area" ).val(resultCladding);
            }
        });
        // -----------------------
    </script>
@endpush