var d = new Date();
var date = d.getDate();
if (date == 1) {
	$.ajax({
		url:'admin/product/reset-saled',
		type: 'GET',
	});
}
