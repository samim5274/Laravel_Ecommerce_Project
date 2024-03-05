<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<section id="account-section">
  <div class="">
    <div class="row">
        <div class="col text-center">
          @if(session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
          @endif
        </div>
    </div>
  </div>
</section>

<section id="login-section">
  <div class="container">
    <div class="row">
      <div class="col mt-4">
        <form action="/products" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="Product">Product name</label>
                <input type="text" name="name" class="form-control" id="Product"  placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" name="price" class="form-control" id="Price"  placeholder="Enter product Price">
            </div>
            <div class="form-group">
                <label for="Amount">Amount</label>
                <input type="text" name="amount" class="form-control" id="Amount"  placeholder="Enter product Amount">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="images[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>


<section id="product-section" class="mt-4">
  <div class="container">
    <div class="row">
      @foreach($returnProduct as $product)
        <div class="col">
          <img src="{{asset($product['image'])}}" height="200" width="150">
          <h4>{{$product['name']}}</h4>
          <div class="rating">
            <div class="fa fa-star"></div>
            <div class="fa fa-star"></div>
            <div class="fa fa-star"></div>
            <div class="fa fa-star"></div>
            <div class="fa fa-star"></div>
          </div>
          <p>{{$product['price']}}</p>
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