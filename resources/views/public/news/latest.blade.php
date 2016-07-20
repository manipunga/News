<div class="blog-detail-side-popular-posts-wraper">
    <h3>
        Recent News
    </h3>
    @foreach($news as $latests)
    <div class="popular-post-block">
        <div class="row">
            <div class="col-xs-4">
                @if(!empty(@$latests['images']))
              <a  href="{{trans_url('news')}}/{{@$latests['slug']}}">  <img alt="" class="img-responsive" src="{!!trans_url('image/lb/'.$latests->default_image)!!}"></a>
                    @else
                   <a  href="{{trans_url('news')}}/{{@$latests['slug']}}">   <img alt="" class="img-responsive" src="{!!trans_url('img/news1.jpg')!!}"></a>
                        @endif
                    </img>
                </img>
            </div>
            <div class="col-xs-8 popular-post-inner">
                <div class="popular-post-desc">
                    <a href="{{trans_url('news')}}/{{@$latests['slug']}}">
                        <h4>
                            {{$latests->title}}
                        </h4>
                    </a>
                    <p>
                        {{$latests->published_on}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>