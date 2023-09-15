@extends('super-admin.layouts.main')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Tambah detail data</h4>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exmapleInputRole1">Pilih Paket</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="">Paket 1</option>
                                        <option value="">Paket 2</option>
                                        <option value="">Paket 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exmapleInputRole1">Kode barang</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="">A001</option>
                                        <option value="">A002</option>
                                        <option value="">C003</option>
                                    </select>
                                </div>
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
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <a href="/super-admin/data-paket" class="btn btn-light">Kembali</a>
                            </form>
                        </div>
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