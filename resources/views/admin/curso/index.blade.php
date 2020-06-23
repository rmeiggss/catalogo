@extends('layouts.admin2')
 
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Cursos (Actualizado por edward)</h1>
          </div>
          <div class="col-sm-6 text-right">
            <a class="btn btn-info" href="{{ url('/curso/create') }}">Agregar Curso</a> 
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main Content-->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
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
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    
</div>

@endsection