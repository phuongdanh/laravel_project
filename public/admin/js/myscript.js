//thuc hien qua trin sua danh muc
$(".button_edit").click(function(){
	var id = $(this).val();
	var current_id = $('form[name="formEdit"]').find('input[name="id"]').val();
	if(id != current_id){
		$.ajax({
			url: '/project/admin/category/edit/' + id,
			type: 'GET',
			dataType: 'json',
			success: function(output){
				$('form[name="formEdit"]').find('input[name="id"]').val(output.id);
				$('form[name="formEdit"]').find('input[name="txtCateName"]').val(output.name);
				$('form[name="formEdit"]').find('textarea[name="txtDescription"]').val(output.description);
				$('form[name="formEdit"]').find('input[name="txtKey"]').val(output.keyWords);
				var option = $('form[name="formEdit"]').find('select[name="parent_id"]').val(output.parent_id);
			}
		});
	}
});


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


//click button them anh
$('.addMore').click(function(){
	var html = '<input type="file" class="listImage" name="fImagesDetail[]">';
      $(html).insertBefore(this);
});

document.getElementById("file-2").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
