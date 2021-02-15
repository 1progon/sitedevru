@extends('layouts.main-layout')

{{--TODO Add meta--}}
@section('meta_title', 'Страница контакты')
@section('meta_keywords', 'страница контакты, контакты компании по изготовлению сайтов, контакты где можно заказать
сайт')
@section('meta_description', 'Контакты нашей компании, где Вы можете заказать себе сайт или мобильное приложение. А
также, форма для связи')

@section('main')
    <div class="container">
        <!-- Section-tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <span>Контакты</span>
                    <h2>Свяжитесь с нами</h2>
                </div>
            </div>
        </div>

        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 bg-secondary">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10065.864609340655!2d56
                    .15828305111433!3d57.96941659691209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                    .1!3m3!1m2!1s0x43e8bf4c407cced1%3A0x40068919f9dcea45
                    !2z0YPQuy4g0JrQvtGB0LzQvtC90LDQstGC0LAg0JHQtdC70Y_QtdCy0LAsIDQw0LQsINCf0LXRgNC80YwsINCf0LXRgNC80YHQutC40Lkg0LrRgNCw0LksIDYxNDAzNg!5e0!3m2!1sru!2sru!4v1610702514663!5m2!1sru!2sru"
                            width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>

                </div>


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Форма для связи</h2>
                    </div>
                    <div class="col-lg-8">


                        <form class="form-contact contact_form" action="{{ route('message.send') }}"
                              method="post"
                              id="contactForm">

                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control"
                                               name="form[subject]"
                                               id="subject"
                                               type="text"
                                               placeholder="О чём пойдет речь?">
                                    </div>

                                    <div>
                                        @error('form.subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class=" col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100"
                                                  name="form[message]"
                                                  id="message"
                                                  cols="30"
                                                  rows="9"
                                                  required
                                                  placeholder="Введите текст сообщения"></textarea>
                                    </div>

                                    <div>
                                        @error('form.message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid"
                                               name="form[name_author]"
                                               id="name"
                                               type="text"
                                               required
                                               placeholder="Как Вас зовут?">
                                    </div>

                                    <div>
                                        @error('form.name_author')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid"
                                               name="form[email_author]"
                                               id="email"
                                               type="text"
                                               placeholder="Ваш телефон или e-mail для связи">
                                    </div>

                                    <div>
                                        @error('form.email_author')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                </div>
                            </div>

                            @if( session('sent_status'))
                                @php
                                    $messageSuccess = 'Сообщение успешно отправлено!';
                                    $messageFailed = 'Что-то пошло не так, сообщение не отправлено!';
                                @endphp

                                @if ( session('sent_status') === 'success')
                                    <div class="alert alert-success">
                                        {{ $messageSuccess }}
                                    </div>
                                @elseif( session('sent_status') === 'error')
                                    <div class="alert alert-danger">
                                        {{ $messageFailed }}
                                    </div>

                                @else
                                    <div class="alert alert-warning">
                                        {{ session('sent_status') }}
                                    </div>
                                @endif
                            @endif

                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Отправить
                                    сообщение
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Россия, г. Пермь</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+7 (982) 461-34-24</h3>
                                <h3>+7 (342) 293-01-23</h3>
                                <p>
                                    ПН-ПТ 9:00-19:00.
                                    <br/>
                                    СБ-ВС 11:00-16:00.

                                    Telegram, WhatsApp, Viber
                                </p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">

                                {{--TODO Hardcoded email--}}
                                <h3>info@siteprm.ru</h3>
                                <p>Отправляйте Ваши сообщения в любое время</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection

