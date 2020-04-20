<!doctype html>
<html>
    <head>
        <title>Search</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
       
        <title></title>
     
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
    </head>
          
 <body>


<br style="line-height:15; ">

  <form action ="query.php" method = "post">
           
          <input name="search" type="text" placeholder="nombre"/>
         
         <br style="line-height:5; ">

          <input name="precio" type="text" placeholder="precio"/>

          <br style="line-height:5; ">
          <input type="submit"/>

          </form> 

          


  


 </body>
</html>