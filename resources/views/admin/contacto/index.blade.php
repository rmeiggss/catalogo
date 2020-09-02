@extends('layouts.admin')

@section('content')

<!-- Content Header -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Listado de Contactos</h1>
      </div>
      <div class="col-sm-6 text-right">
        <a class="btn btn-info" href="/usuario/create">Agregar Usuario</a>
      </div>        
    </div>
  </div>
</section>
<!-- /Content Header -->
    
<!-- Main Content-->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <indexcontacto-component></indexcontacto-component>
      </div>
    </div>
  </div>
</section>
<!-- /Main Content-->

@endsection