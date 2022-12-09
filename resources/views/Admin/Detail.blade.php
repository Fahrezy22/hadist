@extends('Layouts.Admin.Base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-left mt-2"><b>Detail Hadist</b></h4>
                    <a href="{{route('hadist')}}" class="btn btn-primary float-right"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-left"><b>Penjelasan</b></div>
                            <div class="text-left">{{$data->desc}}</div>
                        </div>
                        <div class="col-6">
                            <div class="text-right"><img src="{{asset('images/'.$data->arab)}}" alt="" width="80%"></div>
                            <div class="text-right">"{{$data->latin}}"</div>
                            <div class="text-right"> <b>Artinya :</b> "{{$data->translation}}"</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
