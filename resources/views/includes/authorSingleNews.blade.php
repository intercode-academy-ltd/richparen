<div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
    <div class="author-image mb-30">
        <a href="{{route('newsAuthor', $news_detail->admin->name)}}">
            <img src="{{ asset('storage/uploads/admin/admin.png') }}" alt="{{ $news_detail->name }}" class="avatar">
        </a>
    </div>
    <div class="author-info">
        <h4 class="font-weight-bold mb-20">
                            <span class="vcard author">
                                <span class="fn">
                                    <a style="font-family: 'Georgia, serif'" href="{{route('newsAuthor', $news_detail->admin->name)}}" title="Posted by Barbara Cartland" rel="author">{{$news_detail->admin->name }} {{ $news_detail->admin->surname }}</a>
                                </span>
                            </span>
        </h4>
        <h5 class="text-muted">Автор туралы</h5>
        <div class="author-description text-muted">
            Саясат, қоғамдық пікір және әлеуметтік әділеттілік, идеология.
        </div>
        <a href="{{route('newsAuthor', $news_detail->admin->name)}}" class="author-bio-link mb-md-0 mb-3">Барлық жазбаларды көру</a>
    </div>
</div>
