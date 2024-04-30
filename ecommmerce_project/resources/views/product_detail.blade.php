<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<section id="product-detail-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{asset($images[0])}}" alt="" width="100%">
            </div>
            <div class="small-img-row">
                @if(isset($images[0]))
                    <div class="small-img-col">
                        <img src="{{asset($images[0])}}" alt="" width="100%" class="small-img">
                    </div>
                @endif
                @if(isset($images[1]))
                    <div class="small-img-col">
                        <img src="{{asset($images[1])}}" alt="" width="100%" class="small-img">
                    </div>
                @endif
                @if(isset($images[2]))
                    <div class="small-img-col">
                        <img src="{{asset($images[2])}}" alt="" width="100%" class="small-img">
                    </div>
                @endif
                @if(isset($images[3]))
                    <div class="small-img-col">
                        <img src="{{asset($images[3])}}" alt="" width="100%" class="small-img">
                    </div>
                @endif
                @if(isset($images[4]))
                    <div class="small-img-col">
                        <img src="{{asset($images[4])}}" alt="" width="100%" class="small-img">
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                <p>{{$product->catagory->category_name}}</p>
                <h2>{{$product->name}}</h2>
                <h4>Price: {{$product->price}}/-</h4>
                <h5>Detail: {{$product->detail}}</h5>
                <!-- <h6>Size:{{$product->size}}</h6> -->
            </div>
        </div>
    </div>
</section>


<br><hr><br>


<section id="related-products-section">
    <div class="container">
        <div class="row">
            <h4>Related Product </h4>
            <a href="/products"><p>View More</p></a>
            @foreach($related_products as $rel_products)
            <div class="col-md-4">
                <a href="{{ url('/products/'.$rel_products->id) }}"><img src="{{asset(explode('|',$rel_products->image)[0])}}" alt=""></a>
                <h2>{{$rel_products->name}}</h2>
                <h4>Price: {{$rel_products->price}}/-</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>




    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>