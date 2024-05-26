<?php  
    // index array
    // $arr = array(1, 2, 3, 4, 5);
    $arr = ["Bangladesh", 2, true, 4, null, 6.55];
    echo $arr[0];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // associative array
    $arr = ["name" => "Rakib", "age" => 23, "isStudent" => true, "cgpa" => 3.5];
    echo $arr["name"];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // multidimensional array
    $arr = [
        "student-1" => ["name" => "Rakib", "age" => 23, "isStudent" => true, "cgpa" => 3.5],
        "student-2" =>["name" => "Sakib", "age" => 24, "isStudent" => true, "cgpa" => 3.4],
        "student-3" =>["name" => "Mukib", "age" => 43, "isStudent" => true, "cgpa" => 3.3],
        "student-4" =>["name" => "Nakib", "age" => 53, "isStudent" => true, "cgpa" => 3.2],
    ];
    echo $arr["student-1"]["name"];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $studentNames = [
        ["Abul", "Babul", "Kabul"],
        ["Rakib", "Sakib", "Mukib"],
        ["Nakib", "Dakib", "Bakib"],
    ]; 
    echo "<pre>";
    print_r($studentNames);
    echo "</pre>";
?>