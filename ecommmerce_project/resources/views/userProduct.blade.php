<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<section id="product-section" class="mt-4">
  <div class="container">
    <div class="row">
      @foreach($products as $product)
        <div class="col">
          <a href="{{ url('/products/'.$product->id) }}"><img src="{{asset(explode('|',$product->image)[0])}}" height="200" width="150"></a>
          <h4>{{$product['name']}}</h4>
          <p>{{$product['price']}}</p>
          <a href="{{ url('/addCart/'.$product->id) }}"><button type="submit" class="btnCart">Add cart</button></a>
          <a href="/cart"><button class="">Go to Cart</button></a>
        </div>
        @endforeach
    </div>
    <div class="pagination">
        {{$products->links('vendor.pagination.default')}}
    </div>
  </div>
</section>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>