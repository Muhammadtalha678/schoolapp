@extends('layouts.master')
@section('title')
  Teachers
@endsection
@section('mainContent')
   {{--  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!} --}}
      <div class="right_col" role="main">
         <div class="">
            <div class="page-title">
               <div class="title_left">
                  <h3>Teachers </h3>
               </div>
               <div class="title_right">
                  <div class="col-md-4 col-sm-4   form-group pull-right top_search">
                     <div class="input-group">
                        <span class="input-group-btn">
                        	<a class="btn btn-success" href="{{ route('teachers.create') }}"> Create New Teacher</a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="row" style="display: block;">
               
               <div class="col-md-12 col-sm-12  ">
                  <div class="x_panel">
                     <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                           </li>
                           
                           {{--  --}}
                        </ul>
                        <div class="clearfix"></div>
                     </div>
                     <div class="x_content">

                     	@if ($message = Session::get('success'))
                     	    <div class="alert alert-success">
                     	        <p>{{ $message }}</p>
                     	    </div>
                     	@endif
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone no</th>
                                 <th>Class</th>
                              </tr>
                           </thead>
                           <tbody>
                           	@foreach($teachers as $teacher)
                              <tr>
                                 <th scope="row">{{ ++$i }}</th>
                                 <td>{{$teacher->name}}</td>
                                 <td>{{$teacher->email}}</td>
                                 <td>{{$teacher->phone_no}}</td>
                                 <td>{{$teacher->class_id}}</td>
                                 <td>
                                     <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
                                 
                                         <a class="btn btn-info" href="{{ route('teachers.show',$teacher->id) }}">Show</a>
                                 
                                         <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
                                 
                                         @csrf
                                         @method('DELETE')
                                 
                                         <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure you want to delete?')">Delete</button>
                                     </form>
                                 </td>
                              </tr>
                             @endforeach
                           </tbody>
                        </table>
                        {{-- {!! $teachers->links() !!} --}}
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
@endsection