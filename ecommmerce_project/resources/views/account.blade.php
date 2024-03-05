<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<section id="login-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-4">
        <form action="/users" method="GET">
            @csrf
          <div class="container">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uname" required><br>

            <label for="pass"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="pass" required><br>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><br>
            <button type="submit">Login</button>            
          </div>
        </form> 
      </div>
      <div class="col-md-6 mt-4">
        <form action="/users" method="POST">
          @csrf
            <input type="text" name="uname" placeholder="Username"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="text" name="mobail" placeholder="Mobail"><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <button type="submit">Register</button>
        </form>
      </div>
    </div>
  </div>
</section>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>