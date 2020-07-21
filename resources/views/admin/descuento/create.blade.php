@extends('layouts.admin2')

@section('content')
<!--grid-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nuevo Descuento</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!---->
    <section class="content">
        <div class="grid-hor">
            {!!Form::open(['route'=>'descuento.store','method'=>'POST','class'=>'col-sm-10'])!!}
                <div class="form-group">
                    {!!Form::label('nombre','Nombre del Curso')!!}
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre ...','id'=>'nombre'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('cant_min','Cantidad Mínima')!!}
                    {!!Form::text('cant_min',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad mínima ...','id'=>'cant_min'])!!}
                </div>

                <div class="form-group">
                {!!Form::label('cant_max','Cantidad Máxima')!!}
                    {!!Form::text('cant_max',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad máxima','id'=>'cant_max'])!!}
                </div>

                <div class="form-group">
                {!!Form::label('costo','Costo')!!}
                    {!!Form::text('costo',null,['class'=>'form-control','placeholder'=>'Ingrese el costo ...','id'=>'costo'])!!}
                </div>

                <div class="form-group">
                {!!Form::label('descuento','Descuento')!!}
                    {!!Form::text('descuento',null,['class'=>'form-control','placeholder'=>'Ingrese el descuento ...','id'=>'descuento'])!!}
                </div>

                {!!Form::submit('Crear',['class'=>'btn btn-success'])!!}
                <!-- Agregar boton de cancelar -->
                <a class="btn btn-danger" href="{{ route('descuento.index') }}">Cancelar</a>
            {!!Form::close()!!}

        </div>
    </section>
</div>
@endsection