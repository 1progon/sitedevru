<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="#">
            <div class="form-group">
                <div class="input-group mb-3">
                    <label for="input-search"></label>
                    <input id="input-search" type="text" class="form-control" placeholder='Что искать?'>
                    <div class="input-group-append">
                        <button class="" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg w-100 btn_1 boxed-btn"
                    type="submit">Поиск
            </button>
        </form>
    </aside>

    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Категории</h4>
        <ul class="list cat-list">

            @forelse( $cats as $cat )
                <li>
                    <a href="javascript:void(0)" class="d-flex">
                        <p class="mr-1">{{ $cat->title }}</p>
                        <p class="font-weight-bold">({{ $cat->posts->count() }})</p>
                    </a>
                </li>
            @empty
            @endforelse
        </ul>
    </aside>

    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Последние записи</h3>
        @forelse( $recent as $recentPost)
            <div class="media post_item">
                <img src="{{ $recentPost->img }}" alt="post">
                <div class="media-body">
                    <a href="{{ route('blogs.show', $recentPost) }}">
                        <h3>{{ $recentPost->title }}</h3>
                    </a>
                    <p>{{ $recentPost->created_at }}</p>
                </div>
            </div>
        @empty
        @endforelse


    </aside>
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title">Плитка тегов</h4>
        <ul class="list">
            <li>
                <a href="#">project</a>
            </li>
            <li>
                <a href="#">love</a>
            </li>
            <li>
                <a href="#">technology</a>
            </li>
            <li>
                <a href="#">travel</a>
            </li>
            <li>
                <a href="#">restaurant</a>
            </li>
            <li>
                <a href="#">life style</a>
            </li>
            <li>
                <a href="#">design</a>
            </li>
            <li>
                <a href="#">illustration</a>
            </li>
        </ul>
    </aside>


    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title">Наш ВКонтакте</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                </a>
            </li>
        </ul>
    </aside>


    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Подписка на обновления</h4>

        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control"
                       placeholder='Введите Ваш Email' required>
            </div>
            <button class="button rounded-0 primary-bg w-100 btn_1 boxed-btn"
                    type="submit">Подписаться
            </button>
        </form>
    </aside>
</div>
