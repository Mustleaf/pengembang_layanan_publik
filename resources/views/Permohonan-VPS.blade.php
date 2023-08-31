@extends('layouts.navform')
@section('content')

<div class="container mt-5">
    <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Formulir Permohonan VPS Baru
</div>

<div class="container shadow p-3 bg-body-tertiary rounded">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
        <div class="row">
            <div class="card bg-body-tertiary">
                <div class="card-body px-4 py-5 px-md-5">


                    <form>
                        <h5 class="text-center text-decoration-underline">Formulir Permohonan VPS Baru</h5>
                </div>
                <div class="datapemohon">
                    <h6>Data Pemohon</h6>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="form-outline">
                            <label class="form-label" for="">Nama Pemohon :</label>
                            <input type="text" id="" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-outline">
                            <label class="form-label" for="">NIP :</label>
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
                            <label class="form-label" for="">Tujuan Pembuatan VPS :</label>
                            <input type="text" id="" class="form-control" />
                        </div>
                    </div>
                    <h6>Spesifikasi VPS yang diinginkan</h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <label class="form-label" for="">Prosesor :</label>
                                <input type="text" id="" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <label class="form-label" for="">Sistem Operasi :</label>
                                <input type="text" id="" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <label class="form-label" for="">Hardisk :</label>
                                <input type="text" id="" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <label class="form-label" for="">RAM :</label>
                                <input type="text" id="" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <label class="form-label" for="">IP Address :</label>
                                <input type="text" id="" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <label class="form-label" for="">SSH :</label>
                                <input type="text" id="" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-outline">
                                <label class="form-label" for="">Remote Desktop :</label>
                                <input type="text" id="" class="form-control" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-10 mb-2">
                                <div class="form-outline">
                                    <button type="button" class="btn btn-primary btn-lg">Submit</button>
                                    <button type="button" class="btn btn-primary btn-lg">Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection