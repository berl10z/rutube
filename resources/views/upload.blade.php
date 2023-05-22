@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Загрузите свой видеоролик!</h2>
        <div class="row justify-content-center">
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-3">
                    <label for="name">Название</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя">
                </div>
                <div class="form-group row mb-3">
                    <label for="description">Описание</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Введите описание"></textarea>
                </div>
                <div class="form-group row mb-3">
                    <select class="form-select" name="category_id" aria-label="Default select example">
                        <option selected>Выберите категорию</option>
                        @foreach ($categories as $c)
                            <option value={{ $c->id }}>{{ $c->name }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group row mb-3">
                    <label for="video">Видеоролик</label>
                    <input type="file" accept="video/*" class="form-control-file" id="video" name="video">
                </div>
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </form>
        </div>
    </div>
@endsection
