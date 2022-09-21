
<?php wh_log('log', ' print statistical circles data ');?>
<div class="geography" xmlns="http://www.w3.org/1999/html">Geograpy
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
                    <abbr class= "abbrone"title=" <?php echo ceil(100 * $Account_Data->GeographyStatisticsByState[$loop_counter]->geoStatePercentage) ."%". $Account_Data->GeographyStatisticsByState[$loop_counter]->state__c;?> ">
                    <span class="M"><?php echo $Account_Data->GeographyStatisticsByState[$loop_counter]->state__c?> </span>
                </abbr>
                </div>

      <style>

          .abbrone {

              width: 25px;
              height: 20px;
              border-radius: 15px;
          }

          .abbrone:hover::after {
              background-color: <?php echo $colors[$loop_counter];?> ;
              border-radius: 10px;
              content: attr(title);
              display: inline-block;
              left: 68%;
              bottom: 100%;
              width: fit-content;
              align-content: center;
              padding-top: 2px;
              height: 2px;
              z-index: 1;
              position: sticky;
          }
      </style>
<?php }}?>

                <div class="color colorone_others" style="background-color:#f54275;" >
                    <span class="Others">Others</span>
                </div>

            </div>

            <div class="one">


                <?php
                $more_than_three=0; $less_than_three=0;
                $number_of_printed_circles =  sizeof($Account_Data->GeographyStatisticsByState);
                $more_than_three_array=array();
                $less_than_three_array=array();
                for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++) {
                    $colored_space_of_arc = 100 * ($Account_Data->GeographyStatisticsByState[$loop_counter]->geoStatePercentage);

                    if ($colored_space_of_arc >= 3) {


                        array_push($more_than_three_array, $colored_space_of_arc);
                        $more_than_three++;


                    } else {

                        array_push($less_than_three_array, $colored_space_of_arc);
                        $less_than_three++;

                    }
                }

                $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256" );


                $data_from_string_to_array= json_encode($Account_Data->GeographyStatisticsByState);
                $number_of_printed_circles =  sizeof($Account_Data->GeographyStatisticsByState);
             global  $circles_container_width ; $circles_container_width=190;
               global  $circles_container_height; $circles_container_height = 192;


                for($loop_counter=0 ; $loop_counter < $number_of_printed_circles ; $loop_counter++){


                    $colored_space_of_arc = 100 * ($Account_Data->GeographyStatisticsByState[$loop_counter]->geoStatePercentage);

                    global   $width_of_printed_circle ; $width_of_printed_circle= $circles_container_width - ($loop_counter *20);
                    global   $height_of_printed_circles ;  $height_of_printed_circles = $circles_container_height - ($loop_counter *20);

                    if ($colored_space_of_arc >= 3 ){

                ?>
             <abbr  class="abbr" title=" <?php echo ceil(100 * $Account_Data->GeographyStatisticsByState[$loop_counter]->geoStatePercentage) ."%". $Account_Data->GeographyStatisticsByState[$loop_counter]->state__c;?> ">



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

                        <style>

                            abbr{

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
                                position: sticky;
                                width: fit-content;
                                height: fit-content;
                                z-index: 1;
                            }
                        </style>

                <?php }
                else {

//                    $others_circle_space = array_sum($less_than_three_array);
                   global $width_of_printed_other_circle ;
                   global $height_of_printed_other_circles ;

                $others_circle_space = array_sum($less_than_three_array);
                $width_of_printed_other_circle = $circles_container_width - ($more_than_three * 20);
                $height_of_printed_other_circles= $circles_container_width - ($more_than_three *20 );
                 ?>

                <section class="SECTION1_1_others">
                    <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo $width_of_printed_other_circle ?>px"
                         height="<?php  echo $height_of_printed_other_circles?>px"  >

                        <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                                cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                        <circle class="circle-chart__circle 1" stroke="#f54275" stroke-width="0.4"
                                stroke-dasharray="<?php echo  ($others_circle_space) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                                cy="16.91549431" r="15.91549431"></circle>

                    </svg>
                </section>


<?php }}?>

            </div></div>

                <div class="PropertyType">
                Property Type
                </div>

                        <div id="content8">
                         <!-- <span class="classesimg1_3"></span> -->
                    <div class="classesimg1_3_2">

                        <?php

                        $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256");


