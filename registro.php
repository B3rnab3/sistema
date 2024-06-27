<html>
<head>
<body>
   <link rel="stylesheet" href="Style/registro.css">
   <script src="https://kit.fontawesome.com/a2dd6045c4.js"></script>
    </head>
    <div class="Atras" >
<h1 class="Bienvenida">Bienvenido</h1><br><a href="Menu_Principal.html">Atras</a> 
</div>


*/// Cone a la bas de datos

include("conexion.php")
$conexion=conectar();
echo "Se realizó exitosamente la conexion a la base de datos";
?>




<div class="Atras" >
<h1 class="Bienvenida">Bienvenido</h1><br><a href="Menu_Principal.html">Atras</a> 
</div>
<br>

    <form action="conexion.php" method="POST">
     <H2 class="CC">Crear Cliente</H2>
     <label class="F">Cedula:</label>
     <input class="R" type="text" name="cedula" placeholder="cedula 101*****"><br/>
    <label class="F">Nombre:</label>
   <input class="R" type="text" name = "nombre" placeholder= "Juan David"/><br/>
    <label class="F">Apellidos:</label>
  <input class="R" type="text" name = "apellidos" placeholder= "Gomez Tenis"/><br/>
    <label class="F">Direccion:</label>
   <input class="R" type="text" name = "direccion" placeholder= "Calle 24#"/><br/>
    <label class="F">Telefono:</label>
   <input class="R" type="text" name = "telefono" placeholder= "310***" /><br/>
    <br>
    <input class="btncreF"  type="submit" name="submit" value="Enviar Datos">

<div class="UsuarioN">
<h1 class="NU">Nuevo Usuario</h1>
<label class="Correo">Correo:</label>
<i class="fa-solid fa-envelope"></i>
<input class="NUI" type="email" name="email" placeholder="Ejemplo@gmail.com">
<label class="Correo">Password:</label>
<i class="fa-solid fa-lock"></i>
<input class="NUI" type="password" name="password" placeholder="password*****">
<br>
<br>
<br>
<input class="btncreU" type="submit" name="submit" value="Crear Usuario" />
</div>
</form>

<section></section>
<footer> 
<P class = "Foo">copyright@|Bernabe Capera <br>Télefono |3103042053 <br>
Dirección| Calle 79b# 18-69 |Oficina301|</P>
</footer>
</body>
</html>