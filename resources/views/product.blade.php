@include('layout.header')

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>

<div class="panel panel-warning">
  <div class="panel-heading"style="background-color:#ee0979;color:white;">New Product</div>
  <div class="panel-body">
  <form action="/storeProduct" method="post">
<input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="exampleInputEmail1">Products Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="nameMsg" class="form-text ">please input here product name with code</small>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
  <label for="sel1">Category</label>
  <select class="form-control" id="" name="category">
    <option value="0">Select Category</option>
    @foreach($category as $row)
    <option value="{{ $row->id}}">{{ $row->name}}</option>
    @endforeach
  </select>
  <small id="nameMsg" class="form-text ">select the category what you need</small>
</div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
  <label for="sel1">Brand</label>
  <select class="form-control" id="brand" name="brand">
  <option value="0">Select Brand</option>
    @foreach($brand as $row)
    <option value="{{ $row->id}}">{{ $row->name}}</option>
    @endforeach
  </select>
  <small id="nameMsg" class="form-text ">select the brand what you need</small>
</div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="exampleInputEmail1">Unit</label>
    <input type="text" class="form-control" name="unit" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="unitMsg" class="form-text">please input here product unit</small>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="exampleInputEmail1">Purchase Price</label>
    <input type="number" class="form-control" name="purchase" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="purchaseMsg" class="form-text">please input purchase price of product</small>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="exampleInputEmail1">Sale Price</label>
    <input type="number" class="form-control required" name="sale" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="saleMsg" class="form-text">set the product sale price here</small>
    </div>
    </div>
</div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-default btn-block">Save</button>
</form>
  </div>
</div>
</div>
@include('layout.fotter')
