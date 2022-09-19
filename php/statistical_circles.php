
<?php wh_log('log', ' print statistical circles data ');?>
<div class="geography">Geograpy
</div>

  <div id="content7">
            <div class="classesimg1_1">

                <?php

                $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256");



                $data_from_string_to_array= json_encode($Account_Data->GeographyStatisticsByState);
                $number_of_printed_buttons =  sizeof($Account_Data->GeographyStatisticsByState);


                for($loop_counter=0 ; $loop_counter< $number_of_printed_buttons ; $loop_counter++){

                $colored_space_of_arc = 100 * ($Account_Data->GeographyStatisticsByState[$loop_counter]->geoStatePercentage);
                if ($colored_space_of_arc >= 3 ){


                ?>

                <div class="color colorone<?php echo $loop_counter?>" style="background-color:  <?php echo $colors[$loop_counter]?>;">
                    <span class="M"><?php echo $Account_Data->GeographyStatisticsByState[$loop_counter]->state__c?> </span>
                </div>

<?php }}?>

            </div>

            <div class="one">


                <?php

                $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256" );

                $circles_container_width = 190;
                $circles_container_height = 192;
                $others_circle_space = 0;

                $data_from_string_to_array= json_encode($Account_Data->GeographyStatisticsByState);
                $number_of_printed_circles =  sizeof($Account_Data->GeographyStatisticsByState);


                for($loop_counter=0 ; $loop_counter < $number_of_printed_circles ; $loop_counter++){

                $colored_space_of_arc = 100 * ($Account_Data->GeographyStatisticsByState[$loop_counter]->geoStatePercentage);

//                $width_of_printed_circle= $circles_container_width - ($loop_counter*20);
//                $height_of_printed_circles= $circles_container_height - ($loop_counter*20);

                if ($colored_space_of_arc >= 3 ){

                    $width_of_printed_circle= $circles_container_width - ($loop_counter*20);
                    $height_of_printed_circles= $circles_container_height - ($loop_counter*20);


                ?>
                               <abbr title=" <?php echo ceil(100 * $Account_Data->GeographyStatisticsByState[$loop_counter]->geoStatePercentage) ;
                                                echo  $Account_Data->GeographyStatisticsByState[$loop_counter]->state__c;?>  ">

                                   <style>

                                       abbr {

                                           width: 25px;
                                           height: 20px;
                                           border-radius: 15px;
                                       }

                                       abbr:hover::after {
                                           background-color: <?php echo $colors[$loop_counter];?> ;
                                           border-radius: 10px;
                                           content: attr(title);
                                           display: inline-block;
                                           left: 68%;
                                           bottom: 100%;
                                           padding: 1em;
                                           position: absolute;
                                           width: 150px;
                                           z-index: 1;
                                       }
                                   </style>

                            <section class="SECTION1_1_(<?php echo $loop_counter?>)">
                                <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo  $width_of_printed_circle?>px"
                                     height="<?php echo $height_of_printed_circles?>px"  >

                                    <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                                            cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                                    <circle class="circle-chart__circle 1" stroke="<?php echo $colors[$loop_counter]?>" stroke-width="0.4"
                                            stroke-dasharray="<?php echo  ($colored_space_of_arc) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                                            cy="16.91549431" r="15.91549431"></circle>

                                </svg>
                            </section>

                               </abbr>

                <?php }
                else {

                    $others_circle_space = $colored_space_of_arc + $others_circle_space;
                    $width_of_printed_other_circle = $width_of_printed_circle-20;
                    $height_of_printed_other_circles= $height_of_printed_circles-20;
                }}
                 ?>
                <section class="SECTION1_1_(<?php echo $loop_counter?>)">
                    <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo  $width_of_printed_other_circle?>px"
                         height="<?php echo  $height_of_printed_other_circles?>px"  >

                        <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                                cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                        <circle class="circle-chart__circle 1" stroke="red" stroke-width="0.4"
                                stroke-dasharray="<?php echo  ($others_circle_space) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                                cy="16.91549431" r="15.91549431"></circle>

                    </svg>
                </section>


         </div></div>





      
                <div class="PropertyType">
                Property Type
                </div>

                        <div id="content8">
                         <!-- <span class="classesimg1_3"></span> -->
                    <div class="classesimg1_3_2">

                        <?php

                        $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256");



