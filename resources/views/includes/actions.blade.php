<div class="actions-wrapper">
    <div class="actions">
        @foreach(config('mock.action') as $actionCard)
            <div class="action">
                <a href="" class="action__link-img">
                    <svg class="action__img @if(Arr::hasAny($actionCard, 'class'))
                    {{$actionCard['class']}}@endif">
                        <use href="{{$actionCard['img']}}"></use>
                    </svg>
                </a>
                <div class="action__link-text">{{$actionCard['text']}}</div>
            </div>
        @endforeach
    </div>
</div>
