@extends('layouts.master')
@section('title')
	{{$pageTitle}}
@endsection
@section('mainContent')
	<div class="right_col" role="main">
		<div class="">
			<div class="page-title">
				<div class="title_left">
					<h3>Edit Teacher</h3>
				</div>

			
			</div>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Teacher</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								
								
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
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
							<br />
							<form class="form-horizontal form-label-left" action="{{ route('teachers.update',$teacher->id) }}"  method="POST">
								@csrf
								@method('PUT')
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="text" id="name" class="form-control " name="name" value="{{ $teacher->name }}">
									</div>
								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email
									</label>
									<div class="col-md-6 col-sm-6 ">
										<input type="email" id="email" name="email" class="form-control" value="{{ $teacher->email }}">
									</div>
								</div>
								<div class="item form-group">
									<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Phone No</label>
									<div class="col-md-6 col-sm-6 ">
										<input id="phone_no" class="form-control" type="text" name="phone_no" value="{{ $teacher->phone_no }}">
									</div>
								</div>
								
								<div class="form-group row">
			                       <label class="col-form-label col-md-3 col-sm-3 label-align">Classes</label>
			                       <div class="col-md-9 col-sm-9 ">
			                          <select class="form-control" name="class_id">
			                             <option>Choose option</option>
			                             <option value="1" {{ $teacher->class_id === 1 ? "selected" : "" }}>One</option>
			                             <option value="2" {{ $teacher->class_id === 2 ? "selected" : "" }}>Two</option>
			                             <option value="3" {{ $teacher->class_id === 3 ? "selected" : "" }}>Three</option>
			                             <option value="4" {{ $teacher->class_id === 4 ? "selected" : "" }}>Four</option>
			                          </select>
			                       </div>
			                    </div>
								<div class="ln_solid"></div>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 offset-md-3">
										<a href="{{ route('teachers.index') }}" class="btn btn-primary" type="button">Cancel</a>
										<button type='reset' class="btn btn-danger">Reset</button>
										<button type='submit' class="btn btn-success">Submit</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>

			

		</div>
	</div
@endsection