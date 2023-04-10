<?php
session_start();
$fileName = "employees.xml";
$fileContent = file_get_contents($fileName);
$xml = simplexml_load_string($fileContent);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['add'])){
        $employee = $xml->addChild('employee');
        $employee->addChild('id', uniqid());
        $employee->addChild('name', $_POST['name']);
        $employee->addChild('email', $_POST['email']);
        $employee->addChild('phone', $_POST['phone']);
        $employee->addChild('address', $_POST['address']);
        $xml->asXML($fileName);
        @$_SESSION['message'] = 'Member added successfully';
        header('location: index.php');
    }
}

$index = isset($_SESSION["myIndex"]) ? @$_SESSION["myIndex"] : 0;
$elements = $xml->xpath("/employees/employee");
$elementsLength = count($elements);

if (isset($_POST["action"])) {
    switch ($_POST["action"]) {
        case "next":
            if ($index < $elementsLength - 1) {
                $index += 1;
            }
            break;
        case "prev":
            if ($index > 0) {
                $index -= 1;
            }
            break;
        case "update":
            $id = $_POST['id'];
            foreach ($elements as $employee) {
                if ($employee->id == $id) {
                    $employee->name = $_POST['name'];
                    $employee->phone = $_POST['phone'];
                    $employee->address = $_POST['address'];
                    $employee->email = $_POST['email'];
                    break;
                }
            }
            $xml->asXML($fileName);
            break;
    }
    @$_SESSION["myIndex"] = $index;
}

if ($elementsLength > 0 && $index < $elementsLength) {
    $employee = $elements[$index];
    $id = (string)$employee->id;
    $name = (string)$employee->name;
    $email = (string)$employee->email;
    $phone = (string)$employee->phone;
    $address = (string)$employee->address;
} else {
    $id = "";
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
}

require_once("views/view.php");

