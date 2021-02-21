<?php

$ok = true;

if (empty($_POST["firstName"])) {
    $firstNameErr = "First Name is required";
} else {
    $firstName = test_input($_POST["name"]);
    if (!preg_match("/^[a-zа-я-' ]*$/iu", $firstName)) {
        $firstNameErr = "Only letters and white space allowed";
        $ok = false;
    }
}

if (empty($_POST["lastName"])) {
    $lastNameErr = "Last Name is required";
} else {
    $lastName = test_input($_POST["lastName"]);
    if (!preg_match("/^[a-zа-я-' ]*$/iu", $lastName)) {
        $lastNameErr = "Only letters and white space allowed";
        $ok = false;
    }
}

if (empty($_POST["birth"])) {
    $birthErr = "Date of Birth is required";
} else {
    $birth = test_input($_POST["birth"]);
    if (!preg_match("/^[0-9A-Z_]{5,}@[0-9A-Z]{2,}\.[A-Z]{2,6}$/iu", $birth)) {
        $birthErr = "Invalid email format";
        $ok = false;
    }
}

if (empty($_POST["salary"])) {
    $salaryErr = "Salary is required";
} else {
    $salary = test_input($_POST["phone"]);
    $salary = preg_replace("/[^0-9\.]/", "", $salary);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($ok){

}



//if ($ok) {
//    $row = "\n<----->\n" . $firstName . "\n" . $lastName . "\n" . $birth .
//        "\n" . $phone .
//        "\n" . date("d.m.Y") . "\n" . date("H:i");
//    file_put_contents("contact.txt", $row, FILE_APPEND);
//}
