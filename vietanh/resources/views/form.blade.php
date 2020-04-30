@extends('layout.masterlayout')
@section('content')

<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Add Phòng Ban</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						<form action="phongban/addPhongban" method="get" class="form-horizontal" enctype="multipart/form-data">
							<div class="control-group">
								
							</div>
							<div class="control-group">
								<label class="control-label">Mã phòng ban :</label>
								<div class="controls">
									<select name="maPhongban" id="gender" onchange="genderChanged(this)">
										<option value=""> </option>
										<option value="001">001</option>
										<option value="002">002</option>
										<option value="003">003</option>
										<option value="004">004</option>

									</select>
									<p style="color: red" id="show_id"></p>
									<script language="javascript">
										// Hàm xử lý khi thẻ select thay đổi giá trị được chọn
										// obj là tham số truyền vào và cũng chính là thẻ select
										function genderChanged(obj)
										{
											var message = document.getElementById('show_id');
											var value = obj.value;
											if (value === ''){
                                                 message.innerHTML = "Bạn chưa chọn giới tính";
                                                             }
                                            else if (value === '001'){
                                                 message.innerHTML = "Nhân viên";
                                                             }
                                            else if (value === '002'){
                                                 message.innerHTML = "Giám đốc";
                                                                     }
										}
							 
									</script>
									<script>

<meta name="csrf-token" content="{{ csrf_token() }}" />

/**
 * change book action
 */
// you need to give id attribute to book_id field.
$(document).on('change', '#show_id', function (e) {
	e.preventDefault();
	var book_id = $('#show_id').val();
	var route = "/ajax";
	$.ajax({
		type: 'POST',
		url: route,
		data: {
			show_id: show_id
		},
		success: function (data) {
			   // you can check for status here 
			   $("input[name=type_id]").val(data.book_type_id);

		},
		error: function(XMLHttpRequest) {
			// toastr.error('Something Went Wrong !');
		}
	});
});
									</script>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Tên phòng ban :</label>
								<div class="controls">
									<select name="tenPhongban">
										<option value=""> </option>
										<option >Nhân viên</option>
										<option value="Giám đốc">>Giám đốc</option>
										

									</select> *
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
