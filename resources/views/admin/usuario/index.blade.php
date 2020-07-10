@extends('layouts.admin2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Usuarios</h1>
            <!--<h1>Listado de Cursos (Actualizado por edward)</h1>-->
          </div>
          <div class="col-sm-6 text-right">
            <!-- actualizado por marck, usando ELOQUENT -->
            <a class="btn btn-info" href="#">Agregar Usuario</a>
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
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Email</th>
                  <th scope="col">Rol</th>
                  <th scope="col" colspan="2" class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @forelse($usuarios as $item=>$user)
                  <tr>
                    <!--actualizado por marck -->
                    <th scope="row">{{$item+1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->ROL_Descripcion}}</td>
                    <td><button class="btn btn-info">
                      <a class="text-light" href="#">
                        Editar
                      </a></button></td>
                    <td>
                      <!-- $prod-> (debe señalar al "ID") - fijado por marck -->
                      {!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          {!!Form::submit('Eliminar',
                                ['class'=>'btn btn-danger'])
                          !!}
                      {!!Form::close()!!}
                     </td>
                  </tr>
                  @empty
                    <p><i>No se han encontrado elementos en la base de datos ...</i></p>
                  @endforelse
                    <!-- -------------------- -->
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