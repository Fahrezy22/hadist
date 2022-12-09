@extends('Layouts.User.Base')
@section('content')
    <div class="container mt-2">
        <ul class="nav nav-pills nav-black justify-content-center" id="pills-tab-with-icon" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">HADIST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">PENJELASAN</a>
            </li>
        </ul>
        <div class="tab-content mt-2 mb-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="text-center mt-4">
                    <h2 class="mb-4"><b>{{$data->narator}}</b></h2>
                    <h1 class="size mb-3"><b>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</b></h1>
                </div>
                <table width="100%">
                    <tr>
                        <td><p class="text-right size"><img src="{{asset('images/'.$data->arab)}}" alt="" width="20%"></p></td>
                    </tr>
                    <tr>
                        <td><p class="text-left">{{$data->latin}}</p></td>
                    </tr>
                </table>
                <hr>
                <table width="100%">
                    <tr>
                        <td><b>Artinya :</b></td>
                    </tr>
                    <tr>
                        <td><p class="text-right">"{{$data->translation}}"</p></td>
                    </tr>
                </table>
                <hr>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <p>{{$data->desc}}</p>
            </div>
        </div>
    </div>
@endsection
