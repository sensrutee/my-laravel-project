@extends('admin.master')
@section('content')


        







  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6"><a href="https://api.whatsapp.com/send/?phone=%2B917980750314&text&type=phone_number&app_absent=0" class="float" target="_blank">
        <i class="fab fa-whatsapp fa-2x" style="color: #25d366;"></i>
</a>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/dashboard')}}" style="color:green;">Home</a></li>
              <li class="breadcrumb-item active">DataTable</li>
              
              
            </ol>
            
          </div>
        </div>
        <div class="col-12 ">
                <a href="{{ url('/add')}}" ><button class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Add</button></a>
                
              </div>
      </div><!-- /.container-fluid -->
    </section>

   <div>
  





            <div class="card">
              <div class="card-header">
              @if(session('success'))
                <div class="alert alert-success">{{ session('success')}}</div>@endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Serial Number</th>
                    <th>Product_title</th>
                    <th>Product_slug</th>
                    <th>Product_price</th>
                    <th>Product_description</th>
                    <th>Product_image</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                 @foreach($product_data as $product)
                
                 
                        <tr>
                            <td>{{$loop->iteration }}</td>
                          <td>{{$product['product_title'] }}</td>
                          <td>{{$product['product_slug'] }}</td>
                          <td>{{$product['product_price'] }}</td>
                          <td>{{$product['product_description'] }}</td>
                          <td><img src="    {{  asset('/uploads/'.$product['product_image'])  }}" style="width: 50px; height: 50px;"></td>
                  
                                                 
                          
                          </div>

                    
                  
                    <td><div class="col-12 ">
                    <a href="/show/{{ $product['id']}}"><button class="btn btn-info btn-sm">View<i class="fa fa-eye"></i></button></a>
                    <a href="/edit/{{ $product['id'] }}"><button class="btn btn-primary btn-sm">Edit<i class="fa fa-edit"></i></button></a>
                    <a href="/delete/{{ $product['id'] }}"><button class="btn btn-danger btn-sm " >Delete <i class="fa fa-trash"></i></button></a>
              </div></td>
                   
                  </tr>
                  
                 @endforeach
                 <tr> <?php if($product_data ==false){?>
                     <td colspan="100%" style="text-align: center;">
                        <h5><?php echo "No records found!";?></h5>
                  </td>
                  <?php }?>
                  </tbody>
                  
                </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    
    <!-- Control sidebar content goes here -->
  </aside>
 








        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection