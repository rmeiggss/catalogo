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
                              <i class="fas fa-globe"></i> Laboratorio de Electricidad
                              <small class="float-right">Fecha: 2/10/2014</small>
                            </h4>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                              <div class="row form-group">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Empresa</label>
                                <select class="col-sm-6 form-control-sm">
                                    <option>::Seleccione::</option>
                                </select>                                  
                              </div>
                          </div>
                          <!-- /.col -->
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
                                <label class="col-sm-2 col-form-label col-form-label-sm">Numero</label>
                                <input type="text" class="col-sm-6 form-control-sm" value="#007612">
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
                               <tr>
                                 <th>No</th>
                                 <th>Muestra</th>
                                 <th>Cantidad</th>
                                 <th>P.Unitario</th>
                                 <th>Subtotal</th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                                 <td>1</td>
                                 <td><input type="text" class="form-control-sm w-100" value="Call of Duty"></td>
                                 <td><input type="text" class="form-control-sm w-50" value="455-981-221"></td>
                                 <td><input type="text" class="form-control-sm w-20" value="55.00"></td>
                                 <td>$64.50</td>
                               </tr>
                               <tr>
                                 <td>1</td>
                                 <td>Need for Speed IV</td>
                                 <td>247-925-726</td>
                                 <td>Wes Anderson umami biodiesel</td>
                                 <td>$50.00</td>
                               </tr>
                               <tr>
                                 <td>1</td>
                                 <td>Monsters DVD</td>
                                 <td>735-845-642</td>
                                 <td>Terry Richardson helvetica tousled street art master</td>
                                 <td>$10.70</td>
                               </tr>
                               <tr>
                                 <td>1</td>
                                 <td>Grown Ups Blue Ray</td>
                                 <td>422-568-642</td>
                                 <td>Tousled lomo letterpress</td>
                                 <td>$25.99</td>
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
                                    <td>$250.30</td>
                                  </tr>
                                  <tr>
                                    <th>I.G.V. (18%)</th>
                                    <td>$10.34</td>
                                  </tr>
                                  <tr>
                                    <th>Total:</th>
                                    <td>$265.24</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->                         
                         
                    </div>
                    <!--/Main content-->
                </div>
            </div>
        </div>
    </section>
    
</div>

@endsection