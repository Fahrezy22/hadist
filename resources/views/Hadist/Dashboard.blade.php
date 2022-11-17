@extends('Layouts.User.Base')
@section('content')
<div class="bg1">
    <div class="container">
        <div class="main-panel">
            <center>
                <form action="{{route('list.hadist')}}">
                    <img src="{{asset('static/user/img/quran.png')}}" alt="" width="150px" style="margin-top: 50px; margin-bottom: 30px;">
                    <div class="input-group col-md-7">
                        <input type="text" class="form-control " placeholder="Search">
                        <div class="input-group-append">
                          <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>  
                         </div>
                      </div>
                </form>
            </center>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="text-center mt-4">Daftar Surah | Hadist</h2><hr>
    <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Surah</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Juz</a>
        </li>
    </ul>
    <div class="tab-content mt-2 mb-3" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card square">
                        <a href="{{route('detail.hadist')}}">
                            <div class="card-body">
                                <h2 class="float-left text-secondary">01 <i class="fa-xl fa-sharp fa-solid fa-grip-lines-vertical"></i> &nbsp;</h2>
                                <div class="">
                                    <b class="text-dark">Nama Surah</b><br>
                                    <h6 class="text-dark">Artinya</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card square">
                        <a href="">
                            <div class="card-body">
                                <h2 class="float-left text-secondary">02 <i class="fa-xl fa-sharp fa-solid fa-grip-lines-vertical"></i> &nbsp;</h2>
                                <div class="">
                                    <b class="text-dark">Nama Surah</b><br>
                                    <h6 class="text-dark">Artinya</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card square">
                        <a href="">
                            <div class="card-body">
                                <h2 class="float-left text-secondary">03 <i class="fa-xl fa-sharp fa-solid fa-grip-lines-vertical"></i> &nbsp;</h2>
                                <div class="">
                                    <b class="text-dark">Nama Surah</b><br>
                                    <h6 class="text-dark">Artinya</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card square">
                        <a href="">
                            <div class="card-body">
                                <h2 class="float-left text-secondary">04 <i class="fa-xl fa-sharp fa-solid fa-grip-lines-vertical"></i> &nbsp;</h2>
                                <div class="">
                                    <b class="text-dark">Nama Surah</b><br>
                                    <h6 class="text-dark">Artinya</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card square">
                        <a href="">
                            <div class="card-body">
                                <h2 class="float-left text-secondary">05 <i class="fa-xl fa-sharp fa-solid fa-grip-lines-vertical"></i> &nbsp;</h2>
                                <div class="">
                                    <b class="text-dark">Nama Surah</b><br>
                                    <h6 class="text-dark">Artinya</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card square">
                        <a href="">
                            <div class="card-body">
                                <h2 class="float-left text-secondary">06 <i class="fa-xl fa-sharp fa-solid fa-grip-lines-vertical"></i> &nbsp;</h2>
                                <div class="">
                                    <b class="text-dark">Nama Surah</b><br>
                                    <h6 class="text-dark">Artinya</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
            </p>
        </div>
    </div>
    <h3>Apa Itu Hadist?</h3><hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis provident aliquam repellendus laboriosam doloremque quas, quod debitis sapiente a porro ex nesciunt. Ipsam, tempore incidunt! Minus repellat in quibusdam dolores!</p>
</div>
@endsection