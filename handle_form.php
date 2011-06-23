<?php

echo 'POST parameters<br/>----------------<br/>';
foreach($_POST as $name=>$value){
  echo $name . ":  " .$value . '<br/>';
}

echo '<br/><br/>';

echo 'GET parameters<br/>----------------<br/>';
foreach($_GET as $name=>$value){
  echo $name . ":  " .$value . '<br/>';
}


?>
