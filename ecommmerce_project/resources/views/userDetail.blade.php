<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="/css/userDetail.css">
</head>
<body>
    <!-- @if(isset($images[0]))
    <img src="{{asset($images[0])}}" alt="user" height="200" width="250">
    @endif
    @if(isset($images[1]))
    <img src="{{asset($images[1])}}" alt="user" height="200" width="250">
    @endif
    @if(isset($images[2]))
    <img src="{{asset($images[2])}}" alt="user" height="200" width="250">
    @endif
    @if(isset($images[3]))
    <img src="{{asset($images[3])}}" alt="user" height="200" width="250">
    @endif
    @if(isset($images[4]))
    <img src="{{asset($images[4])}}" alt="user" height="200" width="250">
    @endif
    <h2>{{$employee->fname}}</h2>
    <h3>{{$employee->dob}}</h3>
    <h4>{{$employee->Phone}}</h4>
    <p>{{$employee->username}}</p> -->
    

    <section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
				</div>
				@if(isset($images[0]))
                <img class="img-main" src="{{asset($images[0])}}" alt="user">
                @endif  
			</div>
			<div class="photo-album">
				<ul>
					<li>
                        @if(isset($images[1]))
                        <img src="{{asset($images[1])}}" alt="user">
                        @endif
                    </li>
                    <li>
                        @if(isset($images[2]))
                        <img src="{{asset($images[2])}}" alt="user">
                        @endif
                    </li>
                    <li>
                        @if(isset($images[3]))
                        <img src="{{asset($images[3])}}" alt="user">
                        @endif
                    </li>
                    <li>
                        @if(isset($images[4]))
                        <img src="{{asset($images[4])}}" alt="user">
                        @endif
                    </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1>Delicious Apples</h1>
			<span>COD: 45999</span>
		</div>
		<div class="price">
			R$ <span>7.93</span>
		</div>
		<div class="variant">
			<h3>SELECT A COLOR</h3>
			<ul>
                <li>
                    @if(isset($images[1]))
                    <img src="{{asset($images[1])}}" alt="user">
                    @endif
                </li>
                <li>
                    @if(isset($images[2]))
                    <img src="{{asset($images[2])}}" alt="user">
                    @endif
                </li>
                <li>
                    @if(isset($images[3]))
                    <img src="{{asset($images[3])}}" alt="user">
                    @endif
                </li>
                <li>
                    @if(isset($images[4]))
                    <img src="{{asset($images[4])}}" alt="user">
                    @endif
                </li>
            </ul>
		</div>
		<div class="description">
			<h3>BENEFITS</h3>
			<ul>
				<li>Apples are nutricious</li>
				<li>Apples may be good for weight loss</li>
				<li>Apples may be good for bone health</li>
				<li>They're linked to a lowest risk of diabetes</li>
			</ul>
		</div>
		<button class="buy--btn">ADD TO CART</button>
	</div>
</section>

<footer>
	<p>Design from <a href="https://dribbble.com/shots/5216438-Daily-UI-012">dribbble shot</a> of <a href="https://dribbble.com/rodrigorramos">Rodrigo Ramos</a></p>
</footer>

</body>
</html>