<div class="tab-pane fade active show" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
    <div class="app-card app-card-orders-table mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table mb-0 text-left w-full table-bordered " id="total-table">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="">Description <br>General scrap factor ( safty )</th>
                            <th class="">Total <br>15%</th>
                            <th class="">Rec. duct</th>
                            <th class="">Round Duct</th>
                            <th class="">Fitting</th>
                            <th class="">Rec. Frame</th>
                            <th class="">Round Frame</th>
                            <th class="">End Cap Rec</th>
                            <th class="">Air outlet Plenum</th>
                            <th class="">Bell Mouse</th>
                        </tr>
                    </thead>
                    <tbody class=" dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="">Total galvanized sheet metal duct [KG]</td>
                            <td class="sum" id="sum"></td>
                            <td class="total">{{ round($totals->total_duct_weight * 1.15, 2) ?? 0}}
                            </td>
                            <td class="total"></td>
                            <td class="total"></td>
                            <td class="total"></td>
                            <td class="total"></td>
                            <td class="total"></td>
                            <td class="total"></td>
                            <td class="total"></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="">Total galvanized sheet metal Area [m2]</td>
                            <td class=""></td>
                            <td class="">{{ round($totals->total_area * 1.15, 2) ?? 0}}</td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="">Total galvanized sheet metal Length ( LM )</td>
                            <td class=""></td>
                            <td class="">{{ round($totals->total_area * 1.15, 2) ?? 0}}</td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="">Total insulation Area [m2] 1 inch thickness</td>
                            <td class=""></td>
                            <td class="">{{ round($totals->total_area_1_inch * 1.15, 2) ?? 0}}
                            </td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="">Total insulation Area [m2] 2 inch thickness</td>
                            <td class=""></td>
                            <td class="">{{ round($totals->total_area_2_inch * 1.15, 2) ?? 0}}
                            </td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="">Total Acoustic insulation Area [m2] </td>
                            <td class=""></td>
                            <td class="">{{ round($totals->total_accoustic_area * 1.15, 2) ??
                                0}}
                            </td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="">Total Cladding Area [m2]</td>
                            <td class=""></td>
                            <td class="">{{ round($totals->total_cladding_area * 1.15, 2) ?? 0}}
                            </td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                    </tbody>
                </table>
            </div><!--//table-responsive-->
        </div><!--//app-card-body-->		
    </div><!--//app-card-->
</div><!--//tab-pane-->
