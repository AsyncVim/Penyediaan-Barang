@extends('layouts.form')

@section('container')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Formulir Pengeluaran Barang</h5>
        <div class="card">
          <div class="card-body">
            <form method="post" action="/out">
              @csrf
              <input type="hidden" name="kode" value="{{ $barang->KodeBrg }}">
              <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $barang->KodeBrg }}" disabled>
               
              </div>
              <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $barang->NamaBrg }}" disabled>

              </div>
              <div class="mb-3 ">

                <label class="form-label" for="exampleCheck1">Jumlah</label>
                <input type="number" class="form-control  @error('jumlah') is-invalid @enderror" id="exampleCheck1" name="jumlah" value="{{ old('jumlah') }}">
                @error('jumlah')
                    <div class="invalid_feedback text-danger">
                      {{ $message }}
                  </div>
                    @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
       
      </div>
    </div>
  </div>
@endsection