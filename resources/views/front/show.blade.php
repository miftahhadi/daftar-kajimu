@extends('front.front')

@section('main')

<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    @include('front._header')
    
    <!-- Page content -->
    <div class="container mt--9 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-8">

                <!-- Data Diri -->
                <div class="card bg-secondary border border-soft">
                    
                    <div class="card-header bg-transparent">
                        <h3 class="mb-0 text-center">Data Diri</h3>
                    </div>

                    <div class="card-body px-lg-5 py-lg-5">
                        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h4>Kode Pendaftaran</h4>
                                <p class="mb-0">{{ $registrant->random_char }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h4>Terdaftar pada</h4>
                                <p class="mb-0">{{ $registrant->created_at }}</p>
                            </div>
                        </div>
                        
                    </div>
                        
                        <div class="form-group">
                            <h4>Nama lengkap</h4>
                            <p class="mb-0">{{ $registrant->personal->nama }}</p>

                        </div>
                        
                        <div class="row mb-4">


                            <div class="col-md-6">

                                <h4>Tanggal lahir</h4>
                                <p class="mb-0">{{ $dt->format('d/m/Y') }}</p>

                            </div>

                            <div class="col-md-6">

                                <h4>Usia</h4>
                                <p class="mb-0">{{ $usia }} tahun</p>

                            </div>

                        </div>

                        <div class="form-group">

                            <h4>Jenis kelamin</h4>
                            <p class="mb-0">{{ $registrant->personal->jenis_kelamin }}</p>

                        </div>

                        <div class="form-group">

                            <h4>Domisili</h4>
                            <p class="mb-0">{{ $registrant->personal->domisili }}</p>

                        </div>

                        <div class="form-group">

                            <h4>Nomor WhatsApp</h4>
                            <p class="mb-0">{{ $registrant->personal->nomor_wa }}</p>

                        </div>
                        
                        <div class="form-group">

                            <h4>Email aktif</h4>
                            <p class="mb-0">{{ $registrant->personal->email }}</p>

                        </div>
                        
                        <div class="form-group">

                            <h4>Pekerjaan</h4>
                            <p class="mb-0">{{ $registrant->personal->pekerjaan }}</p>

                        </div>

                        <div class="form-group">

                            <h4>Sudah pernah berhaji atau berumrah?</h4>
                            <p class="mb-0">{{ $registrant->personal->pernah_haji }}</p>

                        </div>

                        <div class="form-group">

                            <h4>Motivasi mengikuti KAJIMU</h4>
                            <p class="mb-0">{{ $registrant->personal->motivasi }}</p>

                        </div>
                        
                    </div>
                </div>                  

            </div>
        </div>
    </div>
</div>

@endsection