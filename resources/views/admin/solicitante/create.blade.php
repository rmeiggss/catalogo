@extends('layouts.admin2')

@section('content')

<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nuevo Solicitante</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- /Content Header (Page header) -->
    
    <section class="content">
        <div class="grid-hor">
            {!!Form::open(['route'=>'solicitante.store','method'=>'POST','class'=>'col-sm-10'])!!}
            <div class="form-group">
                {!!Form::label('nombres','Nombres')!!}
                {!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingrese los nombres','id'=>'nombres'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('descripcion','Descripcion')!!}
                {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese el RUC','id'=>'descripcion'])!!}
            </div>
            <div class="form-group">
            {!!Form::label('RUC','RUC')!!}
            {!!Form::text('ruc',null,['class'=>'form-control','placeholder'=>'Ingrese el RUC','id'=>'ruc'])!!}
            </div>
            {!!Form::submit('Crear',['class'=>'btn btn-success'])!!}
            <!-- Agregar boton de cancelar -->
            <a class="btn btn-danger" href="{{ route('solicitante.index') }}">Cancelar</a>
            {!!Form::close()!!}
        </div>
        
    </section>
    
</div>

@endsection