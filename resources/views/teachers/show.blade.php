@extends('layouts.master')
@section('title')
	{{$pageTitle}}
@endsection

@section('mainContent')
	<div class="right_col" role="main">
	   <div class="">
	      <div class="page-title">
	         <div class="title_left">
	            <h3>Create Teachers</h3>
	         </div>
	      </div>
	      <div class="clearfix"></div>
	      <div class="row">
	         <div class="col-md-12 ">
	            <div class="x_panel">
	               <div class="x_content">
	                     <div class="form-group row ">
	                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
	                        <div class="col-md-9 col-sm-9 ">
	                           <p>{{ $teacher->name }}</p>
	                        </div>
	                     </div>
	                     <div class="form-group row ">
	                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
	                        <div class="col-md-9 col-sm-9 ">
	                           <p>{{ $teacher->email }}</p>
	                        </div>
	                     </div>
	                     <div class="form-group row ">
	                        <label class="control-label col-md-3 col-sm-3 ">Phone no</label>
	                        <div class="col-md-9 col-sm-9 ">
	                           <p>{{ $teacher->phone_no }}</p>
	                        </div>
	                     </div>
	                     <div class="form-group row">
	                        <label class="control-label col-md-3 col-sm-3 ">Class</label>
	                        <div class="col-md-9 col-sm-9 ">
	                           <p>{{ $teacher->title }}</p>
	                        </div>
	                     </div>
	                     <div class="ln_solid"></div>
	                        <a href="{{ route('teachers.index') }}" class="btn btn-primary" type="button">Back</a>
	               </div>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>
@endsection
