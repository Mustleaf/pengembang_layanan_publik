@extends('layouts.navform')
@section('content')
    <div class="container mt-5">
        <h2>Server<img src="{{ asset('assets/arrow.svg') }}">Colocation Server
    </div>

    <div class="container shadow p-3 bg-body-tertiary rounded">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
            <div class="row">
                <div class="card bg-body-tertiary">
                    <div class="card-body px-4 py-5 px-md-5">


                        <form>
                            <h5 class="text-center text-decoration-underline mb-5">Colocation Server</h5>
                            <div class="row " id="klon">
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

                        </form>

                        <form >

                            <h6>Formulir Perangkat Colocation </h6>
                            <div class="row border rounded mb-3 mt-2 ">
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
                                            <a class="mx-2" href=""><img
                                                    src="{{ asset('assets/button plus.svg') }}"></a>
                                            <a class="" href=""><img
                                                    src="{{ asset('assets/button min.svg') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                        
                        <form id="klon2">
                            <h6>Formulir Hak Akses Server</h6>
                            <div class="row border rounded mb-3 element">
                                <div class="col-2 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-7 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Personil yang Memiliki Hak Akses
                                            Server :</label>
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
                            </div>
                        </form>
                        <div class="row">
                            <div class="grid gap-1 d-flex">
                                <label class="p-1 g-col-6">Tambah Data</label>
                                <a class="p-1 g-col-6 btn-sm" id="duplikatButton"><img
                                        src="{{ asset('assets/button plus.svg') }}"></a>
                                <a class="p-1 g-col-6 btn-sm" id="kurangiButton" style="display: none;"><img
                                        src="{{ asset('assets/button min.svg') }}"></a>
                            </div>
                        </div>
                       


                        <h7>Dengan ini saya menyatakan bahwa data di atas adalah benar, dan akan mematuhi peraturan atau
                            tata tertib data center yang berlaku.</h7>

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

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const container = document.getElementById("klon2");
                    const elemenAsal = container.querySelector(".element"); // Pilih elemen dalam kontainer

                    const duplikatButton = document.getElementById("duplikatButton");
                    const kurangiButton = document.getElementById("kurangiButton");

                    duplikatButton.addEventListener("click", function() {
                        const elemenBaru = elemenAsal.cloneNode(true); // true untuk menduplikat elemen dan isinya
                        elemenBaru.classList.add("mt-3");
                        container.appendChild(elemenBaru); // Menambahkan elemen baru ke dalam kontainer yang sama
                        kurangiButton.style.display = "block"; // Tampilkan tombol "Kurangi Elemen"
                    });

                    kurangiButton.addEventListener("click", function() {
                        const elemenTerakhir = container.lastChild; // Dapatkan elemen terakhir dalam kontainer
                        if (elemenTerakhir && elemenTerakhir !== elemenAsal) {
                            container.removeChild(elemenTerakhir); // Hapus elemen terakhir jika bukan elemen asal
                            // Cek jumlah elemen dalam kontainer, jika tidak ada elemen lagi, sembunyikan tombol "Kurangi Elemen"
                            if (container.children.length === 1) {
                                kurangiButton.style.display = "none";
                            }
                        }
                    });
                });
            </script>

            <!-- button -->
        </div>
    </div>
@endsection
