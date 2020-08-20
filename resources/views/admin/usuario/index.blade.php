@extends('layouts.admin2')

@section('content')

<div class="content-wrapper" id="app">
    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Listado de Contactos</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- /Content Header --!>
    
    <!-- Main Content-->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <usuario-component></usuario-component>
          </div>
        </div>
      </div>
    </section>
    <!-- /Main Content-->

</div>

@endsection