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

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <span class="alert-icon"><i class="fas fa-exclamation-triangle"></i></span>
                    <span><strong>Perhatian!</strong> Terdapat kesalahan pengisian data. Mohon periksa kembali isian Anda</span>
                </div>

        
                <div class="alert alert-info" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text">Jangan lupa untuk kembali mengecek kolom Jenis Kelamin</span>
                </div>
            @endif
            
                <form role="form" action="{{ route('form.submit') }}" method="post">
                @csrf

                    <!-- Data Diri -->
                    <div class="card bg-secondary border border-soft mt-5" id="daftar">
                        
                        <div class="card-header bg-transparent">
                            <h3 class="mb-0 text-center">Pendaftaran Baru</h3>
                        </div>

                        <div class="card-body px-lg-5 py-lg-5">
                            
                            <div class="mb-4">
                                <small><i>Kolom bertanda</i> <span class="text-danger">*</span><i> wajib diisi</i></small>
                            </div>    


                            <div class="form-group">
                                <label for="pendaftar[nama]">Nama lengkap <span class="text-danger">*</span></label>
                                <input class="form-control @error('pendaftar.nama') is-invalid @else form-control-alternative @enderror" placeholder="Nama lengkap" type="text" name="pendaftar[nama]" id="pendaftar[nama]" value="{{ old('pendaftar.nama') ?? '' }}" required>

                                @error('pendaftar.nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror


                            </div>
                            

                            <div class="form-group">

                                <label for="pendaftar[tanggal_lahir]">Tanggal lahir <span class="text-danger">*</span></label>
                                <div class="@error('pendaftar.tanggal_lahir')  @else input-group input-group-merge input-group-alternative @enderror">

                                    <div class="input-group date">
                                        <input type="date" class="form-control @error('pendaftar.tanggal_lahir') is-invalid @enderror" placeholder="Tanggal lahir" name="pendaftar[tanggal_lahir]" id="pendaftar[tanggal_lahir]" value="{{ old('pendaftar.tanggal_lahir') ?? '' }}" required>

                                    </div>
                                
                                </div>

                                    @error('pendaftar.tanggal_lahir')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror



                            </div>
                           

                            <div class="form-group">

                                <label for="pendaftar[jenis_kelamin]">Jenis kelamin <span class="text-danger">*</span></label>
                                <div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="pendaftar[jenis_kelamin]" name="pendaftar[jenis_kelamin]" class="custom-control-input" value="Laki-laki">
                                        <label class="custom-control-label" for="pendaftar[jenis_kelamin]">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="pendaftar[jenis_kelamin]2" name="pendaftar[jenis_kelamin]" class="custom-control-input" value="Perempuan">
                                        <label class="custom-control-label" for="pendaftar[jenis_kelamin]2">Perempuan</label>
                                    </div>
                                </div>

                                @error('pendaftar.jenis_kelamin')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="pendaftar[domisili]">Domisili sekarang</label>
                                <input class="form-control @error('pendaftar.domisili') is-invalid @else form-control-alternative @enderror" placeholder="Domisili sekarang" type="text" name="pendaftar[domisili]" id="pendaftar[domisili]" value="{{ old('pendaftar.domisili') }}">

                                @error('pendaftar.domisili')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>
                            
                            <div class="form-group">

                                <label for="pendaftar[nomor_wa]">Nomor WhatsApp <span class="text-danger">*</span></label>
                                <input class="form-control @error('pendaftar.nomor_wa') is-invalid @else form-control-alternative @enderror" placeholder="Nomor WhatsApp" type="text" name="pendaftar[nomor_wa]" id="pendaftar[nomor_wa]" value="{{ old('pendaftar.nomor_wa') }}" required>

                                <p><small>Jika nomor Anda bukan nomor Indonesia, sertakan kode negara di awal.</small></p>
                                
                                @error('pendaftar.nomor_wa')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>
                            
                            <div class="form-group">

                                <label for="pendaftar[email]">Email aktif <span class="text-danger">*</span></label>
                                <input class="form-control @error('pendaftar.email') is-invalid @else form-control-alternative @enderror" placeholder="Email Aktif" type="email" name="pendaftar[email]" id="pendaftar[email]" value="{{ old('pendaftar.email') }}" required>

                                <small>Jika kami gagal menghubungi Anda lewat WhatsApp, kami tetap dapat memberi kabar atau pengumuman pada Anda lewat email.</small>

                                @error('pendaftar.email')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>
                            
                            <div class="form-group">

                                <label for="pendaftar[pekerjaan]">Pekerjaan</label>
                                <input class="form-control @error('pendaftar.pekerjaan') is-invalid @else form-control-alternative @enderror" placeholder="Pekerjaan" type="text" name="pendaftar[pekerjaan]" id="pendaftar[pekerjaan]" value="{{ old('pendaftar.pekerjaan') }}">

                                @error('pendaftar.pekerjaan')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="pendaftar[pernah_haji]">Apakah Anda sudah pernah berhaji atau berumrah? </label>
                                <input class="form-control @error('pendaftar.pernah_haji') is-invalid @else form-control-alternative @enderror" placeholder="Contoh: Ya, belum, punya rencana, akan segera berangkat, dsb" type="text" name="pendaftar[pernah_haji]" id="pendaftar[pernah_haji]" value="{{ old('pendaftar.pernah_haji') ?? '' }}">

                                @error('pendaftar.pernah_haji')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror


                            </div> 
                            
                            <div class="form-group">
                                <label for="pendaftar[motivasi]">Apa motivasi Anda mengikuti KAJIMU?</label>
                                <textarea class="form-control form-control-alternative " 
                                            id="pendaftar[motivasi]" 
                                            rows="3" 
                                            placeholder="Motivasi mengikuti KAJIMU"
                                            name="pendaftar[motivasi]"
                                >{{ old('pendaftar.motivasi') }}</textarea>
                            </div>

                        </div>
                    </div>

                    <!--Submit -->
                    <div class="text-center">
                        <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#submit">
                            Kirim Data Pendaftaran Saya
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="submitLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Periksa kembali isian data Anda. Apakah Anda sudah yakin dan ingin mengirim data pendaftaran Anda?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class="btn btn-success" value="Ya, kirim data saya">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection