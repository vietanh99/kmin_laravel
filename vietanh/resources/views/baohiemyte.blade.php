 <?php use App\Baohiem; ?>
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Bảo hiểm y tế</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<a href="addbh" class="btn btn-success btn-mini">Thêm</a>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
												<tr>

							<thead>
								
								<th>Đã mua</th>
								<th>Action</th>

								
							</tr>
							</thead>
							<tbody>
								@foreach (Baohiem::get() as $item)

							<tr>
								
							     <td>{{$item->email}}</td>
						
								
								<td>
									<a href="deletebaohiem/{{$item->id}}" class="btn btn-success btn-mini">Delete</a></td>
									@endforeach

								
							</tr>
							<tr>
								
								
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

