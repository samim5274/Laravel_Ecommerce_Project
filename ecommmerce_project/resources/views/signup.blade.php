<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signup </title> 
    <link rel="stylesheet" href="/css/signup-style.css">
   </head>
<body>

  <div class="wrapper">
    <h2>Registration</h2>
    @if(session()->has('success'))
    <p>
    {{ session()->get('success') }}
    </p>
    @elseif(session()->has('error'))
    <p>
    {{ session->get('error') }}
    </p>    
    @endif
    <form method="POST" action="/employee" enctype="multipart/form-data">
        @csrf
      <div class="input-box">
        <input type="text" name="txtFirstname" placeholder="First name" required>
      </div>
      <div class="input-box">
        <input type="text" name="txtLastname" placeholder="Last name" required>
      </div>
      <div class="input-box">
        <input type="number" name="txtPhone" placeholder="Phone" required>
      </div>
      <div class="input-box">
        <input type="date" name="dtpDate" required>
      </div>
      <div class="input-box">
        <input type="text" name="txtUsername" placeholder="Username" required>
      </div>
      <div class="input-box">
        <input type="password" name="txtPassword" placeholder="Password" required>
      </div>
      <div class="input-box">
        <input type="file" name="images[]" required multiple>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="btnReg" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="/">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>