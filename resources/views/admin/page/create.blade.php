@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Добавить страницу</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('pages.store') }}" method="post">
                @csrf

                <input type="hidden" name="_table" value="pages" required>
                <input type="hidden" name="_for_slug" value="title" required>


                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           value="{{ old('title') }}"
                           minlength="3"
                           required
                           aria-describedby="helpId">
                </div>

                @error('slug')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="meta_description">meta_description</label>
                    <input type="text" name="meta_description" id="meta_description" class="form-control"
                           placeholder="meta_description"
                           aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="meta_keywords">meta_keywords</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                           placeholder="meta_keywords"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                </div>


                <div class="form-group">
                    <label for="article">Статья</label>
                    <textarea class="form-control tinymce" name="article" id="article" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>


            </form>
        </div>
    </div>
@endsection

@section('scripts_after')
    @include('include.tinymce.tinymce-scripts')
@endsection
