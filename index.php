<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
</head>
<body>
    <?php
        // define the directory where your projects are located
        $directory = './';

        // get a list of all folders in the specified directory.
        $folders = scandir($directory);

        // iterate through each folder to create links to their index.html file
        foreach($folders as $folder) {
            if($folder !== '.' && $folder !== '..' && is_dir($directory . $folder)){
                $link = $directory . $folder . '/index.html';
                echo "<a href='$link'>$folder</a><br><br>";
            }
        }
    ?>
</body>
</html>