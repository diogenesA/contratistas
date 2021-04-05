@extends('layouts.app')
@section('content')
<link rel="shortcat icon" href="img/SETP.ico"> 
<div class="container">
    

<form action="{{ url('/contratistas/' . $contratista->id) }}" method="post" enctype="multipart/form-data" >
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('contratistas.form',['Modo'=>'editar'])


</form>
</div>

@endsection