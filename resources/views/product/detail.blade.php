@extends('layouts.app')

@section('content')
<div class="container mt-3">
 
    
    <div class="row justify-content-center">
      
      <div class="col-md-8">
      <div class="card">
       <div class="card-body shadow">
      
        
            
            
<table class="table table-success">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Phone Model</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Released Date</th>
      

    </tr>
  </thead>
  <tbody>
   
    <tr>
      <th scope="row">1</th>
      <td>{{$product->model}}</td>
      <td>{{$product->color}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->released_date}}</td>
      
    </tr>
 
  </tbody>
</table>
<a href="{{ route('product.index') }}" class="btn btn-lg btn-outline-dark">Back</a>
        </div>
        
    </div>
</div>
</div>
</div>
@endsection