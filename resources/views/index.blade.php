@extends('layouts/main')
@section('title')
    Агрегатор новостей
@endsection
@section('content')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Агрегатор новостей</h1>
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, quod.</p>
            <p>
                <a href="/news" class="btn btn-primary my-2">Cписок новостей</a>
                <a href="/news-category" class="btn btn-secondary my-2">Категории новостей</a>
            </p>
        </div>
    </div>
</section>
@endsection

