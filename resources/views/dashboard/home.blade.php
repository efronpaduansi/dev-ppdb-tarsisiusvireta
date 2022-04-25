@extends('layouts.master')

@section('content')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Home Dashboard</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card bg-success">
                        <div class="card-header">
                            <img alt="image" src="{{ asset('admin/img/myImg/img01.svg') }}" class="rounded-circle mr-1" height="80">
                        </div>
                        <div class="card-body">
                            <h1>18</h1>
                            <p>Diterima</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-danger">
                        <div class="card-header">
                            <img alt="image" src="{{ asset('admin/img/myImg/img02.svg') }}" class="rounded-circle mr-1" height="80">
                        </div>
                        <div class="card-body">
                            <h1>18</h1>
                            <p>Ditolak</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-warning">
                        <div class="card-header">
                            <img alt="image" src="{{ asset('admin/img/myImg/img03.svg') }}" class="rounded-circle mr-1" height="80">
                        </div>
                        <div class="card-body">
                            <h1>18</h1>
                            <p>Pendaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-info">
                        <div class="card-header">
                            <img alt="image" src="{{ asset('admin/img/myImg/img04.svg') }}" class="rounded-circle mr-1" height="80">
                        </div>
                        <div class="card-body">
                            <h1>18</h1>
                            <p>Total</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
@endsection