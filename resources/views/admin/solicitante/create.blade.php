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
                    {!!Form::label('nombre','Nombres')!!}
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre','id'=>'nombre'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('tipo','Tipo')!!}
                    {!!Form::text('tipo','1',['class'=>'form-control','placeholder'=>'Ingrese el tipo de Solicitante','id'=>'tipo'])!!}
                </div>            
                <div class="form-group">
                    {!!Form::label('ruc','R.U.C.')!!}
                    {!!Form::text('ruc',null,['class'=>'form-control','placeholder'=>'Ingrese el RUC de Solicitante','id'=>'ruc','maxlength'=>'11'])!!}
                </div>
                <div class="form-group">
                {!!Form::label('email','Email')!!}
                    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese el Correo Electronico','id'=>'email'])!!}
                </div>
                <div class="form-group">
                {!!Form::label('direccion','Direccion')!!}
                    {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese la dirección','id'=>'direccion'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('telefono','Telefono')!!}
                    {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese el telefono','id'=>'telefono'])!!}
                </div>  
                <div class="form-group">
                    {!!Form::label('ubigeo','Ubigeo')!!}
                    {!!Form::text('ubigeo','010104',['class'=>'form-control','placeholder'=>'Ingrese el Correo Electronico','id'=>'ubigeo'])!!}
                </div>  
                <a class="btn btn-danger" href="{{ route('solicitante.index') }}">Cancelar</a>            
                {!!Form::submit('Crear',['class'=>'btn btn-info'])!!}
            {!!Form::close()!!}
        </div>
        
    </section>
    
</div>

@endsection