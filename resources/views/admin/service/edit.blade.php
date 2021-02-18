@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Редактировать сервис</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('services.update', $service ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           value="{{ $service->title }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                           placeholder="slug"
                           value="{{ $service->slug }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="meta_description">meta_description</label>
                    <input type="text" name="meta_description" id="meta_description" class="form-control"
                           placeholder="meta_description"
                           value="{{ $service->meta_description }}"
                           aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="meta_keywords">meta_keywords</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                           placeholder="meta_keywords"
                           value="{{ $service->meta_keywords }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="on-homepage">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage1" name="on_homepage"
                               value="1"
                               @if( $service->on_homepage == 1) checked @endif
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage2" name="on_homepage"
                               value="0"
                               @if( $service->on_homepage == 0) checked @endif
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage2">Нет</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="img">Img</label>
                    <input type="text" name="img" id="img" class="form-control"
                           placeholder="img"
                           value="{{ $service->img }}"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="img2">Img2</label>
                    <input type="text" name="img2" id="img2" class="form-control"
                           placeholder="img2"
                           value="{{ $service->img2 }}"
                           aria-describedby="helpId">
                </div>ew


                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" name="description"
                              id="description" rows="4">{{ $service->description }}</textarea>
                </div>



                <button type="submit" class="btn btn-primary">Обновить</button>


            </form>
        </div>
    </div>
@endsection

@section('scripts_after')
    @include('include.tinymce.tinymce-scripts')
@endsection
