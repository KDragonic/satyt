<?php
class SendMail
{
   private $data;

   public function __construct($email, $data)
   {
      $this->email = $email;
      $this->data = $data;

      if($this->validate($this->data)) $this->send($email, $data);
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

   public function send($email, $date)
   {
      $response = [
         "email" => $email,
         "message" => "Запрос выполнен удачно!",
         "date" => $date,
      ];

      echo json_encode($response);

      exit();
   }
}
new SendMail($_POST['email'], 'Ваши данные', $_POST);