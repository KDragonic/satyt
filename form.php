<?php
class SendMail
{
   private $email;
   private $topic;
   private $data;
   private $errors = [];

   public function __construct($email, $topic, $data)
   {
      $this->email = $email;
      $this->topic = $topic;
      $this->data = $data;

      if($this->validate($this->data)) $this->send($email, $topic, $data);
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
            "message" => "Заполните обезательные поля",
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

   public function send($email, $topic, $message)
   {
      $response = [
         "message" => "Запрос выполнен удачно!",
      ];

      echo json_encode($response);

      die();
   }
}
$send = new SendMail($_POST['email'], 'Ваши данные', $_POST);