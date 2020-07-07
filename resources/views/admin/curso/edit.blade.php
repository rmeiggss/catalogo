@extends('layouts.admin2')

@section('content')
<!--grid-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Curso</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!---->
    <section class="content">
        <div class="grid-hor">

            {!!Form::open(
                    ['route'=>['curso.update',$producto->id],
                    'method'=>'PATCH',
                    'class'=>'col-sm-10'
            ])!!}

                <div class="form-group">
                    {!!Form::label('nombre','Nombre:')!!}
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nuevo nombre ...','id'=>'nombre'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('descripcion','Descripcion')!!}
                    {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Nueva descripcion ...','id'=>'descripcion'])!!}
                </div>
                <div class="form-group">
                {!!Form::label('costo','Costo')!!}
                    {!!Form::text('costo',null,['class'=>'form-control','placeholder'=>'Nuevo costo','id'=>'costo'])!!}
                </div>

            {!!Form::submit('Editar',['class'=>'btn btn-success'])!!}
            <a class="btn btn-danger" href="{{ route('curso.index') }}">Cancelar</a>

            {!!Form::close()!!}
        </div>
    </section>
</div>
@endsection