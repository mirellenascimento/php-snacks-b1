<!-- PHP Snack 2:
Passare come parametri GET name, mail e age everificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
$name = $_GET ["user_name"];
$email = $_GET ["user_email"];
$age = $_GET ["user_age"];
?>

<h1>Snack 2</h1>
<h2>Data Validation</h2>

<form name="form" action="" method="get" id="form-data">
  <input type="text" name="user_name" value="" placeholder="Name"><br>
  <input type="text" name="user_email" value="" placeholder="Email"><br>
  <input type="text" name="user_age" value="" placeholder="Age">
</form>
<button type="submit" form="form-data" value="Submit">Submit</button>

<?php
if (strlen($name) < 1){

} else {
  if((strlen($name)>=3) && (is_numeric(strpos($email, ".")) && (is_numeric(strpos($email, "@")))) && (is_numeric($age))){
    echo "<h1>Accesso riuscito</h1>";
  } else {
    echo "<h1>Accesso negato</h1>";
  }
}
?>
