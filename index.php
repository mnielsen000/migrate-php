<!DOCTYPE html>
<html>
<body>

<h1>Hello! Welcome to the simple image upload app!</h1>

<h2>Image size must be less than 500KB</h2>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<br/>
<br/>

<?php

echo "List of Files<br/><br/>";

if ($handle = opendir('uploads')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<a href=\"uploads/$entry\">$entry</a></br>";
        }
    }

    echo "<br/>";

    closedir($handle);
}

?>



</body>
</html>


