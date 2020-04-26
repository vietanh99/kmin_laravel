<?php use App\Phongban;
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
								
								<th>Mã phòng ban</th>
 <th>Tên phòng ban</th>
								
							</tr>
							</thead>
							<tbody>
							<?php foreach(Phongban::get() as $user){?> 	
							<tr class="">
								
								<td><?php echo $user->maPhongban; ?> </td>
								<td><?php echo $user->tenPhongban; ?> </td>
								
								<td>
							
								<a href="insertPhongban" class="btn btn-success btn-mini">Thêm</a>
  
									<a href="form.php" class="btn btn-success btn-mini">Edit</a>
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
								</td>
							</tr>
							<?php }?>
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

