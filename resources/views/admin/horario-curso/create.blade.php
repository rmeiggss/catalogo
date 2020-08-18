@extends('layouts.admin2')

@section('content')
<!--grid-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nuevo Horario del Curso</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!---->
    <section class="content">
        <div class="grid-hor">
            {!!Form::open(['route'=>'horario-curso.store','method'=>'POST','class'=>'col-sm-10'])!!}
                <div class="form-group">
                    {!!Form::label('nombre','Nombre del Curso')!!}
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Curso ...','id'=>'nombre'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('fecha_inicial','Fecha de Inicio')!!}
                    {!!Form::date('fecha_inicial',"2020-08-17",['class'=>'form-control','id'=>'fecha_inicial'])!!}
                </div>

                <div class="form-group">
                {!!Form::label('fecha_final','Fecha Final')!!}
                    {!!Form::date('fecha_final',"2020-08-17",['class'=>'form-control','id'=>'fecha_final'])!!}
                </div>

                <div class="form-group">
                {!!Form::label('hora_in','Hora Inicial')!!}
                    {!!Form::text('hora_in',null,['class'=>'form-control','placeholder'=>'Hora Inicial ...','id'=>'hora_in'])!!}
                </div>

                <div class="form-group">
                {!!Form::label('hora_fi','Hora Final')!!}
                    {!!Form::text('hora_fi',null,['class'=>'form-control','placeholder'=>'Hora Final ...','id'=>'hora_fi'])!!}
                </div>
            {!!Form::submit('Crear',['class'=>'btn btn-success'])!!}
                <!-- Agregar boton de cancelar -->
                <a class="btn btn-danger" href="{{ route('horario-curso.index') }}">Cancelar</a>
            {!!Form::close()!!}

        </div>
    </section>
</div>
@endsection