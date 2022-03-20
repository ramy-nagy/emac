<x-app-layout>
    @section('title', 'Dashboard')

    <div class="row">
        <div class="grid  gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
            <!-- Card -->
            <div class="flex items-center p-4  rounded-lg shadow-xs dark:bg-gray-800">
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-archive-fill" viewBox="0 0 16 16">
                        <path
                            d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Total Projects
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{\App\Models\Project::count() ?? '0' }}
                    </p>
                </div>
            </div>
            {{-- <div class=" px-4 py-3 mb-8 rounded-lg shadow-md dark:bg-gray-800">
                <span class="text-gray-700 dark:text-gray-400">Projects</span>
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
            </div> --}}
        </div>
    </div>
    {{-- <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Project NO ( {{ $project->id ?? 0}} ) <br> - Name :: {{ $project->name ?? ''}} <br> - Description ::
        {{$project->description ?? ''}} <br> - Created_at :: {{$project->created_at ?? ''}}
    </h4> --}}
    {{-- @include('sheets.Rec-Duct') --}}
    @push('scripts')

    @endpush
</x-app-layout>