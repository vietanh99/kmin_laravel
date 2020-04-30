<?php
use App\Nhanvien;
?>
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Nhân viên</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								
								<th>Name</th>
								<th>Tuổi</th>
								<th>Email</th>
								<th>Phòng ban</th>
								<th>Images</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								@foreach(Nhanvien::get() as $nhanvien)

							<tr class="">
								
								
								<th>{{$nhanvien->name}} </th>
								<th>{{$nhanvien->age}}  </th>
								<th>{{$nhanvien->email}}  </th>
								<th>{{$nhanvien->phongban}}  </th>
								<th> <img src="public/images/{{$nhanvien->images}} " width="50" height="50"> </th>
								<td>
									<a href="form_nhanvien" class="btn btn-success btn-mini">Thêm</a>

									<a href="formEdit/{{$nhanvien->id}}" class="btn btn-success btn-mini">Edit</a>
									<a href="deleteNhanvien/{{$nhanvien->id}}" class="btn btn-danger btn-mini">Delete</a>
								</td>
								@endforeach
							</tr>
						
						</tbody>
						</table>
						<ul class="pagination">
							
							
							
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
<!--Footer-part-->


@endsection