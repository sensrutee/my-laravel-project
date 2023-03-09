@extends('admin.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}" style="color:green;" >Home</a></li>
              <li class="breadcrumb-item active">EDIT product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
                <div class="alert alert-success">{{ session('success')}}</div>@endif

        <!-- Small boxes (Stat box) -->
        
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          
          <!-- right col -->
        


        <form action="{{ url('/edit') }}" method="post" enctype="multipart/form-data">

        @csrf
        <input type="hidden" value="{{ $product['id'] }}" name="pid"> 
        <div class="form-group">
    <label for="exampleInputEmail1" >Product-title</label>
    <input type="text" class="form-control" name="ptitle" value="{{$product['product_title'] }}"  placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Product-slug</label>
    <input type="text" class="form-control" name="pslug" value="{{ $product['product_slug']}}" placeholder="Prouict-slug">
    
  </div><div class="form-group">
    <label for="exampleInputEmail1" >Product-price</label>
    <input type="text" class="form-control" name="pprice"  value="{{ $product['product_price']}}" placeholder="Enter price">
    
  </div><div class="form-group">
    <label for="exampleInputEmail1" >Product-description</label>
    <textarea  class="form-control" name="pdes"  placeholder="Enterdescription">{{ $product['product_description']}}</textarea>
    
  </div><div class="form-group">
    <label for="exampleInputEmail1"  >Product_Image</label>
    <img src="    {{  asset('/uploads/'.$product['product_image'])  }}" style="padding:10px; width: 150px; height: 100px;">
    <input type="file" class="form-control" value="{{ $product['product_price']}}" name="pimage"   placeholder="Enter Image">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
         </form>
         

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
</div>
@endsection