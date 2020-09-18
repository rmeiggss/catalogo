@extends('layouts.admin')

@section('content')

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

            <div class="container">
                <div class="row">
                    <div class="form-group col-md-2">	
                        <div class="form-group">	
                        {!!Form::checkbox('Lunes', "Lunes", false, ['class' => '','id' => 'dia-lunes'])!!}	
                        {!!Form::label('fecha_inicial','Lunes')!!}
                        </div>
                        <div class="form-group">	
                        {!!Form::checkbox('Martes', "Martes", false, ['class' => '','id' => 'dia-martes'])!!}	
                        {!!Form::label('fecha_inicial','Martes')!!}	
                        </div>
                        <div class="form-group">
                        {!!Form::checkbox('Miercoles', "Miercoles", false, ['class' => '','id' => 'dia-miercoles'])!!}	
                        {!!Form::label('fecha_inicial','Miércoles')!!}	
                        </div>
                        <div class="form-group">
                        {!!Form::checkbox('Jueves', "Jueves", false, ['class' => '','id' => 'dia-jueves'])!!}	
                        {!!Form::label('fecha_inicial','Jueves')!!}	
                        </div>
                        <div class="form-group">
                        {!!Form::checkbox('Viernes', "Viernes", false, ['class' => '','id' => 'dia-viernes'])!!}	
                        {!!Form::label('fecha_inicial','Viernes')!!}
                        </div>
                        <div class="form-group">
                        {!!Form::checkbox('Sabado', "Sabado", false, ['class' => '','id' => 'dia-sabado'])!!}	
                        {!!Form::label('fecha_inicial','Sábado')!!}
                        </div>
                        <div class="form-group">
                        {!!Form::checkbox('Domingo', "Domingo", false, ['class' => '','id' => 'dia-domingo'])!!}	
                        {!!Form::label('fecha_inicial','Domingo')!!}
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <div class="form-group">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!}
                            {!! Form::time('hora_ini',null, ['class' => '','id'=>'hora_ini']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!}
                            {!! Form::time('hora_ini',null, ['class' => '','id'=>'hora_ini']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!}
                            {!! Form::time('hora_ini',null, ['class' => '','id'=>'hora_ini']) !!} 
                        </div> 
                        <div class="form-group">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!}
                            {!! Form::time('hora_ini',null, ['class' => '','id'=>'hora_ini']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!}
                            {!! Form::time('hora_ini',null, ['class' => '','id'=>'hora_ini']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!}
                            {!! Form::time('hora_ini',null, ['class' => '','id'=>'hora_ini']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_ini', 'Hora de Inicio :') !!}
                            {!! Form::time('hora_ini',null, ['class' => '','id'=>'hora_ini']) !!} 
                        </div>                           
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-group">
                            {!! Form::label('hora_fi', 'Hora Final :') !!}
                            {!! Form::time('hora_fi',null, ['class' => '','id'=>'hora_fi']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_fi', 'Hora Final :') !!}
                            {!! Form::time('hora_fi',null, ['class' => '','id'=>'hora_fi']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_fi', 'Hora Final :') !!}
                            {!! Form::time('hora_fi',null, ['class' => '','id'=>'hora_fi']) !!} 
                        </div> 
                        <div class="form-group">
                            {!! Form::label('hora_fi', 'Hora Final :') !!}
                            {!! Form::time('hora_fi',null, ['class' => '','id'=>'hora_fi']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_fi', 'Hora Final :') !!}
                            {!! Form::time('hora_fi',null, ['class' => '','id'=>'hora_fi']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_fi', 'Hora Final :') !!}
                            {!! Form::time('hora_fi',null, ['class' => '','id'=>'hora_fi']) !!} 
                        </div>
                        <div class="form-group">
                            {!! Form::label('hora_fi', 'Hora Final :') !!}
                            {!! Form::time('hora_fi',null, ['class' => '','id'=>'hora_fi']) !!} 
                        </div>                           
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-group col-md-3">
                        {!! Form::label('num_horas', 'Numero de Horas: ') !!}
                        {!! Form::number('num:horas',null, ['class' => 'form-control','id'=>'num_horas']) !!}
                        @error('hora_fi')
                        <small class="text-danger">Seleccionar la hora final</small>
                        @enderror
                    </div>
                </div>
            </div>

        {!!Form::submit('Agregar',['class'=>'btn btn-info'])!!}
            <!-- Agregar boton de cancelar -->
            <a class="btn btn-danger" href="{{ route('horario-curso.index') }}">Cancelar</a>
        {!!Form::close()!!}

    </div>
</section>

@endsection