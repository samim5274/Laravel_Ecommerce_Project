<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/profile-style.css">
</head>
<body>

@foreach($allUsers as $user)
<div class="card-container">
	<span class="pro">PRO</span>
	<img class="round" src="{{asset($user['image'])}}" alt="user" height="100" width="100"/>
	<h3>{{$user['fname']}} {{$user['lname']}}</h3>
	<h6>{{$user['dob']}}</h6>
	<h6>{{$user['phone']}}</h6>
	<p>Username use for login {{$user['username']}} and password use for login {{$user['password']}}</p>
	<div class="buttons">
		<a href="/allUser"><button class="primary">
			Add User
		</button></a>
		<button class="primary ghost">
			More User
		</button>
	</div>
	<div class="skills">
		<h6>Skills</h6>
		<ul>
			<li>UI / UX</li>
			<li>Front End Development</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
			<li>React</li>
			<li>Node</li>
		</ul>
	</div>
</div>
@endforeach

</body>
</html>