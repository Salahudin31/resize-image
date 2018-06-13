
<form method="post" enctype="multipart/form-data">
	<input type="file" name="gambar">
	<input type="submit">
</form>
<?php
if (isset($_FILES['gambar'])) {
	$target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(!empty($imageFileType)){
    	if($imageFileType  == "jpeg" || $imageFileType == "jpg"){
    		move_uploaded_file($_FILES["gambar"]["tmp_name"], $_FILES['gambar']['name']);
			imagepng(imagecreatefromstring(file_get_contents($_FILES['gambar']['name'])),"image/imge.png");
			unlink($_FILES["gambar"]["name"]);
    	}elseif ($imageFileType == "gif") {
    		move_uploaded_file($_FILES["gambar"]["tmp_name"], $_FILES['gambar']['name']);
			imagepng(imagecreatefromstring(file_get_contents($_FILES['gambar']['name'])),"image/imge.png");
			unlink($_FILES["gambar"]["name"]);
    	}elseif ($imageFileType == "png") {
    		if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
	            echo "<script>alert('The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.')</script>";
	        }
    	}else{
    		echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
    	}
    	header("output.php?img='".$_FILES["gambar"]["name"]."'");
}
    }
    
?>