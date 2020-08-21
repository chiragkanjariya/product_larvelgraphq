@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product Form</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    @if($product && $product->id)
        <input type="hidden" name="update_product" value="{{$product->id}}">
    @endif


     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input value="{{ $product->product_name }}" type="text" name="product_name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input value="{{ $product->quantity }}" type="number" name="quantity" class="form-control" placeholder="Quantity" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>category:</strong>

                <select selected="{{ $product->category }}" class="form-control" name="category" >
                    <option {{ ($product->category == 'Category 1') ? 'selected': ''}} value="Category 1">Category 1</option>
                    <option {{ ($product->category == 'Category 2') ? 'selected': ''}} value="Category 2">Category 2</option>
                    <option {{ ($product->category == 'Category 3') ? 'selected': ''}} value="Category 3">Category 3</option>
                    <option {{ ($product->category == 'Category 4') ? 'selected': ''}} value="Category 4">Category 4</option>
                    <option {{ ($product->category == 'Category 5') ? 'selected': ''}} value="Category 5">Category 5</option>
                    <option {{ ($product->category == 'Category 6') ? 'selected': ''}} value="Category 6">Category 6</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>category:</strong>
                <select class="form-control" name="sub_category" >
                    <option {{ ($product->sub_category == 'Sub Category 1') ? 'selected': ''}} value="Sub Category 1">Sub Category 1</option>
                    <option {{ ($product->sub_category == 'Sub Category 2') ? 'selected': ''}} value="Sub Category 2">Sub Category 2</option>
                    <option {{ ($product->sub_category == 'Sub Category 3') ? 'selected': ''}} value="Sub Category 3">Sub Category 3</option>
                    <option {{ ($product->sub_category == 'Sub Category 4') ? 'selected': ''}} value="Sub Category 4">Sub Category 4</option>
                    <option {{ ($product->sub_category == 'Sub Category 5') ? 'selected': ''}} value="Sub Category 5">Sub Category 5</option>
                    <option {{ ($product->sub_category == 'Sub Category 6') ? 'selected': ''}} value="Sub Category 6">Sub Category 6</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection