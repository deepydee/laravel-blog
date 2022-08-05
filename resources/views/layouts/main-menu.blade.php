<ul class="navbar-nav mr-auto">
    @foreach ($categories as $category)
        <li class="nav-item">
            <a class="nav-link" href="{{route('categories.single', ['slug' => $category->slug])}}">{{$category->title}}</a>
        </li>
    @endforeach
</ul>
<form class="form-inline" method="GET" action="{{route('search')}}">
    <input class="form-control mr-sm-2 @error('s') is-invalid @enderror" type="text" placeholder="Поиск..." name="s">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<style>
    .market-header .form-inline .form-control.is-invalid {
        border: 2px solid red;
    }
</style>