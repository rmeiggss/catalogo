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
            <h3 id="grid-example-basic">Editar Libro</h3></div>
        <!----> 
        <div class="grid-hor">
            {!!Form::model($producto,['route'=>['producto.update',$producto],'method'=>'PUT','class'=>'col-sm-10'])!!}
                <div class="form-group">
                    {!!Form::label('id','Codigo:')!!}
                    {!!Form::text('id',null,['class'=>'form-control','placeholder'=>'Ingrese el codigo','id'=>'id'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('titulo','Titulo:')!!}
                    {!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo','id'=>'titulo'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('precio','Precio')!!}
                    {!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ingrese el precio','id'=>'precio'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('categoria','Categoria')!!}
                    <select class="form-control" name='categoria' id="categoria">
                        <option value="0">::Seleccione::</option>
                        <option value="000001">Categ2</option>
                    </select>
                </div> 
                {!!Form::submit('Grabar',['class'=>'btn btn-success'])!!}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection