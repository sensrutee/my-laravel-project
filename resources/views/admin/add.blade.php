@extends('admin.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/dashboard')}}" style="color:green;">Home</a></li>
              <li class="breadcrumb-item active">Add product</li>
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
        <!-- Small boxes (Stat box) -->
        
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          
          <!-- right col -->
        


        <form action="{{ url('/add') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1" >Product-title</label>
    <input type="text" class="form-control" name="ptitle"  placeholder="Enter product title">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >Product-slug</label>
    <input type="text" class="form-control" name="pslug" placeholder="Prouict-slug">
    
  </div><div class="form-group">
    <label for="exampleInputEmail1" >Product-price</label>
    <input type="text" class="form-control" name="pprice"  placeholder="Enter price">
    
  </div><div class="form-group">
    <label for="exampleInputEmail1" >Product-description</label>
    <textarea  class="form-control" name="pdes"  placeholder="Enterdescription"></textarea>
    
  </div><div class="form-group">
    <label for="exampleInputEmail1"  >Product_Image</label>
    <input type="file" class="form-control" name="pimage"  placeholder="Enter Image">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
         </form>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection