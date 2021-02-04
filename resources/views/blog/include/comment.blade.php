<div class="comments-area">
    <h4>05 Comments</h4>


    @forelse( $comments as $comment)


        {{--TODO Check all data for comments from controller--}}
        <div class="comment-list">
            <div class="single-comment d-flex justify-content-between">
                <div class="user d-flex justify-content-between">
                    <div class="thumb">
                        <img src="assets/img/comment/comment_1.png" alt="">
                    </div>
                    <div class="desc">
                        {{--TODO Comment update--}}
                        <p class="comment">{{ $comment->text }}</p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    {{--TODO Author update--}}
                                    <a href="#">{{ $comment->author }}</a>
                                </h5>
                                <p class="date">{{ $comment->created_at }}</p>
                            </div>
                            <div class="reply-btn">
                                <a href="#" class="btn-reply text-uppercase">Ответить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        Нет комментариев
    @endforelse


</div>
<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="#" id="commentForm">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text"
                           placeholder="Name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email"
                           placeholder="Email">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text"
                           placeholder="Website">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message
            </button>
        </div>
    </form>
</div>
