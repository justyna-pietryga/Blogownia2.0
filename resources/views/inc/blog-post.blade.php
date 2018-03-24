{{--<div class="blog-container">--}}

    {{--<div class="blog-header">--}}
        {{--<div class="blog-cover">--}}
            {{--<div class="blog-author">--}}
                {{--<h3>Name Surname</h3>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="blog-body">--}}
        {{--<div class="blog-title">--}}
            {{--<h1><a href="#">I Like To Make Cool Things</a></h1>--}}
        {{--</div>--}}
        {{--<div class="blog-summary">--}}
            {{--<p>I love working on fresh designs that <a href="https://www.youtube.com/watch?v=hANtM1vJvOo">breathe</a>. To that end, I need to freshen up my portfolio here because it does exactly the opposite. For the next month I will be working almost exclusively on my portfolio. Sounds like a lot of fun!</p>--}}
        {{--</div>--}}
        {{--<div class="blog-tags">--}}
            {{--<ul>--}}
                {{--<li><a href="#">css</a></li>--}}
                {{--<li><a href="#">web design</a></li>--}}
                {{--<li><a href="#">codepen</a></li>--}}
                {{--<li><a href="https://twitter.com/russbeye">twitter</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="blog-footer">--}}
        {{--<ul>--}}
            {{--<li class="published-date">2 days ago</li>--}}
            {{--<li class="comments"><a href="#"><svg class="icon-bubble"><use xlink:href="#icon-bubble"></use></svg><span class="numero">4</span></a></li>--}}
            {{--<li class="shares"><a href="#"><svg class="icon-star"><use xlink:href="#icon-star"></use></svg><span class="numero">1</span></a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}

{{--</div>--}}


@foreach($posts as $post)
<div class="blog-container">

    {{--<div class="blog-header">--}}
        {{--<div class="blog-author--no-cover">--}}
            {{--<h3>{{App\BlogPost::find($post->id)->user->name}}</h3>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="blog-header">
         <div class="blog-cover">
             <div class="blog-author">
                <h3>{{App\BlogPost::find($post->id)->user->name}}</h3>
             </div>
         </div>
    </div>

    <div class="blog-body">
        <div class="blog-title">
            <h1><a href="#">{{$post->title}}</a></h1>
        </div>
        <div class="blog-summary">
            {{--<p>Here is an example of a post without a cover image. You don't always have to have a cover image. In fact, leaving them out from time to time and disrupt the predictive flow and make the overall design more interesting. Something to think about.</p>--}}
            <p>{{$post->content}}</p>
        </div>
        <div class="blog-tags">
            <ul>
                <li><a href="#">design</a></li>
                <li><a href="#">web dev</a></li>
                <li><a href="#">css</a></li>
            </ul>
        </div>
    </div>

    <div class="blog-footer">
        <ul>
            <li class="published-date">{{$post->created_at}}</li>
            <li class="comments"><a href="#"><svg class="icon-bubble"><use xlink:href="#icon-bubble"></use></svg><span class="numero">8</span></a></li>
            <li class="shares"><a href="#"><svg class="icon-star"><use xlink:href="#icon-star"></use></svg><span class="numero">3</span></a></li>
        </ul>
    </div>

</div>

    @endforeach