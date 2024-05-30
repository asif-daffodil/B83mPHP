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

    $studentNames = ["Abul", "Babul", "Kabul", "Rakib", "Sakib", "Mukib", "Nakib", "Dakib", "Bakib"];
    for($i = 0; $i < count($studentNames); $i++){
        $x;
        if($i == count($studentNames) - 1){
            $x = ".";
        } else if($i == count($studentNames) - 2){
            $x = " and ";
        } else {
            $x = ", ";
        }
        echo $studentNames[$i] . $x;
    }

    echo "<br>";

    foreach($studentNames as $i => $name){
        $x;
        if($i == count($studentNames) - 1){
            $x = ".";
        } else if($i == count($studentNames) - 2){
            $x = " and ";
        } else {
            $x = ", ";
        }
        echo $name . $x;
    }

    echo "<br>";

    $studentInfo = [
        "name" => "Protikkha",
        "age" => 23,
        "isStudent" => true,
        "cgpa" => 3.5,
        "subjects" => "CSE",
    ];

    foreach($studentInfo as $key => $value){
        echo ucfirst($key) . " : " . $value . "<br>";
    }

    echo "<br>";

    // multidimensional array
    $students = [
        ["Rakib", 23, true, 3.5],
        ["Sakib", 24, true, 3.4],
        ["Mukib", 43, true, 3.3],
        ["Nakib", 53, true, 3.2],
    ];

    for ($i=0; $i < count($students); $i++) { 
        for ($j=0; $j < count($students[$i]); $j++) { 
            echo $students[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<br>";

    $students = [
        ["name" => "Rakib", "age" => 23, "isStudent" => true, "cgpa" => 3.5],
        ["name" => "Sakib", "age" => 24, "isStudent" => true, "cgpa" => 3.4],
        ["name" => "Mukib", "age" => 43, "isStudent" => true, "cgpa" => 3.3],
        ["name" => "Nakib", "age" => 53, "isStudent" => true, "cgpa" => 3.2],
    ];

    foreach($students as $student){
        foreach($student as $key => $value){
            echo ucfirst($key) . " : " . $value . "<br>";
        }
        echo "<br>";
    }

?>