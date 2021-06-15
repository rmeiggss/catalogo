@extends('layouts.admin')

@section('content')

<!-- Content Header-->
<section class="content-header">
  <div class="container-fluid">
    <div class="row titulo-vista">
      <h5>Agregar Cotización de Capacitación</h5>
    </div>
  </div>
</section>
<!-- /Content Header-->

<!-- Main Content-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <createcotizacioncapacitacion-component
            token="{{csrf_token()}}"
            :user="{{ json_encode(Auth::user()) }}"></createcotizacioncapacitacion-component>
      </div>
    </div>
  </div>
</section>
<!-- /Main Content-->

@endsection