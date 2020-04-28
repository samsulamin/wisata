@extends('admin.adminTemplate')

@section('main') 
        <div class="container main-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12 card-main">
                            <div class="card-section card-section-second border rounded ml-2 mr-2">
                                <div class="card-header card-header-second rounded">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6 pt-2">
                                                <a href="{{url('/addWisata')}}" class="btn btn-warning btn-sm"><i class='fas fa-plus'></i> Tambah Data</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5 class="card-header-title text-white pt-2 float-right">Data Wisata "{{ Auth::user()->name }}"</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <table id="myTable" class="display table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama Wisata</th>
                                                    {{--<th>Alamat</th>
                                                    <th>Kategori</th>
                                                    <th>Informasi</th>--}}
                                                    <th>Fasilitas</th>
                                                    <th>Foto</th>
                                                    <th>pilihan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($wisata as $wisata)
                                                    <tr>
                                                        <td>{{$wisata->nama_wisata}}</td>
                                                        {{--<td>{{$wisata->alamat}}</td>
                                                        <td>{{$wisata->kategori}}</td>
                                                        <td>{{$wisata->informasi}}</td>--}}
                                                        <td>{{$wisata->fasilitas}}</td>
                                                        <td>
                                                            <img src="http://localhost/wisata/storage/app/public/{{$wisata->foto}}" alt="{{$wisata->nama_wisata}}" style="height:100px">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="https://www.youtube.com/results?search_query={{$wisata->nama_wisata}}+{{$wisata->wilayah}}" class="btn btn-outline-info btn-sm"><i class='fas fas fa-video'></i></a>
                                                            <a href="{{url('/delete')}}" class="btn btn-outline-danger btn-sm"><i class='fas fa-trash'></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
</div>
@stop


{{--<?php
    $str = "$wisata->nama_wisata";
    $namawisata = str_replace(" ", "+", $str);
    $lokasi = "$wisata->wilayah";
?>--}}