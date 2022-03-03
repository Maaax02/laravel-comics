@extends('layouts.layout')

@section('content')
    <div>
        <main class="black">
            <div class="container-1">
                @foreach($comics as $key)
                <div id="card">
                    <div class="image">
                        <img src="{{$key['thumb']}}" alt="">
                    </div>
                    <p>{{$key['title']}}</p>
                </div>
                @endforeach
            </div>
            <div class="load-more">
                <button>LOAD MORE</button>
            </div>
        </main>
    </div>

@endsection


