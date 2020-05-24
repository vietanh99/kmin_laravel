<?php use App\Phongban;
 ?>
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Phòng ban</h1>
	</div>
	<div class="container-fluid">
		@if (Auth::check())
		@if( Auth::user()->level == 1)
	<a href="form" class="btn btn-success btn-mini">Thêm</a>
	@endif
									
								@endif

		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
												<tr>

							<thead>
								
 <th>Tên phòng ban</th>
								
							</tr>
							
							</thead>
							<tbody>
							@foreach(Phongban::get() as $user)
							<tr class="">
								
							<td><a href="phongbanid/{{ $user->id }}">{{ $user->tenphongban }}</a></td>
							
								
								<td>
								
									@if (Auth::check())
									@if( Auth::user()->level == 1)
						
									<a href="phongban/deletePhongban/{{$user->phongban_id }}" class="btn btn-danger btn-mini">Delete</a>
									@endif
																
									@endif
								</td>
								
							</tr>
							@endforeach
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

