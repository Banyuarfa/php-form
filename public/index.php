
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP FORM VALIDATION</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper">
    <form action="<?php echo htmlspecialchars("/class/FormValidator.php"); ?>" method="post">
      <h1>Form Validate</h1>
      <fieldset>
        <div class="form-validate-group" role="group">
          <div class="label-group">
            <label for="fullname">Fullname</label>
            <i title="Your real name. 3-16 character"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <input type="text" name="fullname" id="fullname" placeholder="e.g., Bob" required>
          <span id="fullname-error" role="alert"></span>
        </div>
        <div class="form-validate-group" role="group">
          <div class="label-group">
            <label for="username">Username</label>
            <i title="Can include number (0-9), dot (.), underscore (_), and hyphen (-). {3-16 character}"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <input type="text" name="username" id="username" placeholder="e.g., Bob_123" required>
          <span id="username-error" role="alert"></span>
        </div>
        <div class="form-validate-group" role="group">
          <div class="label-group">
            <label for="email">Email</label>
            <i title="Your active email"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <input type="email" name="email" id="email" placeholder="e.g., xxx@gmail.com" required>
          <span id="email-error" role="alert"></span>

        </div>
        <div class="form-validate-group" role="group">
          <div class="label-group">
            <label for="phone-number">Phone Number</label>
            <i title="Your phone number"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <input type="tel" name="phone-number" id="phone-number" placeholder="e.g., +xx xxxx-xxxx-xxxx" required>
          <span id="phone-number-error" role="alert"></span>
        </div>
        <div class="form-validate-group" role="group">
          <div class="label-group">
            <label for="age">Age</label>
            <i title="Your age"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <input type="number" name="age" id="age" placeholder="e.g., 21" required>
          <span id="age-error" role="alert"></span>
        </div>

        <div class="form-validate-group" role="group">
          <div class="label-group">
            <label>Gender</label>
            <i title="Male or Female? Choose one."><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <div class="gender-group">
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
          </div>
        </div>
        <div class="form-validate-group" role="group">
          <div class="label-group">
            <label for="home-address">Home Address</label>
            <i title="Your home address. {3-100 character}"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <textarea name="home-address" id="home-address" cols="30" rows="3" placeholder="Home Address"></textarea>
          <span id="home-address-error" role="alert"></span>
        </div>
        <div class="form-validate-group" role="group">
          <div class="label-group"><label for="password">Password</label>
            <i title="Password must have an uppercase letter, a lowercase letter, a number, a special character (@$!%*?&_-) and minimum 8 character"><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24">
                <path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z" />
                <path d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z" />
                <rect x="11" y="17" width="2" height="2" rx="1" />
              </svg></i>
          </div>
          <input type="password" name="password" id="password" placeholder="e.g., Bob_1234" required>
          <span id="password-error" role="alert"></span>
          <button type="button" id="password-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512">
              <path d="M23.271,9.419C21.72,6.893,18.192,2.655,12,2.655S2.28,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162C2.28,17.107,5.808,21.345,12,21.345s9.72-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419Zm-1.705,4.115C20.234,15.7,17.219,19.345,12,19.345S3.766,15.7,2.434,13.534a2.918,2.918,0,0,1,0-3.068C3.766,8.3,6.781,4.655,12,4.655s8.234,3.641,9.566,5.811A2.918,2.918,0,0,1,21.566,13.534Z" />
              <path d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z" />
            </svg></button>
        </div>
      </fieldset>
      <div class="form-validate-group" role="group">
        <input type="checkbox" name="terms-agree" id="terms-agree" required>
        <label for="terms-agree">You must agree to the terms and conditions.</label>
      </div>
      <button type="submit" id="submit">Submit</button>
      <span id="submit-error" role="alert"></span>
      <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone-number"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $home_address = $_POST["home-address"];
        $password = $_POST["password"];
        echo "<section class='output'>
              <h1>Output</h1>
                <p>Fullname: $fullname</p>
                <p>Username: $username</p>
                <p>Email: $email</p>
                <p>Phone Number: $phone_number</p>
                <p>Age: $age</p>
                <p>Gender: $gender</p>
                <p>Home Address: $home_address</p>
                <p>Password: $password</p>
            </section>";
      } ?>

    </form>
    <div class="bubble"></div>
  </div>
  <script src="script.js"></script>
</body>

</html>