@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards1')
    <br>
    <p><b>Table Pelanggan</b></p>
    <div class="col-md-4">
        <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button>
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">

                    <div class="modal-body p-0">


                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent pb-5">
                                <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                                <div class="btn-wrapper text-center">
                                    <a href="#" class="btn btn-neutral btn-icon">
                                        <span class="btn-inner--icon"><img src="../../assets/img/icons/common/github.svg"></span>
                                        <span class="btn-inner--text">Github</span>
                                    </a>
                                    <a href="#" class="btn btn-neutral btn-icon">
                                        <span class="btn-inner--icon"><img src="../../assets/img/icons/common/google.svg"></span>
                                        <span class="btn-inner--text">Google</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <small>Or sign in with credentials</small>
                                </div>
                                <form role="form">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Password" type="password">
                                        </div>
                                    </div>
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for=" customCheckLogin">
                                            <span class="text-muted">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary my-4">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <div>
            <table class="table align-items-center " style="width: 900px;">
                <thead class="thead-light">
                <tr>
                    <th scope="col">
                        Nama Depan
                    </th>
                    <th scope="col">
                        Nama Belakang
                    </th>
                    <th scope="col">
                        Alamat

                </tr>

                @foreach($data_pelanggan as $pelanggan)
                </thead>
                <tbody class="list">

                <tr>
                    <td>{{$pelanggan->namadepan}}</td>
                    <td>{{$pelanggan->namabelakang}}</td>
                    <td>{{$pelanggan->alamat}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


                        @endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
