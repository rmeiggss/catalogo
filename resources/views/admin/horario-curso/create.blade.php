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
<!--     @if($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error}}
        </div>
        @endforeach
    @endif -->
        <div class="grid-hor">
            {!!Form::open(['route'=>'horario-curso.store','method'=>'POST','class'=>'col-sm-10'])!!}
                <div class="form-group col-md-6">
                    {!!Form::label('nombre','Nombre del Curso')!!}
                    {!!Form::select('nombre', $productos, 'null', ['class' => 'form-control', 'placeholder'=>'-Seleccionar Curso-','id'=>'nombre']) !!}
                    @error('nombre')
                    <small class="text-danger">Seleccionar el curso</small>    
                    @enderror    
                </div>

                <div class="form-group col-md-6">
                    {!!Form::label('fecha_inicial','Fecha de Inicio')!!}
                    {!!Form::date('fecha_inicial',"null",['class'=>'form-control','id'=>'fecha_inicial'])!!}
                    @error('fecha_inicial')
                    <small class="text-danger">Seleccionar la Fecha de inicio</small>    
                    @enderror
                </div>

<!--                 <div class="form-group">
                {!!Form::label('fecha_final','Fecha Final')!!}
                    {!!Form::date('fecha_final',"2020-08-17",['class'=>'form-control','id'=>'fecha_final'])!!}
                </div> -->

<!--                 <div class="form-group">
                {!!Form::label('hora_in','Hora Inicial')!!}
                    {!!Form::text('hora_in',null,['class'=>'form-control','placeholder'=>'Hora Inicial ...','id'=>'hora_in'])!!}
                </div> -->

<!--                 <div class="form-group">
                {!!Form::label('hora_fi','Hora Final')!!}
                    {!!Form::text('hora_fi',null,['class'=>'form-control','placeholder'=>'Hora Final ...','id'=>'hora_fi'])!!}
                </div> -->
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-3">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!} 
                            {!! Form::time('hora_ini',null, ['class' => 'form-control','id'=>'hora_ini']) !!}
                            @error('hora_ini')
                            <small class="text-danger">Seleccionar la hora de inicio</small>    
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('hora_fi', 'Hora Final :') !!} 
                            {!! Form::time('hora_fi',null, ['class' => 'form-control','id'=>'hora_fi']) !!}
                            @error('hora_fi')
                            <small class="text-danger">Seleccionar la hora final</small>    
                            @enderror
                        </div>
                    </div>
                </div>

            {!!Form::submit('Crear',['class'=>'btn btn-success'])!!}
                <!-- Agregar boton de cancelar -->
                <a class="btn btn-danger" href="{{ route('horario-curso.index') }}">Cancelar</a>
            {!!Form::close()!!}

        </div>
    </section>
</div>
@endsection