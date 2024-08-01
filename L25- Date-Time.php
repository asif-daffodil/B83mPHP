<?php  
    date_default_timezone_set('Asia/Dhaka');
    echo date('d-m-y h:i:s a D')."<br>";
    echo date('d-M-Y H:i:s A l')."<br>";
    echo date('d-F-Y h:i:s a l')."<br>";

    //  mktime(hour, minute, second, month, day, year)
    $timestamp = mktime(10, 30, 45, 9, 10, 2024);
    echo date('d-M-Y h:i:s a l', $timestamp)."<br>";

    // strtotime(time, now)
    $timestamp = strtotime('tomorrow');
    echo date('d-M-Y h:i:s a l', $timestamp)."<br>";
    $timestamp = strtotime('next Friday');
    echo date('d-M-Y h:i:s a l', $timestamp)."<br>";
    $timestamp = strtotime('+5 years 4 months +2 days');
    echo date('d-M-Y h:i:s a l', $timestamp)."<br>";

    // next 7 friday
    $startDay = strtotime('next Friday');
    $endDay = strtotime('+6 weeks', $startDay);
    while($startDay <= $endDay){
        echo date('d-M-Y l', $startDay)."<br>";
        $startDay = strtotime('+1 week', $startDay);
    }

    // DateTime
    $date = new DateTime();
    echo $date->format('d-M-Y h:i:s a l')."<br>";
    $date = new DateTime('2020-12-25');
    echo $date->format('d-M-Y h:i:s a l')."<br>";
    $date = new DateTime('2020-12-25 10:30:45');
    echo $date->format('d-M-Y h:i:s a l')."<br>";

    $date1 = new DateTime("2020-12-25");
    $date2 = new DateTime("2024-9-10");
    $diff = $date1->diff($date2);
    echo $diff->format('%y years %m months %d days')."<br>";
?>