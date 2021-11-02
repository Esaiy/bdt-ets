@extends('layouts.main')

@section('title', 'Detail Berita')

@section('content')
<div class="mg-t-5">
    <a href="{{ route('index') }}" class="btn btn-warning tx-montserrat tx-semibold">
        <i data-feather="arrow-left" class="wd-10 mg-r-5"></i>
        Kembali
    </a>
</div>
<div class="row">
    <div class="col">
        <h1>{{$berita->title}}</h1>
        <h4>{{$berita->date}}</h4>
        <div>
            {!!$berita->content!!}
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <h2 class="card-title">
                Penulis : {{$berita->author->name}}
            </h2>
            <img src="{{$berita->author->avatar}}" class="card-img-top">
        </div>
    </div>

</div>
@endsection
