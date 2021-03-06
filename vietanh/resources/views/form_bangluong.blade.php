
@extends('layout.masterlayout')
@section('content')
<?php
use App\Nhanvien;
?>

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
						<form action="addbangluong" method="get" class="form-horizontal" enctype="multipart/form-data">
							<div class="control-group">
								<label class="control-label">Chọn nhân viên </label>
								<div class="controls">
							<select name="mail">

                        @foreach (Nhanvien::get() as $item)
						<option value="{{$item->email}}" selected="mail">{{$item->email}}</option>
						@endforeach

					</select>
				</div>
				</div>			

							
						
							<div class="control-group">
								
								<div class="control-group">
                                    <div class="control-group">
										<label class="control-label">Số công :</label>
										<div class="controls">
										<input type="text" class="span11" placeholder="Số công" name = "socong" value="" /> *
										</div>

                                    </div>
									<div class="control-group">
										<label class="control-label">Lương theo ngày :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="Lương" name = "luong" value="" /> *
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

<!-- END CONTENT -->

@endsection