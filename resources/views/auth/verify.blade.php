@extends('layouts.main-layout')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Сверим Ваш Email адрес</div>


                    {{--TODO Translate content to russian lang--}}
                    <div class="card-body">
                        @if ( session('resent'))
                            <div class="alert alert-success" role="alert">
                                Новая верификационная ссылка была отправлена на Ваш e-mail
                            </div>
                        @endif

                        Перед продолжением, пожалуйста, сверьте Ваш e-mail по верификационной ссылке.
                        Если Вы не получили e-mail
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">Нажмите здесь чтобы получить другой
                            </button>
                            .
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
