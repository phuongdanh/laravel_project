$(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
$("div.alert").delay(3000).slideUp();

$(document).ready(function(){
	$("span#del_image").click(function(){
		var url = 'http://localhost/project/admin/image/delete';
		var _token = $("form[id = 'form_edit']").find("input[name = '_token']").val();
		var idImage = $(this).parent().find("input[name = 'idImage']").val();
		$.ajax({
			url: url,
			type: 'POST',
			cache: false,
			data: {
				'idImage': idImage,
				'_token': _token,
			},
			success: function(id){
				$("div." + id).remove();
				alert('Da Xoa hinh '+id);

			}
		});
	});
});
document.getElementById("file-2").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};

//click button them anh
$('.addMore').click(function(){
	var html = '<input type="file" class="listImage" name="fImagesDetail[]">';
      $(html).insertBefore(this);
});

