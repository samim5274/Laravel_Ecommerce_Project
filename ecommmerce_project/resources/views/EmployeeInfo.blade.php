<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmployeeInfo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@if(session()->has('error'))
    <p class="text-center alert alert-danger">{{ session()->get('error') }}</p>
@elseif(session()->has('success'))
<p class="text-center alert alert-success">{{ session()->get('success') }}</p>
@endif
<div class="container pt-4">
    <form method="POST" action="/employee" enctype="multipart/from-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">First name</label>
            <input type="text" name="fname" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Last name</label>
            <input type="text" name="lname" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Date of birth</label>
            <input type="date" name="dob" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Phone</label>
            <input type="Phone" name="phone" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Images</label>
            <input type="file" name="images[]" class="form-control" id="" multiple>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email address</label>
            <input type="text" name="uname" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>