@extends('layouts.layout')

@section('title')
    @parent - {{ $title }}
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Пример альбома Home</h1>
                <p class="lead text-muted">Твари всё</p>
                <p>
                    <a href="https://yandex.ru/games/" class="btn btn-primary my-2">Главный призыв к действию</a>
                    <a href="#" class="btn btn-secondary my-2">Вторичное действие</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($posts as $post)
                <div class="mb-3">
                    <label for="category" class="form-label">Категория</label>
                    <select class="form-select" id="CategoryID" name="CategoryID" required>
                        <option selected disabled>Выберите категорию</option>
                        <option value="1">Автомобили</option>
                        <option value="2">Недвижимость</option>
                        <option value="3">Работа</option>
                        <option value="4">Электротехника</option>
                        <option value="5">Пропажи</option>
                        <option value="6">Розыск</option>
                        <option value="7">Домашние животные</option>
                        
                        
                    </select>
                </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#9999" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Без картинки</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text"> {{ $post->content }} </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Вид</button>
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary">Редактировать</button>
                                    </div>
                                    <small class="text-muted"> {{ $post->getDate() }} </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
