@extends('layouts.admin-layout')

@section('main')
    <div class="card">
        <div class="card-header">Редактировать плюс id:{{ $pros->id }}</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('our-pros.update', $pros ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title" class="required">Заголовок</label>
                    <input type="text" name="title" id="title" class="form-control"
                           placeholder="Заголовок"
                           required
                           minlength="3"
                           value="{{ $pros->title }}"
                           aria-describedby="helpId">
                </div>
                @error('title')
                <div class="alert alert-danger">
                    {{ old('title') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    @if( $pros->img )
                        <a href="#">
                            <img src="{{ asset('storage/' . $pros->img) }}" alt="image" width="100"
                                 height="100">
                        </a>
                        <label for="img">Удалить</label>
                        <input type="checkbox" name="img" id="img" value="1">
                    @else
                        <input type="file" class="form-control-file" name="image1" id="" placeholder=""
                               aria-describedby="fileHelpId">
                    @endif
                </div>
                @error('img')
                <div class="alert alert-danger">
                    {{ old('img') }}, {{ $message }}
                </div>
                @enderror


                <div class="form-group">
                    <label for="description" class="required">Описание</label>
                    <textarea class="form-control" name="description"
                              required
                              minlength="3"
                              id="description" rows="4">{{ $pros->description }}</textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">
                    {{ old('description') }}, {{ $message }}
                </div>
                @enderror


                <button type="submit" class="btn btn-primary">Обновить</button>


            </form>
        </div>
    </div>
@endsection

