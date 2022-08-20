@extends('layouts/admin')
@section('title')
    Новости
@endsection
@section('content')
    <h2>Новости</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Заголовок</th>
                <th scope="col">Категория</th>
                <th scope="col">Автор</th>
                <th scope="col">Статус</th>
                <th scope="col">Описание</th>
                <th scope="col">Дата создания</th>
                <th scope="col">Управление</th>
            </tr>
            </thead>
            <tbody>
            @forelse($newsList as $key => $news)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $news['title'] }}</td>
                    <td>{{ $news['category'] }}</td>
                    <td>{{ $news['author'] }}</td>
                    <td>{{ $news['status'] }}</td>
                    <td>{{ $news['description'] }}</td>
                    <td>{{ $news['crated_at'] }}</td>
                    <td><a href="{{ route('admin.news.edit', ['news' => $key]) }}">Ред.</a>&nbsp;<a style="color: red" href="">Уд.</a></td>
                </tr>
            </tbody>
            @empty
                <h1>Новостей нет</h1>
            @endforelse
        </table>
    </div>
@endsection
