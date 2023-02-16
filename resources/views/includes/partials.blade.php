<div class="single-comment depth-2 justify-content-between d-flex mt-50">
    <div class="user justify-content-between d-flex">
        <div class="desc">
            <p class="comment">
                {{$reply->comment}}
            </p>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <h5>
                        <a href="#">{{$reply->name}}</a>
                    </h5>
                    <p class="date">{{$reply->created_at->diffForHumans()}}</p>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="reply-btn">
                    <a href="#" class="btn-reply">Жауап беру</a>
                </div>
            </div>
        </div>
    </div>
</div>

