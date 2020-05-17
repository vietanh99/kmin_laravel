<?php 
use App\bangluong;
?>
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Bảng lương</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
												<tr>

							<thead>
								
								<th>Tên nhân viên</th>
 <th>Số công</th>
 <th>Lương theo ngày</th>

 <th>Tổng lương</th>
								
							</tr>
							</thead>
							<tbody>
								@foreach (bangluong::get() as $bangluong)

							<tr class="">
									
								
								<td>{{$bangluong->tennhanvien}} </td>
								<td>{{$bangluong->socong}} </td>
								<td>{{$bangluong->luongngay}} </td>
								<td>{{$bangluong->luongtong}} </td>


								
								<td>
							
									@if (Auth::check())
									@if( Auth::user()->level == 1)
								<a href="form_bangluong" class="btn btn-success btn-mini">Thêm</a>
  
									 
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
									@endif
									
									@endif
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
@endsection

