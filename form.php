<?php
class SendMail
{
   private $data;

   public function __construct($data)
   {
      $this->data = $data;

      if($this->validate($this->data)) $this->send($data);
      else $response = [
         "message" => "Невернные данные",
         "fields" => []
      ];

      echo json_encode($response);
   }

   public function validate($validate)
   {
      $requires = ['email', 'phone', 'surname', 'name'];

      foreach($validate as $key)
      {
         if(empty($validate[$key]) && in_array($key, $requires))
            $errors[] = $key;
      }

      if(!empty($errors))
      {
         $response = [
            "message" => "Заполните обезательные поля, они отмечены *",
            "errors" => $errors
         ];

         echo json_encode($response);

         exit();
      }

      $validatePhone = preg_match("/^[8?\+7][0-9]{10}$/", str_replace(['+','-','(',')',' '], '', $validate['phone']));
      if(!filter_var($validate['email'], FILTER_VALIDATE_EMAIL) || !$validatePhone)
      {
         return false;
      }
      return true;
   }

   public function send($date)
   {
      $response = [
         "email" => $_POST['email'],
         "message" => "Запрос выполнен удачно!",
         "date" => $date,
      ];

      echo json_encode($response);

      exit();
   }
}
$send = new SendMail($_POST);