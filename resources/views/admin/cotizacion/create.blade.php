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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!--Main content-->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                          <div class="col-12">
                            <h4>
                              <small class="float-right">Fecha: 2/10/2014</small>
                            </h4>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                              <div class="row form-group">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Solicitante</label>
                                <select class="col-sm-6 form-control-sm">
                                    <option>::Seleccione::</option>
                                </select>                                  
                              </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                              <div class="row form-group">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Contacto</label>
                                <select class="col-sm-6 form-control-sm">
                                    <option>::Seleccione::</option>
                                </select>                                  
                              </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            <div class="row form-group">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Numero</label>
                                <input type="text" class="col-sm-6 form-control-sm" value="#007612">
                                <i class="fas fa-plus" class="form-control-sm"></i>
                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
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
                               <tr class="text-center">
                                 <td>1</td>
                                 <td><input type="text" class="form-control-sm w-100" value="Telurómetro"></td>
                                 <td><input type="text" class="form-control-sm w-100" value="Equipo para medir la resitencia"></td>
                                 <td><input type="text" class="form-control-sm w-100" value="Siemens"></td>
                                 <td class="pb-0 mb-0"><i class="far fa-file-pdf" style="color:red;font-size: 23px;"></i></td>
                                 <td><button class="btn btn-outline-success btn-lg btn-sm">Lista</button></td>
                                 <td><input type="text" class="form-control-sm w-100" value="250"></td>
                                 <td><input type="text" class="form-control-sm w-100" value="3"></td>
                                 <td><input type="text" class="form-control-sm w-100" value="750"></td>
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
                                    <td><input type="text" class="form-control-sm w-50" value="$250.30"></td>
                                  </tr>
                                  <tr>
                                    <th>I.G.V. (18%)</th>
                                    <td><input type="text" class="form-control-sm w-50" value="$10.34"></td>
                                  </tr>
                                  <tr>
                                    <th>Total:</th>
                                    <td><input type="text" class="form-control-sm w-50" value="$265.24"></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->                         
                          <div class="row text-center">
                              <div class="col text-center">
                                  <button class="btn btn-danger">Cancelar</button>&nbsp;  
                                <button class="btn btn-success">Grabar</button>    
                              </div>
                          </div>
                          
                    </div>
                    <!--/Main content-->
                </div>
            </div>
        </div>
    </section>
    
</div>

@endsection