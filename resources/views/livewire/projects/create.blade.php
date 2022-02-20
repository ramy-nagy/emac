<div class="row px-4 py-3 mb-8 rounded-lg shadow-md dark:bg-gray-800">
    <label class="block text-sm col-md-5 my-2">
        <span class="text-gray-700 dark:text-gray-400">Name</span>
        <input wire:model="name"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Name">
    </label>
    <label class="block text-sm col-md-5 my-2">
        <span class="text-gray-700 dark:text-gray-400">Description</span>
        <input wire:model="description"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Description">
    </label>
    <div class="col-md-2 mt-2">
        <button type="button" wire:click="store()" class="btn btn-success mt-6">Save</button>
    </div>
    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    @error('description') <span class="text-danger">{{ $message }}</span>@enderror
</div>