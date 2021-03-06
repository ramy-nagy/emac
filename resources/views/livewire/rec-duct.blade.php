<div class="" >
        @if($update)
        @include('livewire.update')
        @else
        @include('livewire.create')
        @endif
    <div class="app-card  mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0 text-left">
                    <thead>
                        @if($RecDucts->count()) @foreach ($RecDucts as $RecDuct)@endforeach
                        <tr class="dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <td class="cell" colspan="3" class="table-active">Tag NO : {{$RecDuct->tag_no ?? ''}}</td>
                            <td class="cell" colspan="3" class="table-active">Description : {{$RecDuct->description ??
                                ''}}</td>
                            <td class="cell" colspan="3" class="table-active">location : {{$RecDuct->location ?? ''}}
                            </td>
                            <td class="cell" colspan="3" class="table-active">Section No : {{$RecDuct->section_no ??
                                ''}}</td>
                            <td class="cell" colspan="3" class="table-active">Pending = 15mm</td>
                            <td class="cell" colspan="2" class="table-active"></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400 dark:bg-gray-800 text-center" >
                            <td class="cell" class="table-active"></td>
                            <td class="cell" colspan="4" class="table-active">Duct Data</td>
                            <td class="cell" colspan="3" class="table-active">Thermal insulation data</td>
                            <td class="cell" colspan="2" class="table-active">Cladding</td>
                            <td class="cell" colspan="3" class="table-active">Accoustic</td>
                            <td class="cell" colspan="3" class="table-active">Duct Gage</td>
                            <td class="cell" class="table-active">action</td>
                        </tr>
                        @endif
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
                            <th class="cell">action</th>
                        </tr>
                    </thead>
                    <tbody class=" dark:bg-gray-800">
                        @forelse ($RecDucts as $RecDuct)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="cell">{{$RecDuct->id ?? ''}}</td>

                            <td class="cell">{{$RecDuct->width ?? ''}}</td>
                            <td class="cell">{{$RecDuct->depth ?? ''}}</td>
                            <td class="cell">{{$RecDuct->length ?? ''}}</td>
                            <td class="cell">{{$RecDuct->area ?? ''}}</td>
                            <td class="cell">{{$RecDuct->thermal_thickness ?? ''}}</td>
                            <td class="cell">{{$RecDuct->area_1_inch ?? ''}}</td>
                            <td class="cell">{{$RecDuct->area_2_inch ?? ''}}</td>
                            <td class="cell">{{$RecDuct->cladding_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RecDuct->cladding_area ?? ''}}</td>
                            <td class="cell">{{$RecDuct->accoustic_option == 1 ? 'yes': 'no'}}</td>
                            <td class="cell">{{$RecDuct->accoustic_length ?? ''}}</td>
                            <td class="cell">{{$RecDuct->accoustic_area ?? ''}}</td>
                            <td class="cell">{{$RecDuct->duct_gage ?? ''}}</td>
                            <td class="cell">{{$RecDuct->thickness ?? ''}}</td>
                            <td class="cell">{{$RecDuct->duct_weight ?? ''}}</td>
                            {{-- <td class="cell">{{$RecDuct->pending_distance_per_side ?? ''}}</td> --}}
                            <td>
                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                    <tfoot class=" dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400"> 
                            <td colspan="5">
                                Loss Factor					
                            </td>
                            <td colspan="12" class="text-lg">
                                0
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
                                Total insulation  Area [m2] 1 inch thickness
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_area_1_inch * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400"> 
                            <td colspan="5">
                                Total insulation  Area [m2] 2 inch thickness
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
                                Total Cladding  Area [m2]										
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_cladding_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!--//table-responsive-->
        </div>
        <!--//app-card-body-->
    </div>
    <!--//app-card-->
</div>