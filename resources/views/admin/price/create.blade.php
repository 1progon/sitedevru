@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Добавить цену</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('prices.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text"
                           name="title"
                           id="title"
                           class="form-control"
                           placeholder="Заголовок"
                           required
                           minlength="3"
                           value="{{ old('title') }}"
                           aria-describedby="helpId">
                </div>
                @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                @error('slug')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <div class="form-group list-group-item rounded">
                    <label for="on-homepage" class="required">На главную</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio"
                               id="on-homepage1"
                               name="on_homepage"
                               value="1"
                               required
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage1">Да</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio"
                               id="on-homepage2"
                               name="on_homepage"
                               value="0"
                               required
                               checked
                               class="custom-control-input">
                        <label class="custom-control-label" for="on-homepage2">Нет</label>
                    </div>
                </div>
                @error('on_homepage')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">

                    <input type="file" class="form-control-file" name="img" id="img" placeholder=""
                           aria-describedby="fileHelpId">


                    <div id="image1" class="my-1">
                        <span id="file"></span>
                        <span id="size"></span>
                        <span id="type"></span>
                        <span id="filename"></span>
                    </div>
                    <script>
                        let input = document.getElementById('img');
                        input.addEventListener('change', (e) => {
                            console.log(input.files[0])
                            let file = input.files[0];

                            document.querySelector('#image1 #size')
                                .innerHTML = 'Size: ' + Math.floor(file.size / 1000) + ' kb.';

                            document.querySelector('#image1 #type')
                                .innerHTML = 'Type: ' + file.type;

                            document.querySelector('#image1 #filename')
                                .innerHTML = 'Name: ' + file.name;

                            document.querySelector('#image1 #file')
                                .innerHTML = '<img src="' + window.URL.createObjectURL(file) + '" alt="" width="200"/>';
                        })
                    </script>
                </div>
                @error('img')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="meta-description">Meta description</label>
                    <input type="text" name="meta_description" id="meta-description" class="form-control"
                           placeholder="meta description"
                           value="{{ old('meta_description') }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="meta-keywords">Meta keywords</label>
                    <input type="text" name="meta_keywords" id="meta-keywords" class="form-control"
                           placeholder="meta keywords"
                           value="{{ old('meta_keywords') }}"
                           aria-describedby="helpId">
                </div>
                @error('meta_keywords')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="price" class="required">Цена</label>
                    <input type="number"
                           name="price"
                           id="price"
                           class="form-control"
                           placeholder="price"
                           required
                           value="{{ old('price') }}"
                           aria-describedby="helpId">
                </div>
                @error('price')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control"
                              name="description"
                              id="description"
                              required
                              rows="4">{{ old('description') }}</textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <button type="submit" class="btn btn-primary">Добавить</button>


            </form>
        </div>
    </div>
@endsection

@section('scripts_after')
    @include('include.tinymce.tinymce-scripts')
@endsection
