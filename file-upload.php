<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="uploader.php" method="POST">

    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />

    <input type="submit" value="Send File" />
</form>