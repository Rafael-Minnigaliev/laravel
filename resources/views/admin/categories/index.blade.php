@extends('layouts/admin')
@section('title')
    Категории
@endsection
@section('content')
    <h2>Категории</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Назание категории</th>
                <th scope="col">Управление</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categoriesList as $key => $category)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $category }}</td>
                    <td><a href="{{ route('admin.categories.edit', ['category' => $key]) }}">Ред.</a>&nbsp;<a style="color: red" href="">Уд.</a></td>
                </tr>
            </tbody>
            @empty
                <h1>Новостей нет</h1>
            @endforelse
        </table>
    </div>
@endsection
