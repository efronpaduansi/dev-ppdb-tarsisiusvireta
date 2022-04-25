@extends('layouts.master')

@section('content')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Data Siswa</h1>
        </div>
        <div class="section-body">
            {{-- table data siswa --}}
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NO PENDAFTARAN</th>
                        <th scope="col">NISN</th>
                        <th scope="col">NAMA LENGKAP</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col">STATUS VERIFIKASI</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>181021400159</td>
                        <td>53190203</td>
                        <td>EFRONIUS PADUANSI</td>
                        <td>LAKI-LAKI</td>
                        <td>IPA</td>
                        <td class="text-success">TERVERIFIKASI</td>
                        <td>
                            <div class="form-inline">
                                <a href="">Edit</a> | 
                                <a href="">Hapus</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </section>
    </div>
@endsection