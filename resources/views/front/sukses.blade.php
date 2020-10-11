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
                        <span class="icon icon-shape icon-shape-success rounded-circle mb-4">
                            <i class="fas fa-check"></i>
                        </span>
                        <h1 class="mb-4">Data Anda Sudah Terkirim</h1>
                        <p class="lead mb-4 px-sm-5">
                            Terima kasih {{ $registrant->personal->nama }}, data pendaftaran Anda sudah tersimpan di database.
                        </p>


                            <div class="col-md-6 mx-auto">
                                <div class="card bg-gradient-primary">
                                    <div class="card-body text-white">
                                        Kode pendaftaran Anda adalah: <strong>{{ $registrant->random_char }}</strong>
                                    </div>
                                </div>    
                            </div>

                            
                        <div class="row mx-3 justify-content-center">
                            <h2>Apa yang selanjutnya dilakukan?</h2>
                            <p>Konfirmasikan pendaftaran Anda dengan mengirimkan kode pendaftaran Anda melalui WhatsApp ke nomor <a href="{{ 'https://api.whatsapp.com/send?phone=6285214971094&text=' . $registrant->random_char }}">0852 1497 1094</a></p>
                        </div>

                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">
                                <a href="{{ 'https://api.whatsapp.com/send?phone=6285214971094&text=' . $registrant->random_char }}" target="_blank" class="btn btn-success">Klik di sini untuk konfirmasi</a>
                            </div>

                        </div>

                        <div class="row justify-content-center">
                            <p>Anda dapat selalu melihat rincian pendaftaran Anda melalui tautan:</p>
                            <span><a href="{{ route('form.show', [ 'kode' => $registrant->random_char ]) }}">{{ route('form.show', [ 'kode' => $registrant->random_char ]) }}</a><span>
                        </div>

                        <a class="btn btn-default animate-up-2 mt-4" href="{{ route('form.index') }}">Kembali ke Halaman Depan</a>

                    </div>                
                </div>

            </div>
        </div>
    </div>

</div>
@endsection