<html>
<head>
<title>File Upload Form</title>
</head>
<body>
This form allows you to upload a file to the server.<br>
<?php echo(sys_get_temp_dir()) ?>

<form action="getfile.php" method="POST" enctype="multipart/form-data"><br>
Type (or select) Filename: <input type="file" name="uploadFile">
<input type="submit" value="Upload File">
</form>
</body>
</html>
