<?php
if ( isset( $_POST['submit'] ) ) {
   echo "<input type="submit" name="submit" />";
}
echo '<h2>form data retrieved by using the $_REQUEST variable<h2/>';
echo $_REQUEST['email'];
echo $_REQUEST['password'];


echo $_POST['email'];
echo $_POST['password'];
?>