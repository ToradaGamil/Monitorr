<?php 

    // adapted from this website: https://bojanz.wordpress.com/2014/03/11/detecting-the-system-timezone-php/

    $file = '../config/datadir.json';

        if(!is_file($file)){

            $path = "../";

            include_once ('../config/monitorr-data-default.php');
            
            $timezone = $jsonusers['timezone'];
           // echo $timezone;

            $timestandard = $jsonusers['timestandard'];
            // echo $timestandard;
        
        } 

        else {

            $datafile = '../config/datadir.json';

            include_once ('../config/monitorr-data.php');

            $timezone = $jsonusers['timezone'];
            //echo $timezone;

            $timestandard = $jsonusers['timestandard'];
            //echo $timestandard;

        }

    date_default_timezone_set($timezone);
    $timestamp = time();
    $server_date = date("D | d M <br> Y");

?>

    <div class="dtg">

<?php
    if ($timestandard=='True') {
        $msg = date("g:i:s A");
        echo $msg;
    } elseif ($timestandard=='true') {
        $msg = date("g:i:s A");
        echo $msg;
    } elseif ($timestandard=='t') {
        $msg = date("g:i:s A");
        echo $msg;
    } elseif ($timestandard=='False') {
        $msg = date("H:i:s T");
        echo $msg;
    } elseif ($timestandard=='false') {
        $msg = date("H:i:s T");
        echo $msg;
    } elseif ($timestandard=='f') {
        $msg = date("H:i:s T");
        echo $msg;
    }
?>

</div>

    <div id="line">__________</div>

<div class="date">
    <?php echo "$server_date"?>
</div>