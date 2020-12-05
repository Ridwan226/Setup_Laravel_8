@extends('layouts.admin.app')

@section('content')


        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Stexo</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">User Terdaftar</h5>
                        </div>
                        <h3 class="mt-4">43,225</h3>
                        {{-- <div class="progress mt-4" style="height: 4px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p> --}}
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Jumlah Artikel</h5>
                        </div>
                        <h3 class="mt-4">$73,265</h3>
                        {{-- <div class="progress mt-4" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p> --}}
                    </div>
                </div>
            </div>



        </div>


@endsection
