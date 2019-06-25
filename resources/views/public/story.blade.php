

    <?php //Hiển thị story?>

    @foreach($lisstory as $key => $story)

        <div class="stories-inner" id="stories-3">
            <div class="col-md-6 stories-1">
                <div class="stories-1-inner">
                    <h3>{{$story->title}}.</h3>
                    <hr>
                    <span>"</span>
                    <span>{{$story->text}}
                        </span>
                    <span>"</span>
                    <p><i>{{$story->author}}</i></p>
                    <a href="{{url('stories')}}">
                        All Stories
                    </a>
                </div>
            </div>
            <div class="col-md-6 stories-2" id="stories-bg-{{$story->story_id}}"></div>
        </div>
    @endforeach




