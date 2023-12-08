@extends('layouts.form')

@section('container')
<div class="col-md-4">
    <h5 class="card-title fw-semibold mb-4">Detail Permintaan</h5>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kode Permintaan : {{ $req->NomorPermintaan }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Kode Barang : {{ $barang->KodeBrg }}</h6>
        <p class="card-text">Nama Barang : {{ $barang->NamaBrg }}</p>
        <p class="card-text">Stock : {{ $barang->JumlahBrg }}</p>
        <p class="card-text">Diminta : {{ $req->JumlahBrg }}</p>

      </div>
    </div>
  </div>
@endsection