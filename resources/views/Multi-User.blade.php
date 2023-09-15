@extends('layouts.navform')
@section('content')

<div class="container mt-5">
  <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Sertifikat Elektronik Multi User
</div>

<body style="background-image: url(assets/img/hero-bg.png)">
  <!-- ======= Header ======= -->
  <header>
    <nav>
      <i class="mobile-nav-toggle"></i>
    </nav>
  </header>
  <!-- End Header -->

  <div class="container-fluid" data-aos="fade-up">
    <img src="assets/img/kop.jpg" class="img-fluid" alt="" />
  </div>

  <div class="container shadow p-3 bg-body-tertiary rounded">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-3 w-80 p-3" data-aos="fade-up">
    <div class="row align-items-center mb-5">
      <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
          <h1 class="display-7 teks-color text-center judul-header text-decoration-underline">
            REKOMENDASI
          </h1>
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->

            <div class="form-outline mb-2 mt-5">
              <label class="form-label" for="form3Example3">Nomor :</label>
              <input type="email" id="" class="form-control" placeholder="" />
            </div>

            <h1 class="fs-5 mb-2 mt-5 text-left">
              Saya yang bertanda tangan di bawah ini :
            </h1>
            <div class="row text-left">
                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Lengkap :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIP :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Pangkat/Golongan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Jabatan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>


            <h1 class="fs-5 mb-2 mt-5 text-left">
              Dengan ini memberikan rekomendasi kepada :
            </h1>

            <div class="row text-left">
                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Lengkap :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIP :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIK :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Pangkat/Golongan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Jabatan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Instansi :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Unit Kerja :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                        <label class="form-label" for="">Alamat Email :</label>
                                        <input type="email" id="" class="form-control" placeholder="………………@kalteng.go.id" />
                                    </div>
                                </div>
            <h1 class="fs-5 mb-2 mt-2 text-left">
              Untuk melakukan pendaftaran sertifikat elektronik sekaligus menjadi pemegang sertifikat elektronik yang digunakan pada :
            </h1>

            <div class="form-outline mb-2 text-left">
              <label class="form-label" for="form3Example3">Sistem :</label>
              <input type="email" id="" class="form-control" placeholder="Persuratan" />
            </div>

            <div class="form-outline mb-2 text-left">
              <label class="form-label" for="form3Example3">Kegunaan :</label>
              <input type="email" id="" class="form-control" placeholder="Tanda Tangan Elektronik" />
            </div>

            <h1 class="fs-5 mb-2 mt-5 text-left">
              Demikian surat rekomendasi ini saya buat, agar dapat digunakan sebagaimana mestinya.
            </h1>

            <div class="row">
              <div class="col-md-8 mb-2 text-left">
                <div class="form-outline">
                <label class="form-label" for="form3Example1">Upload Files Tanda Tangan</label>
                  <input type="file" id="file"/>
                  <label for="file"></label>     
                </div>
              </div>
           

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block btn-lg mb-0 mt-2">
              <a href="" class="text-white">Input</a>
            </button>

            <!-- Register buttons -->
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="container px-4 py-5 px-md-5 text-left text-lg-start my-3 w-80 p-3" data-aos="fade-up">
    <div class="row align-items-center mb-5">
      <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
          <h1 class="display-7 teks-color text-center judul-header text-decoration-underline">
            DAFTAR REKOMENDASI PENERIMA SERTIFIKAT ELEKTRONIK
          </h1>
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->

            <div class="row text-left">
                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Lengkap :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIP :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIK :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Pangkat/Golongan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Jabatan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Unit Kerja :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Instansi :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Kota :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Provinsi :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                        <label class="form-label" for="">Alamat Email :</label>
                                        <input type="email" id="" class="form-control" placeholder="………………@kalteng.go.id" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No Telepon :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block btn-lg mb-0 mt-2">
              <a href="" class="text-white">Input</a>
            </button>

            <!-- Register buttons -->
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  @endsection