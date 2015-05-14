
<?php
$path = "uploads/";
$files = scandir($path);
foreach ($files as &$value) {
    
    echo "<img src='http://pcurewitz.com/uploads/".$value."' width='300' ><br><br>".$value."<br><br>";
   
}

?>






