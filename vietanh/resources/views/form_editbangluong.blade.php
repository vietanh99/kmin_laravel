<?php use App\Phongban; ?>
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Edit bảng lương</h1>
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
						<form action="geteditbangluong/{{$bangluong->id}}" method="get" class="form-horizontal" enctype="multipart/form-data">
							<div class="control-group">
								<label class="control-label">Email :</label>
								<div class="controls">
                                <input type="text" class="span11" placeholder="email" name="email" value="{{$bangluong['tennhanvien']}}" /> *
								</div>
							</div>
							
							<div class="control-group">
								
								<div class="control-group">
									<div class="control-group">
										<label class="control-label">Số công</label>
										<div class="controls">
                                        <input type="text" class="span11" placeholder="socong" name = "socong" value="{{$bangluong['socong']}}" /> *
										</div>

                                    </div>
                                    <div class="control-group">
										<label class="control-label">Lương theo ngày</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="luong" name = "luong" value="{{$bangluong['luongngay']}}" /> *
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



