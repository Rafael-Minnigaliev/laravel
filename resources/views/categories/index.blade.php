@extends('layouts/main')
@section('title')
    Категории
@endsection
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Категории</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, quod.</p>
                <p>
                    @forelse($categories as $category)
                        <a href="/news/category/{{ $category }}" class="btn btn-primary my-2">{{ $category }}</a>
                    @empty
                        <h1>Нет категорий</h1>
                    @endforelse
                </p>
            </div>
        </div>
    </section>
@endsection


