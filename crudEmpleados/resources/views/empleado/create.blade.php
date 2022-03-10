<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
    @csrf <!--Clave de seguridad, que pedimos que nos muestre desde el controlador -->
<label for="Nombre">Nombre Empleado</label>
    <input type="text" name="Nombre" id="Nombre">
<br>
<label  for="Primer_Apellido">Primer apellido</label>
<input type="text" name="Primer_Apellido" id="Primer_Apellido">
<br>
<label for="Segundo_Apellido">Segundo apellido</label>
<input type="text" name="Segundo_Apellido" id="Segundo_Apellido">
<br>
<label for="Correo_Electronico">Correo electronico </label>
<input type="text" name="Correo_Electronico" id="Correo_Electronico">
<br>
<label for="Imagen"> Imagen </label>
<input type="file" name="Imagen" id="Imagen">
<br>
<input type="submit" value="GuardarEmpleado"">
<br>
</form>
