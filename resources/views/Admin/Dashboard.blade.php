@extends('Layouts.Admin.Base')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">السلام عليكم ورحمة الله وبركاته</h3>
          <h6 class="font-weight-normal mb-0">Assalamualaikum Warahmatullahi Wabarakatuh <span class="text-primary">{{ Session::get('name')}} !</span></h6>
        </div>
        {{-- <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">
          <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
              <a class="dropdown-item" href="#">January - March</a>
              <a class="dropdown-item" href="#">March - June</a>
              <a class="dropdown-item" href="#">June - August</a>
              <a class="dropdown-item" href="#">August - November</a>
            </div>
          </div>
         </div>
        </div> --}}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg bg-dark">
        <div class="card-people mt-auto">
          <center><img style="width: 63%;" src="{{asset('static/admin/images/quran.png')}}" alt="people"></center>
          <div class="weather-info">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <h4 class="mb-4"><b>Total Hadist</b></h4>
              <p class="fs-30 mb-2">{{$data['total']}}</p>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
                <h4 class="mb-4"><b>Total Hadist Shahih</b></h4>
              <p class="fs-30 mb-2">{{$data['shahih']}}</p>
              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
                <h4 class="mb-4"><b>Total Hadist Hasan</b></h4>
              <p class="fs-30 mb-2">{{$data['hasan']}}</p>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
                <h4 class="mb-4"><b>Total Hadist Dha'if</b></h4>
              <p class="fs-30 mb-2">{{$data['dhaif']}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
