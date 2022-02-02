<div class="px-4 py-3 mb-8  rounded-lg shadow-md dark:bg-gray-800">
    <div class="row">
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Width (mm)</span>
            <input type="number" min="50" id="Width" value="50" wire:model="width" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Depth (mm)</span>
            <input type="number" min="50" id="Depth" value="50" wire:model="depth" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
            <input type="number" min="0"  id="Length" wire:model="length" value="0" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
            <p class="text-center text-lg mt-2 font-semibold text-gray-700 dark:text-gray-200" id="Area" wire:model="area"> 0 </p>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Thickness</span>
            <select id="Thickness" wire:model="thermal_thickness" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option value=""></option>    
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
            <p class="text-center text-lg mt-2 font-semibold text-gray-700 dark:text-gray-200" id="Area_1_inch" wire:model="area_1_inch">0</p>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
            <p class="text-center text-lg mt-2 font-semibold text-gray-700 dark:text-gray-200" id="Area_2_inch" wire:model="area_2_inch">0</p>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Cladding</span>
            <select id="Cladding" wire:model="cladding_option" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option value=""></option>    
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
            <p class="text-center text-lg mt-2 font-semibold text-gray-700 dark:text-gray-200" id="Cladding_Area" wire:model="cladding_area">0</p>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Accoustic</span>
            <select id="Accoustic" wire:model="accoustic_option" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option value=""></option>        
                <option value="1">yes</option>
                <option value="0">no</option>
            </select>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
            <input type="number" min="0"  id="Accoustic_Length" wire:model="accoustic_length" value="0" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span> 
            <p class="text-center text-lg mt-2 font-semibold text-gray-700 dark:text-gray-200" id="Accoustic_Area" wire:model="accoustic_area">0</p>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Duct Gage</span>
            <select id="duct_gage" wire:model="duct_gage" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option value="20">20</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="18">18</option>
                <option value="22">22</option>
                <option value="24">24</option>
                <option value="26">26</option>
                <option value="28">28</option>
                <option value="30">30</option>
            </select>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">Thickness</span>
            <input type="number" min="0" id="thickness" wire:model="thickness" value="" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
            <p class="text-center text-lg mt-2 font-semibold text-gray-700 dark:text-gray-200" wire:model="duct_weight">0</p>
        </label>
        <label class="block text-sm col-md-1">
            <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
            <p class="text-center text-lg mt-2 font-semibold text-gray-700 dark:text-gray-200" wire:model="pending_distance_per_side">0</p>
        </label>
    </div>
    <button type="button" wire:click="store()"  class="btn btn-success mt-2">Save</button>

</div>
