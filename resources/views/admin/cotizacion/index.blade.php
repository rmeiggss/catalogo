@extends('layouts.admin2')
 
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Cotizaciones (actualizado por Martin)</h1>
          </div>
          <div class="col-sm-6 text-right">
            <a class="btn btn-info" href="{{ url('/cotizacion/create') }}">Agregar Curso</a> 
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
                  <th scope="col">Numero</th>
                  <th scope="col">Observacion</th>
                  <th scope="col">Total</th>
                  <th scope="col" colspan="2" class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($cotizaciones as $item=>$cot)
                  <tr>
                    <th scope="row">{{$item+1}}</th>
                    <td>{{$cot->COTIP_Codigo}}</td>
                    <td>{{$cot->COTIC_Observacion}}</td>
                    <td>{{$cot->COTIC_Total}}</td>
                    <td><button class="btn btn-info">Editar</button></td>
                    <!--td></td-->
                    <td>
                      {!!Form::open(['route'=>['cotizacion.destroy',$cot->COTIP_Codigo],'method'=>'DELETE'])!!}
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