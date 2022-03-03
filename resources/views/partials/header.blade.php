@php

    $navItems = [
        'CHARACTERS' => 'characters',
        'COMICS' => 'comics',
        'MOVIES' => 'movies',
        'TV' => 'tv',
        'GAMES' => 'games',
        'COLLECTIBLES' => 'collectibles',
        'VIDEOS' => 'videos',
        'FANS' => 'fans',
        'NEWS' => 'news',
        'SHOP' => 'shop'
    ]
@endphp


<header>
    <div class="header-container">
        <span>DC POWER VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>
</header>
<nav>
    <img src="{{ asset('images/dc-logo.png') }}" alt="" href="/home">
    <ul class="nav-ul">
        @foreach($navItems as $key => $value)
        <li>
            <a href="{{$value}}">{{$key}}</a>
        </li> 
        @endforeach
    </ul>
    <div class="search">
        <input type="text" placeholder="Search">
    </div>
</nav>