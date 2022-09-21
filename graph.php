
<div id="content13">
    <div id="Graph_Header">
        <div class="lab1">From :</div>
        <input type="number" class="inp1">
        <div class="lab2">To :</div>
        <input type="number" class="inp2">
        <input type="button" value="Filter" class="graph_buttonHeader">
    </div>

    <div id="length2">
        <div class="divchart1">Vol ()</div>
        <div class="divchart1">$ 30 b</div>
        <div class="divchart1">$ 20 b</div>
        <div class="divchart1">$ 10 b</div>
        <div class="divchart1">$ 0.7 b </div>
        <div class="divchart1">$ 0.2 b </div>
        <div class="divchart1">$ 0 b </div>
        <div class="divchart1">$ 0.2 b</div>
        <div class="divchart1">$ 0.7 b</div>
        <div class="divchart1">$ 10 b</div>
        <div class="divchart1">$ 20 b</div>
        <div class="divchart1">$ 30 b</div>

    </div>

    <div id="charts2">
        <div class="scroll-chart">
            <div class="drawchart">
                <div class="positive_part_of_graph">
                    <?php
                    for ($year_data = 2013; $year_data <= 2022; $year_data++) {?>
                        <div class="Graph_Data_chart1">

                            <?php

                            $Net_data = $graph_data->InvestmentActivityData->$year_data->NetValue;
                            if ($Net_data != " 0.0" && $Net_data!=(-$Net_data)) {?>
                                <?php
                                if ($Net_data < 1000000) {
                                    $format = number_format($Net_data);
                                } else if ($Net_data < 1000000000) {
                                    $format2 = number_format($Net_data / 1000000, 2);
                                    echo '<div class="Net_data_chart" style="height:'?><?php echo ((int)$format2/(int)1000);?><?php echo '%">' . '</div>';

                                } else {
                                    $format = number_format($Net_data/ 1000000000, 2) ;
                                    echo '<div class="Net_data_chart" style="height:'?><?php echo $format ;?><?php echo '%">' . '</div>';?>
                                    <?php

                                }}


                            else {
                                echo '<div class="Net_data_chart" style="display: none;"></div>';

                            }





                            $Acquisition_data = $graph_data->InvestmentActivityData->$year_data->TotalAcquisitionsPrice;
                            if ($Acquisition_data != " 0.0") {?>
                                <?php if ($Acquisition_data < 1000000) {
                                    $format = number_format($Acquisition_data);
                                } else if ($Acquisition_data < 1000000000) {
                                    $format = number_format($Acquisition_data / 1000000, 2);
                                    $format2 = number_format($Acquisition_data / 1000000, 2);
                                    echo '$'.((int)$format2/(int)1000);
                                } else {
                                    $format = number_format($Acquisition_data/ 1000000000, 2);
                                }
                                echo '<div class="Acquisition_data_chart" style="height:'?><?php echo $format;?><?php echo '%">' . '</div>';?>
                                <?php
                            }else {
                                echo '<div class="Acquisition_data_chart" style="display: none;"></div>';
                            }
                            ?>


                        </div>
                    <?php } ?>

                </div>
                <div class="negative_part_of_graph">
                    <?php
                    for ($year_data = 2013; $year_data <= 2022; $year_data++) {?>
                        <div class="Graph_Data_chart2">
                            <?php

                            $Net_data = $graph_data->InvestmentActivityData->$year_data->NetValue;
                            if ($Net_data != " 0.0" && $Net_data=(-$Net_data)) {
                                if ($Net_data < 1000000) {
                                    $format = number_format($Net_data);
                                } else if ($Net_data < 1000000000) {
                                    $format2 = number_format($Net_data / 1000000, 2);
                                    echo '<div class="Net_data_chart" style="height:'?><?php echo ((int)$format2/(int)1000);?><?php echo '%">' . '</div>';
                                } else {
                                    $format = number_format($Net_data/ 1000000000, 2) ;
                                    echo '<div class="Net_data_chart" style="height:'?><?php echo $format ;?><?php echo '%">' . '</div>';?>
                                    <?php
                                }}
                            elseif($Net_data=$Net_data) {
                                echo '<div class="Net_data_chart" style="display: none;"></div>';

                            }

                            else{
                                echo '<div class="Net_data_chart" style="display: none;"></div>';
                            }






                            $Dispoaition_data = $graph_data->InvestmentActivityData->$year_data->TotalDispositionsPrice;
                            if ($Dispoaition_data != " 0.0") {?>
                                <?php
                                if ($Dispoaition_data < 1000000) {
                                    $format = number_format($Dispoaition_data);
                                } else if ($Dispoaition_data < 1000000000) {
                                    $format = number_format($Dispoaition_data / 1000000, 2) ;
                                    $format2 = number_format($Dispoaition_data / 1000000, 2) ;
                                    echo '$'.((int)$format2/(int)1000);
                                } else {
                                    $format = number_format($Dispoaition_data/ 1000000000, 2) ;
                                }
                                echo '<div class="Dispoaition_data_chart" style="height:'?><?php echo $format;?><?php echo '%">' . '</div>';?>

                                <?php
                            }else {
                                echo '<div class="Dispoaition_data_chart" style="display: none;"></div>';
                            }


                            ?>
                            <div class="year_data"><?php echo $year_data ?></div>

                        </div>
                    <?php  }?>


                </div>


            </div>
        </div>


        <div class="width">
            <span class="spanchart2">2013</span>
            <span class="spanchart2">2014</span>
            <span class="spanchart2">2015</span>
            <span class="spanchart2">2016</span>
            <span class="spanchart2">2017</span>
            <span class="spanchart2">2018</span>
            <span class="spanchart2">2019 </span>
            <span class="spanchart2">2020 </span>
            <span class="spanchart2">2021</span>

        </div>



        <div class="Generalnote1">
            <div class="note0">
                <div class="  bubbybluechartn"></div>
            </div>
            <div class="note1">
                <span class="Disposition">Disposition</span>
            </div>
            <div class="note0">
                <div class="orangechartn"></div>
            </div>
            <div class="note1">
                <span class="Acquisition">Acquisition</span>
            </div>
            <div class="note0">
                <div class=" purblechartn"></div>
            </div>
            <div class="note1">
                <span class="Net">Net</span>
            </div>
        </div>
    </div>
</div>
</div>






