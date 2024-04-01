@extends('layouts.layout')

@section('title')
    @parent - {{ $title }}
@endsection

@section('content')

    <div class="container">
        <div class="mt-5">
            <h1>Создать обвление</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form class="mt-5" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-5">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="title" class="form-label">Фото</label>
                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror"
                    id="img" placeholder="Фото обьявления" value="{{ old('img') }}">
            </div>

            <div class="mb-3 mt-5">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="title" class="form-label">Название</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    id="title" placeholder="Название объявления" value="{{ old('title') }}">
            </div>



            <div class="mb-3">
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="content" class="form-label">Текст</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Описание"
                    id="content" rows="3"> {{ old('content') }} </textarea>
            </div>
            @error('rubric_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <select class="form-select mb-3 @error('rubric_id') is-invalid @enderror" id="rubric_id" name="rubric_id">
                <option selected>Выберите категорию</option>
                @foreach ($rubrics as $key => $value)
                    <option value="{{ $key }}" @if (old('rubric_id') == $key) selected @endif>
                        {{ $value }} </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-danger">Отправить</button>
        </form>
    </div>

@endsection
