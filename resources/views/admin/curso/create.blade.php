@extends('layouts.admin')

@section('content')
<!--banner-->	
<div class="banner">
   <h2>
        <a href="index.html">Libros</a>
        <i class="fa fa-angle-right"></i>
        <span>Listar</span>
    </h2>
</div>
<!--//banner-->
<!--grid-->
<div class="grid-system">
    <!---->
    <div class="horz-grid">
        <div class="grid-hor">
            <h3 id="grid-example-basic">Nuevo Curso</h3></div>
        <!----> 
        <div class="grid-hor">
            {!!Form::open(['route'=>'curso.store','method'=>'POST','class'=>'col-sm-10'])!!}
                <div class="form-group">
                    {!!Form::label('nombre','Nombre:')!!}
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre','id'=>'nombre'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('descripcion','Descripcion')!!}
                    {!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion','id'=>'descripcion'])!!}
                </div>
                <div class="form-group">
                {!!Form::label('costo','Costo')!!}
                    {!!Form::text('costo',null,['class'=>'form-control','placeholder'=>'Ingrese el costo','id'=>'costo'])!!}
                </div> 
                {!!Form::submit('Grabar',['class'=>'btn btn-success'])!!}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection