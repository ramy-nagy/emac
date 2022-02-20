<x-app-layout>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">

        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        <hr>
        {{--
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total clients
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        6389
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Account balance
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        $ 46,760.89
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        New sales
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        376
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Pending contacts
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        35
                    </p>
                </div>
            </div>
        </div>
        --}}

        <h6 class="my-1 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Projects
        </h6>
        @livewire('projects')
        {{-- @livewire('imports.upload-excel') --}}
        <div class="row g-4 mb-4">
            <form action="{{ route(" project") }}" method="get" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 my-1">
                    <div class="form-group">
                        <label for="country"></label>
                        <select name="project_id" id="project" onchange="this.form.submit()"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            @foreach($projects as $project)
                            <option value="{{ $project->id }}">
                                Name :: {{ $project->name }} - Description :: {{$project->description}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Total</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Rec. Duct</a>

                    <a class="flex-sm-fill text-sm-center nav-link " id="orders-pending-tab" data-bs-toggle="tab"
                        href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="true">Round
                        Duct</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
                        aria-selected="false">Fitting</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
                        aria-selected="false">Rec.Frame</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Round
                        Frame</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">End
                        Cap
                        Rec</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">End
                        Cap
                        Round</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Air
                        outlet Plenum</a>

                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Bell
                        Mouse</a>
                </nav>
                <div class="tab-content" id="orders-table-tab-content">

                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 text-left w-full table-bordered whitespace-no-wrap">
                                        <thead>
                                            <tr
                                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                <th class="cell">Description <br>General scrap factor ( safty )</th>
                                                <th class="cell">Total <br>15%</th>
                                                <th class="cell">Rec. duct</th>
                                                <th class="cell">Round Duct</th>
                                                <th class="cell">Fitting</th>
                                                <th class="cell">Rec. Frame</th>
                                                <th class="cell">Round Frame</th>
                                                <th class="cell">End Cap Rec</th>
                                                <th class="cell">Air outlet Plenum</th>
                                                <th class="cell">Bell Mouse</th>
                                            </tr>
                                        </thead>
                                        <tbody class=" dark:bg-gray-800">
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="cell">Total galvanized sheet metal duct [KG]</td>
                                                <td class="cell"></td>
                                                <td class="cell">{{ round($totals->total_duct_weight * 1.15, 2) ?? 0}}
                                                </td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                            </tr>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="cell">Total galvanized sheet metal Area [m2]</td>
                                                <td class="cell"></td>
                                                <td class="cell">{{ round($totals->total_area * 1.15, 2) ?? 0}}</td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                            </tr>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="cell">Total galvanized sheet metal Length ( LM )</td>
                                                <td class="cell"></td>
                                                <td class="cell">{{ round($totals->total_area * 1.15, 2) ?? 0}}</td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                            </tr>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="cell">Total insulation Area [m2] 1 inch thickness</td>
                                                <td class="cell"></td>
                                                <td class="cell">{{ round($totals->total_area_1_inch * 1.15, 2) ?? 0}}
                                                </td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                            </tr>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="cell">Total insulation Area [m2] 2 inch thickness</td>
                                                <td class="cell"></td>
                                                <td class="cell">{{ round($totals->total_area_2_inch * 1.15, 2) ?? 0}}
                                                </td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                            </tr>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="cell">Total Acoustic insulation Area [m2] </td>
                                                <td class="cell"></td>
                                                <td class="cell">{{ round($totals->total_accoustic_area * 1.15, 2) ??
                                                    0}}
                                                </td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                            </tr>
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="cell">Total Cladding Area [m2]</td>
                                                <td class="cell"></td>
                                                <td class="cell">{{ round($totals->total_cladding_area * 1.15, 2) ?? 0}}
                                                </td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                                <td class="cell"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('Rec-Duct')
                    @include('Round-Duct')

                </div>
            </div>
            {{-- <div class="row  mb-4">
                <div class="col-6 col-lg-2">
                    <div
                        class="app-card app-card-stat flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total galvanized sheet metal duct [KG]</h4>
                            <div class="stats-figure">{{ round($totals->total_duct_weight * 1.15, 2) ?? 0}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div
                        class="app-card app-card-stat flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total galvanized sheet metal Area [m2]</h4>
                            <div class="stats-figure">{{ round($totals->total_area * 1.15, 2) ?? 0}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div
                        class="app-card app-card-stat flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total galvanized sheet metal Length ( LM )</h4>
                            <div class="stats-figure">{{ round($totals->total_length * 1.15, 2) ?? 0}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div
                        class="app-card app-card-stat flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total insulation Area [m2] 1 inch thickness</h4>
                            <div class="stats-figure">{{ round($totals->total_area_1_inch * 1.15, 2) ?? 0}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div
                        class="app-card app-card-stat flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total insulation Area [m2] 2 inch thickness</h4>
                            <div class="stats-figure">{{ round($totals->total_area_2_inch * 1.15, 2) ?? 0}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div
                        class="app-card app-card-stat flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total Acoustic insulation Area [m2] </h4>
                            <div class="stats-figure">{{ round($totals->total_accoustic_area * 1.15, 2) ?? 0}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <div
                        class="app-card app-card-stat flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total Cladding Area [m2]</h4>
                            <div class="stats-figure">{{ round($totals->total_cladding_area * 1.15, 2) ?? 0}}</div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>



    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const thickness = {30:0.399, 28:0.475, 26:0.551, 24:0.701, 22:0.853, 20:1.006, 18:1.311, 16:1.613, 14:1.994, 13:2.372, 12:2.753, 11:3.132, 10:3.510};
        const duct_weight = {30:3.20, 28:3.81, 26:4.42, 24:5.64, 22:6.86, 20:8.08, 18:10.52, 16:12.96, 14:16.01, 13:19.07, 12:22.12, 11:25.16, 10:28.21};
        $(".duct_gage").on('change', function() {
            // thickness duct_weight change in  duct_gage change
            $('.thickness').val(thickness[this.value]);
            $( ".duct_weight" ).val($("#Area").val() * duct_weight[$("#duct_gage").val()]);
        });
    </script>
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
    {{-- <script type="text/javascript">
        $("#project").change(function(){
                $.ajax({
                    url: "{{ route('project') }}?project_id=" + $(this).val(),
                    method: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#city').html(data.html);
                    }
                });
            });
    </script> --}}
    @endpush
</x-app-layout>