<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/alluser.css">
</head>
<body>

<section id="allUserSection">
    <div class="container">
        <div class="row">
            @foreach($usersAll as $alluser)
            <div class="col-md-4">
                <div class="card item-start">
                    <a href="{{url('/employee/'.$alluser->id)}}"><img src="{{asset(explode('|', $alluser->image)[0])}}" alt="John" style="width:100%; height:200px"></a>
                <h1>{{$alluser['fname']}}</h1>
                <p class="title">CEO & Founder, Example</p>
                <p>{{$alluser['dob']}}</p>
                <p>{{$alluser['Phone']}}</p>
                <p><button>Profile</button></p>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{$usersAll->links('vendor.pagination.default')}}
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>