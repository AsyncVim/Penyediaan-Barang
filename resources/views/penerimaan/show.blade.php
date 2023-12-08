@extends('layouts.form')

@section('container')
<div class="col-md-4">
    <h5 class="card-title fw-semibold mb-4">Detail Penerimaan</h5>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kode Terima : {{ $data->KodeTrm }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Tanggal : {{ $data->TanggalTrm }}</h6>
        <p class="card-text">Supplier : {{ $data->KodeSupl }}</p>
        <p class="card-text">Nomor Bon : {{ $data->NomorBon }}</p>
        <p class="card-text">Total Terima : {{ $data->TotalTrm }}</p>
      </div>
    </div>
  </div>
@endsection