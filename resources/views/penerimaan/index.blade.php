@extends('layouts.main')

@section('container')
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Penerimaan</h5>
        <a href="penerimaan/create" class="btn btn-primary mb-3">Masukkan Barang</a>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nomor Bon</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kode</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Supplier</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Tanggal</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Total Terima</h6>
                </th>
               
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0"></h6>
                </th>
              </tr>
            </thead>
            <tbody>
               
                @foreach ($data as $d)
                    
                <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $d->NomorBon }}</h6></td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-semibold">{{ $d->KodeTrm }}</p>
                    
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $d->KodeSupl }}</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $d->TanggalTrm }}</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $d->TotalTrm }}</h6>
                </td>
                <td class="border-bottom-0">
                  
                    <a href="penerimaan/{{ $d->KodeTrm }}" class="btn btn-info m-1">Detail</a>
                    
                </td>
                
            </tr> 
            @endforeach
                                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection