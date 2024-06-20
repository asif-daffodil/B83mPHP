<?php  
    //  Find maximum number from an array
    $arr = [5, 81, 34, 96, 15, 62, 74, 23, 42];

    $max = $arr[0];
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    echo "Maximum number is: ".$max."<br>";

    echo max($arr)."<br>";

    // Find 2nd max number from an array
    $arr = [5, 81, 34, 96, 15, 62, 74, 23, 42];
    $max = $arr[0];
    $secondMax = $arr[0];
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] > $max){
            $secondMax = $max;
            $max = $arr[$i];
        }else if($arr[$i] > $secondMax && $arr[$i] < $max){
            $secondMax = $arr[$i];
        }
    }

    echo "Second Maximum number is: ".$secondMax."<br>";

    // Sort array from min to max
    $arr = [5, 81, 34, 96, 15, 62, 74, 23, 42];
    sort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // Calculate average number of an array
    $arr = [5, 81, 34, 96, 15, 62, 74, 23, 42];
    $sum = 0;
    for($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    $average = $sum / count($arr);
    echo "Average number is: ".$average."<br>";

    //  Merging 2 different types of array together
    $arr1 = [5, 81, 34, 96, 15, 62, 74, 23, 42];
    $arr2 = ["Dhaka", "Barishal", "Bogura", "Noyakhali", "Chatogram", "Bogura"];
    $merged_arr = array_merge($arr1, $arr2);
    echo "<pre>";
    print_r($merged_arr);
    echo "</pre>";

    // Search data from an array
    $arr = ["Dhaka", "Barishal", "Bogura", "Noyakhali", "Chatogram", "Bogura"];
    $search = "Bogura";
    $found = false;
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == $search){
            $found = true;
            break;
        }
    }
    if($found){
        echo "Data found";
    }else{
        echo "Data not found";
    }

    echo "<br>";

    // Show array data in lowercase and uppercase
    $arr = ["Dhaka", "Barishal", "Bogura", "Noyakhali", "Chatogram", "Bogura"];
    for($i = 0; $i < count($arr); $i++){
        echo strtoupper($arr[$i])."<br>";
    }

    echo "<br>";

    for($i = 0; $i < count($arr); $i++){
        echo strtolower($arr[$i])."<br>";
    }

    // Get unique values
    $arr = ["Dhaka", "Barishal", "Bogura", "Noyakhali", "Chattogram", "Bogura", "Dhaka", "Barishal"];
    $unique = [];
    for($i = 0; $i < count($arr); $i++){
        if(!in_array($arr[$i], $unique)){
            array_push($unique, $arr[$i]);
        }
    }

    echo "<pre>";
    print_r($unique);
    echo "</pre>";
    
    // Check if email address is unique
    $emails = ["abdul@gmail.com", "kuddus@gmail.com", "kurban@gmail.com", "bablu@gmail.com"];
    $email = "kuddus@gmail.com";

    if(in_array($email, $emails)){
        echo "Email already exists";
    }else{
        echo "Email is unique";
    }

    // Merge 2 comma separated lists with unique value only
    $list1 = "Dhaka, Bogura, Noyakhali, Chattogram, Bogura, Dhaka, Barishal, Jhinaidah";
    $list2 = "Dhaka, Barishal, Bogura, Noyakhali, Chattogram, Bogura, Dhaka, Barishal, Kustia";
    $arr1 = explode(", ", $list1);
    $arr2 = explode(", ", $list2);
    $merged_arr = array_merge($arr1, $arr2);
    $unique = [];
    for($i = 0; $i < count($merged_arr); $i++){
        if(!in_array($merged_arr[$i], $unique)){
            array_push($unique, $merged_arr[$i]);
        }
    }

    echo "<pre>";
    print_r($unique);
    echo "</pre>";

    $text = "Ami vaat Khai";
    $arr = explode(" ", $text);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    // Difference between 2 multi-dimensional arrays
    $arr1 = [
        ["name" => "Rakib", "age" => 23, "isStudent" => true, "cgpa" => 3.5],
        ["name" => "Sakib", "age" => 24, "isStudent" => true, "cgpa" => 3.6],
        ["name" => "Mukib", "age" => 25, "isStudent" => true, "cgpa" => 3.7],
    ];

    $arr2 = [
        ["name" => "Rakib", "age" => 23, "isStudent" => true, "cgpa" => 3.5],
        ["name" => "Sakib", "age" => 24, "isStudent" => true, "cgpa" => 3.6],
        ["name" => "Mukib", "age" => 25, "isStudent" => true, "cgpa" => 3.7],
        ["name" => "Nakib", "age" => 26, "isStudent" => true, "cgpa" => 3.8],
    ];

    $diff = [];
    for($i = 0; $i < count($arr2); $i++){
        if(!in_array($arr2[$i], $arr1)){
            array_push($diff, $arr2[$i]);
        }
    }

    echo "<pre>";
    print_r($diff);
    echo "</pre>";

    // Check if all values are string or not
    $arr = ["Dhaka", "Barishal", "Bogura", "Noyakhali", "Chattogram", "Bogura"];
    $allString = true;
    for($i = 0; $i < count($arr); $i++){
        if(!is_string($arr[$i])){
            $allString = false;
            break;
        }
    }

    if($allString){
        echo "All values are string";
    }else{
        echo "All values are not string";
    }

    echo "<br>";

    // Filter out array data with some specific keys
    $arr = [
        ["name" => "Rakib", "age" => 23, "isStudent" => true, "cgpa" => 3.5],
        ["name" => "Sakib", "age" => 24, "isStudent" => true, "cgpa" => 3.6],
        ["name" => "Mukib", "age" => 25, "isStudent" => true, "cgpa" => 3.7],
    ];

    $filtered = [];
    for($i = 0; $i < count($arr); $i++){
        $filtered[$i]["name"] = $arr[$i]["name"];
        $filtered[$i]["age"] = $arr[$i]["age"];
    }
    echo "<pre>";
    print_r($filtered);
    echo "</pre>";

    // Combine 2 array and use one array data as keys and others as values
    $arr1 = ["name", "age", "isStudent", "cgpa"];
    $arr2 = ["Rakib", 23, true, 3.5];
    $combined = [];
    for($i = 0; $i < count($arr1); $i++){
        $combined[$arr1[$i]] = $arr2[$i];
    }
    $combined["city"] = "Dhaka";
    echo "<pre>";
    print_r($combined);
    echo "</pre>";

?>