@extends('layouts.admin2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Horarios para Capacitacion de Cursos</h1>
          </div>
          <div class="col-sm-6 text-right">
            <!-- actualizado por marck, usando ELOQUENT -->
            <a class="btn btn-info" href="{{ route('horario-curso.create') }}">Agregar Horario</a>
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
                  <th scope="col">Codigo</th>
                  <th scope="col">Nombre del Curso</th>
                  <th scope="col">Semana del Mes</th>
                  <th scope="col">Dia Laborable</th>
                  <th scope="col">Hora Inicial</th>
                  <th scope="col">Hora Final</th>
                  <th scope="col" colspan="2" class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
					        @forelse($horariocursos as $item=>$horariocurso)
	                  <tr>
	                    <!--actualizado por marck -->
	                    <th scope="row">{{$item+1}}</th>
	                    <td>{{$horariocurso->nombre_curso}}</td>
                      <td>{{$horariocurso->semana_labor}}</td>
                      <td>{{$horariocurso->dia_labor}}</td>
                      <td>{{$horariocurso->hora_inicial}}</td>
                      <td>{{$horariocurso->hora_final}}</td>
	                    <td><button class="btn btn-info">
	                      <a class="text-light" href="{{ route('horario-curso.edit', $horariocurso->id) }}">
	                        Editar
	                      </a></button></td>
	                    <td>
	                      <!--- fijado por marck -->
	                      {!!Form::open(['route'=>['horario-curso.destroy',$horariocurso->id],'method'=>'DELETE'])!!}
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
				<!-- Termina listado -->
                </tbody>
              </table>

              {{ $horariocursos->links() }}
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