@extends('layouts.tamplate')
@section('title')
Dashboard
@endsection
@section('content')
<div class="row">
  <!-- book1 -->
  <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
              <span class="info-box-text">User</span>
              <span class="info-box-number">
                  10
              </span>
          </div>
          <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
  </div>
  <!-- /.info-box-content -->
  <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

          <div class="info-box-content">
              <span class="info-box-text">Menu</span>
              <span class="info-box-number">41,410</span>
          </div>
          <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
  </div>
  <!-- book 3-->
  <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

          <div class="info-box-content">
              <span class="info-box-text">Pesan</span>
              <span class="info-box-number">760</span>
          </div>
          <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
  </div>
  <!-- book 4-->
</div>
<!-- book 2 -->
@endsection
