 @extends('admin.master')
@section('content')
<style type="text/css">
    .param {
    margin-bottom: 7px;
    line-height: 1.4;
}
.param-inline dt {
    display: inline-block;
}
.param dt {
    margin: 0;
    margin-right: 7px;
    font-weight: 600;
}
.param-inline dd {
    vertical-align: baseline;
    display: inline-block;
}

.param dd {
    margin: 0;
    vertical-align: baseline;
} 

.shopping-cart-wrap .price {
    color: #007bff;
    font-size: 18px;
    font-weight: bold;
    margin-right: 5px;
    display: block;
}
var {
    font-style: normal;
}

.media img {
    margin-right: 1rem;
}
.img-sm {
    width: 90px;
    max-height: 75px;
    object-fit: cover;
}

</style>
<div class="right_col" role="main">
	<div class="container">
 <h3 style="text-align: center;">Products</h3>
    
    <a class="btn btn-success" href="{{route('product.create')}}"> Create New Product</a>
     
<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col">Product</th>
  <th scope="col" width="200" >Category</th>
  <th scope="col" width="200" >Description</th>
  <th scope="col" width="200" >Quantity</th>
  <th scope="col" width="200" >Price</th>
  <th scope="col" width="200" class="text-right">Action</th>
</tr>
</thead>
<tbody>
    @foreach($products as $product)

<tr>
    <td>
<figure class="media">
    <div class="img-wrap"><img src="{{asset($product->cover_image)}} " class="img-thumbnail img-sm"></div>
    <figcaption class="media-body">
        <h6 class="title text-truncate">{{$product->title}} </h6>
        
        
    </figcaption>
</figure> 
    </td>
    <td> 
      {{$product->categoryName}} 
    </td>
    <td> 
      {{$product->description}} 
    </td>

     <td> 
      {{$product->quentity}} 
    </td>
    <td> 
        <div class="price-wrap"> 
            <var class="price">{{$product->price}}</var> 
            <small class="text-muted">(BD Taka each)</small> 
        </div> <!-- price-wrap .// -->
    </td>
    <td class="text-right"> 
     
    <a href="" class="btn btn-primary">Edit</a>
    <a href="" class="btn btn-danger"> × Remove</a>
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
        @endsection