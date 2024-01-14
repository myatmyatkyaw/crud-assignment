@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <form method="POST" action="{{route('product.update',$product->id)}}">
       
        @csrf
        @method('PUT')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="align-items-center m-4">
                <div class="col-auto">
                    <label for="inputname" class="col-form-label">Phone Model <small class="text-danger">*</small></label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputname" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}">
                    @error('model')
                        <div class="text-danger">*{{$message}}</div>
                    @enderror
                </div>

                <div class="col-auto">
                    <label for="inputcolor" class="col-form-label">Color <small class="text-danger">*</small></label>
                </div>
                <div class="col-auto">
                    <input type="text" id="inputcolor" class="form-control @error('color') is-invalid @enderror" name="color" value="{{old('color')}}">
                    @error('color')
                        <div class="text-danger">*{{$message}}</div>
                    @enderror
                </div>
                
                <div class="col-auto">
                    <label for="inputprice" class="col-form-label">Price <small class="text-danger">*</small></label>
                </div>
                <div class="col-auto">
                    <input type="number" id="inputprice" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
                    @error('price')
                        <div class="text-danger">*{{$message}}</div>
                    @enderror
                </div>

                <div class="col-auto">
                    <label for="inputdate" class="col-form-label">Released Date <small class="text-danger">*</small></label>
                </div>
                <div class="col-auto">
                    <input type="number" id="inputdate" class="form-control @error('released_date') is-invalid @enderror" name="released_date" value="{{old('released_date')}}">
                    @error('released_date')
                        <div class="text-danger">*{{$message}}</div>
                    @enderror
                </div>
                <div class="col-sm mt-3">
                <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
                <button type="submit" class="btn btn-outline-dark">Update</button>
                </div>
                </div>
               
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
