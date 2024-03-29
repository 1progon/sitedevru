<div class="admin-sidebar">
    <div class="card">
        <div class="card-header">
            Меню админа
        </div>
        <div class="list-group">

            @php
                $route = Route::currentRouteName();
            @endphp

            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-secondary font-weight-bold">Пользователи</div>

                <a href="{{ route('admin.users') }}"
                   class="list-group-item list-group-item-action @if( $route == 'admin.users') active
@endif">Все пользователи</a>
            </div>

            <div class="list-group list-group-flush">
                <div
                    class="list-group-item
                    list-group-item-secondary
                    font-weight-bold
                    @if( $route == 'pages.edit')
                        active
                    @endif">
                    Страница
                </div>
                <a href="{{ route('pages.create') }}"
                   class="list-group-item list-group-item-action @if( $route == 'pages.create') active @endif"
                   aria-current="true">Добавить страницу</a>

                <a href="{{ route('pages.admin.index') }}"
                   class="list-group-item list-group-item-action @if( $route == 'pages.admin.index') active @endif">Все
                    страницы</a>
            </div>

            <div class="list-group list-group-flush">
                <div class="list-group-item
                    list-group-item-secondary
                    font-weight-bold
                    @if( $route == 'templates.edit')
                    active
                    @endif">
                    Шаблон
                </div>
                <a href="{{ route('templates.create') }}"
                   class="list-group-item list-group-item-action @if( $route == 'templates.create') active @endif">Добавить
                    шаблон</a>

                <a href="{{ route('templates.admin.index') }}"
                   class="list-group-item list-group-item-action @if( $route == 'templates.admin.index') active @endif">Все
                    шаблоны</a>
            </div>


            <div class="list-group list-group-flush">
                <div class="list-group-item
                    list-group-item-secondary
                    font-weight-bold
                    @if( $route == 'services.edit')
                    active
                    @endif">
                    Услуга
                </div>
                <a href="{{ route('services.create') }}"
                   class="list-group-item list-group-item-action @if( $route == 'services.create') active @endif">Добавить
                    услугу</a>


                <a href="{{ route('services.admin.index') }}"
                   class="list-group-item list-group-item-action @if( $route == 'services.admin.index') active @endif">Все
                    услуги</a>
            </div>


            <div class="list-group list-group-flush">
                <div class="list-group-item
                    list-group-item-secondary
                    font-weight-bold
                    @if( $route == 'prices.edit')
                    active
                    @endif">
                    Цена
                </div>
                <a href="{{ route('prices.create') }}"
                   class="list-group-item list-group-item-action @if( $route == 'prices.create') active @endif">Добавить
                    цену</a>

                <a href="{{ route('prices.admin.index') }}"
                   class="list-group-item list-group-item-action @if( $route == 'prices.admin.index') active @endif">Все
                    цены</a>
            </div>


            <div class="list-group list-group-flush">
                <div class="list-group-item
                    list-group-item-secondary
                    font-weight-bold
                    @if( $route == 'our-pros.edit')
                    active
                    @endif">
                    Наши плюсы
                </div>
                <a href="{{ route('our-pros.create') }}"
                   class="list-group-item list-group-item-action @if( $route == 'our-pros.create') active @endif">Добавить
                    плюс</a>

                <a href="{{ route('our-pros.admin.index') }}"
                   class="list-group-item list-group-item-action @if( $route == 'our-pros.admin.index') active @endif">Все
                    плюсы</a>
            </div>

            <div class="list-group list-group-flush">
                <div class="list-group-item
                    list-group-item-secondary
                    font-weight-bold
                    @if( $route == 'portfolio.edit')
                    active
                    @endif">
                    Наше портфолио
                </div>
                <a href="{{ route('portfolio.create') }}"
                   class="list-group-item list-group-item-action @if( $route == 'portfolio.create') active @endif">Добавить
                    портфолио</a>

                <a href="{{ route('portfolio.admin.index') }}"
                   class="list-group-item list-group-item-action @if( $route == 'portfolio.admin.index') active
@endif">Всё
                    портфолио</a>
            </div>


        </div>
    </div>
</div>
