<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Hypertext Preprocessor</h1>


    <?php
    echo "<h2>PHP! </h2>". "<br>";
    $x = 500;
    $y = 500;
    
    $result = $x+$y;

echo "<h1>This is number = ".  $result. "</h1>";

$phpmarks =[76, 58, 89, 42, 15, 102, 95, 33, 45, 32, 83, 55, 93, 62];

                 // for loop

for($i=0; $i<=13; $i++){
        echo $phpmarks[$i]."</br>";
}

         // while loop

         for x = 1;

         while(x<=14){
                    echo $phpmarks[x]."</br>";
                        x++;
                     }


    ?>
</body>
</html>