
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Add New Product</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Product Detail</h5>
					</div>
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
							
						@endforeach
						<form action="addNhanvien" method="get" class="form-horizontal" enctype="multipart/form-data">
							<div class="control-group">
								<label class="control-label">Name :</label>
								<div class="controls">
									<input type="text" class="span11" placeholder="Name" name="name" /> *
								</div>
							</div>
							
							<div class="control-group">
								
								<div class="control-group">
									<div class="control-group">
										<label class="control-label">Password :</label>
										<div class="controls">
											<input type="password" class="span11" placeholder="Password" name = "password" /> *
										</div>

                                    </div>
                                    <div class="control-group">
										<label class="control-label">Tuổi :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="Tuổi" name = "tuoi" /> *
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Level</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="Tuổi" name = "level" /> *
										</div>
									</div>
									
									
									<div class="control-group">
										<label class="control-label">Email :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="Email" name = "email" /> *
										</div>

                                    </div>
                                    <div class="control-group">
										<label class="control-label">Phòng ban :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="Phòng ban" name = "phongban" /> *
										</div>

                                    </div>
                                    <label class="control-label">Choose a Image :</label>
								
								<div class="control-group">
									<label class="control-label">Choose an image :</label>
									<div class="controls">
										<input type="file" name="fileUpload" >
									</div>
								</div>

									<div class="form-actions">
										<button type="submit" class="btn btn-success">Add</button>
									</div>
								</div>

						</form>
						
						<!-- END USER FORM -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



