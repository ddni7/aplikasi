@extends('super-admin.layouts.main')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Barang</h4>
                        <button type="button" class="btn btn-info btn-rounded btn-icon btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#ModalTambah">Tambah</button>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Kode barang
                                        </th>
                                        <th>
                                            Nama barang
                                        </th>
                                        <th>
                                            Merek
                                        </th>
                                        <th>
                                            Tipe
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                        <th>
                                            Harga
                                        </th>
                                        <th>
                                            Stok
                                        </th>
                                        <th class="text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            A001
                                        </td>
                                        <td>
                                            CCTV
                                        </td>
                                        <td>
                                            Global star
                                        </td>
                                        <td>
                                            360 derajat pro
                                        </td>
                                        <td>
                                            Putih, 100 M
                                        </td>
                                        <td>
                                            Rp 900.000
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-rounded btn-icon btn-sm">
                                                <i class="ti-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-rounded btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#ModalUbah">
                                                <i class="ti-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="">
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Kode barang</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Kode barang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Nama barang</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Nama barang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Merek</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Merek">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Tipe</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Tipe">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Keterangan</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Harga</label>
                            <input type="number" class="form-control" id="exampleInputKategori1" placeholder="harga">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Stok</label>
                            <input type="number" class="form-control" id="exampleInputStok1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ubah -->
    <div class="modal fade" id="ModalUbah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah data barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="">
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Kode barang</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Kode barang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Nama barang</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Nama barang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Merek</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Merek">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Tipe</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Tipe">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Keterangan</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Harga</label>
                            <input type="number" class="form-control" id="exampleInputKategori1" placeholder="harga">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamalengkap1">Stok</label>
                            <input type="number" class="form-control" id="exampleInputStok1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection
