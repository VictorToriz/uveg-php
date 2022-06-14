<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
</head>
<body>
    <div class="contenido">
    <div class="col1">
Nombre  <?php echo $_POST["nombre"]?>
Apellidos  <?php echo $_POST["apellidos"]?>
Edad <?php echo $_POST["edad"]?>
Correo <?php echo $_POST["email"]?>
Contraseña <?php echo $_POST["password"]?>
</div>
</div>
<form action="/action_page.php" method="get">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>