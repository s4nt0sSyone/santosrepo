<?php
// function random_pic($dir = '/images/')
// {
//     $files = glob($dir . '*.png');
//     $file = array_rand($files);
//     return $files[$file];
// }
// random_pic();
// $count = 1;
// echo "<table border=2>";
// $images = glob("images/*.png");
// foreach (shuffle($images) as $filename) {
//      if ($count == 17) break;
//      if ($count == 1 or $count == 5 or $count == 9 or $count == 13)
//      { 
//           echo "<tr>";
//      }
//      #echo $count;
//      echo $filename;
//      echo "<br>";
//      echo "<td>";
//      echo '<img src="'.$filename.'"/>';
//      echo '</td>';
//      if ($count == 4 or $count == 8 or $count == 12 or $count == 16)
//      { 
//           echo "</tr>";
//      }    
//      $count = $count+1;
// }

// echo "</table>"
// ?>

<?php
function getRandomImage($dir_path = "images/"){
    if(!empty($dir_path)){
        $files = scandir($dir_path);
        $count = count($files);
        if($count > 2){
            $index = rand(2, ($count-1));
            $filename = $files[$index];
            return '<img src="'.$dir_path."/".$filename.'" alt="'.$filename.'">';
        } else {
            return "The directory is empty!";
        }
    } else {
        return "Please enter valid path to image directory!";
    }
}

$count = 1;
echo "<table border=2>";
$images = glob("images/*.png");
while ($count != 17) {
     if ($count == 1 or $count == 5 or $count == 9 or $count == 13)
     { 
          echo "<tr>";
     }
     #echo $count;
     //echo $filename;
     //echo "<br>";
     echo "<td>";
     echo getRandomImage("images");
     //echo '<img src="'.$filename.'"/>';
     echo '</td>';
     if ($count == 4 or $count == 8 or $count == 12 or $count == 16)
     { 
          echo "</tr>";
     }    
     $count = $count+1;
}

echo "</table>"
?>