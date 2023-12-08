@extends('layouts.form')

@section('container')
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Cetak Data Detail Penerimaan</h5>
        <div class="table-responsive">
          <form action="/cetak" method="post">
            @csrf
              <label for="exampleInputEmail1" class="form-label">Pilih Kode barang</label>
           <div class="row">
            <div class="col">

                <select class="form-select" aria-label="Default select example" name="KodeTrm">
                   @foreach ($data as $d)
                       <option value="{{ $d->KodeTrm }}">{{ $d->KodeTrm  }} - ({{ $d->KodeBrg }})</option>
                   @endforeach
                  </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Cetak</button>
            </div>
           </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection