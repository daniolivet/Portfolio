<?php 

$codeResponse = 500;
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$description = $_POST['description'];

if(true){
    $codeResponse = 200;
}

$data = array('codeResponse' => $codeResponse, 'name' => $name, 'surname' => $surname, 'email' => $email, 'description' => $description);
return print(json_encode($data));

?>