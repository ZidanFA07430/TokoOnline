    @extends('pelanggan.layout.index')

    @section('content')
        <h2 class="mt-5">SELAMAT DATANG DI TOKO KAMI HABIB STORE</h2>
        <div class="content mt-3 d-flex flex-lg-wrap gap-5 mb-5">
            @if ($data->isEmpty())
                <h1>Belum ada product ...!</h1>
            @else
               <div style="width:220px;">            
                    <div class="card-body">
                        <p class="m-0 text-justify"> </p>
                        <p class="m-0"></p>
                    </div>
                    <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                        <p class="m-0" style="font-size: 16px; font-weight:600;">
                        </div>
                </div>
                
        </div>
        <div class="pagination d-flex flex-row justify-content-between">
            <div>
            </div>
        </div>
        @endif

    @endsection
