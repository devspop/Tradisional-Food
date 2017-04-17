<html>
	<head>
		<title>Upload File</title>
	</head>
	<body>
		<?php echo $error;?>
		<br><br>
		<?php echo form_open_multipart('uploadsample/proses_upload');?>
		<b>
		Judul:
		<input type="text" name="judul" size = "20" /> <br><br> 
		Upload Filenya : <br><br>
		<input type="file" name="userfile" size="20" />
		<br><br>
		<input type="submit" value="upload" style="background-color : #8F00FF "/>
		</b>
	</body>
</html>