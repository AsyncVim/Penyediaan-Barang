@extends('layouts.main')

@section('container')
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Penerimaan</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kode Barang</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kode</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Jumlah</h6>
                </th>
               
              </tr>
            </thead>
            <tbody>
               
                @foreach ($data as $d)
                    
                <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $d->KodeBrg }}</h6></td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-semibold">{{ $d->KodeTrm }}</p>
                    
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $d->jumlah }}</h6>
                </td>
                
                
            </tr> 
            @endforeach
                                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    window.print();
  </script>
@endsection