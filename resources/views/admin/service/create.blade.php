@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Добавить сервис</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('services.store') }}" method="post">
                @csrf

                <input type="hidden" name="_table" value="services" required>
                <input type="hidden" name="_for_slug" value="title" required>

                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           required
                           minlength="3"
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
                    <label for="ewfefe">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage1" name="on_homepage"
                               value="1"
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="on-homepage2" name="on_homepage"
                               value="0"
                               checked
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage2">Нет</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="img">Img</label>
                    <input type="text" name="img" id="img" class="form-control"
                           placeholder="img"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="img2">Img2</label>
                    <input type="text" name="img2" id="img2" class="form-control"
                           placeholder="img2"
                           aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                </div>



                <button type="submit" class="btn btn-primary">Добавить</button>


            </form>
        </div>
    </div>
@endsection

@section('scripts_after')
    @include('include.tinymce.tinymce-scripts')
@endsection
