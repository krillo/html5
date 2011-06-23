<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>


<!DOCTYPE HTML>
<html>
<body>

<form action="handle_form.php" method="post">
  Username: <input type="text" name="usr_name" autofocus required /><br/>
  disabled: <input type="text" name="usr_name" disabled /><br/>
  Encryption: <keygen name="security" /><br/>
  email: <input type="email" name="email" required /><br/>
  age: <input type="number" name="age" min="18" max="50" required/><br/>
  date: <input type="date" name="date"  required/><br/>
  range: <input type="range" name="range" min="1"  max="10" required/><br/>

  <input type="image" src="img_submit.gif" width="24" height="24" /><br/>
  <input type="submit" /><br/>



</form>

</body>
</html>