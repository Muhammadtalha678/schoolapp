@extends('layouts.master')

@section('title')
	Create Teacher
@endsection

@section('mainContent')
	<div class="right_col" role="main">
	   <div class="">
	      <div class="page-title">
	         <div class="title_left">
	            <h3>Add New Class</h3>
	         </div>
	         <div class="title_right">
	            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
	               <a href="/classes" class="btn btn-primary">Back</a>
	            </div>
	         </div>
	      </div>
	      <div class="clearfix"></div>
	      <div class="row">
	         <div class="col-md-12  ">
	            <div class="x_panel">
	               
	               <div class="x_content">
	                  <br />
	                  <form class="form-horizontal form-label-left" action="/classes/store" method="POST">
	                     @csrf
	                     <div class="form-group row ">
	                        <label class="control-label col-md-3 col-sm-3 ">Title*</label>
	                        <div class="col-md-9 col-sm-9 ">
	                           <input type="text" class="form-control" placeholder="Title" name="title">
	                        </div>
	                     </div>
	                     <div class="form-group row">
	                        <label class="control-label col-md-3 col-sm-3 ">Status</label>
	                        <div class="col-md-9 col-sm-9 ">
	                           <select class="form-control" name="status">
	                              <option>Choose option</option>
	                              <option value="Active">Active</option>
	                              <option value="Deactive">Deactive</option>
	                           </select>
	                        </div>
	                     </div>
	                     <div class="ln_solid"></div>
	                     <div class="form-group">
	                        <div class="col-md-9 col-sm-9  offset-md-3">
	                        	<a href="/classes" class="btn btn-primary"> Cancel</a>
	                           <button type="reset" class="btn btn-primary">Reset</button>
	                           <button type="submit" class="btn btn-success">Submit</button>
	                        </div>
	                     </div>
	                  </form>
	               </div>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>
@endsection