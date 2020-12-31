@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row titulo-vista">
      <h5>Editar Cotización de Ensayo</h5>
    </div>
  </div>
</section>
<!-- /Content Header-->

<!-- Main Content-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <editcotizacion-component codigo="{{$cotizacion->COTIP_Codigo}}" token="{{csrf_token()}}"></editcotizacion-component>
      </div>
    </div>
  </div>
</section>
<!-- Main Content-->

@endsection