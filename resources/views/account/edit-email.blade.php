@extends('layouts.account-layout')

@section('main')
    <div class="card">
        <div class="card-header">Изменить почту</div>

        <div class="card-body">
            @if ( session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <form action="{{ route('account.update.email') }}" method="post">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label class="required"> - Поле обязательно для заполнения!</label>
                </div>

                <div class="form-group">
                    <label for="old-email" class="required">Старая почта</label>
                    <input type="email"
                           name="old_email"
                           id="old-email"
                           class="form-control"
                           required>
                </div>
                @error('old_email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="email" class="required">Новая почта</label>
                    <input type="email"
                           name="email"
                           id="email"
                           class="form-control"
                           required>
                </div>
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-group">
                    <label for="email-confirmation" class="required">Повторить новую почту</label>
                    <input type="email"
                           name="email_confirmation"
                           id="email-confirmation"
                           class="form-control"
                           required>
                </div>
                @error('email_confirmation')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror


                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>
@endsection
