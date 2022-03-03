@php

    $navItems = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP'
    ]
@endphp


<header>
    <div class="header-container">
        <span>DC POWER VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>
</header>
<nav>
    <img src="{{ asset('images/dc-logo.png') }}" alt="">
    <ul class="nav-ul">
        @foreach($navItems as $key)
        <li>
            {{$key}}
        </li> 
        @endforeach
    </ul>
    <input type="text" placeholder="Search">
</nav>