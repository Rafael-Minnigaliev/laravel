@extends('layouts/main')
@section('title')
    Новость - {{ $news['title'] }}
@endsection
@section('content')
    <div class="col">
        <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $news['title'] }}</text>
            </svg>
            <div class="card-body">
                <p class="card-text">Автор: {{ $news['author'] }}</p>
                <p class="card-text">Статус: {{ $news['status'] }}</p>
                <p class="card-text">Описание: {{ $news['description'] }}</p>
                <p class="card-text">Дата создания: {{ $news['crated_at'] }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a
                                href="/news/">Назад</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
