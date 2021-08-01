@extends('layouts.master')

@section('title')
	Classes
@endsection
@section('mainContent')
	<div class="right_col" role="main">
	              <div class="">
	                 <div class="page-title">
	                    <div class="title_left">
	                       <h3>Classes</h3>
	                    </div>
	                    <div class="title_right">
	                       <div class="col-md-4 col-sm-4   form-group pull-right top_search">
	                          <a class="btn btn-success" href="/classes/create"> Create New Class</a>
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
	                             </ul>
	                          </div>
	                          <div class="x_content">
	                             <table class="table table-striped">
	                                <thead>
	                                   <tr>
	                                	@php
	                                		$count = 1;
	                                	@endphp
	                                      <th>#</th>
	                                      <th>Title</th>
	                                      <th>status</th>
	                                      <th>Action</th>
	                                   </tr>
	                                </thead>
	                                <tbody>
	                                	@foreach($classes as$class)
	                                   <tr>
	                                      <th scope="row">1</th>
	                                      <td>{{$class->title}}</td>
	                                      <td>
	                                      	@if ($class->status == "active")
	                                      	<div class="fa-hover"><i class="fa fa-thumbs-up"></i> Active</div>
	                                      	@else
	                                      	<div class="fa-hover"><i class="fa fa-thumbs-down"></i> Deactive</div>
	                                      	@endif
	                                      </td>
	                                      <td>
	                                          
	                                      
	                                              <a class="btn btn-info" href="/classes/{{$class->id}}">Show</a>
	                                      
	                                              <a class="btn btn-primary" href="{{-- {{ route('teachers.edit',$teacher->id) }} --}}">Edit</a>
	                                      
	                                              @csrf
	                                              @method('DELETE')
	                                      
	                                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure you want to delete?')">Delete</button>
	                                      </td>
	                                   </tr>
	                                   @php
	                                		$count = $count+1;
	                                	@endphp
	                                  @endforeach
	                                </tbody>
	                             </table>
	                          </div>
	                       </div>
	                    </div>
	                   
	                 </div>
	              </div>
	           </div>
@endsection