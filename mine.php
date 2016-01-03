<?php
$images = get_images('./images');
echo list_items($images);
function get_images($dir) {
	$images = scandir($dir);
	$encoded_data_array = array();
	foreach($images as $image) {
		if ( strpos($image, '.png') ||strpos($image,'.jpg') ||strpos($image, '.gif')):
			$path = './images/'.$image;
			$type = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
			array_push($encoded_data_array, $base64);
		endif;		
	}
	return $encoded_data_array;
}
function list_items($array) {	
	$json = json_encode($array);
	return $json;
}
?>
