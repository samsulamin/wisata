@extends('admin.userTemplate')

@section('main') 
        {{--<div class="card-deck-wrapper">
            <div class="card-deck">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="container">
                        <a href="#" class="btn btn-fix text-center">
                            <img class="card-img-top" src="{{asset('images/gps.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                            <hr>
                            <div class="card-block text-center ">
                                <h4 class="card-title text-dark ">Peta Wisata </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="container">
                        <a href="#" class="btn btn-fix text-center">
                            <img class="card-img-top" src="{{asset('images/photo.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                            <hr>
                            <div class="card-block text-center ">
                                <h4 class="card-title text-dark ">Data Wisata</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="container">
                        <a href="#" class="btn btn-fix text-center">
                            <img class="card-img-top" src="{{asset('images/walk.png')}}" style="width: 55%; height: 55%;" alt="Card image cap">
                            <hr>
                            <div class="card-block text-center ">
                                <h4 class="card-title text-dark ">Data Wisatawan</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>--}}
        <div id="push"></div>
        <table id="myTable" class="display table-bordered">
            <thead>
                <tr>
                    <th>Nama Wisata</th>
                    {{--<th>Alamat</th>
                    <th>Kategori</th>
                    <th>Informasi</th>--}}
                    <th>Fasilitas</th>
                    <th>Foto</th>
                    <th>Like</th>
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
                        <td class="text-center">
                            <img src="http://localhost/wisata/storage/app/public/{{$wisata->foto}}" alt="{{$wisata->nama_wisata}}" style="height:100px">
                        </td>
                        <td class="text-center">
                            <a href="{{url('/delete')}}" class="btn btn-outline-secondary btn-sm">
                                <i class='fas fa-heart'></i>
                            </a>
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
@stop

@section('footer')

@stop