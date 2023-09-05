@extends('layouts.dashboard')

@section('sidebar')



<div class="px-[1rem] py-11">

    <div>
        <div class="flex gap-x-[12.8px]">
            <h1 class="font-medium text-[32px] text-[#A3AED0]">Sertifikat Elektronik</h1>
            <img src="{{asset ('assets/arrow.svg')}}" alt="">
            <h1 class="font-medium text-[32px] text-highlight">Multi User</h1>
        </div>
    </div>

    <div class="bg-white rounded-md h-fit w-[1584px] my-11 py-9 px-9">



        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">

                        <!-- Filter -->
                        <div class="flex pb-7">
                            <h1 class="font-medium text-[32px] text-highlight">Filter</h1>
                        </div>
                        <div class="flex pb-14 gap-x-[70px] items-center">
                            <h1 class="font-medium text-[20px] text-[#A3AED0]">Status</h1>
                            <select name="" id="">
                                <option value="">Disetujui</option>
                                <option value="">Belum Disetujui</option>
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <!-- End Filter -->

                        <!-- Tambah Modal -->
                        <div class="flex justify-between pb-14">
                            <button type="submit" class="flex items-center w-[116px] h-10 justify-center bg-btn gap-x-2 rounded text-[#FFFFFF]"><img src="{{asset ('assets/search.svg')}}" alt="">Cari</button>
                            <button class="flex items-center w-[116px] h-10 justify-center bg-btn gap-x-2 rounded text-[#FFFFFF]" onclick="my_modal_4.showModal()"><img src="{{asset ('assets/tambah-icon.svg')}}" alt="">Tambah</button>
                            <dialog id="my_modal_4" class="modal">
                                <form method="dialog" class="modal-box w-11/12 px-8 py-12 max-w-5xl">
                                    <h1 class="font-bold text-3xl text-highlight">Tambah Data</h1>
                                    <div class="modal-action">
                                        <!-- if there is a button, it will close the modal -->
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </div>
                                    <div class="">
                                        <form action="">
                                            <label for="">TANGGAL :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">JAM :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">KEPERLUAN :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">PENANGGUNG JAWAB :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NIP PENANGGUNG JAWAB :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">DAFTAR PENGUNJUNG :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">DESKRIPSI :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NOMOR SERIAL :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">MASUK :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">KELUAR :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">STATUS :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NAMA PENYETUJU :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NIP PENYETUJU :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">JABATAN PENYETUJU :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">Catatan :</label><br>
                                            <input placeholder="" type="text"><br><br>

                                            <input class="bg-btn px-4 rounded text-white py-2" type="submit">
                                        </form>
                                    </div>
                                </form>
                            </dialog>
                        </div>
                        <!-- End Tambah Modal -->


                        <!-- Tabel -->
                        <table class="min-w-full text-center text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr class="text-text">
                                    <th scope="col" class="px-6 py-2">NO</th>
                                    <th scope="col" class="px-6 py-2">NO. TIKET</th>
                                    <th scope="col" class="px-6 py-2">NAMA LENGKAP</th>
                                    <th scope="col" class="px-6 py-2">NIP</th>
                                    <th scope="col" class="px-6 py-2">PANGKAT</th>
                                    <th scope="col" class="px-6 py-2">JABATAN</th>
                                    <th scope="col" class="px-6 py-2">INSTANSI</th>
                                    <th scope="col" class="px-6 py-2">UNIT KERJA</th>
                                    <th scope="col" class="px-6 py-2">EMAIL</th>
                                    <th scope="col" class="px-6 py-2">STATUS</th>
                                    <th scope="col" class="px-6 py-2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">12333</td>
                                    <td class="whitespace-nowrap px-6 py-2">John Doe</td>
                                    <td class="whitespace-nowrap px-6 py-2">192839201829327183</td>
                                    <td class="whitespace-nowrap px-6 py-2">None</td>
                                    <td class="whitespace-nowrap px-6 py-2">Sekretaris</td>
                                    <td class="whitespace-nowrap px-6 py-2">PT SEJAHTERA</td>
                                    <td class="whitespace-nowrap px-6 py-2">Beta</td>
                                    <td class="whitespace-nowrap px-6 py-2">johndoe@gmail.com</td>
                                    <td class="whitespace-nowrap px-6 py-2">Disetujui</td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        <div class="flex justify-center items-center gap-x-3">

                                            <label for="modal-1" class="w-8 h-8 border-2 rounded flex items-center justify-center cursor-pointer hover:bg-"><img src="{{asset ('assets/detail-icon.svg')}}" alt=""></label>
                                            <label for="modal-2" class="w-8 h-8 rounded bg-[#4318FF] flex items-center justify-center cursor-pointer hover:bg-[#3A16D9]"><img src="{{asset ('assets/edit-icon.svg')}}" alt=""></label>
                                            <label for="modal-3" class="w-8 h-8 rounded bg-[#D2000D] flex items-center justify-center cursor-pointer hover:bg-[#B5000B]"><img src="{{asset ('assets/delete-icon.svg')}}" alt=""></label>

                                            <!-- DetaiL Modal -->
                                            <input type="checkbox" id="modal-1" class="modal-toggle" />
                                            <div class="modal">
                                                <div class="modal-box px-8 py-12 w-11/12 max-w-5xl">
                                                    <h1 class="font-bold text-start text-highlight text-3xl">Detail Data</h1>
                                                    <div class="modal-action">
                                                        <label for="modal-1" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                                                    </div>
                                                    <div class="flex flex-col text-start font-medium gap-y-2.5">
                                                        <p class="text-text">TANGGAL :</p>
                                                        <p class="text-purple">30/08/2023</p> <!-- data -->
                                                        <p class="text-text">JAM :</p>
                                                        <p class="text-purple">17:00</p> <!-- data -->
                                                        <p class="text-text">KEPERLUAN :</p>
                                                        <p class="text-purple">Server Hardware Maintenance</p> <!-- data -->
                                                        <p class="text-text">PENANGGUNG JAWAB :</p>
                                                        <p class="text-purple">John Doe</p> <!-- data -->
                                                        <p class="text-text">NIP PENANGGUNG JAWAB :</p>
                                                        <p class="text-purple">192839201829327183</p> <!-- data -->
                                                        <p class="text-text">DAFTAR PENGUNJUNG :</p>
                                                        <p class="text-purple">Michael Smith</p> <!-- data -->
                                                        <p class="text-text">DESKRIPSI :</p>
                                                        <p class="text-purple">Tidak ada deskripsi</p> <!-- data -->
                                                        <p class="text-text">NOMOR SERIAL :</p>
                                                        <p class="text-purple">012392</p> <!-- data -->
                                                        <p class="text-text">MASUK :</p>
                                                        <p class="text-purple">17:00</p> <!-- data -->
                                                        <p class="text-text">KELUAR :</p>
                                                        <p class="text-purple">18:30</p> <!-- data -->
                                                        <p class="text-text">STATUS :</p>
                                                        <p class="text-purple">Disetujui</p> <!-- data -->
                                                        <p class="text-text">NAMA PENYETUJU :</p>
                                                        <p class="text-purple">Jenny Graham</p> <!-- data -->
                                                        <p class="text-text">NIP PENYETUJU :</p>
                                                        <p class="text-purple">102938711829928361</p> <!-- data -->
                                                        <p class="text-text">JABATAN PENYETUJU :</p>
                                                        <p class="text-purple">Kepala Security</p> <!-- data -->
                                                        <p class="text-text">CATATAN :</p>
                                                        <p class="text-purple">Tidak ada catatan</p> <!-- data -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal -->
                                            <input type="checkbox" id="modal-2" class="modal-toggle" />
                                            <div class="modal">
                                                <div class="modal-box px-8 py-12 w-11/12 max-w-5xl">
                                                    <h1 class="font-bold text-start text-highlight text-3xl">Edit Data</h1>
                                                    <div class="modal-action">
                                                        <label for="modal-2" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                                                    </div>
                                                    <div class="flex flex-col text-start font-medium">
                                                        <form class="text-text" action="">

                                                            <label for="">TANGGAL :</label><br>
                                                            <input placeholder="30/08/2023" type="text"><br>
                                                            <label for="">JAM :</label><br>
                                                            <input placeholder="17:00" type="text"><br>
                                                            <label for="">KEPERLUAN :</label><br>
                                                            <input placeholder="Server Hardware Maintenance" type="text"><br>
                                                            <label for="">PENANGGUNG JAWAB :</label><br>
                                                            <input placeholder="John Doe" type="text"><br>
                                                            <label for="">NIP PENANGGUNG JAWAB :</label><br>
                                                            <input placeholder="192839201829327183" type="text"><br>
                                                            <label for="">DAFTAR PENGUNJUNG :</label><br>
                                                            <input placeholder="Michael Smith" type="text"><br>
                                                            <label for="">DESKRIPSI :</label><br>
                                                            <input placeholder="Tidak ada deskripsi" type="text"><br>
                                                            <label for="">NOMOR SERIAL :</label><br>
                                                            <input placeholder="012392" type="text"><br>
                                                            <label for="">MASUK :</label><br>
                                                            <input placeholder="17:00" type="text"><br>
                                                            <label for="">KELUAR :</label><br>
                                                            <input placeholder="17:30" type="text"><br>
                                                            <label for="">STATUS :</label><br>
                                                            <input placeholder="Disetujui" type="text"><br>
                                                            <label for="">NAMA PENYETUJU :</label><br>
                                                            <input placeholder="Jenny Graham" type="text"><br>
                                                            <label for="">NIP PENYETUJU :</label><br>
                                                            <input placeholder="102938711829928361" type="text"><br>
                                                            <label for="">JABATAN PENYETUJU :</label><br>
                                                            <input placeholder="Kepala Security" type="text"><br>
                                                            <label for="">Catatan :</label><br>
                                                            <input placeholder="Tidak ada catatan" type="text"><br>

                                                            <input class="bg-btn px-4 rounded text-white py-2" type="submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Modal -->
                                            <input type="checkbox" id="modal-3" class="modal-toggle" />
                                            <div class="modal">
                                                <div class="modal-box py-3">
                                                    <h3 class="text-[#000000] fs-5">Apakah Anda yakin untuk menghapus data ?</h3>
                                                    <div class="modal-action flex justify-center">
                                                        <label for="modal-3" class="btn btn-md btn-outline btn-error text-[#FFFFFF]">YES</label>
                                                        <label for="modal-3" class="btn btn-md btn-outline btn-primary text-[#FFFFFF]">NO</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Tabel -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>
@endsection