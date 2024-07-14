<?php
// header("Content-Type: application/json");
class FormValidator
{
  private $datas = [];
  public $errors = [];

  public function __construct($onsubmit_datas, $oninput_datas)
  {
    $this->datas["onsubmit"] = $onsubmit_datas;
    $this->datas["oninput"] = $oninput_datas;
  }
  public function validate()
  {
    // $this->errors["fullname"] = $this->validateFullname();
    // $this->errors["username"] = $this->validateUsername();
    // $this->errors["email"] = $this->validateEmail();
    // $this->errors["phone-number"] = $this->validatePhoneNumber();
    // $this->errors["home-address"] = $this->validateHomeAddress();
    // $this->errors["password"] = $this->validatePassword();
    // $this->errors["age"] = $this->validateAge();
    return $this->datas["oninput"];
  }

  private function validateFullname()
  {
    $pattern = "/^[A-Za-zÀ-ÖØ-öø-ÿ]+(?: [A-Za-zÀ-ÖØ-öø-ÿ]+){3,16}$/";
    $not_empty_and_invalid_onsubmit = !empty($this->datas["onsubmit"]["fullname"]) && !preg_match($pattern, $this->datas["onsubmit"]["fullname"]);
    $not_empty_and_invalid_oninput = !empty($this->datas["oninput"]["fullname"]) && !preg_match($pattern, $this->datas["oninput"]["fullname"]);
    if ($not_empty_and_invalid_onsubmit || $not_empty_and_invalid_oninput)
      return "Fullname invalid";
  }
  private function validateUsername()
  {
    $pattern = "/^[a-zA-Z0-9._-]{3,16}$/";
    $not_empty_and_invalid_onsubmit = !empty($this->datas["onsubmit"]["username"]) && !preg_match($pattern, $this->datas["onsubmit"]["username"]);
    $not_empty_and_invalid_oninput = !empty($this->datas["oninput"]["username"]) && !preg_match($pattern, $this->datas["oninput"]["username"]);
    if ($not_empty_and_invalid_onsubmit || $not_empty_and_invalid_oninput)
      return "Username invalid";
  }
  private function validateEmail()
  {
    $not_empty_and_invalid_onsubmit = !empty($this->datas["onsubmit"]["email"]) && !filter_var($this->datas["onsubmit"]["email"], FILTER_VALIDATE_EMAIL);
    $not_empty_and_invalid_oninput = !empty($this->datas["oninput"]["email"]) && !filter_var($this->datas["oninput"]["email"], FILTER_VALIDATE_EMAIL);
    if ($not_empty_and_invalid_onsubmit || $not_empty_and_invalid_oninput)
      return "Email invalid";
  }
  private function validatePhoneNumber()
  {
    $pattern = "/^\+?(\d{1,3})?[-.\s]?(\d{1,4})[-.\s]?(\d{1,4})[-.\s]?(\d{1,9})$/";
    $not_empty_and_invalid_onsubmit = !empty($this->datas["onsubmit"]["phone-number"]) && !preg_match($pattern, $this->datas["onsubmit"]["phone-number"]);
    $not_empty_and_invalid_oninput = !empty($this->datas["oninput"]["phone-number"]) && !preg_match($pattern, $this->datas["oninput"]["phone-number"]);
    if ($not_empty_and_invalid_onsubmit || $not_empty_and_invalid_oninput)
      return "Phone number invalid";
  }
  private function validateHomeAddress()
  {
    $pattern = "/^[a-zA-Z0-9\s,.'-]{3,100}$/";
    $not_empty_and_invalid_onsubmit = !empty($this->datas["onsubmit"]["home-address"]) && !preg_match($pattern, $this->datas["onsubmit"]["home-address"]);
    $not_empty_and_invalid_oninput = !empty($this->datas["oninput"]["home-address"]) && !preg_match($pattern, $this->datas["oninput"]["home-address"]);
    if ($not_empty_and_invalid_onsubmit || $not_empty_and_invalid_oninput)
      return "Home address invalid";
  }
  private function validatePassword()
  {
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$%*?&_-])(?!.*[!@])[A-Za-z\d@$!%*?&_-]{8,}$/";
    $not_empty_and_invalid_onsubmit = !empty($this->datas["onsubmit"]["password"]) && !preg_match($pattern, $this->datas["onsubmit"]["password"]);
    $not_empty_and_invalid_oninput = !empty($this->datas["oninput"]["password"]) && !preg_match($pattern, $this->datas["oninput"]["password"]);
    if ($not_empty_and_invalid_onsubmit || $not_empty_and_invalid_oninput)
      return "Password invalid";
  }
  private function validateAge()
  {
    $pattern = "/^(?:1[01][0-9]|120|1?[0-9]{1,2})$/";
    $not_empty_and_invalid_onsubmit = !empty($this->datas["onsubmit"]["age"]) && !preg_match($pattern, $this->datas["onsubmit"]["age"]);
    $not_empty_and_invalid_oninput = !empty($this->datas["oninput"]["age"]) && !preg_match($pattern, $this->datas["oninput"]["age"]);
    if ($not_empty_and_invalid_onsubmit || $not_empty_and_invalid_oninput)
      return "Age invalid";
  }
}
if ($_SERVER["REQUEST_METHOD"]  === "POST") {
  try {
    $onsubmit_datas = $_POST;
    $oninput_datas = json_decode(file_get_contents("php://input"), true);
    $validator = new FormValidator($onsubmit_datas, $oninput_datas);
    print_r($validator->validate());
    // echo json_encode($validator->errors);

  } catch (Exception $e) {
    echo $e;
  }
  
}