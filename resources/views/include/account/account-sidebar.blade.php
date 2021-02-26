<div class="account-sidebar">

    <div class="card">
        <div class="card-header">
            Меню пользователя
        </div>
        <div class="list-group">

            @php
                $route = Route::currentRouteName();
            @endphp

            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-secondary font-weight-bold">Пользователь</div>

                <a href="{{ route('account.edit.data') }}"
                   class="list-group-item list-group-item-action @if( $route == 'account.edit.data') active @endif"
                   aria-current="true">Изменить данные</a>

                <a href="{{ route('account.edit.password') }}"
                   class="list-group-item list-group-item-action @if( $route == 'account.edit.password') active @endif"
                   aria-current="true">Изменить пароль</a>

                <a href="{{ route('account.edit.email') }}"
                   class="list-group-item list-group-item-action @if( $route == 'account.edit.email') active @endif"
                   aria-current="true">Изменить почту</a>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Уведомления</a>
            </div>


            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-secondary font-weight-bold">Заказы</div>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Сделать заказ</a>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Активные заказы</a>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Ожидают оплаты</a>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Архив заказов</a>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Все заказы</a>

            </div>

            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-secondary font-weight-bold">Поддержка</div>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Создать обращение</a>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Все обращения</a>
            </div>

            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-secondary font-weight-bold">Аккаунт</div>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Временное отключение</a>

                <a href="#"
                   class="list-group-item list-group-item-action @if( $route == '') active @endif"
                   aria-current="true">Удаление</a>
            </div>


        </div>
    </div>
</div>
