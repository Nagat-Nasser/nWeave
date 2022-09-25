<div id="content13">
    <div id="Graph_Header">
        <div class="lab1">From :</div>
        <input type="number" class="inp1">
        <div class="lab2">To :</div>
        <input type="number" class="inp2">
        <input type="button" value="Filter" class="graph_buttonHeader"></div>

    <div id="charts2">
        <div class="scroll-chart">
            <div class="drawchart">
                <?php $grid_year_difference= $_GET['endYear']-$_GET['startYear']?>
                <div class="a" style="grid-template-columns:repeat(<?php echo( $grid_year_difference + 1) ?>,1fr);">
                        <?php $max=0;
                        for ($year_data = $_GET['startYear']; $year_data <= $_GET['endYear']; $year_data++) {?>
                            <div class="Graph_Data_chart1" id="<?php echo $year_data ?>">
                            <?php
                            $Acquisition_data = $graph_year_data->InvestmentActivityData->$year_data->TotalAcquisitionsPrice;
                            $Net_data = $graph_year_data->InvestmentActivityData->$year_data->NetValue;
                            foreach ($graph_year_data->InvestmentActivityData as $key => $value) {
                            if($graph_year_data->InvestmentActivityData->{$key}->TotalAcquisitionsPrice>$max){
                            $max=$graph_year_data->InvestmentActivityData->{$key}->TotalAcquisitionsPrice;}}
                            //acquisition bar
                            echo '<div class="Acquisition_data_chart" style="height:'?><?php echo number_format(($Acquisition_data /$max)*220,1);?><?php echo 'px">' . '</div>';
                            //positive net bar
                            if($Net_data>0) {
                            echo '<div class="Net_data_chart" style="height:'?><?php echo abs(number_format(($Net_data / $max) * 220, 1)) ;?><?php echo 'px">' . '</div>';} ?>
                            </div>
                        <?php }?>
                </div>

                <div class="b" style="grid-template-columns:repeat(<?php echo( $grid_year_difference + 1) ?>,1fr);">
                     <?php
                        $max=0;
                        for ($year_data = $_GET['startYear']; $year_data <= $_GET['endYear']; $year_data++) {?>
                         <div class="Graph_Data_chart2" id="<?php echo $year_data ?>">
                            <?php $Disposition_data = $graph_year_data->InvestmentActivityData->$year_data->TotalDispositionsPrice;
                            $Net_data = $graph_year_data->InvestmentActivityData->$year_data->NetValue;
                            foreach ($graph_year_data->InvestmentActivityData as $key => $value) {
                                if($graph_year_data->InvestmentActivityData->{$key}->TotalAcquisitionsPrice>$max){
                                $max=$graph_year_data->InvestmentActivityData->{$key}->TotalAcquisitionsPrice;}}
                                //disposition bar
                                echo '<div class="Disposition_data_chart" style="height:'?><?php echo number_format(($Disposition_data/$max)*220,1);?><?php echo 'px">' . '</div>';
                                //negtivte net bar
                                if($Net_data<0){
                                echo '<div class="Net_data_chart" style="height:'?><?php echo abs(number_format(($Net_data / $max) * 220, 2));?><?php echo 'px">' . '</div>';} ?>
                         </div>
                       <?php }?>
                    <!--                            <div class="width">--><?php //echo $year_data ?><!--</div>-->

                </div>
            </div>
        </div>
    </div>
    <div id="length2">

        <?php $vol_counter=30;?>
                   <div class="divchart1" style="height:<?php echo number_format(($max/7)/100000000,1)?>px">vol ()</div>
<?php        for($loop_counter=0 ; $loop_counter<=6 ; $loop_counter++){?>
            <div class="divchart1" style="height:<?php echo number_format(($max/7)/100000000,1)?>px"><?php  echo   $vol_counter .' B' ?> </div>
             <?php $vol_counter -=5;
             }?>
           <?php $vol_counter=5;
            for($loop_counter=0 ; $loop_counter<=4; $loop_counter++){?>
            <div class="divchart1" style="height:<?php echo number_format(($max/7)/100000000,1)?>px"><?php  echo   $vol_counter .' B' ?> </div>
            <?php $vol_counter +=5; }?>
    </div>
