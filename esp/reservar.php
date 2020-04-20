<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Ingrese sus datos para reservar</h3>

<div>
  <form action="registro.php" method="post">
    <label for="fname">Nombre</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Apellido</label>
    <input type="text" id="lname" name="lastname1" placeholder="Your last name.." required>
    <label for="telefono">Telefono</label>
    <input type="text" id="telef" name="telefono" placeholder="Your phone number is.." required>
    <label for="email">Email</label>
    <center><input type="text" placeholder="Ingrese su correo Correo-Electronico (Email)" name="correo" required></center>
    <br><br>
    <label for="country">Country</label>
    <select id="packet" name="paquete">
      <option value="paquete1">ID de Paquete 1</option>
      <option value="paquete2">Id de Paquete 2</option>
      <option value="paquete3">Id de Paquete 3</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
