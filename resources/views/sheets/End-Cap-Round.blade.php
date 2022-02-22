<div class="tab-pane fade" id="orders-end-cap-round" role="tabpanel" aria-labelledby="orders-end-cap-round-tab">
    <div class="px-4 py-3 mb-8  rounded-lg shadow-md dark:bg-gray-800">
        Projects NO :: {{$project_id}} <br>
        <form action="{{route('EndCapRound')}}" method="post">
            @csrf
            <input type="hidden" value="{{$project_id}}" name="project_id">
            <div class="row">
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Diameter(m)</span>
                    <input type="number" min="0" id="end-cap-round-diameter" value="0" name="diameter"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-2">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="end-cap-round-area" readonly name="area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <select id="end-cap-round-Thickness" name="thermal_thickness"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0"></option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
                    <input type="number" min="0" value="0" id="end-cap-round-Area_1_inch" readonly name="Area_1_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
                    <input type="number" min="0" value="0" id="end-cap-round-Area_2_inch" readonly name="Area_2_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Cladding</span>
                    <select id="end-cap-round-Cladding" name="cladding_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="end-cap-round-Cladding_Area" readonly name="Cladding_Area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Duct Gage</span>
                    <select id="end-cap-round-duct_gage" name="duct_gage"
                        class="duct_gage block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
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
                    <input type="number" readonly id="end-cap-round-thickness" name="thickness" value="0.853"
                        class="thickness block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
                    <input type="number" readonly id="end-cap-round-duct_weight" name="duct_weight" value="0"
                        class="duct_weight block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success mt-4">Save</button>
                    </div>
                </label>
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
                            <th class="cell">Area</th>
                            <th class="cell">Thickness</th>
                            <th class="cell">Area 1 inch</th>
                            <th class="cell">Area 1 inch</th>
                            <th class="cell">Cladding</th>
                            <th class="cell">Area</th>
                            <th class="cell">Duct Gage</th>
                            <th class="cell">Thickness</th>
                            <th class="cell">Duct weight</th>
                            {{-- <th class="cell">action</th> --}}
                        </tr>
                    </thead>
                    <tbody class=" dark:bg-gray-800">
                        @forelse ($RecDucts->EndCapRounds as $EndCapRound)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="cell">{{$EndCapRound->id ?? ''}}</td>

                            <td class="cell">{{$EndCapRound->diameter ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->area ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->thermal_thickness ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->area_1_inch ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->area_2_inch ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->cladding_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$EndCapRound->cladding_area ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->duct_gage ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->thickness ?? ''}}</td>
                            <td class="cell">{{$EndCapRound->duct_weight ?? ''}}</td>
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
        // every input in form =(E4^2*3.14/4)/1000^2
        $("input[type='number']").change(function(){
            var end_cap_round_diameter = parseInt($("#end-cap-round-diameter").val());
            var result = (Math.pow(end_cap_round_diameter, 2) * 3.14/4)/1000000;
            function roundNumber(rnum, rlength) { 
                var newnumber = Math.round(rnum * Math.pow(10, rlength)) / Math.pow(10, rlength);
                return newnumber;
            }
            // area change
            $( "#end-cap-round-area" ).val(result.toFixed(5));
            // duct_weight change
            var end_cap_round_duct_weight = $("#end-cap-round-area").val() * duct_weight[$("#end-cap-round-duct_gage").val()];
            $( "#end-cap-round-duct_weight" ).val(roundNumber(end_cap_round_duct_weight,2));
            //-------------------
        });
        $("#end-cap-round-duct_gage").on('change', function() {
            // thickness duct_weight change in  duct_gage change
            $('#end-cap-round-thickness').val(thickness[this.value]);
            $( "#end-cap-round-duct_weight" ).val($("#end-cap-round-area").val() * duct_weight[$("#end-cap-round-duct_gage").val()]);
        });
        // -------------------------------- 
        $('select#end-cap-round-Thickness').on('change', function() {
            var end_cap_round_diameter = parseInt($("#end-cap-round-diameter").val());
            if ( this.value == 25 ) {
                var result1 = ( Math.pow(end_cap_round_diameter+25, 2) *3.14/4000);
                $( "#end-cap-round-Area_1_inch" ).val(result1.toFixed(2));
                $( "#end-cap-round-Area_2_inch" ).val(0);
            }else if(this.value == 50){
                var result1 = ( Math.pow(end_cap_round_diameter+50, 2) *3.14/4000);
                $( "#end-cap-round-Area_2_inch" ).val(result1);
                $( "#end-cap-round-Area_1_inch" ).val(0);
            }else{
                $( "#end-cap-round-Area_1_inch" ).val(0);
                $( "#end-cap-round-Area_2_inch" ).val(0);
            }
        });
        // -----------------------------------
        $('select#end-cap-round-Cladding').on('change', function() {
            var resultCladding = 0 ;
            if ( this.value == 1 ) {
                if ($("select#end-cap-round-Thickness").val() == '') {
                    resultCladding =  $("#end-cap-round-area").val() * 1.006 ;
                    $( "#end-cap-round-Cladding_Area" ).val(resultCladding);
                } else {
                    resultCladding = ($("#end-cap-round-Area_1_inch" ).val() * 1.006) + ($("#end-cap-round-Area_2_inch" ).val() * 1.006) ;
                    $( "#end-cap-round-Cladding_Area" ).val(resultCladding.toFixed(4));
                }
            }else{
                $( "#end-cap-round-Cladding_Area" ).val(resultCladding);
            }
        });
        // --------------------------------------
    </script>
@endpush