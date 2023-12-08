@extends('layouts.form')

@section('container')

<div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Formulir Penerimaan Barang</h5>
        <div class="card">
          <div class="card-body">
            <form method="post" action="/in">
              @csrf
              <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                <input type="text" class="form-control  @error('KodeBrg') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="KodeBrg" value="{{ old('KodeBrg') }}">
                @error('KodeBrg')
                    <div class="invalid_feedback text-danger">
                      {{ $message }}
                  </div>
                    @enderror
              </div>
              <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control  @error('NamaBrg') is-invalid @enderror" id="exampleInputPassword1" name="NamaBrg" value="{{ old('NamaBrg') }}">
                @error('NamaBrg')
                    <div class="invalid_feedback text-danger">
                      {{ $message }}
                  </div>
                    @enderror
              </div>
              <div class="mb-3 ">

                <label class="form-label" for="exampleCheck1">Jumlah</label>
                <input type="number" class="form-control  @error('JumlahBrg') is-invalid @enderror" id="exampleCheck1" name="JumlahBrg" value="{{ old('JumlahBrg') }}">
                @error('JumlahBrg')
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