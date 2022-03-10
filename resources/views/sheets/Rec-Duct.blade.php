<div class="row tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
    <div class="px-4 py-3 mb-3  rounded-lg shadow-md dark:bg-gray-800">
        Projects NO :: {{$project_id}} <br>
        Pending Distance Per Side :: 15 MM .
        <form action="{{route('RecDuct')}}" method="post">
            @csrf
            <input type="hidden" value="{{$project_id}}" name="project_id">
            <div class="row">
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Width (mm)</span>
                    <input type="number" min="50" id="Width" value="50" name="width"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Depth (mm)</span>
                    <input type="number" min="50" id="Depth" value="50" name="depth"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                    <input type="number" min="0" id="Length" name="length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="Area" readonly name="area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Thickness</span>
                    <select id="Thickness" name="thermal_thickness"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0"></option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 1 inch</span>
                    <input type="number" min="0" value="0" id="Area_1_inch" readonly name="Area_1_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area 2 inch</span>
                    <input type="number" min="0" value="0" id="Area_2_inch" readonly name="Area_2_inch"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Cladding</span>
                    <select id="Cladding" name="cladding_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" value="0" id="Cladding_Area" readonly name="Cladding_Area"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Accoustic</span>
                    <select id="Accoustic" name="accoustic_option"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option value="0">no</option>
                        <option value="1">yes</option>
                    </select>
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Length (m)</span>
                    <input type="number" min="0" id="Accoustic_Length" name="accoustic_length" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class="text-gray-700 dark:text-gray-400">Area (m^2)</span>
                    <input type="number" min="0" id="Accoustic_Area" readonly name="Accoustic_Area" value="0"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-1">
                    <span class=" text-gray-700 dark:text-gray-400">Duct Gage</span>
                    <select id="duct_gage" name="duct_gage"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
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
                    <input type="number" readonly id="thickness" name="thickness" value="1.006"
                        class="thickness block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <label class="block text-sm col-md-2">
                    <span class="text-gray-700 dark:text-gray-400">weight (Kg)</span>
                    <input type="number" readonly id="duct_weight" name="duct_weight" value="0"
                        class="duct_weight block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
                <div class="col-md-4 row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success mt-4">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table table-bordered mb-0 text-left" id="RecDucts">
                    <thead>
                        {{-- @if($project->RecDucts->count()) @foreach ($project->RecDucts as
                        $RecDuct)@endforeach
                        <tr class="dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <td class="cell" colspan="3" class="table-active">Tag NO :
                                {{$RecDuct->tag_no ?? ''}}</td>
                            <td class="cell" colspan="3" class="table-active">Description :
                                {{$RecDuct->description ??
                                ''}}</td>
                            <td class="cell" colspan="3" class="table-active">location :
                                {{$RecDuct->location ?? ''}}
                            </td>
                            <td class="cell" colspan="3" class="table-active">Section No :
                                {{$RecDuct->section_no ??
                                ''}}</td>
                            <td class="cell" colspan="3" class="table-active">Pending = 15mm</td>
                            <td class="cell" colspan="2" class="table-active"></td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <td class="cell" class="table-active"></td>
                            <td class="cell" colspan="4" class="table-active">Duct Data</td>
                            <td class="cell" colspan="3" class="table-active">Thermal insulation
                                data
                            </td>
                            <td class="cell" colspan="2" class="table-active">Cladding</td>
                            <td class="cell" colspan="3" class="table-active">Accoustic</td>
                            <td class="cell" colspan="3" class="table-active">Duct Gage</td>
                            {{-- <td class="cell" class="table-active">action</td>
                        </tr>
                        @endif --}}
                        <tr class="dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            {{-- <th class="cell">#</th> --}}
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
                            <th colspan="2" class="cell">action</th>
                        </tr>
                    </thead>
                    <tbody class=" dark:bg-gray-800">
                        <tr>
                            <a href="{{route('export', ['model'=>'RecDucts', 'id'=> $project_id])}}" target="_blank"
                                class=" mb-1 btn btn-success" rel="noopener noreferrer">Export</a>
                        </tr>
                        @forelse ($RecDucts->RecDucts as $RecDuct)
                        <tr class="text-gray-700 dark:text-gray-400">
                            {{-- <td class="cell">{{$RecDuct->id ?? ''}}</td> --}}
                            <td class="cell">{{$RecDuct->width ?? ''}}</td>
                            <td class="cell">{{$RecDuct->depth ?? ''}}</td>
                            <td class="cell">{{$RecDuct->length ?? ''}}</td>
                            <td class="cell RecDuct_area">{{$RecDuct->area ?? ''}}</td>
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
                            <td class="cell  duct_gage_KG">{{$RecDuct->duct_weight ?? ''}}</td>
                            {{-- <td class="cell">{{$RecDuct->pending_distance_per_side ?? ''}}</td>--}}
                            <td>
                                <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('delete',['model'=>'RecDuct', 'id'=> $RecDuct->id]) }}"
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
                    {{-- <tfoot class=" dark:bg-gray-800">
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Loss Factor
                            </td>
                            <td colspan="12" class="text-lg">
                                15%
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
                                Total insulation Area [m2] 1 inch thickness
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_area_1_inch * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td colspan="5">
                                Total insulation Area [m2] 2 inch thickness
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
                                Total Cladding Area [m2]
                            </td>
                            <td colspan="12" class="text-lg">
                                {{ round($totals->total_cladding_area * 1.15, 2) ?? 0}}
                            </td>
                        </tr>
                    </tfoot> --}}
                </table>
                <table class="table table-bordered mb-0 text-left" id="RecDuctsTotals">
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Loss Factor
                        </td>
                        <td colspan="12" class="text-lg">
                            15%
                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Total galvanized sheet metal duct [KG]
                        </td>
                        <td colspan="12" class="text-lg" id="duct_gage_KG">

                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Total galvanized sheet metal Area [m2]
                        </td>
                        <td colspan="12" class="text-lg" id="RecDuct_area">

                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Total galvanized sheet metal Area [m2]
                        </td>
                        <td colspan="12" class="text-lg">

                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Total insulation Area [m2] 1 inch thickness
                        </td>
                        <td colspan="12" class="text-lg">

                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Total insulation Area [m2] 2 inch thickness
                        </td>
                        <td colspan="12" class="text-lg">

                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Total Acoustic insulation Area [m2]
                        </td>
                        <td colspan="12" class="text-lg">

                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td colspan="5">
                            Total Cladding Area [m2]
                        </td>
                        <td colspan="12" class="text-lg">
                            {{-- {{ round($totals->total_cladding_area * 1.15, 2) ?? 0}} --}}
                        </td>
                    </tr>
                </table>
            </div>
            <!--//table-responsive-->
        </div>
        <!--//app-card-body-->
    </div>
