<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class productController extends Controller
{
    function index(){
        $product_data =Product::all()->toArray();
        
        return view('admin.allproduct',compact('product_data'));
    }
    function delete($id){
        
        $product=Product::find($id);
        $product->delete();
        $product_data =Product::all()->toArray();
        
       // return view('admin.allproduct',compact('product_data'))->with('status','Profile deleted!');
 
       return redirect()->back()->with('product_data',$product_data)->with('success','Product has been successfully deleted!');
         }
    function store(Request $request){
       $product=new Product();
       $request->validate([
        'ptitle' => 'required',
        'pslug' => 'required',
        'pprice' => 'required',
        'pdes' => 'required',
        'pimage' => 'required|image|mimes:jpeg,png,jpg,gif',
        
       ],[
        'ptitle.required'=>'Product title is required**',
        'pslug.required'=>'Product Slug is required**',
        'pprice.required'=>'Product Price is required**',
        'pdes.required'=>'Product Description is required**',
        'pimage.required'=>'Product Image is required**',

       ]
    );
       $product->product_title=$request->ptitle;
       $product->product_slug=$request->pslug;
       $product->product_price=$request->pprice;
       $product->product_description=$request->pdes;
       
       $imageName ='';
       if($request->pimage)
       {
         $image=$request->file('');
         $imageName=time() .'.'. $request->pimage->extension();
         $request->pimage->move(public_path('uploads'),$imageName);
       }


       $product->product_image=$imageName;
       $product->save();
       
       return view('admin.add');
     }//
     function edit($id){

        $product=Product::find($id)->toArray();
        return view('admin.edit-product',compact('product'));
        
     }

     function show($id){

      $product=Product::find($id)->toArray();
      return view('admin.show',compact('product'));
      
   }


     function update(Request $request){

      
        $product=Product::find($request->pid);

        $request->validate([
          'ptitle' => 'required',
          'pslug' => 'required',
          'pprice' => 'required',
          'pdes' => 'required',
          'pimage' => 'required|image|mimes:jpeg,png,jpg,gif',
          
         ],[
          'ptitle.required'=>'Product title is required**',
          'pslug.required'=>'Product Slug is required**',
          'pprice.required'=>'Product Price is required**',
          'pdes.required'=>'Product Description is required**',
          'pimage.required'=>'Product Image is required**',
  
         ]
      );
        $product->product_title=$request->ptitle;
       $product->product_slug=$request->pslug;
       $product->product_price=$request->pprice;
       $product->product_description=$request->pdes;

      

       $imageName ='';
       if($request->pimage)
       {
         $image=$request->file('');
         $imageName=time() .'.'. $request->pimage->extension();
         $request->pimage->move(public_path('uploads'),$imageName);
       }


       $product->product_image=$imageName;
       
       $product->save();


       
       return redirect()->back()->with('success','Product has been successfully updated!');
     }
}
