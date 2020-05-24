<?php 
use App\Phongban;
?>
@extends('layout.masterlayout')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>

	<h1>Danh sách nhân viên trong phòng ban </h1>n
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
								
								<th>Tên</th>
								<th>Tuổi</th>

								<th>Email</th>
																<th>Tên Phòng Ban</th>

                                <th>Hình Ảnh</th>

								
							</tr>
                            </thead>
                            

							<tbody>
							@foreach ($phongban as $item)
                                
							<tr>
								
							<td>{{$item['name']}} </td>
							<td>{{$item['age']}} </td>

							<td>{{$item['email']}} </td>
							<td>{{$item['phongban']}} </td>


                            <td> <img src="{{ URL::to('public/images/' .$item['images'])}} " width="80" height="80"> </td>


								
							</tr>
							<tr>
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

