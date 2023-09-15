@extends('super-admin.layouts.main')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data pengguna</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>
                                                Nama Lengkap
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Role
                                            </th>
                                            <th>
                                                Password
                                            </th>
                                            <th>
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
                                                Dani
                                            </td>
                                            <td>
                                                Dani123
                                            </td>
                                            <td>
                                                dani@gmail.com
                                            </td>
                                            <td>
                                                super-admin
                                            </td>
                                            <td>
                                                *******
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-rounded btn-icon btn-sm">
                                                    <i class="ti-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary btn-rounded btn-icon btn-sm">
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