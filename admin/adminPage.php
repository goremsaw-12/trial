<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Add a song </h1>
    <p>enter title</p>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>
</html>