
<?php wh_log('log', ' print company data ');
//$access_token = get_access_token();
//$Account_Data = get_account_data($access_token,$_GET['account_id']); //0016e00002zuFq9AAE

?>

<div id="content1"> //content1
    <div class="buildbui">
        <div class="build bui1">#Of Buildings</div>
        <div class="build bui2">Gross Area(Sq.Ft.)</div>
        <div class="number">
            <!-- <?php echo  $Account_Data->count['Property_Count']; ?> -->
            <?php

            $number = $Account_Data->AccountSummaries2->NumOfProperties;
             if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo $format;?>
            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
        <div class="number">

            <!-- <?php echo $Account_Data->sum['Buildingsum']; ?> -->

            <?php
            $number =  $Account_Data->AccountSummaries2->TotalGrossAreaSqFt;
             if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo $format;?>
            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
    </div>
</div>


<div id="content2">
    <div class="buildbui">
        <div class="build bui1">%leased</div>
        <div class="build bui2">NOI</div>
        <div class="number">
            <?php
            $number = $Account_Data->AccountSummaries2->LeasedPercentage;
            echo number_format($number, 1);?>
            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
        <div class="number">
            --
        </div>
    </div>
</div>
<div id="content3">
    <div class="buildbui">
        <div class="build bui1">#of Units</div>
        <div class="build bui2">Cost/Units($)</div>
        <div class="number">


            <?php
            $number =$Account_Data->AccountSummaries2->NumOfUnits;
             if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo $format;?>
        <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
        <div class="number">

            <?php
            $number =$Account_Data->AccountSummaries2->CostPerUnit;
            if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
                echo '$' . $format;?>
        <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
    </div>
</div>

<div id="content4">
    <div class="buildbui">
        <div class="build bui1">portfolio Value</div>
        <div class="build bui2">Avg. Gross Area</div>
        <div class="number">
            <?php
            $number =$Account_Data->AccountSummaries2->PortfolioValue;
             if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo '$' . $format;?>


            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
        <div class="number">
            <?php
            $number =$Account_Data->AccountSummaries2->AvgGrossAreaSqFt;
                        if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo $format;?>
            <!-- <?php echo $Account_Data->sum['buildingavg']; ?> -->
            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
    </div>
</div>
<div id="content5">
    <div class="buildbui">
        <div class="build bui1">Cost/PSF($)</div>
        <div class="build bui2">Cost/Building($)</div>
        <div class="number">
            <?php
            $number =$Account_Data->AccountSummaries2->CostPerSqFt;
             if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo '$' . $format;?>
            <!-- <?php echo $Account_Data->cost_psf['cost_psf']; ?> -->
            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
        <div class="number">

            <?php
            $number =$Account_Data->AccountSummaries2->CostPerBuilding;
             if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo '$' . $format;?>

                       <!-- <?php echo $Account_Data->cost_building['cost_building']; ?> -->
            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
    </div>
</div>
<div id="content6">
    <div class="buildbui">
        <div class="build bui1">Avg.Age</div>
        <div class="build bui2">Avg.Hold</div>
        <div class="number">
            <?php
            $number =$Account_Data->AccountSummaries2->AvgBuildingsAge;
             if ($number < 1000000) {
                $format = number_format($number);
            } else if ($number < 1000000000) {
                $format = number_format($number / 1000000, 2) . 'M';
            } else {
                $format = number_format($number / 1000000000, 2) . 'B';
            }
            echo $format; ?>
            <!-- <?php echo $Account_Data->AGE['AVG_AGE']; ?> -->
            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
        <div class="number">
            <?php
            $number =$Account_Data->AccountSummaries2->AvgHoldingPeriod;
            echo number_format($number, 1);?>

            <img src="./Assets/Imgs/up-16.ico" alt="uparrow" />
        </div>
    </div>
</div>
<?php wh_log('log', ' print company data End '); ?>