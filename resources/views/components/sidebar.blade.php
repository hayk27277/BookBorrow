<div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
    <a href="/"
       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Genres - {{$genreCount}}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('main')}}"
               class="nav-link link-dark {{route('main') == url()->current()?'active':''}}">
                All
            </a>
        </li>
        @foreach($genres as $genre)
            <li class="nav-item">
                <a href="{{route('genreBooks',$genre->name)}}"
                   class="nav-link link-dark {{route('genreBooks',$genre->name) == url()->current()?'active':''}}">
                    {{$genre->name}}
                </a>
            </li>
        @endforeach
    </ul>
    <hr>
</div>
