@extends('super-admin.layouts.main')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tambah pengguna</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputNamalengkap1">Nama lengkap</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Nama lengkap">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Username</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exmapleInputRole1">Role</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="">super-admin</option>
                                    <option value="">admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a href="/super-admin/data-pengguna" class="btn btn-light">Kembali</a>
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