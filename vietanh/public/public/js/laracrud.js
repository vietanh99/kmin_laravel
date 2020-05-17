jQuery(document).ready(function($){
	jQuery('.delete-link').click(function () {
        var nhanvien_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: 'links/' + nhanvien_id,
            success: function (data) {
                console.log(data);
                $("#link" + nhanvien_id).remove();
                window.location.reload();

            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});