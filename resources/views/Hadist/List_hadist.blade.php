@extends('Layouts.User.Base')
@section('content')
    <div class="main-panel">
        <h2 class="text-center mt-3">List | Hadist</h2><hr>
            <div class="row mt-4">
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $item)
                <div class="col-md-4">
                    <div class="card square">
                        <a href="/detail_hadist/{{$item->id}}">
                            <div class="card-body">
                                <h2 class="float-left text-secondary">{{$no++}} <i class="fa-xl fa-sharp fa-solid fa-grip-lines-vertical"></i> &nbsp;</h2>
                                <div class="">
                                    <b class="text-dark">{{$item->narator}}</b><br>
                                    <h6 class="text-dark">{{$item->type}}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            {!! $data->links() !!}
        </div>
@endsection