</div>
@push('scripts')
<script>
    // every input in form
        $("input[type='number']").change(function(){
            var result = ((parseInt($("#Width").val())+parseInt($("#Depth").val())+(2*15))*2*($("#Length").val()/1000));
            // area change
            $( "#Area" ).val(result.toFixed(1));
            // duct_weight change
            var duct_weight_kg = $("#Area").val() * duct_weight[$("#duct_gage").val()];
            $( "#duct_weight" ).val(duct_weight_kg.toFixed(2));
            //-------------------
            var resultAccoustic = 0 ;
            if ( $('select#Accoustic').val() == 1 ) {
            resultAccoustic = ((parseInt($("#Width").val()) + parseInt($("#Depth").val())) *2* (parseInt($("#Accoustic_Length").val())/1000)) ;
                $( "#Accoustic_Area" ).val(resultAccoustic.toFixed(2));
            }else{
                $( "#Accoustic_Area" ).val(resultAccoustic);
            }
        });
        $("#duct_gage").on('change', function() {
            // thickness duct_weight change in  duct_gage change
            $('#thickness').val(thickness[this.value]);
            var duct_weight_kg = $("#Area").val() * duct_weight[$("#duct_gage").val()];
            $( "#duct_weight" ).val(duct_weight_kg.toFixed(2));
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
                    $( "#Cladding_Area" ).val(resultCladding.toFixed(3));
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
    $( document ).ready( function() {
        var sum_duct_gage_KG = 0;
        var sum_RecDuct_area = 0;
        $( "#RecDucts tbody tr").each( function( index ) {
            console.log( parseFloat($('.RecDuct_area').text()));
            sum_duct_gage_KG += parseInt($('.duct_gage_KG').text());
            sum_RecDuct_area += parseInt($('.RecDuct_area').text());
        });
        $( "#duct_gage_KG" ).text(  (sum_duct_gage_KG * 1.15).toFixed(2) );
        $( "#RecDuct_area" ).text(  (sum_RecDuct_area * 1.15).toFixed(2) );
        $( ".RecDuct_area" ).addClass( 'text-danger' );

    });
</script> --}}
<script>
$(document).ready(function(){
    var result = [];
    $('#RecDucts tr').each(function(){
        $('td', this).each(function(index, val){
            if(!result[index]) result[index] = 0;
            var x = (Number($(val).text()) * 1.15);

        result[index] += Number(x.toFixed(3));
        });
    });
    $('#RecDucts').append('<tr></tr>');
    $(result).each(function(){
        $('#RecDucts tr').last().append('<td class="cell">'+this+'</td>')
    });

    for (let element of [0,1,4,7,9,11,12,15,16] ) {
        $( "#RecDucts tr " ).last().find("td:eq("+element+")").text( "-" );
    }
    var array = [2,3,5,6,8,10,13,14];
    for (let element1 of array ) {
        var xx = $( "#RecDucts tr " ).last().find("td:eq("+element1+")").text();
        console.log(array.lastIndexOf(element1));
        $('#RecDuctsTotals tr').find("td:last").text( xx );
           // $('#RecDuctsTotals tr ').append('<td>'+xx+'</td>');


    }

});
</script>
@endpush