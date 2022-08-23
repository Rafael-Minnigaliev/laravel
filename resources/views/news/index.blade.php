@extends('layouts/main')
@section('title')
    Список новостей
@endsection
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Список новостей</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, quod.</p>
                <p>
                    <a href="/" class="btn btn-primary my-2">Главная</a>
                    <a href="/news-category" class="btn btn-secondary my-2">Категории новостей</a>
                </p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse($newsList as $key => $news)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $news['title'] }}</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">Категория: {{ $news['category'] }}</p>
                                <p class="card-text">Автор: {{ $news['author'] }}</p>
                                <p class="card-text">Статус: {{ $news['status'] }}</p>
                                <p class="card-text">Описание: {{ $news['description'] }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a
                                                href="/news/{{ $key }}">Посмотреть</a></button>
                                    </div>
                                    <small class="text-muted">{{ $news['crated_at'] }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Данных нет</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection
