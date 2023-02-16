<!--Comments-->
<div class="comments-area">
    <div class="widget-header-2 position-relative mb-30">
        <h5 class="mt-5 mb-30">Пікірлер</h5>
    </div>
    @forelse($news_detail->comments as $comment)
        <div class="comment-list wow fadeIn animated">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="desc">
                        <p class="comment">
                            {{$comment->comment}}
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">{{$comment->name}}</a>
                                </h5>
                                <p class="date">{{$comment->created_at->diffForHumans()}} </p>
                            </div>
                            <div class="reply-btn">
                                <a class="btn-reply"
                                   href="#comment-form"
                                   onclick="document.getElementById('comment_id').value = {{$comment->id}}"
                                >&nbsp;&nbsp;&nbsp; Жауап беру</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @forelse($comment->replies as $reply)
                @include('includes.partials', ['reply'=> $reply])
            @empty
            @endforelse
        </div>
    @empty
    @endforelse
</div>
<!--comment form-->
<div class="comment-form wow fadeIn animated" id="comment-form">
    <div class="widget-header-2 position-relative mb-30">
        <h5 class="mt-5 mb-30">Пікір қалдыру</h5>
    </div>
    <form class="form-contact comment_form" id="smart-form" method="post" action="{{route('comment.store', [$news_detail->id])}}">
        @csrf
        <input type="hidden" name="comment_id" id="comment_id">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" minlength="80" maxlength="300" name="comment" id="sendermessage" cols="20" rows="7" autocomplete="comment" required placeholder="Пікіріңіз"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" required name="name"  id="sendername" type="text" placeholder="Есіміңіз">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" required name="email" id="emailaddress" type="email" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" style="font-family: 'Georgia, serif'" data-btntext-sending="Sending..." class="btn btn-primary">Пікір қалдыру</button>
            <button type="reset" style="font-family: 'Georgia, serif'" class="btn btn-danger">Бас тарту</button>
        </div>
    </form>
</div>
