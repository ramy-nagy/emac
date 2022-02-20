<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
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
                                <td class="cell">{{ round($totals->total_duct_weight * 1.15, 2) ?? 0}}</td>
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
                                <td class="cell">{{ round($totals->total_area_1_inch * 1.15, 2) ?? 0}}</td>
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
                                <td class="cell">{{ round($totals->total_area_2_inch * 1.15, 2) ?? 0}}</td>
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
                                <td class="cell">{{ round($totals->total_accoustic_area * 1.15, 2) ?? 0}}
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

    

    <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
        <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">Order</th>
                                <th class="cell">Product</th>
                                <th class="cell">Customer</th>
                                <th class="cell">Date</th>
                                <th class="cell">Status</th>
                                <th class="cell">Total</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cell">#15345</td>
                                <td class="cell"><span class="truncate">Consectetur adipiscing
                                        elit</span></td>
                                <td class="cell">Dylan Ambrose</td>
                                <td class="cell"><span class="cell-data">16 Oct</span><span
                                        class="note">03:16
                                        AM</span></td>
                                <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                <td class="cell">$96.20</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--//table-responsive-->
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>

    <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
        <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">Order</th>
                                <th class="cell">Product</th>
                                <th class="cell">Customer</th>
                                <th class="cell">Date</th>
                                <th class="cell">Status</th>
                                <th class="cell">Total</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="cell">#15342</td>
                                <td class="cell"><span class="truncate">Justo feugiat
                                        neque</span></td>
                                <td class="cell">Reina Brooks</td>
                                <td class="cell"><span class="cell-data">12 Oct</span><span
                                        class="note">04:23
                                        PM</span></td>
                                <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                <td class="cell">$59.00</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!--//table-responsive-->
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
    </div>
</div>