<x-app-layout>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Dashboard
    </h2>

    <hr>
    <h2 class="mt-3 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        <a href="{{url('/projects')}}" target="_blank" rel="noopener noreferrer">
            Projects
        </a>
    </h2>
    <div class="col-md-6">
        <form action="{{route("project") }}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="country"></label>
                <select name="project_id" id="project" onchange="this.form.submit()"
                    class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option value="">Please Select A Project</option>
                    @foreach($projects as $project)
                    <option value="{{ $project->id }}">
                        Name :: {{ $project->name }} - Description :: {{$project->description}}
                    </option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>

    <h6 class="my-2 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Project NO ( {{ $project_id ?? 0}} ) Name :: {{ $RecDucts->name ?? ''}} - Description ::
        {{$RecDucts->description ?? ''}} - Created_at :: {{$RecDucts->created_at ?? ''}}
        {{-- <br> <a href="{{route('export')}}" target="_blank" class="col-md-1 mt-1 btn btn-success"
            rel="noopener noreferrer">Export</a> --}}
            <br>
    </h6>
    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
            href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Total</a>

        <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid"
            role="tab" aria-controls="orders-paid" aria-selected="false">Rec.Duct</a>

        <a class="flex-sm-fill text-sm-center nav-link " id="orders-pending-tab" data-bs-toggle="tab"
            href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="true">Round.Duct</a>

        <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
            href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Rec.Frame</a>

        <a class="flex-sm-fill text-sm-center nav-link" id="orders-roundframe-tab" data-bs-toggle="tab"
            href="#orders-roundframe" role="tab" aria-controls="orders-roundframe" aria-selected="true">Round.Frame</a>

        <a class="flex-sm-fill text-sm-center nav-link" id="orders-end-cap-rec-tab" data-bs-toggle="tab"
            href="#orders-end-cap-rec" role="tab" aria-controls="orders-end-cap-rec"
            aria-selected="true">End.Cap.Rec</a>

        <a class="flex-sm-fill text-sm-center nav-link" id="orders-end-cap-round-tab" data-bs-toggle="tab"
            href="#orders-end-cap-round" role="tab" aria-controls="orders-end-cap-round"
            aria-selected="true">End.Cap.Round</a>

    </nav>

    <div class="tab-content" id="orders-table-tab-content">
        @include('sheets.total')
        @include('sheets.Rec-Duct')
        @include('sheets.Round-Duct')
        @include('sheets.Rec-Frame')
        @include('sheets.Round-Frame')
        @include('sheets.End-Cap-Rec')
        @include('sheets.End-Cap-Round')
        {{-- <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">

                    </div>
                    <!--//table-responsive-->
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div> --}}
    </div>

    {{-- <div class="my-4 w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <div class="table-responsive">

            </div>
        </div>
    </div> --}}


    {{-- <div class="col-md-2">
        <div class="min-w-0 p-4 rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                Revenue
            </h4>
            <p class="text-gray-600 dark:text-gray-400">
                Lorem
            </p>
        </div>
    </div> --}}
    @push('scripts')

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
    <script>
        $(document).ready(function() { 
            calc_total();
        });
        function calc_total(){
            var sum = 0;
            $(".total").each(function(){
                var value = parseFloat($(this).text());
                if (!isNaN(value)) {
                    sum += value;
                }
            });
            $('#sum').text(sum);
        }
    </script>
    @endpush
</x-app-layout>