//                        $circles_container_width = 190;
//                        $circles_container_height = 192;
//                        $others_circle_space = 0;
//                        $data_from_string_to_array= json_encode($Account_Data->PropertyTypeStatistics);


                        $number_of_printed_buttons =  sizeof($Account_Data->PropertyTypeStatistics);


                        for($loop_counter=0 ; $loop_counter< $number_of_printed_buttons ; $loop_counter++){

                            $colored_space_of_arc = 100 * ($Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage);
                            if ($colored_space_of_arc >= 3 ){


                                ?>

                                <div class="color colorone<?php echo $loop_counter?>" style="background-color: <?php echo $colors[$loop_counter]?>;">
                                    <abbr  class="abbrtwo" title=" <?php echo ceil(100 * $Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage) ."%". $Account_Data->PropertyTypeStatistics[$loop_counter]->PROPERTY_TYPE_RCA__c;?> ">
                                    <span class="M"><?php echo $Account_Data->PropertyTypeStatistics[$loop_counter]->PROPERTY_TYPE_RCA__c?> </span>
                                    </abbr>
                                </div>

                                <style>

                                    .abbrtwo {

                                        width: 25px;
                                        height: 20px;
                                        border-radius: 15px;
                                    }

                                    .abbrtwo:hover::after {
                                        background-color: <?php echo $colors[$loop_counter];?> ;
                                        border-radius: 10px;
                                        content: attr(title);
                                        display: inline-block;
                                        left: 68%;
                                        bottom: 100%;
                                        width: fit-content;
                                        align-content: center;
                                        padding-top: 2px;
                                        height: 2px;
                                        z-index: 1;
                                        position: sticky;
                                    }
                                </style>
                            <?php }}?>
<!---->
<!--                        <div class="color colorone_others" style="background-color:#f54275;" >-->
<!--                            <span class="M">Others</span>-->
<!--                        </div>-->


                    </div>



            <div class="two">

                <?php
                $more_than_three=0; $less_than_three=0;
                $number_of_printed_circles =  sizeof($Account_Data->PropertyTypeStatistics);
                $more_than_three_array=array();
                $less_than_three_array=array();
                for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++) {
                    $colored_space_of_arc = 100 * ($Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage);

                    if ($colored_space_of_arc >= 3) {


                        array_push($more_than_three_array, $colored_space_of_arc);
//                        $more_than_three++;


                    } else {

                        array_push($less_than_three_array, $colored_space_of_arc);
//                        $less_than_three++;

                    }
                }

                for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++){

                    $colored_space_of_arc = 100 * ($Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage);
                    $width_of_printed_circle= $circles_container_width - ($loop_counter*20);
                    $height_of_printed_circles= $circles_container_height - ($loop_counter*20);
                    if ($colored_space_of_arc >= 3 ){


                        ?>
                <abbr title=" <?php echo ceil(100 * $Account_Data->PropertyTypeStatistics[$loop_counter]->propertyTypePercentage)."%". $Account_Data->PropertyTypeStatistics[$loop_counter]->PROPERTY_TYPE_RCA__c;?>">
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
                                width: fit-content;
                                height: fit-content;
                                z-index: 1;
                            }
                        </style>

                   <?php  }
                    else {
                        $others_circle_space =0;
                         $others_circle_space += $colored_space_of_arc;
                        global $width_of_printed_other2_circle ;
                        global   $height_of_printed_other2_circles ;


                $width_of_printed_other2_circle = $circles_container_width - (sizeof($more_than_three_array) * 20);
                $height_of_printed_other2_circles= $circles_container_width - (sizeof($more_than_three_array) * 20 );
                ?>


                <section class="SECTION1_1_others">
                    <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo $width_of_printed_other2_circle?>px"
                         height="<?php echo $height_of_printed_other2_circles?>px"  >

                        <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                                cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                        <circle class="circle-chart__circle 1" stroke="#f54275" stroke-width="0.4"
                                stroke-dasharray="<?php echo  ($others_circle_space) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                                cy="16.91549431" r="15.91549431"></circle>

                    </svg>
                </section>
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
                                width: fit-content;
                                height: fit-content;
                                z-index: 1;
                            }
                        </style>
