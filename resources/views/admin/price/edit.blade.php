@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Редактировать цену</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('prices.update', $price ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           value="{{ $price->title }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                           placeholder="slug"
                           value="{{ $price->slug }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="on-homepage">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio"
                               id="on-homepage1"
                               name="on_homepage"
                               value="1"
                               @if( $price->on_homepage == 1) checked @endif
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio"
                               id="on-homepage2"
                               name="on_homepage"
                               value="0"
                               @if( $price->on_homepage == 0) checked @endif
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage2">Нет</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="img">Img</label>
                    <input type="text" name="img" id="img" class="form-control"
                           value="{{ $price->img }}"
                           placeholder="img"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="text" name="price"
                           id="price"
                           class="form-control"
                           placeholder="price"
                           value="{{ $price->price }}"
                           aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                    <label for="meta_description">meta_description</label>
                    <input type="text" name="meta_description" id="meta_description" class="form-control"
                           placeholder="meta_description"
                           value="{{ $price->meta_description }}"
                           aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="meta_keywords">meta_keywords</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                           placeholder="meta_keywords"
                           value="{{ $price->meta_keywords }}"
                           aria-describedby="helpId">
                </div>


                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" name="description"
                              id="description" rows="4">{{ $price->description }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Обновить</button>


            </form>
        </div>
    </div>
@endsection

@section('scripts_after')
    @include('include.tinymce.tinymce-scripts')
@endsection
