<?php
function validate($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}

function checkHobbies($datas)
{
    // validate
    $datas = array_map('validate', $datas);
    // check
    return $datas;
}

$genderList = ["Male", "Female"];
$hobbiesList = ["Reading", "Writing", "Coding"];
$allCountries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

if (isset($_POST['reg123']) && $_POST['reg123'] == 'Sign-up') {
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $age = validate($_POST['age']);
    $gender = isset($_POST['gender']) ? validate($_POST['gender']) : null;
    $hobbies = isset($_POST['hobbies']) ? checkHobbies($_POST['hobbies']) : null;
    $country = validate($_POST['country']);

    if (empty($name)) {
        $errName = "Name is required";
    } elseif (!preg_match('/^[A-Za-z. ]*$/', $name)) {
        $errName = "Only letters and white space allowed";
    } else {
        $correctName = $name;
    }

    if (empty($email)) {
        $errEmail = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "Invalid email format";
    } else {
        $correctEmail = $email;
    }

    if (empty($age)) {
        $errAge = "Age is required";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errAge = "Invalid age format";
    } else {
        $correctAge = $age;
    }

    if (empty($gender)) {
        $errGender = "Please select your gender";
    } elseif (!in_array($gender, $genderList)) {
        $errGender = "Har baap ka e baap hota hey!";
    } else {
        $correctGender = $gender;
    }

    if (empty($hobbies)) {
        $errHobbies = "Please select your hobbies";
    }else{
        foreach($hobbies as $hobby){
            if(!in_array($hobby, $hobbiesList)){
                $errHobbies = "Har baap ka e baap hota hey!";
                break;
            }
        }
        if(!isset($errHobbies)){
            $correctHobbies = $hobbies;
        }
    }
    if(empty($country)){
        $errCountry = "Please select your country";
    }elseif(!in_array($country, $allCountries)){
        $errCountry = "Har baap ka e baap hota hey!";
    }else{
        $correctCountry = $country;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row min-vh-100">
            <div class="col-md-5 m-auto border rounded shadow p-4">
                <h2 class="mb-3">Sign-up form</h2>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="mb-3">
                        <input type="text" placeholder="Your Name" name="name" class="form-control <?= isset($errName) ? 'is-invalid' : null ?>" value="<?= $correctName ?? null ?>">
                        <div class="invalid-feedback"><?= $errName ?? null ?></div>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Your Email" name="email" class="form-control <?= isset($errEmail) ? 'is-invalid' : null ?>" value="<?= $correctEmail ?? null ?>">
                        <div class="invalid-feedback"><?= $errEmail ?? null ?></div>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Your Age" name="age" class="form-control <?= isset($errAge) ? 'is-invalid' : null ?>" value="<?= $correctAge ?? null ?>">
                        <div class="invalid-feedback"><?= $errAge ?? null ?></div>
                    </div>
                    <div class="<?= isset($errGender) ? "border border-danger" : null ?> rounded py-1">
                        <div class="form-check form-check-inline">
                            <label for="">Gender :</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="male">
                                <input type="radio" class="form-check-input" name="gender" value="Male" id="male" <?= isset($correctGender) && $correctGender === "Male" ? "checked" : null ?> />Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="female">
                                <input type="radio" class="form-check-input" name="gender" value="Female" id="female" <?= isset($correctGender) && $correctGender === "Female" ? "checked" : null ?> />Female
                            </label>
                        </div>
                    </div>
                    <div class="mb-3 text-danger small">
                        <?= $errGender ?? null ?>
                    </div>
                    <div class="<?= isset($errHobbies) ? "border border-danger" : null ?> rounded py-1">
                        <div class="form-check form-check-inline">
                            <label for="">Hobbies :</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="reading">
                                <input type="checkbox" class="form-check-input" name="hobbies[]" value="Reading" id="reading" <?= isset($hobbies) && in_array("Reading", $hobbies) ? "checked":null ?> />Reading
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="writing">
                                <input type="checkbox" class="form-check-input" name="hobbies[]" value="Writing" id="writing" <?= isset($hobbies) && in_array("Writing", $hobbies) ? "checked":null ?> />Writing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label for="coding">
                                <input type="checkbox" class="form-check-input" name="hobbies[]" value="Coding" id="coding" <?= isset($hobbies) && in_array("Coding", $hobbies) ? "checked":null ?> />Coding
                            </label>
                        </div>
                    </div>
                    <div class="mb-3 text-danger small">
                        <?= $errHobbies ?? null ?>
                    </div>
                    <div class="mb-3">
                        <select name="country" class="form-select <?= isset($errCountry) ? "is-invalid":null ?>">
                            <option value="">Select Country</option>
                            <?php foreach ($allCountries as $cy){ ?>
                            <option value="<?= $cy ?>" <?= isset($country) && $country == $cy ? "selected":null ?>><?= $cy ?></option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= $errCountry ?? null ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="reg123" value="Sign-up" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>