<?php }}?>

            </div>  </div>






                <div class="Transactions">
                Transactions
                </div>

                            <div id="content9">
                  <div class="classesimg1_4_2">



                      <?php

                      $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256");


                      for($loop_counter=0 ; $loop_counter< $number_of_printed_buttons ; $loop_counter++){

                          $colored_space_of_arc = 100 * ($Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage);
                          if ($colored_space_of_arc >= 3 ){


                              ?>


                              <div class="color colorone<?php echo $loop_counter?>" style="background-color:  <?php echo $colors[$loop_counter]?>;">
                                  <abbr class="abbrthree"  title="<?php echo ceil(100 * $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage) ."%". $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->Transaction_Type__c;?>">
                                  <span class="M"><?php echo $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->Transaction_Type__c?> </span>
                              </abbr>
                              </div>
                              <style>
                                  .abbrthree {

                                      width: 25px;
                                      height: 20px;
                                      border-radius: 15px;
                                  }

                                  .abbrthree:hover::after {
                                      background-color: <?php echo $colors[$loop_counter];?> ;
                                      border-radius: 10px;
                                      content: attr(title);
                                      display: inline-block;
                                      left: 68%;
                                      bottom: 100%;
                                      width: fit-content;
                                      align-content: center;
                                      padding-top: 2px;
                                      height: 2px;
                                      z-index: 1;
                                      position: sticky;

                                  }
                              </style>
                          <?php }}?>

                      <div class="color colorone_others" style="background-color:#f54275;" >
                          <span class="Others">Others</span>
                      </div>

 //update

                  </div>
             <div class="three">

                 <?php
//
//                 $data_from_string_to_array= json_encode($Account_Data->AccountTransactionsTypeStatistics);
//                 $number_of_printed_circles =  sizeof($Account_Data->AccountTransactionsTypeStatistics);
                 $more_than_three=0; $less_than_three=0;
                 $number_of_printed_circles =  sizeof($Account_Data->PropertyTypeStatistics);
                 $more_than_three_array=array();
                 $less_than_three_array=array();
                 for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++) {
                     $colored_space_of_arc = 100 * ($Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage);

                     if ($colored_space_of_arc >= 3) {


                         array_push($more_than_three_array, $colored_space_of_arc);
//                        $more_than_three++;


                     } else {

                         array_push($less_than_three_array, $colored_space_of_arc);
//                        $less_than_three++;

                     }
                 }
                 for($loop_counter=0 ; $loop_counter < $number_of_printed_circles ; $loop_counter++){


                     $colored_space_of_arc = 100 * ($Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage);
                     if ($colored_space_of_arc >= 3 ) {

                     }}
//                 $circles_container_width=190;
//                 $circles_container_height=192;
                 for($loop_counter=0 ; $loop_counter<$number_of_printed_circles ; $loop_counter++){

                     $colored_space_of_arc = 100 * ($Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage);
                     if ($colored_space_of_arc >=3){

                         $width_of_printed_circle= $circles_container_width - ($loop_counter*20);
                         $height_of_printed_circles= $circles_container_height - ($loop_counter*20);



                         ?>
                 <abbr  title=" <?php echo ceil(100 * $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->accTransTypePercentage) ."%". $Account_Data->AccountTransactionsTypeStatistics[$loop_counter]->Transaction_Type__c;?>">
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
                         /*padding: 1em;*/
                         position: absolute;
                             width: fit-content;
                             height: 5px;
                             padding-top: 4px;
                         z-index: 1;
                         }
                         </style>

                     <?php    }
                     else{


                         $others_circle_space =array_sum($less_than_three_array);
                         global $width_of_printed_other_circle ;
                         global $height_of_printed_other_circles ;

                 $width_of_printed_other_circle_3 = $circles_container_width - (sizeof($more_than_three_array) * 20);
                 $height_of_printed_other_circles_3= $circles_container_width - (sizeof($more_than_three_array) *20 );
                     ?>

                     <section class="SECTION1_1_others">
                         <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo $width_of_printed_other_circle_3 ?>px"
                              height="<?php  echo $height_of_printed_other_circles_3?>px"  >

                             <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                                     cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                             <circle class="circle-chart__circle 1" stroke="#f54275" stroke-width="0.4"
                                     stroke-dasharray="<?php echo  ($others_circle_space) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                                     cy="16.91549431" r="15.91549431"></circle>

                         </svg>
                     </section>
<?php }}?>
             </div> </div>

<?php wh_log('log', '-----------END------------');?>