//                        $data_from_string_to_array= json_encode($Account_Data->PropertyTypeStatistics);
                        $number_of_printed_buttons =  sizeof($Account_Data->PropertyTypeStatistics);


                        for($loop_counter=0 ; $loop_counter< $number_of_printed_buttons ; $loop_counter++){

                            $colored_space_of_arc = 100 * ($Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage);
                            if ($colored_space_of_arc >= 3 ){


                                ?>

                                <div class="color colorone<?php echo $loop_counter?>" style="background-color:  <?php echo $colors[$loop_counter]?>;">
                                    <span class="M"><?php echo $Account_Data->PropertyTypeStatistics[$loop_counter]->PROPERTY_TYPE_RCA__c?> </span>
                                </div>

                            <?php }}?>

                </div>



            <div class="two">

                <?php

//
//                $data_from_string_to_array= json_encode($Account_Data->PropertyTypeStatistics);
                $number_of_printed_circles =  sizeof($Account_Data->PropertyTypeStatistics);
//

                for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++){

                    $colored_space_of_arc = 100 * ($Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage);
                    if ($colored_space_of_arc >= 3 ){

                        $width_of_printed_circle= $circles_container_width - ($loop_counter*20);
                        $height_of_printed_circles= $circles_container_height - ($loop_counter*20);



                        ?>
                <abbr title=" <?php echo ceil(100 * $Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage)  . "\n";
                echo  $Account_Data->PropertyTypeStatistics[$loop_counter]->PROPERTY_TYPE_RCA__c;?>">
                        <section class="SECTION1_1_<?php echo $loop_counter?>">
                            <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo  $width_of_printed_circle?>px"
                                 height="<?php echo $height_of_printed_circles?>px" >

                                <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                                        cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                                <circle class="circle-chart__circle 1" stroke="<?php echo $colors[$loop_counter]?>" stroke-width="0.4"
                                        stroke-dasharray="<?php echo  ($colored_space_of_arc) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                                        cy="16.91549431" r="15.91549431"></circle>

                            </svg>
                        </section>
                </abbr>
                        <style>

                            abbr {

                                width: 25px;
                                height: 20px;
                                border-radius: 15px;


                            }

                            abbr:hover::after {
                                background-color: <?php echo $colors[$loop_counter]?> ;
                                border-radius: 10px;
                                content: attr(title);
                                display: inline-block;
                                left: 68%;
                                bottom: 100%;
                                padding: 1em;
                                position: absolute;
                                width: 120px;
                                z-index: 1;
                            }
                        </style>

                    <?php }?><?php }?>


<!---->
<!--                --><?php //     //others_circle
//
//
//                $data_from_string_to_array= json_encode($Account_Data->PropertyTypeStatistics);
//                $number_of_printed_circles =  sizeof($Account_Data->PropertyTypeStatistics);
//
//
////
////                $total_others_cricle_pecentage = 0;
////                $width_of_others_circle=0;
////                $height_of_others_circle=0;
//                for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++){
////
//                    $colored_space_of_arc = 100 * ($Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage);
//                    if ($colored_space_of_arc < 3 ) {
//                        $less_than_three_circle_percentage = $colored_space_of_arc;
//                        $total_others_cricle_pecentage1=0;
//                     global $total_others_cricle_pecentage2;
//                        $total_others_cricle_pecentage2 =  $total_others_cricle_pecentage1 + $less_than_three_circle_percentage;
//                     global  $width_of_others_circle ;
//                       $width_of_others_circle= $circles_container_width - ($number_of_printed_circles * 20);
//                         global $height_of_others_circle ;
//                        $height_of_others_circle = $circles_container_height - ($number_of_printed_circles * 20);
//
//
//                    } }
//                        ?>
<!---->
<!--                        <section class="SECTION1_1_--><?php //echo $loop_counter?><!--">-->
<!--                            <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="--><?php //echo  $GLOBALS['width_of_others_circle']?><!--px"-->
<!--                                 height="--><?php //echo  $GLOBALS['height_of_others_circle']?><!--px" >-->
<!---->
<!--                                <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"-->
<!--                                        cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>-->
<!---->
<!--                                <circle class="circle-chart__circle 1" stroke="--><?php //echo $colors[$loop_counter]?><!--" stroke-width="0.4"-->
<!--                                        stroke-dasharray="--><?php //echo $GLOBALS ['total_others_cricle_pecentage2'] ?><!-- , 100" stroke-linecap="round" fill="none" cx="16.91549431"-->
<!--                                        cy="16.91549431" r="15.91549431"></circle>-->
<!---->
<!--                            </svg>-->
<!--                        </section>-->
<!---->
<!---->
<!--<                  --><?php ////}?>

            </div>  </div>

                <div class="Transactions">
                Transactions
                </div>

                            <div id="content9">
                             <!-- <img src="./imgs/88zeustra-account-2022-07-18-11_59_15.png" alt="classesimg1_4" class="classesimg1_4"> -->
                   <!-- <span class="classesimg1_4">Transactions</span> -->
                             <!-- <img src="./imgs/heeezeustra-account-2022-07-18-11_59_15.png" alt="classesimg1_4_2" class="classesimg1_4_2"> -->
                  <div class="classesimg1_4_2">



                      <?php

                      $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256");


