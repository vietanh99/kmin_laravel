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
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
												<tr>

							<thead>
								
								<th>Mã phòng ban</th>
 <th>Tên phòng ban</th>
								
							</tr>
							
							</thead>
							<tbody>
							@foreach(Phongban::get() as $user)
							<tr class="">
								
								<td>{{$user->maPhongban }}  </td>
								<td>{{ $user->tenPhongban }} </td>
							
								
								<td>
							
								<a href="form" class="btn btn-success btn-mini">Thêm</a>
  
									<a href="phongban/getedit/{{$user->phongban_id }}" class="btn btn-success btn-mini">Edit</a>
									<a href="phongban/deletePhongban/{{$user->phongban_id }}" class="btn btn-danger btn-mini">Delete</a>
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

