@extends('layouts.form')

@section('container')
<div class="col-md-4">
    <h5 class="card-title fw-semibold mb-4">Detail Pengeluaran</h5>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kode Keluar : {{ $data->KodeKlr }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Kode Barang : {{ $data->KodeBrg }}</h6>
        <p class="card-text">Stock : {{ $data->Stock }}</p>
        <p class="card-text">Jumlah : {{ $data->Jumlah }}</p>
        <p class="card-text">Dikirim : {{ $data->Dikirim }}</p>
        <p class="card-text">Keterangan : {{ $data->Ket }}</p>
      </div>
    </div>
  </div>
@endsection