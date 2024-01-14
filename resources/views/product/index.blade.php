@extends('layouts.app')

@section('content')
<div class="container mt-3">
 
    
    <div class="row justify-content-center">
      
      <div class="col-md-8">
      <div class="card">
       <div class="card-body shadow">
       <div class="mb-3">
        <a href="{{route('product.create')}}" class="btn btn-outline-success"><i class="fas fa-plus"></i></a>
      </div>
        
            
            
<table class="table table-success">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Phone Model</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Released Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$loop->index + 1}}</th>
      <td>{{$product->model}}</td>
      <td>{{$product->color}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->released_date}}</td>
      <td >
                            
          <a href="{{ route('product.edit',$product->id) }}" class="btn btn-outline-dark" >
              <i class="fas fa-pencil-alt"> </i>  
          </a>

          <a href="{{ route('product.show',$product->id) }}" class="btn btn-outline-dark" >
                                      <i class="fas fa-info"> </i>  
                                    </a>               
                        
          <form action="{{ route('product.destroy',$product->id) }}" method="post" class="d-inline-block">
            @method('delete')
            @csrf
                             
          <button class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></button>
                                  
                           
          </form>
    </tr>
   @endforeach
  </tbody>
</table>

        </div>
        
    </div>
</div>
</div>
</div>
@endsection
