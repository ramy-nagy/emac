<x-app-layout>
@section('title', 'Projects')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    <a href="{{route('dashboard.index')}}">Dashboard</a> - Projects
    </h2>
    <hr>
    @livewire('projects')

</x-app-layout>