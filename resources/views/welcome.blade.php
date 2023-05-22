@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($videos as $v)
        <div class="col-lg-4 col-md-6">
            <h3>Имя: {{ $v->name }}</h3>
            <p>Описание: {{ $v->description }}</p>
            @if ($v->category)
                <p>Категория: {{ $v->category->name }}</p>
             @endif
            <video id="video-{{ $v->id }}" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="auto">
                <source src="{{ asset('storage/' . $v->video) }}" type="video/mp4">
            </video>
            <a href="{{ route('delete', $v->id) }}">Удалить видео</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
