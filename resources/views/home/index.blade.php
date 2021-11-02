@extends('layouts.main')

@section('title', 'List Berita')

@section('content')
<div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach($beritas as $berita)
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$berita->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$berita->author->name}}</h6>
                <div class="card-body">{{$berita->description}}</div>
            </div>
            <div class="card-footer">
                <a href="{{ route('show', ['news' => $berita->id]) }}" class="btn btn-success tx-montserrat tx-semibold">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