//
//                      $data_from_string_to_array= json_encode($Account_Data->AccountTransactionsTypeStatistics);
//                      $number_of_printed_buttons =  sizeof($Account_Data->AccountTransactionsTypeStatistics);


                      for($loop_counter=0 ; $loop_counter< $number_of_printed_buttons ; $loop_counter++){

                          $colored_space_of_arc = 100 * ($Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage);
                          if ($colored_space_of_arc >= 3 ){


                              ?>

                              <div class="color colorone<?php echo $loop_counter?>" style="background-color:  <?php echo $colors[$loop_counter]?>;">
                                  <span class="M"><?php echo $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->Transaction_Type__c?> </span>
                              </div>

                          <?php }}?>













                      <!--                                <div class="color colorone9">-->
<!--                                 <span class="M" STYLE="color:#439abb;">Refinance</span></div>-->
<!--                                <div class="color colorone10">-->
<!--                                 <span class="M" STYLE="color:#795ab0;">Sale</span></div>-->


                </div>
             <div class="three">

                 <?php
//
//                 $data_from_string_to_array= json_encode($Account_Data->AccountTransactionsTypeStatistics);
//                 $number_of_printed_circles =  sizeof($Account_Data->AccountTransactionsTypeStatistics);


                 for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++){

                     $colored_space_of_arc = 100 * ($Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage);
                     if ($colored_space_of_arc >=3){

                         $width_of_printed_circle= $circles_container_width - ($loop_counter*20);
                         $height_of_printed_circles= $circles_container_height - ($loop_counter*20);



                         ?>
                 <abbr title=" <?php echo ceil(100 * $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage) ."%" . "\n";
                 echo  $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->Transaction_Type__c;?>">
                         <section class="SECTION1_1_<?php echo $loop_counter?>">
                             <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo  $width_of_printed_circle?>px"
                                  height="<?php echo $height_of_printed_circles?>px" >

                                 <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                                         cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                                 <circle class="circle-chart__circle 1" stroke="<?php  echo $colors[$loop_counter]?>" stroke-width="0.4"
                                         stroke-dasharray="<?php echo  ($colored_space_of_arc) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                                         cy="16.91549431" r="15.91549431"></circle>

                             </svg>
                         </section>
                 </abbr>




             <style>
                         abbr {

                         width: 25px;
                         height: 20px;
                         border-radius: 15px;


                         }

                         abbr:hover::after {
                         background-color: <?php echo $colors[$loop_counter]?> ;
                         border-radius: 10px;
                         content: attr(title);
                         display: inline-block;
                         left: 68%;
                         bottom: 100%;
                         padding: 1em;
                         position: absolute;
                         width: 120px;
                         z-index: 1;
                         }
                         </style>

                     <?php    }?><?php }?>
        </div> </div>

<?php wh_log('log', '-----------END------------');?>

