<?php


$message = '';


if(isset($_POST["email"])){
  
   $message += "email: " . $_POST["email"] + "\r\n";
}

if(isset($_POST["telephone"])){
  
   $message +=  "telephone: " . $_POST["telephone"] + "\r\n";
}

if(isset($_POST["telephone2"])){
  
   $message += "telephone2: " . $_POST["telephone2"] + "\r\n";
}

if(isset($_POST["family"])){
  
   $message += "family: " . $_POST["family"] + "\r\n";
}

if(isset($_POST["name"])){
  
   $message += "name: " . $_POST["name"] + "\r\n";
}

if(isset($_POST["surname"])){
  
   $message += "surname: " . $_POST["surname"] + "\r\n";
}

if(isset($_POST["dateBirthDay"])){
  
   $message += "dateBirthDay: " . $_POST["dateBirthDay"] + "\r\n";
}

if(isset($_POST["dateBirthMonth"])){
  
   $message += "dateBirthMonth: " . $_POST["dateBirthMonth"] + "\r\n";
}

if(isset($_POST["dateBirthYear"])){
  
   $message += "dateBirthYear: " . $_POST["dateBirthYear"] + "\r\n";
}

if(isset($_POST["sex"])){
  
   $message += "sex: " . $_POST["sex"] + "\r\n";
}

// Отправляем
mail('denkoropov@gmail.com', 'Test 1', $message);