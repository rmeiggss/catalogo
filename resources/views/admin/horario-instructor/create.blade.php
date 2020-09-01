@extends('layouts.admin2')

@section('content')
<!--grid-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nuevo Horario del Instructor</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!---->
    <section class="content">
        <div class="grid-hor">
            {!!Form::open(['route'=>'horario-instructor.store','method'=>'POST','class'=>'col-sm-10'])!!}
                <div class="form-group col-md-6">
                    {!!Form::label('nombre','Nombre del Instructor')!!}
                    {!!Form::select('nombre', $instructors, 'null', ['class' => 'form-control', 'placeholder'=>'-Seleccionar Instructor-','id'=>'nombre']) !!}
                    @error('nombre')
                    <small class="text-danger">Seleccionar el curso</small>    
                    @enderror    
                </div>
                <div class="container">
                    <div class="row">
                        <div class="form-group col-md-3">
                            {!!Form::label('fecha_inicial','Fecha de Inicio')!!}
                            {!!Form::date('fecha_inicial',"null",['class'=>'form-control','id'=>'fecha_inicial'])!!}
                            @error('fecha_inicial')
                            <small class="text-danger">Seleccionar la fecha de inicio</small>    
                            @enderror
                        </div>

                        <div class="form-group col-md-3">
                            {!!Form::label('fecha_final','Fecha Final')!!}
                            {!!Form::date('fecha_final',"null",['class'=>'form-control','id'=>'fecha_final'])!!}
                            @error('fecha_final')
                            <small class="text-danger">Seleccionar la fecha de finalización</small>    
                            @enderror
                        </div>
                    </div>
                </div>

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
                <a class="btn btn-danger" href="{{ route('horario-instructor.index') }}">Cancelar</a>
            {!!Form::close()!!}

        </div>
    </section>
</div>
@endsection