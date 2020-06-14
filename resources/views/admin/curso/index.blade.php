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
            <h3 id="grid-example-basic" class="col-sm-8">Listado de Cursos</h3>
            <div class="col-sm-4 text-right">
                <a class="btn btn-info" href="{{ url('/curso/create') }}">Agregar Curso</a>    
            </div>
        </div>
        <!----> 
        <div class="grid-hor">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Costo</th>
                  <th scope="col" colspan="2" class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($productos as $item=>$prod)
                <tr>
                  <th scope="row">{{$item+1}}</th>
                  <td>{{$prod->CURSOC_Nombre}}</td>
                  <td>{{$prod->CURSOC_Descripcion}}</td>
                  <td>{{$prod->CURSOC_Costo}}</td>
                  <td><button class="btn btn-info">Editar</button></td>
                  <!--td></td-->
                  <td>
                    {!!Form::open(['route'=>['curso.destroy',$prod->CURSOP_Codigo],'method'=>'DELETE'])!!}
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                    {!!Form::close()!!}
                   </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection