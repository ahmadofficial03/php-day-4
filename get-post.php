<?php 

echo $_POST['name'];
echo $_POST['age'];




?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=fraz">Link</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Age: </label>
  <input type="text" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
