@extends('layouts.admin')
 
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
        <h1>Editar Cotizacion</h1>
    </div>
  </div>
</section>
    
<!-- Main Content-->
<section class="content" id="app">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!--Main content-->
                <div class="invoice p-3 mb-3">  
                {!!Form::model($cotizacion, ['route'=>['cotizacion.update', $cotizacion->COTIP_Codigo],'method'=>'PATCH', 'class'=>'col-sm-10'])!!}                 
                    <!-- info row 1 -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                          <div class="row form-group">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Solicitante</label>
                            {!!Form::select('solicitante',Arr::pluck($solicitantes,'SOLIC_Nombre','id'),$cotizacion->SOLIP_Codigo,['placeholder'=>'::Seleccione::','class'=>'col-sm-6 form-control-sm','id'=>'solicitante'])!!}
                          </div>
                      </div>
                      <div class="col-sm-4 invoice-col">
                        <div class="row form-group">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Fecha</label>
                            {!!Form::text('fecha',$cotizacion->COTIC_Fecha,['class'=>'col-sm-4 form-control-sm','id'=>'fecha'])!!}
                        </div>
                      </div>                            
                      <div class="col-sm-4 invoice-col">
                          <div class="row form-group">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Numero</label>
                            {!!Form::text('numero',$cotizacion->COTIC_Numero,['class'=>'col-sm-3 form-control-sm','id'=>'numero','maxlenght'=>'11','readonly'=>'readonly'])!!}  
                          </div>
                      </div>
                    </div>
                    <!-- /.info row 1 -->

                     <!-- info row 2 -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                          <div class="row form-group">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Contacto</label>
                            {!!Form::text('contacto',NULL,['class'=>'col-sm-6 form-control-sm','id'=>'contacto','disabled'=>'disabled'])!!}
                          </div>
                      </div>
                      <div class="col-sm-4 invoice-col">
                          <div class="row form-group">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Usuario</label>
                            {!!Form::select('usuario',Arr::pluck($usuarios,'name','id'),$cotizacion->USUA_Codigo,['placeholder'=>'::Seleccione::','class'=>'col-sm-6 form-control-sm','id'=>'usuario'])!!}
                          </div>
                      </div>
                      <div class="col-sm-4 invoice-col">
                         <div class="row form-group">

                        </div>
                      </div>
                    </div>                        
                    <!-- /.info row 2 -->

                    <!-- Detalle -->
                    <createcotizacion-component></createcotizacion-component>
                     <!-- /.Detalle -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-9">&nbsp;</div>
                        <!-- /.col -->
                        <div class="col-3">
                          <div class="table-responsive">
                            <table class="table">
                              <tr>
                                <th style="width:50%">Subtotal S/.:</th>
                                <td>{!!Form::text('subtotal',$cotizacion->COTIC_SubTotal,['class'=>'form-control-sm w-50','id'=>'subtotal','disabled'=>'disabled'])!!}</td>
                              </tr>
                              <tr>
                                <th>I.G.V. S/. (18%)</th>
                                <td>{!!Form::text('igv',$cotizacion->COTIC_Igv,['class'=>'form-control-sm w-50','id'=>'igv','disabled'=>'disabled'])!!}</td>
                              </tr>
                              <tr>
                                <th>Total S/.:</th>
                                <td>{!!Form::text('total',$cotizacion->COTIC_Total,['class'=>'form-control-sm w-50','id'=>'total','disabled'=>'disabled'])!!}</td>
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

@endsection
