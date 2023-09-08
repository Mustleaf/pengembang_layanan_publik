@extends('layouts.navform')
@section('content')
    <div class="container mt-5">
        <h2>VPS<img src="{{ asset('assets/arrow.svg') }}">Surat Pengantar Pengajuan Server
    </div>

    <div class="container shadow p-3 bg-body-tertiary rounded">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
            <div class="row">
                <div class="card bg-body-tertiary border rounded">
                    <div class="card-body px-4 py-5 px-md-5">


                        {{-- Button tambah dan kurang formulir --}}
                        <div class="row">
                            <div class="grid gap-1 d-flex">
                                <label class="p-1 g-col-6">Tambah Data</label>
                                <a class="p-1 g-col-6 btn-sm" id="duplikatButton"><img
                                        src="{{ asset('assets/button plus.svg') }}"></a>
                                <a class="p-1 g-col-6 btn-sm" id="kurangiButton" style="display: none;"><img
                                        src="{{ asset('assets/button min.svg') }}"></a>
                            </div>
                        </div>
                        {{-- Akhir  Button tambah dan kurang formulir --}}


                        {{-- Mulai formulir --}}
                        <form id="klon">
                            <div class="row border rounded element">
                                <div class="row">
                                    <div class="col-md-6 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Nomor :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Sifat :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Lampiran :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Perihal :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Nama Instansi :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Tujuan :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Nama :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">No Telepon :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Keperluan :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- akhir formulir --}}



                    </div>
                </div>
            </div>
            <!-- button  kirim dan print -->
            <div class="row mt-3">
                <div class="col-md-4 mb-2">
                    <div class="form-outline">
                        <button type="button" class="btn btn-primary btn-lg">Kirim</button>
                        <button type="button" class="btn btn-primary btn-lg">Print</button>
                    </div>
                </div>
            </div>
            <!-- button  kirim dan print akhir-->
        </div>
    </div>
@endsection

{{-- Script Button tambah dan kurangi formulir --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("klon");
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
{{-- Script Button tambah dan kurangi formulir --}}

