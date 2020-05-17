<?php use App\Bangcong;
?>	
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Bảng Công</h1>
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
														<tr>
															
															<th>Name</th>
															<th>Số công</th>
															
														</tr>
														</thead>
														<tbody>
															@foreach(bangcong::get() as $bangcong)
							
														<tr class="">
															
															
															<th>{{$bangcong->name}} </th>
															<th>{{$bangcong->bangcong}}  </th>
															
															<td>
							                                
									@if (Auth::check())
									@if( Auth::user()->level == 1)
																<a href="editBangcong/{{$bangcong->id}}" class="btn btn-success btn-mini">Edit</a>
																<a href="deletebangcong/{{$bangcong->id}}" class="btn btn-danger btn-mini">Delete</a>
															</td>
															@endif
															
									@endif
															@endforeach
															@if (Auth::check())
									@if( Auth::user()->level == 1)
															<a href="form_bangcong" class="btn btn-success btn-mini">Thêm</a>
															@endif
															
															@endif
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

