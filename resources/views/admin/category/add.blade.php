<!DOCTYPE html>
<html>
	<head>
		<title>Add category</title>
	</head>
	<body>



<?php 


function parent($data, $id_parent = 0, $str = '---') 
{

    $parent_tmp = array();
 	foreach ($data as $item) {
        if ($item['parent_id'] == $id_parent) {
            $parent_tmp[] = $item;
        }
    }

    if ($parent_tmp) 
    {
       	foreach ($parent_tmp as $item) 
        {
        	echo "<option value='" . $item['id'] . "'>" . $str . $item['name'] . "</option>";
        	$str = substr($str , 3);
            parent($data, $item['id'], $str .= '---');
        }
    }
}

?>





	<?php 
		// function parent($data, $parent = 0, $str=''){
		// 	foreach($data AS $key => $value){
				
		// 		if($value['parent_id'] == $parent){
		// 			echo "<option value='" . $value['id'] . "'>" . $str . $value['name'] . "</option>";
					
		// 			parent($data, $value['id'], $str .= '---');
		// 		}
		// 	}
		// }
	?>
		<h3>FORM ADD NEW CATEGORY</h3>
		<form method="post" action="{{ url('admin/category/postAdd') }}">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<select name="parent_id">
				<option value="0">Chon danh muc cha</option>
				<?php parent($categories); ?>
			</select>
			<hr />
			Name:
			<input type="text" name="name">
			<hr />
			Description:
			<input type="text" name="description">
			<hr />
			<button type="submit">Add</button>
		</form>
	</body>
</html>

