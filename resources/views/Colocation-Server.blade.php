@extends('layouts.navform')
@section('content')

<div class="container mt-5">
    <h2>Server<img src="{{asset ('assets/arrow.svg')}}">Colocation Server
</div>

<div class="container shadow p-3 bg-body-tertiary rounded">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
        <div class="row">
            <div class="card bg-body-tertiary">
                <div class="card-body px-4 py-5 px-md-5">


                    <form>
                        <h5 class="text-center text-decoration-underline mb-5">Colocation Server</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nomor Formulir :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Kontak Personal (No HP) :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Instansi / Perusahaan :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Jenis Server (Aplikasi) :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Penanggung Jawab (PNS) :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Tanggal Masuk :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="">NIP :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <h6>Formulir Perangkat Colocation </h6>
                        <div class="row border rounded mb-3 mt-2">
                            <div class="col-2 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">No :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-10 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Keterangan :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Perangkat :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nomor Seri :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Merk Perangkat :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label fs-5" for="">Tambah Data</label>
                                        <a class="mx-2" href=""><img src="{{asset ('assets/button plus.svg')}}"></a>
                                        <a class="" href=""><img src="{{asset ('assets/button min.svg')}}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border rounded mb-4">
                            <div class="col-2 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">No :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-10 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Keterangan :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Perangkat :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nomor Seri :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Merk Perangkat :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>


                        <h6>Formulir Hak Akses Server</h6>
                        <div class="row border rounded mb-3">
                            <div class="col-2 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">No :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-7 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Personil yang Memiliki Hak Akses Server :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-3 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">No. Hp :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Alamat IP :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Posisi Server :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label fs-5" for="">Tambah Data</label>
                                        <a class="mx-2" href=""><img src="{{asset ('assets/button plus.svg')}}"></a>
                                        <a class="" href=""><img src="{{asset ('assets/button min.svg')}}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border rounded mb-4">
                            <div class="col-2 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">No :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-7 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Personil yang Memiliki Hak Akses Server :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-3 mb-2 mt-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">No. Hp :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Alamat IP :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Posisi Server :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>



                        <h7>Dengan ini saya menyatakan bahwa data di atas adalah benar, dan akan mematuhi peraturan atau tata tertib data center yang berlaku.</h7>

                        <div class="row ">
                            <div class="col-md-6 mt-3">
                                <h6>Menyetujui</h6>
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                                <div class="form-outline">
                                    <label class="form-label" for="">NIP :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                                <div class="form-outline">
                                    <label class="form-label" for="">Jabatan :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h6>Pemohon</h6>
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                                <div class="form-outline">
                                    <label class="form-label" for="">NIP :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                                <div class="form-outline">
                                    <label class="form-label" for="">Jabatan :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-10 mb-2">
                <div class="form-outline">
                    <button type="button" class="btn btn-primary btn-lg">Kirim</button>
                    <button type="button" class="btn btn-primary btn-lg">Print</button>
                </div>
            </div>
        </div>

        <!-- button -->
    </div>
</div>

@endsection