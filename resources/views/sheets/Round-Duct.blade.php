<x-app-layout>
    <span class="text-gray-700 dark:text-gray-400">Projects</span>
    <form action="{{route("project.model", 'Round-Duct' ) }}" method="get" enctype="multipart/form-data">
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
            Pending Distance Per Side :: 15 MM .
            <form action="{{route('RoundDuct')}}" method="post">
                @csrf
                <input type="hidden" value="{{$project_id ?? '' }}" name="project_id">
                <div class="row mt-3">
                    <div class=" col-md-5 border border-dark p-2 my-2 mr-1 large-div-text"
                        style="width: 15% !important ">
                        <div class="why dark:bg-gray-800">Machine data</div>
                        <label class=" text-sm col-md-11">
                            <span class="text-gray-700 dark:text-gray-400">Location</span>
                            <select name="location"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="As per DWG">As per DWG</option>
                            </select>
                        </label>
                    </div>
                    <div class=" col-md-5 border border-dark p-2 my-2 mr-1">
                        <div class="why dark:bg-gray-800">Duct Data</div>
                        <label class="mr-1 text-sm col-md-4">
                            <span class="text-gray-700 dark:text-gray-400">Section No</span>
                            <select name="section_no"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="Main duct">Main duct</option>
                                <option value="Branch 1">Branch 1</option>
                                <option value="Branch 2">Branch 2</option>
                                <option value="Branch 3">Branch 3</option>
                                <option value="Branch 4">Branch 4</option>
                                <option value="Branch 5">Branch 5</option>
                                <option value="Branch 6">Branch 6</option>
                                <option value="Branch 7">Branch 7</option>
                                <option value="Branch 8">Branch 8</option>
                                <option value="Branch 9">Branch 9</option>
                                <option value="Branch 10">Branch 10</option>
                                <option value="Branch 11">Branch 11</option>
                                <option value="Branch 12">Branch 12</option>
                            </select>
                        </label>
                        <label class=" text-sm col-md-2">
                            <span class="text-gray-700 dark:text-gray-400">Diameter(m)</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" id="round-ruct-diameter" value="0" name="diameter"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-2">
                            <span class="text-gray-700 dark:text-gray-400">Length(m)</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" id="round-ruct-length" name="length" value="0"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" value="0" id="round-ruct-area" readonly name="area"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class=" col-md-3 border border-dark p-2 my-2 mr-1">
                        <div class="why dark:bg-gray-800" style="width: 250px">Thermal insulation data</div>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                            <select id="round-ruct-Thickness" name="thermal_thickness"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="0"></option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" value="0" id="round-ruct-Area_1_inch" readonly
                                name="Area_1_inch"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" value="0" id="round-ruct-Area_2_inch" readonly
                                name="Area_2_inch"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class=" col-md-2 border border-dark p-2 my-2">
                        <div class="why dark:bg-gray-800">Cladding</div>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Cladding</span>
                            <select id="round-ruct-Cladding" name="cladding_option"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="0">no</option>
                                <option value="1">yes</option>
                            </select>
                        </label>
                        <label class=" text-sm col-md-5">
                            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" value="0" id="round-ruct-Cladding_Area" readonly
                                name="Cladding_Area"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class=" col-md-3 border border-dark p- my-2 mr-1">
                        <div class="why dark:bg-gray-800">Accoustic</div>
                        <label class=" text-sm col-md-4">
                            <span class="text-gray-700 dark:text-gray-400">Accoustic</span>
                            <select id="round-ruct-Accoustic" name="accoustic_option"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="0">no</option>
                                <option value="1">yes</option>
                            </select>
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" id="round-ruct-Accoustic_Length" name="accoustic_length"
                                value="0"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" min="0" id="round-ruct-Accoustic_Area" readonly name="Accoustic_Area"
                                value="0"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                    <div class=" col-md-3 border border-dark p-2 my-2 mr-1">
                        <div class="why dark:bg-gray-800">Summary</div>
                        <label class=" text-sm col-md-4">
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
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" readonly id="round-ruct-thickness" name="thickness" value="0.701"
                                class="thickness block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                        <label class=" text-sm col-md-3">
                            <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
                            <input type="number" step="0.01" step="0.01" step="0.01" readonly id="round-ruct-duct_weight" name="duct_weight" value="0"
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
                            <th class="py-3">Section no</th>
                            <th class="py-3">Diameter</th>
                            <th class="py-3">Length</th>
                            <th class="py-3">Area</th>
                            <th class="py-3">Thickness</th>
                            <th class="py-3">Area1</th>
                            <th class="py-3">Area2</th>
                            <th class="py-3">Cladding</th>
                            <th class="py-3">Area</th>
                            <th class="py-3">Accoustic</th>
                            <th class="py-3">Length</th>
                            <th class="py-3">Area</th>
                            <th class="py-3">Duct Gage</th>
                            <th class="py-3">Thickness</th>
                            <th class="py-3">Duct weight</th>
                            {{-- <th class="py-3">Edit</th> --}}
                            <th class="py-3">Delete</th>
                        </tr>
                    </thead>
                    <tbody class=" divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @forelse ($project->RoundDucts as $RecDuct)
                        <tr class="text-gra y-700 dark:text-gray-400">
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->section_no ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->diameter ?? ''}}</td>
                            <td class="py-3 border border-secondary border-end RecDuct_length">{{$RecDuct->length ??
                                ''}}</td>
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
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->accoustic_option == 1 ?
                                'yes':
                                'no'}}</td>
                            <td class="py-3 border border-secondary border-end">{{$RecDuct->accoustic_length ?? ''}}
                            </td>
                            <td class="py-3 border border-secondary border-end RecDuct_accoustic_area">
                                {{$RecDuct->accoustic_area ?? ''}}</td>
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
                                <a href="{{ route('delete',['model'=>'RoundDust', 'id'=> $RecDuct->id]) }}"
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
                                Total galvanized sheet metal Length ( LM ) -- <span class="text-lg"
                                    id="RecDuct_length"></span>
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
                                Total Acoustic insulation Area [m2] --<span class="text-lg"
                                    id="RecDuct_accoustic_area"></span>
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
</x-app-layout>