@extends('layouts.admin2')
 
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h1>Editar Cotizaciones</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main Content-->
    <section class="content" id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!--Main content-->
                    <div class="invoice p-3 mb-3">
                     {!!Form::open(['route'=>'cotizacion.store','method'=>'post'])!!}   
                        <!-- info row 1 -->
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                              <div class="row form-group">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Solicitante</label>
                                {!!Form::select('solicitante',Arr::pluck($solicitantes,'SOLIC_Nombre','id'),'',['placeholder'=>'::Seleccione::','class'=>'col-sm-6 form-control-sm','id'=>'solicitante'])!!}
                              </div>
                          </div>
                          <div class="col-sm-4 invoice-col">
                              <div class="row form-group">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Numero</label>
                                {!!Form::text('numero',NULL,['class'=>'col-sm-6 form-control-sm','id'=>'numero','maxlenght'=>'11'])!!}  
                              </div>
                          </div>
                          <div class="col-sm-4 invoice-col">
                            <div class="row form-group">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Fecha</label>
                                {!!Form::text('fecha',NULL,['class'=>'col-sm-6 form-control-sm','id'=>'fecha'])!!}
                            </div>
                          </div>
                        </div>
                        <!-- /.info row 1 -->
                        
                         <!-- info row 2 -->
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                              <div class="row form-group">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Contacto</label>
                                {!!Form::text('contacto',NULL,['class'=>'col-sm-6 form-control-sm','id'=>'contacto'])!!}
                              </div>
                          </div>
                          <div class="col-sm-4 invoice-col">
                              <div class="row form-group">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Usuario</label>
                                {!!Form::text('usuario',NULL,['class'=>'col-sm-6 form-control-sm','id'=>'usuario'])!!}
                              </div>
                          </div>
                          <div class="col-sm-4 invoice-col">
                             <div class="row form-group">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Agregar</label>
                                <a href="#" @click="addRow()"><i class="fas fa-plus" class="form-control-sm" id="agregar"></i></a>
                            </div>
                          </div>
                        </div>                        
                        <!-- /.info row 2 -->
                        
                        <!-- Table row -->
                         <div class="row">
                           <div class="col-12 table-responsive">
                            <table class="table table-striped">
                               <thead>
                                <tr class="text-center">
                                 <th style="width:5%;">No</th>
                                 <th style="width:30%;">Nombre</th>
                                 <th style="width:30%;">Descripcion</th>
                                 <th style="width:10%;">Fabricante</th>
                                 <th style="width:5%;">Ficha</th>
                                 <th style="width:5%;">Pruebas</th>
                                 <th style="width:5%;">Cantidad</th>
                                 <th style="width:5%;">P.Unitario</th>
                                 <th style="width:5%;">Subtotal</th>
                               </tr>
                               </thead>
                                 <tbody>
                                     <tr class="text-center" v-for="row in rows">
                                       <td><label style="border: 1px solid red;color: blue;"> x </label></td>
                                       <td><input type="text" class="form-control-sm w-100" name="nombre[]"></td>
                                       <td><input type="text" class="form-control-sm w-100" name="descripcion[]"></td>
                                       <td><input type="text" class="form-control-sm w-100" name="fabricante[]"></td>
                                       <td class="pb-0 mb-0"><i class="far fa-file-pdf" style="color:red;font-size: 23px;"></i></td>
                                       <td><button class="btn btn-outline-success btn-lg btn-sm">Lista</button></td>
                                       <td><input type="text" class="form-control-sm w-100" name="cantidad[]"></td>
                                       <td><input type="text" class="form-control-sm w-100" name="unitario[]"></td>
                                       <td><input type="text" class="form-control-sm w-100" name="subtotaldet[]"></td>
                                     </tr>
                                 </tbody>
                             </table>
                           </div>
                           <!-- /.col -->
                         </div>
                         <!-- /.row -->
                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-9">&nbsp;</div>
                            <!-- /.col -->
                            <div class="col-3">
                              <div class="table-responsive">
                                <table class="table">
                                  <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>{!!Form::text('subtotal',NULL,['class'=>'form-control-sm w-50','id'=>'subtotal'])!!}</td>
                                  </tr>
                                  <tr>
                                    <th>I.G.V. (18%)</th>
                                    <td>{!!Form::text('igv',NULL,['class'=>'form-control-sm w-50','id'=>'igv'])!!}</td>
                                  </tr>
                                  <tr>
                                    <th>Total:</th>
                                    <td>{!!Form::text('total',NULL,['class'=>'form-control-sm w-50','id'=>'total'])!!}</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->                         
                          <div class="row text-center">
                              <div class="col text-center">
                                  <a class="btn btn-danger" href="{{ route('cotizacion.index') }}">Cancelar</a>
                                  {!!Form::submit('Grabar',['class'=>'btn btn-info'])!!}
                              </div>
                          </div>
                     {!!Form::close()!!}        
                    </div>
                    <!--/Main content-->
                </div>
            </div>
        </div>
    </section>
    
</div>

@endsection