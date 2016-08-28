<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<form action="<?php echo site_url("upload/do_upload");?>" enctype="multipart/form-data" method = "POST">

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>
