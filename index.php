<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Main page</title>
</head>
<body>
    <?php
        // give button a random color
        $colors = ["Red", "Blue", "Yellow", "Purple", "Green", "Orange"];

        // define the directory where your projects are located
        $directory = './';

        // get a list of all folders in the specified directory.
        $folders = scandir($directory);

        // iterate through each folder to create links to their index.html file
        echo "<div class='button-container'>";
        foreach($folders as $folder) {
            if($folder !== '.' && $folder !== '..' && is_dir($directory . $folder) && $folder !== '.git'){
                $color = $colors[array_rand($colors)];
                $link = $directory . $folder . '/index.html';
                echo "
                <a href='$link'>
                    <button class='button button$color'>$folder</button>
                </a><br><br>
                ";
            }
        }
        echo "</div>";
    ?>
</body>
</html>