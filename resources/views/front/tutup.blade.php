@extends('front.front')

@section('main')
<!-- Main content -->
<div class="main-content">

    @include('front._header')    

    <!-- Page content -->
    <div class="container mt--9 pb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
            <div class="card bg-secondary border border-soft">
                    <div class="card-body">
                        <span class="icon icon-shape icon-shape-info rounded-circle mb-4">
                            <i class="fas fa-mug-hot"></i>
                        </span>
                        <h1 class="mb-4">Pendaftaran Sudah Ditutup</h1>
                        <p class="lead mb-4 px-sm-5">
                            Terima kasih sudah tertarik dengan program KAJIMU. Namun, sayang sekali kami sudah tidak menerima pendaftaran baru lagi untuk Angkatan 5. Semoga bisa bertemu dengan Anda di angkatan berikutnya.
                        </p>

                        <p class="lead mb-4 px-sm-5">Semoga Allah senantiasa memberkahi Anda sekeluarga.</p>

                    </div>                
                </div>

            </div>
        </div>
    </div>

</div>
@endsection