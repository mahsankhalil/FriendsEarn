<?php
if(!empty($_FILES)) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
		$sourcePath = $_FILES['userImage']['tmp_name'];
		$targetPath = "uploads/".$_FILES['userImage']['name'];
		if(move_uploaded_file($sourcePath,$targetPath)) {
			?>
			<video src="<?php echo $targetPath; ?>" width="500px" height="500px" />
			<?php
		}
	}
}
?>
