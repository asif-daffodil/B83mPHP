<?php  
    // array()
    $arr = array('Dhaka', 'Barishal', 'Bogura');

    // is_array()
    var_dump(is_array($arr));
    echo "<br>";
    if(is_array($arr)){
        foreach($arr as $city){
            echo $city . "<br>";
        }
    }else{
        echo "We dont have any data";
    }

    // in_array()
    var_dump(in_array('Khulna', $arr));

    // array_merge()
    $arr1 = array('Dhaka', 'Noyakhali', 'Chatogram', "Bogura");

    $merged_arr = array_merge($arr, $arr1);
    echo "<pre>";
    print_r($merged_arr);
    echo "</pre>";

    // array_keys()
    $studentInfo = ["name" => "Rakib", "age" => 23, "isStudent" => true, "cgpa" => 3.5];
    $keys = array_keys($studentInfo);
    echo "<pre>";
    print_r($keys);
    echo "</pre>";

    // array_key_exists()
    var_dump(array_key_exists('city', $studentInfo));

    // array_shift()
    array_shift($merged_arr);
    echo "<pre>";
    print_r($merged_arr);
    echo "</pre>";

    // array_unshift()
    array_unshift($merged_arr, 'Kuyakata', 'Coxs Bazar');
    echo "<pre>";
    print_r($merged_arr);
    echo "</pre>";

    // array_push()
    array_push($merged_arr, 'Kuyakata', 'Coxs Bazar');
    echo "<pre>";
    print_r($merged_arr);
    echo "</pre>";

    // array_pop()
    array_pop($merged_arr);
    echo "<pre>";
    print_r($merged_arr);
    echo "</pre>";

    // array_values()
    $values = array_values($studentInfo);
    echo "<pre>";
    print_r($values);
    echo "</pre>";

    // array_map()
    function showCity($city){
        if(strlen($city) <= 6){
            return $city;
        }
    }
    $cityList = array_map('showCity', $merged_arr);
    echo "<pre>";
    print_r($cityList);
    echo "</pre>";

    // array_unique()
    $uniqueCities = array_unique($merged_arr);
    echo "<pre>";
    print_r($uniqueCities);
    echo "</pre>";

    // array_slice()
    $slicedCities = array_slice($uniqueCities, 2, 3);
    echo "<pre>";
    print_r($slicedCities);
    echo "</pre>";

    // array_diff()
    $diff = array_diff($arr1, $arr);
    echo "<pre>";
    print_r($diff);
    echo "</pre>";

    // array_search()
    var_dump(array_search('Brammonbaria', $arr1));

    // array_reverse()
    $reversedCities = array_reverse($uniqueCities);
    echo "<pre>";
    print_r($reversedCities);
    echo "</pre>";

