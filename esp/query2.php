<!DOCTYPE html>
<html>
<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

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

<h3>Reserve su Paquete Turistico</h3>

<div class="slidecontainer">
  <form action="query1.php" oninput="x.value=parseInt(a.value)" method = "post">

    <label for="region">Region</label>
    <select id="region" name="search">
      <option value="">Todas</option>
      <option value="altas">Tierras altas</option>
      <option value="playas">Playas</option>
      <option value="cultura">Cultura</option>
      <option value="">Todas</option>
    </select>
    
  <input type="range" min="300" max="3000" value="500" step="100" class="slider" id="myRange" name="preciomi">
  <p>Precio Minimo: <span id="demo"></span></p>

<script>
var slider1 = document.getElementById("myRange");
var output1 = document.getElementById("demo");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>

<input type="range" min="300" max="3000" value="2500" step="100" class="slider" id="Range" name="precioma">
  <p>Precio Maximo: <span id="ex"></span></p>

<script>
var slider2 = document.getElementById("Range");
var output2 = document.getElementById("ex");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
</script>
     <br style="line-height:7; ">
    <label for="meeting">Fecha de inicio de Tour : </label><input id="trip" type="date" value="e" name="week" required/>
    <script>
document.getElementById('e').value = new Date().toISOString().substring(0, 10);
</script>

    <br style="line-height:7; ">
    <input type="submit" value="Buscar Paquetes">
  </form >
  <form action="reservar.php" method="post">
    <input type="submit" value="Reservar">
  </form>
</div>

</body>
</html>
