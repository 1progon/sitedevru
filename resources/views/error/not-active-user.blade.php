@extends('layouts.main-layout')

@section('main')
    <div class="container my-5">

        @if ( session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div>
            <h1>☹️</h1>
            <p>Извините, Ваш аккаунт неактивен!</p>
            <p>По всем вопросам Вы можете обратиться по телефону или через форму в разделе Контакты!</p>
        </div>
    </div>
@endsection
