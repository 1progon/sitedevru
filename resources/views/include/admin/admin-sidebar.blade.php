<div class="">


    {{--TODO Add 'active' css class on route change--}}
    <div class="card">
        <div class="card-header">
            Меню
        </div>
        <div class="list-group">

            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-info font-weight-bold">Страница</div>
                <a href="{{ route('pages.create') }}"
                   class="list-group-item list-group-item-action"
                   aria-current="true">Добавить страницу</a>

                <a href="{{ route('pages.admin.index') }}"
                   class="list-group-item list-group-item-action">Все страницы</a>
            </div>

            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-info font-weight-bold">Шаблон</div>
                <a href="{{ route('templates.create') }}"
                   class="list-group-item list-group-item-action">Добавить шаблон</a>

                <a href="{{ route('templates.admin.index') }}"
                   class="list-group-item list-group-item-action">Все шаблоны</a>
            </div>


            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-info font-weight-bold">Услуга</div>
                <a href="{{ route('services.create') }}"
                   class="list-group-item list-group-item-action">Добавить услугу</a>
            </div>


            <div class="list-group list-group-flush">
                <div class="list-group-item list-group-item-info font-weight-bold">Цена</div>
                <a href="{{ route('prices.create') }}"
                   class="list-group-item list-group-item-action">Добавить цену</a>
            </div>


        </div>
    </div>
</div>
