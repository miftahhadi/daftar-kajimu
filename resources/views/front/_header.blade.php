<!-- Header -->
<div class="header bg-mahadilmi py-7 py-lg-8 pt-lg-9">
    <div class="container">
        <div class="header-body text-center mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="/assets/img/brand/logo-white.png" alt="Logo KAJIMU" class="mb-4 img-fluid">
                </div>
                <div class="col-xl-10 col-lg-8 col-md-10 px-5">
                    <h1 class="text-white">Pendaftaran KAJIMU - Kampus Haji dan Umrah</h1>
                    <h2 class="text-lead text-white">Angkatan 5</h2>
                </div>

            </div>
        </div>
        
    {{-- @if (request()->route()->named('form.index'))
        <div class="row justify-content-center mt-5">
            <a href="#daftar" 
                class="btn mb-2 mr-2 btn-success"
            >Daftar Baru</a>
            
            <a href="#periksaData" 
                class="btn mb-2 mr-2 btn-white"
                data-toggle="collapse" 
                role="button" 
                aria-expanded="false"
                aria-controls="periksaData" 
            >Periksa Data Pendaftaran</a>
        </div>

        <div class="row justify-content-center collapse" id="periksaData">
            <div class="col-md-6">

                <div class="card card-body">
                    <form action="#" method="get">
                        @csrf
                            <div class="form-group">
                                <label for="kode">Kode Pendaftaran</label>
                                <input type="text" class="form-control"
                                name="kode"
                                id="kode"
                                placeholder="Masukkan kode pendaftaran Anda">
                            </div>

                            
                            <input type="submit" value="Periksa" class="btn btn-primary">
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    @endif --}}

    </div>
</div>