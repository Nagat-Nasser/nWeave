<?php wh_log('log', ' print statistical circles data ');
$percentage=array("geoStatePercentage" ,"propertyTypePercentage","accTransTypePercentage");

function tree_data_more($typeofdata , $array1 , $array2   ,$data_elemment)
{
    $size_of_data = sizeof($typeofdata);
    for ($loop_counter = 0; $loop_counter < $size_of_data; $loop_counter++) {
        $colored_space_of_arc = 100 * ($typeofdata[$loop_counter]->$data_elemment);

        if ($colored_space_of_arc >= 3) {
            $array1[$loop_counter]=$colored_space_of_arc;
        }
        else{
            $array2[$loop_counter]=$colored_space_of_arc;
        }
    }
    return array($array1,  $array2);
}
function drawing_circles_eqORmore_than_three_percent1($more_than_three_array,$type_of_data,$status){
    $percentage=array("geoStatePercentage" ,"propertyTypePercentage","accTransTypePercentage");
    $circles_container_width=190;
    $circles_container_height = 192;
    $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256","darkgreen","yellow","#458745","#201252","#439abb","#d59563","#9f9e9e");

    for ($loop_counter = 0; $loop_counter < sizeof($more_than_three_array); $loop_counter++) {

        $width_of_printed_circle = $circles_container_width - ($loop_counter * 20);
        $height_of_printed_circles = $circles_container_height - ($loop_counter * 20);

        ?>
        <abbr  style="--hover--color--one:<?php echo $colors[$loop_counter]?>;" class="abbr" title=" <?php echo number_format ($more_than_three_array[$loop_counter],2 )."%". $type_of_data[$loop_counter]->$status?>">
            <section class="SECTION1_1_(<?php echo $loop_counter?>)">
                <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo  $width_of_printed_circle?>px"
                     height="<?php echo $height_of_printed_circles?>px">

                    <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                            cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                    <circle class="circle-chart__circle 1" stroke="<?php echo $colors[$loop_counter]?>" stroke-width="0.4"
                            stroke-dasharray="<?php echo  $more_than_three_array[$loop_counter] ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                            cy="16.91549431" r="15.91549431"></circle>

                </svg>
            </section>
        </abbr>
        <style>

            .abbr{

                width: 25px;
                height: 20px;
                border-radius: 15px;
            }

            .abbr:hover::after {
                background-color: var(--hover--color--one);
                border-radius: 10px;
                content: attr(title);
                display: inline-block;
                left: 68%;
                bottom: 100%;
                padding: 1em;
                position: sticky;
                width: fit-content;
                height: 6px;
                padding-top: 4px;
                z-index: 1;
                color: black;
            }
        </style>

    <?php }
       return $more_than_three_array;
}
function drawing_btn($more_than_three_array,$type_of_data,$status){
    $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256","darkgreen","yellow","#458745","#201252","#439abb","#d59563","#9f9e9e");
    for($loop_counter=0 ; $loop_counter< sizeof($more_than_three_array) ; $loop_counter++){
        ?>
        <div class="color colorone<?php echo $loop_counter?>" style="background-color:  <?php echo $colors[$loop_counter]?>;">
            <abbr style="--hover--color: <?php echo $colors[$loop_counter]?>" class= "abbrone" title=" <?php echo number_format( ($more_than_three_array[$loop_counter]),2) ."%". $type_of_data[$loop_counter]->$status;?> ">
                <span class="M"><?php echo $type_of_data[$loop_counter]->$status?> </span>
            </abbr>
        </div>

        <style>

            .abbrone {

                width: 25px;
                height: 20px;
                border-radius: 15px;
            }

            .abbrone:hover::after {
                background-color: var(--hover--color);
                border-radius: 10px;
                content: attr(title);
                display: inline-block;
                left: 296%;
                top: -78%;
                align-content: center;
                width: 109px;
                padding-top: 2px;
                height: 17px;
                z-index: 1;
                position: relative;
                color: black;
            }
        </style>
    <?php }

}

function drawing_others_btn($less_than_three_array)
{

    if(sizeof($less_than_three_array)>0){
        ?>
        <div class="color colorone_others" style="background-color:#f54275;" >
            <abbr class="abbrothersone" style="--hover--others--btn--one:#f54275;" title=" <?php echo number_format(array_sum($less_than_three_array),2) ."%"; ?>Others">
                <span class="Others" style="margin-left: 14px;">Others</span>
            </abbr>
        </div>
        <style>

            .abbrothersone {

                width: 25px;
                height: 20px;
                border-radius: 15px;
            }

            .abbrothersone:hover::after {
                background-color: var(--hover--others--btn--one);
                border-radius: 10px;
                content: attr(title);
                display: inline-block;
                left: 243%;
                top: -78%;
                /* bottom: 100%; */
                width: 85px;
                align-content: center;
                padding-top: 2px;
                height: 17px;
                z-index: 1;
                position: relative;
                color: black;
            }
        </style>

    <?php }}

function drawing_others_circle($less_than_three_array,$more_than_three_array){

    $circles_container_width=190;
    $circles_container_height = 192;
    if(sizeof($less_than_three_array)>0){

        $width_of_printed_circle = $circles_container_width - (sizeof($more_than_three_array) * 20);
        $height_of_printed_circles= $circles_container_width - (sizeof($more_than_three_array) * 20 );
        ?>
        <section class="SECTION1_1_others">
            <abbr class="abbrotherscircletwo"  title="<?php echo number_format( array_sum($less_than_three_array),2) ."%"."others" ?>">
                <svg class="circle-chart 1" viewBox="0 0 33.83098862 33.83098862" width="<?php echo $width_of_printed_circle?>px"
                     height="<?php echo $height_of_printed_circles?>px"  >

                    <circle class="circle-chart__background 1" stroke="#413e3e" stroke-width="0.4" fill="none"
                            cx="16.91549431" cy="16.91549431" r="15.91549431"></circle>

                    <circle class="circle-chart__circle 1" stroke="#f54275" stroke-width="0.4"
                            stroke-dasharray="<?php echo  array_sum($less_than_three_array) ?> , 100" stroke-linecap="round" fill="none" cx="16.91549431"
                            cy="16.91549431" r="15.91549431"></circle>

                </svg>
            </abbr>
        </section>
        <style>

            .abbrotherscircletwo{

                width: 25px;
                height: 20px;
                border-radius: 15px;

            }

            .abbrotherscircletwo:hover::after {
                background-color: #f54275;
                border-radius: 10px;
                content: attr(title);
                display: inline-block;
                left: 39%;
                bottom: 100%;
                /* padding: 1em; */
                position: absolute;
                width: 131px;
                height: 25px;
                padding-top: 3px;
                z-index: 1;
                color: black;
            }
        </style>
    <?php }}

?>

    <div class="geography" xmlns="http://www.w3.org/1999/html">Geograpy
    </div>
    <div id="content7">
<?php $status=array("state__c","PROPERTY_TYPE_RCA__c","Transaction_Type__c");?>
        <div class="one">
            <?php
            $more_than_three_array = array();
            $less_than_three_array = array();
            $more_than_three_array = (tree_data_more($Account_Data->GeographyStatisticsByState , $more_than_three_array, $less_than_three_array , $percentage[0]))[0] ;
            $less_than_three_array = (tree_data_more($Account_Data->GeographyStatisticsByState,$more_than_three_array , $less_than_three_array ,$percentage[0]))[1];
//$colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256","darkgreen","yellow","#458745","#201252","#439abb","#d59563","#9f9e9e");
            drawing_circles_eqORmore_than_three_percent1($more_than_three_array,$Account_Data->GeographyStatisticsByState,$status[0]);
            drawing_others_circle($less_than_three_array,$more_than_three_array);?>
        </div>
        <div class="classesimg1_1">
            <?php
           drawing_btn($more_than_three_array,$Account_Data->GeographyStatisticsByState,$status[0]);
           drawing_others_btn($less_than_three_array);
           ?>
        </div>
    </div>

    <div class="PropertyType">
        Property Type
    </div>

    <div id="content8">
        <div class="two">

            <?php
            $more_than_three_array2=array();
            $less_than_three_array2=array();
            $more_than_three_array2 = (tree_data_more($Account_Data->PropertyTypeStatistics , $more_than_three_array2,$less_than_three_array2 , $percentage[1]))[0] ;
            $less_than_three_array2 = (tree_data_more($Account_Data->PropertyTypeStatistics , $less_than_three_array2,$less_than_three_array2, $percentage[1]))[1];
               drawing_circles_eqORmore_than_three_percent1($more_than_three_array2,$Account_Data->PropertyTypeStatistics,$status[1]);
            drawing_others_circle($less_than_three_array2,$more_than_three_array2);
          ?>
        </div>

        <div class="classesimg1_3_2">

            <?php

           drawing_btn( $more_than_three_array2,$Account_Data->PropertyTypeStatistics,$status[1]);
                drawing_others_btn($less_than_three_array2);?>
        </div>


    </div>

    <div class="Transactions">
        Transactions
    </div>

    <div id="content9">

        <div class="three">

            <?php

            $more_than_three_array3=array();
            $less_than_three_array3=array();
            $more_than_three_array3 =( tree_data_more($Account_Data->AccountTransactionsTypeStatistics , $more_than_three_array3,$less_than_three_array3, $percentage[2]))[0] ;
            $less_than_three_array3 = (tree_data_more($Account_Data->AccountTransactionsTypeStatistics , $less_than_three_array3,$less_than_three_array3 ,$percentage[2]))[1];
            drawing_circles_eqORmore_than_three_percent1($more_than_three_array3,$Account_Data->AccountTransactionsTypeStatistics,$status[2]);
            drawing_others_circle($less_than_three_array3,$more_than_three_array3);?>
        </div>
        <div class="classesimg1_4_2">

            <?php

//            $colors = array("#795ab0","#439abb","#d59563","#9f9e9e","#00725f", "#ffe9cf", "#838d37" ,"#4c8077" , "#402e32" , "#c35256","darkgreen","yellow","#458745","#201252","#439abb","#d59563","#9f9e9e");
       drawing_btn($more_than_three_array3,$Account_Data->AccountTransactionsTypeStatistics,$status[2]);
           drawing_others_btn($less_than_three_array3);?>
            </div>
        </div>

<?php wh_log('log', '-----------END------------');?>
