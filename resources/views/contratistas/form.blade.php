<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($contratista->Foto))
<br/>
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/' .$contratista->Foto}}" alt="" width="150">
<br/>
@endif

<input class="form-control {{$errors->has('Foto')?'is-invalid':''}}" type="file" name="Foto" id="Foto" value="">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="NombreCompleto" class="control-label">{{'Nombre Completo'}}</label>
<input type="text" class="form-control {{$errors->has('NombreCompleto')?'is-invalid':''}} " name="NombreCompleto" id="NombreCompleto" 
value="{{ isset($contratista->NombreCompleto)?$contratista->NombreCompleto:old('NombreCompleto') }}">

{!! $errors->first('NombreCompleto','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="FechaNacimiento"class="control-label">{{'Fecha de Nacimiento'}}</label>
<input type="text" class="form-control {{$errors->has('FechaNacimiento')?'is-invalid':''}} " name="FechaNacimiento" id="FechaNacimiento" 
value="{{ isset($contratista->FechaNacimiento)?$contratista->FechaNacimiento:old('FechaNacimiento') }}">

{!! $errors->first('FechaNacimiento','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Cedula" class="control-label ">{{'Cedula'}}</label>
<input type="text" class="form-control {{$errors->has('Cedula')?'is-invalid':''}} " name="Cedula" id="Cedula" 
value="{{ isset($contratista->Cedula)?$contratista->Cedula:old('Cedula') }}">

{!! $errors->first('Cedula','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Edad" class="control-label">{{'Edad'}}</label>
<input type="text" class="form-control {{$errors->has('Edad')?'is-invalid':''}} " name="Edad" id="Edad" 
value="{{ isset($contratista->Edad)?$contratista->Edad:old('Edad') }}">

{!! $errors->first('Edad','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="PerfilFormacion" class="control-label">{{'Perfil/Formación'}}</label>
<input type="text" class="form-control {{$errors->has('PerfilFormacion')?'is-invalid':''}} " name="PerfilFormacion" id="PerfilFormacion" 
value="{{ isset($contratista->PerfilFormacion)?$contratista->PerfilFormacion:old('PerfilFormacion') }}">

{!! $errors->first('PerfilFormacion','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="ExperienciaPublicoPrivado" class="control-label">{{'Experiencia (Publico o Privado)'}}</label>
<input type="text" class="form-control {{$errors->has('ExperienciaPublicoPrivado')?'is-invalid':''}} " name="ExperienciaPublicoPrivado" id="ExperienciaPublicoPrivado" 
value="{{ isset($contratista->ExperienciaPublicoPrivado)?$contratista->ExperienciaPublicoPrivado:old('ExperienciaPublicoPrivado') }}">

{!! $errors->first('ExperienciaPublicoPrivado','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Celular" class="control-label">{{'Celular'}}</label>
<input type="text" class="form-control {{$errors->has('Celular')?'is-invalid':''}} " name="Celular" id="Celular" 
value="{{ isset($contratista->Celular)?$contratista->Celular:old('Celular') }}">

{!! $errors->first('Celular','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control {{$errors->has('Correo')?'is-invalid':''}} " name="Correo" id="Correo" 
value="{{ isset($contratista->Correo)?$contratista->Correo:old('Correo') }}">

{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Direccion" class="control-label">{{'Direccion'}}</label>
<input type="text" class="form-control {{$errors->has('Direccion')?'is-invalid':''}} " name="Direccion" id="Direccion" 
value="{{ isset($contratista->Direccion)?$contratista->Direccion:old('Direccion') }}">

{!! $errors->first('Direccion','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="IBC" class="control-label">{{'IBC'}}</label>
<input type="text" class="form-control {{$errors->has('IBC')?'is-invalid':''}} " name="IBC" id="IBC" 
value="{{ isset($contratista->IBC)?$contratista->IBC:old('IBC') }}">

{!! $errors->first('IBC','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Honorarios" class="control-label">{{'Honorarios'}}</label>
<input type="text" class="form-control {{$errors->has('Honorarios')?'is-invalid':''}} " name="Honorarios" id="Honorarios" 
value="{{ isset($contratista->Honorarios)?$contratista->Honorarios:old('Honorarios') }}">

{!! $errors->first('Honorarios','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Diferencia" class="control-label">{{'Diferencia'}}</label>
<input type="text" class="form-control {{$errors->has('Diferencia')?'is-invalid':''}} " name="Diferencia" id="Diferencia" 
value="{{ isset($contratista->Diferencia)?$contratista->Diferencia:old('Diferencia') }}">

{!! $errors->first('Diferencia','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Referidos" class="control-label">{{'Referidos'}}</label>
<input type="text" class="form-control {{$errors->has('Referidos')?'is-invalid':''}} " name="Referidos" id="Referidos" 
value="{{ isset($contratista->Referidos)?$contratista->Referidos:old('Referidos') }}">

{!! $errors->first('Referidos','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Tecnica" class="control-label">{{'Tecnica'}}</label>
<input type="text" class="form-control {{$errors->has('Tecnica')?'is-invalid':''}} " name="Tecnica" id="Tecnica" 
value="{{ isset($contratista->Tecnica)?$contratista->Tecnica:old('Tecnica') }}">

{!! $errors->first('Tecnica','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Participacion" class="control-label">{{'Participacion'}}</label>
<input type="text" class="form-control {{$errors->has('Participacion')?'is-invalid':''}} " name="Participacion" id="Participacion" 
value="{{ isset($contratista->Participacion)?$contratista->Participacion:old('Participacion') }}">

{!! $errors->first('Participacion','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Redes" class="control-label">{{'Redes'}}</label>
<input type="text" class="form-control {{$errors->has('Redes')?'is-invalid':''}} " name="Redes" id="Redes" 
value="{{ isset($contratista->Redes)?$contratista->Redes:old('Redes') }}">

{!! $errors->first('Redes','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Necesidad" class="control-label">{{'Necesidad'}}</label>
<input type="text" class="form-control {{$errors->has('Necesidad')?'is-invalid':''}} " name="Necesidad" id="Necesidad" 
value="{{ isset($contratista->Necesidad)?$contratista->Necesidad:old('Necesidad') }}">

{!! $errors->first('Necesidad','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Indicador" class="control-label">{{'Indicador'}}</label>
<input type="text" class="form-control {{$errors->has('Indicador')?'is-invalid':''}} " name="Indicador" id="Indicador" 
value="{{ isset($contratista->Indicador)?$contratista->Indicador:old('Indicador') }}">

{!! $errors->first('Indicador','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="GrupoInternoTrabajo" class="control-label">{{'Grupo interno de trabajo'}}</label>
<input type="text" class="form-control {{$errors->has('GrupoInternoTrabajo')?'is-invalid':''}} " name="GrupoInternoTrabajo" id="GrupoInternoTrabajo" 
value="{{ isset($contratista->GrupoInternoTrabajo)?$contratista->GrupoInternoTrabajo:old('GrupoInternoTrabajo') }}">

{!! $errors->first('GrupoInternoTrabajo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Observaciones" class="control-label">{{'Observaciones'}}</label>
<input type="text" class="form-control {{$errors->has('Observaciones')?'is-invalid':''}} " name="Observaciones" id="Observaciones" 
value="{{ isset($contratista->Observaciones)?$contratista->Observaciones:old('Observaciones') }}">

{!! $errors->first('Observaciones','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Universidad" class="control-label">{{'Universidad'}}</label>
<input type="text" class="form-control {{$errors->has('Universidad')?'is-invalid':''}} " name="Universidad" id="Universidad" 
value="{{ isset($contratista->Universidad)?$contratista->Universidad:old('Universidad') }}">

{!! $errors->first('Universidad','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="EPS" class="control-label">{{'EPS'}}</label>
<input type="text" class="form-control {{$errors->has('EPS')?'is-invalid':''}} " name="EPS" id="EPS" 
value="{{ isset($contratista->EPS)?$contratista->EPS:old('EPS') }}">

{!! $errors->first('EPS','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Pension" class="control-label">{{'Pension'}}</label>
<input type="text" class="form-control {{$errors->has('Pension')?'is-invalid':''}} " name="Pension" id="Pension" 
value="{{ isset($contratista->Pension)?$contratista->Pension:old('Pension') }}">

{!! $errors->first('Pension','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="ARL" class="control-label">{{'ARL'}}</label>
<input type="text" class="form-control {{$errors->has('ARL')?'is-invalid':''}} " name="ARL" id="ARL" 
value="{{ isset($contratista->ARL)?$contratista->ARL:old('ARL') }}">

{!! $errors->first('ARL','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="NumeroContrato" class="control-label">{{'Numero de contrato'}}</label>
<input type="text" class="form-control {{$errors->has('NumeroContrato')?'is-invalid':''}} " name="NumeroContrato" id="NumeroContrato" 
value="{{ isset($contratista->NumeroContrato)?$contratista->NumeroContrato:old('NumeroContrato') }}">

{!! $errors->first('NumeroContrato','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">

<label for="Tiempo" class="control-label">{{'Tiempo'}}</label>
<input type="text" class="form-control {{$errors->has('Tiempo')?'is-invalid':''}} " name="Tiempo" id="Tiempo" 
value="{{ isset($contratista->Tiempo)?$contratista->Tiempo:old('Tiempo') }}">

{!! $errors->first('Tiempo','<div class="invalid-feedback">:message</div>') !!}
</div>

<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">
<a class="btn btn-primary" href="{{ url('contratistas')}}">Regresar</a>