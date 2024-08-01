<?php  

    // Associative array
    $arr = [
        'name' => 'Abir',
        'age' => 25,
        'city' => 'Dhaka',
        'country' => 'Bangladesh'
    ];

    echo json_encode($arr)."<br>";

    // json
    $json = '{"name":"Abir","age":25,"city":"Dhaka","country":"Bangladesh"}';
    $arr = json_decode($json, true);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

?>