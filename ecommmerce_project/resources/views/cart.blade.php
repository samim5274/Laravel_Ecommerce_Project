<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product cart</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="messages">
    @if(asset(session()->has('success')))
    <p>{{ session()->get('success') }}</p>
    @endif
    @if(asset(session()->has('error')))
    <p>{{ session()->get('error') }}</p>
    @endif
</div>
    
<div class="w3-container">
    <div class="row">
    <table class="w3-table-all">
        <thead>
            <tr class="">
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
        </thead>
        
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <tr>
                <td>{{ $details['id'] }}</td>
                <td><img src="{{$details['image']}}" alt="" height="50px" width="50px"></td>
                <td>{{ $details['name'] }}</td>
                <td>{{ $details['price'] }}</td>
                <td>{{ $details['amount'] }}</td>
                <td>{{ $details['amount'] * $details['price'] }}</td>
                <td>
                    <a class="w3-button w3-deep-orange" href="{{url('/buyNow/'.$id)}}">Buy Now</a>
                    <a class="w3-button w3-black" href="{{ url('/remove/cart/'.$id) }}">Remove</a>
                </td>                
            </tr>
            
            @endforeach
        @endif
    </table>
    </div>
</div>



</body>
</html>