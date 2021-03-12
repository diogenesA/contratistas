Seccion para crear contratistas
<form action="{{ url('/contratistas')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="Foto">{{'Foto'}}</label>
<input type="file" name="Foto" id="Foto" value="">
<br/>

<label for="NombreCompleto">{{'Nombre Completo'}}</label>
<input type="text" name="NombreCompleto" id="NombreCompleto" value="">
<br/>

<label for="FechaNacimiento">{{'Fecha de Nacimiento'}}</label>
<input type="text" name="FechaNacimiento" id="FechaNacimiento" value="">
<br/>

<label for="Cedula">{{'Cedula'}}</label>
<input type="text" name="Cedula" id="Cedula" value="">
<br/>

<label for="Edad">{{'Edad'}}</label>
<input type="text" name="Edad" id="Edad" value="">
<br/>

<label for="PerfilFormacion">{{'Perfil/Formación'}}</label>
<input type="text" name="PerfilFormacion" id="PerfilFormacion" value="">
<br/>

<label for="ExperienciaPublicoPrivado">{{'Experiencia (Publico o Privado)'}}</label>
<input type="text" name="ExperienciaPublicoPrivado" id="ExperienciaPublicoPrivado" value="">
<br/>

<label for="Celular">{{'Celular'}}</label>
<input type="text" name="Celular" id="Celular" value="">
<br/>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="">
<br/>

<label for="Direccion">{{'Direccion'}}</label>
<input type="text" name="Direccion" id="Direccion" value="">
<br/>

<label for="IBC">{{'IBC'}}</label>
<input type="text" name="IBC" id="IBC" value="">
<br/>

<label for="Honorarios">{{'Honorarios'}}</label>
<input type="text" name="Honorarios" id="Honorarios" value="">
<br/>

<label for="Diferencia">{{'Diferencia'}}</label>
<input type="text" name="Diferencia" id="Diferencia" value="">
<br/>

<label for="Referidos">{{'Referidos'}}</label>
<input type="text" name="Referidos" id="Referidos" value="">
<br/>

<label for="Tecnica">{{'Tecnica'}}</label>
<input type="text" name="Tecnica" id="Tecnica" value="">
<br/>

<label for="Participacion">{{'Participacion'}}</label>
<input type="text" name="Participacion" id="Participacion" value="">
<br/>

<label for="Redes">{{'Redes'}}</label>
<input type="text" name="Redes" id="Redes" value="">
<br/>

<label for="Necesidad">{{'Necesidad'}}</label>
<input type="text" name="Necesidad" id="Necesidad" value="">
<br/>

<label for="Indicador">{{'Indicador'}}</label>
<input type="text" name="Indicador" id="Indicador" value="">
<br/>

<label for="GrupoInternoTrabajo">{{'Grupo interno de trabajo'}}</label>
<input type="text" name="GrupoInternoTrabajo" id="GrupoInternoTrabajo" value="">
<br/>

<label for="Observaciones">{{'Observaciones'}}</label>
<input type="text" name="Observaciones" id="Observaciones" value="">
<br/>

<label for="Universidad">{{'Universidad'}}</label>
<input type="text" name="Universidad" id="Universidad" value="">
<br/>

<label for="EPS">{{'EPS'}}</label>
<input type="text" name="EPS" id="EPS" value="">
<br/>

<label for="Pension">{{'Pension'}}</label>
<input type="text" name="Pension" id="Pension" value="">
<br/>

<label for="ARL">{{'ARL'}}</label>
<input type="text" name="ARL" id="ARL" value="">
<br/>

<label for="NumeroContrato">{{'Numero de contrato'}}</label>
<input type="text" name="NumeroContrato" id="NumeroContrato" value="">
<br/>

<label for="Tiempo">{{'Tiempo'}}</label>
<input type="text" name="Tiempo" id="Tiempo" value="">
<br/>

<input type="submit" value="Agregar">
</form>

