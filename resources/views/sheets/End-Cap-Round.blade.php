<x-app-layout>
    <span class="text-gray-700 dark:text-gray-400">Projects</span>
    <form action="{{route("project.model", 'End-Cap-Round') }}" method="get" enctype="multipart/form-data">
        @csrf
        <div class="mb-2 form-group">
            <label for="country"></label>
            <select name="project_id" id="project" onchange="this.form.submit()"
                class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option value="">Please Select A Project</option>
                @foreach($projects as $projecta)
                <option value="{{ $projecta->id }}">
                    Name :: {{ $projecta->name }} - Description :: {{$projecta->description}}
                </option>
                @endforeach
            </select>
        </div>
    </form>
    <div class="col-md-12">
        <div class="px-4  py-3 mb-3 text-gray-600 dark:text-gray-300 rounded-lg shadow-md dark:bg-gray-800">
            Project NO :: {{$project_id ?? ''}} <br>
            <form action="{{route('EndCapRound')}}" method="post">
                @csrf
                <input type="hidden" value="{{$project_id ?? '' }}" name="project_id">
                <div class="row mt-3">
                    <div class=" col-md-6 border border-dark p-2 my-2 mr-1 large-div-text"
                        style="width: 22% !important ">
                        <div class="why dark:bg-gray-800">Machine data</div>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Tag No</span>
                            <select name="tag_no"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="FCU-01">FCU-01</option>
                                <option value="FCU-02">FCU-02</option>
                                <option value="FCU-03">FCU-03</option>
                                <option value="FCU-04">FCU-04</option>
                                <option value="FCU-05">FCU-05</option>
                                <option value="FCU-06">FCU-06</option>
                                <option value="FCU-07">FCU-07</option>
                                <option value="FCU-08">FCU-08</option>
                                <option value="FCU-09">FCU-09</option>
                            </select>
                        </label>
                        <label class=" text-sm col-md-6">
                            <span class="text-gray-700 dark:text-gray-400">Description</span>
                            <select name="description"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="Fan coil unit">Fan coil unit</option>
                                <option value="Fresh air handling unit">Fresh air handling unit</option>
                            </select>
                        </label>
                    </div>
                    <div class=" col-md-4 border border-dark p-2 my-2 mr-1">
                        <div class="why dark:bg-gray-800">Round end cap data</div>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Diameter(m)</span>
                            <input type="number" min="0" id="end-cap-round-diameter" value="0" name="diameter"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-6">
                            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                            <input type="number" min="0" value="0" id="end-cap-round-area" readonly name="area"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class=" col-md-3 border border-dark p-2 my-2 mr-1">
                        <div class="why dark:bg-gray-800" style="width: 250px">Thermal insulation data</div>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                            <select id="end-cap-round-Thickness" name="thermal_thickness"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="0"></option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
                            <input type="number" min="0" value="0" id="end-cap-round-Area_1_inch" readonly name="Area_1_inch"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
                            <input type="number" min="0" value="0" id="end-cap-round-Area_2_inch" readonly name="Area_2_inch"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class=" col-md-2 border border-dark p-2 my-2">
                        <div class="why dark:bg-gray-800">Cladding</div>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Cladding</span>
                            <select id="end-cap-round-Cladding" name="cladding_option"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="0">no</option>
                                <option value="1">yes</option>
                            </select>
                        </label>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                            <input type="number" min="0" value="0" id="end-cap-round-Cladding_Area" readonly name="Cladding_Area"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class=" col-md-3 border border-dark p-2 my-2 mr-1">
                        <div class="why dark:bg-gray-800">Summary</div>
                        <label class=" text-sm col-md-5">
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
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                            <input type="number" readonly id="end-cap-round-thickness" name="thickness" value="0.853"
                                class="thickness block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
                            <input type="number" readonly id="end-cap-round-duct_weight" name="duct_weight" value="0"
                                class="duct_weight block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class="mt-8 col-md-4 row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success mt-4">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="col-sm-12">
        <div class="app-card-body w-full overflow-hidden rounded-lg shadow-xs">
            <div class="table-responsive">
                <table class="table whitespace-no-wrap datatable" id="example_1">
                    <thead>
                        <tr
                            class=" text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="py-3">Tag no</th>
                            <th class="py-3">Diameter</th>
                            <th class="py-3">Area</th>
                            <th class="py-3">Thickness</th>
                            <th class="py-3">Area1</th>
                            <th class="py-3">Area2</th>
                            <th class="py-3">Cladding</th>
                            <th class="py-3">Area</th>
                            <th class="py-3">Duct Gage</th>
                            <th class="py-3">Thickness</th>
                            <th class="py-3">Duct weight</th>
                            {{-- <th class="py-3">Edit</th> --}}
                            <th class="py-3">Delete</th>
                        </tr>
                    </thead>
                    <tbody class=" divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @forelse ($project->EndCapRounds as $RecDuct)
                        <tr class="text-gra y-700 dark:text-gray-400">
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->tag_no ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->diameter ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end RecDuct_area">{{$RecDuct->area ?? ''}}
                            </td>
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->thermal_thickness ?? ''}}
                            </td>
                            <td class="py-3 border border-secondary border-end RecDuct_area_1_inch">
                                {{$RecDuct->area_1_inch ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end RecDuct_area_2_inch">
                                {{$RecDuct->area_2_inch ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->cladding_option == 1 ?
                                'yes':
                                'no'}}</td>
                            <td class="py-3 border border-secondary border-end RecDuct_cladding_area">
                                {{$RecDuct->cladding_area ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->duct_gage ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->thickness ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end  duct_gage_KG">{{$RecDuct->duct_weight ??
                                ''}}</td>
                            {{-- <td>
                                <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                            </td> --}}
                            <td>
                                <a href="{{ route('delete',['model'=>'EndCapRound', 'id'=> $RecDuct->id]) }}"
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="delete">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <tbody class=" divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                Loss Factor <span class="text-lg">15%</span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                Total galvanized sheet metal duct [KG] -- <span class="text-lg"
                                    id="duct_gage_KG"></span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                Total galvanized sheet metal Area [m2] --<span class="text-lg" id="RecDuct_area"></span>
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                Total insulation Area [m2] 1 inch thickness -- <span class="text-lg"
                                    id="RecDuct_area_1_inch"></span>
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                Total insulation Area [m2] 2 inch thickness --<span class="text-lg"
                                    id="RecDuct_area_2_inch"></span>
                            </td>
                        </tr>

                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                Total Cladding Area [m2] --<span class="text-lg" id="RecDuct_cladding_area"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
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
</x-app-layout>