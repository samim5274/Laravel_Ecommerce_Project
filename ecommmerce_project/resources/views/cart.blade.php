<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product cart</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
<div class="w3-container">
    <div class="row">
    <table class="w3-table-all">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <tr>
                <td>{{ $details['id'] }}</td>
                <td><img src="{{asset(explode('|', $details->image)[0])}}" alt="" height="50px" width="50px"></td>
                <td>{{ $details['name'] }}</td>
                <td>{{ $details['price'] }}</td>
                <td>{{ $details['amount'] }}</td>
                <td></td>
                <td></td>
            </tr>
            
            @endforeach
        @endif
    </table>
    </div>
</div>

</body>
</html>