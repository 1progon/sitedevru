<section class="tips-tricks-area tips-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 pr-0">
                <div class="section-tittle text-center">
                    <h2>Советы и рекомендации, блоги</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @forelse( $blogs as $blog )
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="{{ route('blogs.show', $blog) }}">
                        <div class="single-tips mb-50 text-center">
                            <div class="tips-img">
                                @if( $blog->img )
                                    <img src="{{ asset('storage/' . $blog->img) }}" alt="{{ $blog->title }}">
                                @else
                                    <img src="{{ asset('assets/img/icons/blog.svg') }}"
                                         alt="{{ $blog->title }}"
                                         width="150">
                                @endif


                            </div>
                            <div class="tips-caption">
                                <h4>{{ $blog->title }}</h4>
                                <p>{{ $blog->created_at }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse


        </div>
    </div>
</section>
