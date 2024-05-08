<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit User info </title> 
    <link rel="stylesheet" href="/css/signup-style.css">
   </head>
<body>

  <div class="wrapper">
    <h2>Edit Employee Information</h2>
    @if(session()->has('success'))
    <p>
    {{ session()->get('success') }}
    </p>
    @elseif(session()->has('error'))
    <p>
    {{ session->get('error') }}
    </p>    
    @endif
    <form method="POST" action="{{ url('/update-data/'.$employes->id) }}" enctype="multipart/form-data">
        @csrf
      <div class="input-box">
        <input type="text" value="{{ $employes->fname }}" name="txtFirstname" placeholder="First name" required>
      </div>
      <div class="input-box">
        <input type="text" value="{{ $employes->lname }}" name="txtLastname" placeholder="Last name" required>
      </div>
      <div class="input-box">
        <input type="number" value="{{ $employes->phone }}" name="txtPhone" placeholder="Phone" required>
      </div>
      <div class="input-box">
        <input type="date" value="{{ $employes->dob }}" name="dtpDate" required>
      </div>
      <div class="text">
        <h3  style="color:red">You can not change your username</h3>
      </div>
      <div class="input-box">
        <input type="text" value="{{ $employes->username }}" name="txtUsername" placeholder="Username" disabled required>
      </div>
      <div class="input-box">
        <input type="password" value="{{ $employes->password }}" name="txtPassword" placeholder="Password" required>
      </div>
      <div class="input-box">
        <input type="file" name="images[]" required multiple>        
      </div>
      <div class="input-box">
      @if(isset($images[0]))
      <img src="{{asset(explode('|', $employes->image)[0])}}" alt="hi" width="70px" height="70px">
      @endif
      @if(isset($images[1]))
      <img src="{{asset(explode('|', $employes->image)[1])}}" alt="hi" width="70px" height="70px">
      @endif
      @if(isset($images[2]))
      <img src="{{asset(explode('|', $employes->image)[2])}}" alt="hi" width="70px" height="70px">
      @endif
      @if(isset($images[3]))
      <img src="{{asset(explode('|', $employes->image)[3])}}" alt="hi" width="70px" height="70px">
      @endif
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Update">
      </div>
    </form>
  </div>
</body>
</html>