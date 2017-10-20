<?php
echo htmlspecialchars($_GET['text']); echo "<br>";

if(isset($_GET['option1'])){
	echo htmlspecialchars($_GET['option1']); echo "<br>";
}
if(isset($_GET['option2'])){
	echo htmlspecialchars($_GET['option2']); echo "<br>";
}
if(isset($_GET['option3'])){
	echo htmlspecialchars($_GET['option3']); echo "<br>";
}
//echo "Ваш пол:"; echo htmlspecialchars($_GET['sex']); echo "<br>";

//$test=$_GET['test'];
 //     if ($test){ $kol=0;
 //        foreach ($test as $t){ $kol=$kol+1;
      //  //echo ''.$t.'<br />';
 //       }

  //    if($kol==1){ echo 'Готовьтесь к поездке в '.$t.'<br />';
  //    }
 //     if($kol>1){ echo 'Вы выбрали сразу несколько городов';} 
  //    }


?>
