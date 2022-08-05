<ul class="navbar-nav mr-auto">
    @foreach ($categories as $category)
        <li class="nav-item">
            <a class="nav-link" href="{{route('categories.single', ['slug' => $category->slug])}}">{{$category->title}}</a>
        </li>
    @endforeach

    <li class="nav-item">
        <a class="nav-link" href="#">Блог</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Обратная связь</a>
    </li>
</ul>
<form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="How may I help?">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>