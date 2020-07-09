@extends('layouts.admin2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Descuentos por Curso</h1>
          </div>
          <div class="col-sm-6 text-right">
            <!-- actualizado por marck, usando ELOQUENT -->
            <a class="btn btn-info" href="{{ route('descuento.create') }}">Agregar Descuento</a>
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
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th scope="col">Nombre del Curso</th>
                  <th scope="col">Cantidad Mínima</th>
                  <th scope="col">Cantidad Máxima</th>
                  <th scope="col">Costo del Curso</th>
                  <th scope="col">Porcentaje de Descuento</th>
                  <th scope="col" colspan="2" class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
				<!-- Empieza listado de instructores -->
					@forelse($descuentos as $item=>$descuento)
	                  <tr>
	                    <!--actualizado por marck -->
	                    <th scope="row">{{$item+1}}</th>
	                    <td></td>
	                    <td></td>
	                    <td></td>
	                    <td><button class="btn btn-info btn-sm">
	                      <a class="text-light" href="{{ route('descuento.edit', $descuento->id) }}">
	                        Editar
	                      </a></button></td>
	                    <td>
	                      <!-- $prod-> (debe señalar al "ID") - fijado por marck -->
	                      {!!Form::open(['route'=>['descuento.destroy',$descuento->id],'method'=>'DELETE'])!!}
	                          {{ csrf_field() }}
	                          {{ method_field('DELETE') }}
	                          {!!Form::submit('Eliminar',
	                                ['class'=>'btn btn-danger btn-sm'])
	                          !!}
	                      {!!Form::close()!!}
	                     </td>
	                  </tr>
                  @empty
                    <p><i>No se han encontrado elementos en la base de datos ...</i></p>
                  @endforelse
				<!-- Termina listado -->
                </tbody>
              </table>

              {{ $descuentos->links() }}
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
