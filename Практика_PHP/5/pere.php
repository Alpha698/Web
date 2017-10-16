<?php
//header("Location: /index1.php"); 
 echo"Вы выбрали день недели: ";echo htmlspecialchars($_GET['name_list']); echo "<br>";

$test=$_GET['test'];
      if ($test){ 
         foreach ($test as $t){ 
      echo 'Вы выбрали город: '.$t.'<br />';  
      }
       }




?>
