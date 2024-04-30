<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bs4/css/bootstrap.css">
    <link rel="stylesheet" href="/bs4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bs4/style.css">
    <title>create new user</title>
</head>
<body>
    
    
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="/images/dark-logo.svg" width="180" alt="Loading...">
                </a>

                <p class="text-center">Social Campaigns</p>
                @if(session()->has('error'))
                  <p class="text-center alert alert-danger">{{ session()->get('error') }}</p>
                @elseif(session()->has('success'))
                <p class="text-center alert alert-success">{{ session()->get('success') }}</p>
                @endif

                <form method="POST" action="/employee" enctype="multipart/from-data">
                    @csrf
                    <div class="mb-4">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name" id="firstName">
                    </div>
                    <div class="mb-4">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" placeholder="Last Name" id="lastName">
                    </div>
                    <div class="mb-4">
                        <label for="date" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="date">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-4">
                        <label for="images" class="form-label">Select your image</label>
                        <input type="file" name="images[]" class="form-control" id="images" multiple>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">create new user</button>
                    
                </form>

                <form method="GET" action="/employee" >
                    <h3>User login</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password" id="exampleInputPassword1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="/bs4/js/bootstrap.js"></script>
    <script src="/bs4/js/bootstrap.min.js"></script>
</body>
</html>