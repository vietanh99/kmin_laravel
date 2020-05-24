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
		@isset($er)
		{{$er}}
	@endisset
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
								@if (Auth::check())
									@if( Auth::user()->level == 1)
								<th>Action</th>
								@endif
								@endif
							</tr>
							</thead>
							<tbody>
								@foreach(Nhanvien::Paginate(5) as $nhanvien)

							<tr >
								
								
								<th>{{$nhanvien->name}} </th>
								<th>{{$nhanvien->age}}  </th>
								<th>{{$nhanvien->email}}  </th>
								<th>{{$nhanvien->phongban}}  </th>
								<th> <img src={{URL::to('public/images/' . $nhanvien->images)}}  width="80" height="80"> </th>
								<td>
									
									@if (Auth::check())
									@if( Auth::user()->level == 1)
									<a href="formEdit/{{$nhanvien->id}}" class="btn btn-success btn-mini">Edit</a>
								    <a><button class="btn btn-danger delete-link" value="{{$nhanvien->id}}">Delete</a>

									@endif
									
									@endif
									
								</td>
								@endforeach

                                @if (Auth::check())
									@if( Auth::user()->level == 1)
								<a  href="form_nhanvien" class="btn btn-success btn-mini">Thêm</a>
								
								@endif
									
								@endif
							</tr>

						</tbody>
						</table>
						 
						<ul class="pagination">
							
							
							
						</ul>
					

					</div>
					<div class="container">
							
						<ul class="pagination">
						  {!!Nhanvien::Paginate(1)->links()!!}
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
