@extends('layout.masterlayout')
@section('content')

<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Add Phòng Ban</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						<form action="phongban/addPhongban" method="get" class="form-horizontal" enctype="multipart/form-data">
							<div class="control-group">
								
							</div>
							<div class="control-group">
								<label class="control-label">Mã phòng ban :</label>
								<div class="controls">
									<select name="maPhongban">
										<option >001</option>
										<option >002</option>
										<option >003</option>
										<option >004</option>

									</select> *
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Tên phòng ban :</label>
								<div class="controls">
									<select name="tenPhongban">
										<option >Nhân viên</option>
										<option >Giám đốc</option>
										

									</select> *
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

<!-- END CONTENT -->

@endsection
