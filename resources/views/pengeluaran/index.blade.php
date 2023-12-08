@extends('layouts.main')

@section('container')
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Pengeluaran</h5>
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
                  <h6 class="fw-semibold mb-0">Costumer</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Total Ambil</h6>
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
                    <p class="mb-0 fw-semibold">{{ $d->KodeKlr }}</p>
                    
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $d->KodeCust }}</h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $d->TotalMnt }}</h6>
                </td>
              
                <td class="border-bottom-0">
                  
                    <a href="pengeluaran/{{ $d->KodeKlr }}" class="btn btn-info m-1">Detail</a>
                    
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