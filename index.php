<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CIT17</title>
</head>
<body>
    <h1>CIT17 Web Information System</h1>
    <h3>Activities Links and files</h3>
    <h3>Jimmy Jucar Jr</h3>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="http://github.com">Github</a>
        <a href="git.php">Git Commands</a>
    </nav>
    
    <div  class="files">
        <?php
            $dirPath = "./";
            if ($handle = opendir($dirPath)) {
                echo "<br><br>--- FILES LIST ---<br><br>";
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != ".." && is_file($dirPath . '/' . $entry)) {
                    echo "<a href=".$entry.">".$entry."</a>" . "<br>";
                    }
                }
                closedir($handle);
            
            } else {
                echo "Failed to open directory.";
            }

            print "sdfsdfsdf ";
        ?>
    </div>
    

</body>
</html>