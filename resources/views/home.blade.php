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


{{-- {{route(prodotto.details), $loop -> index}} --}}

 {{--
    

    in terminale: php artisan make:model 'nome' (Product) Pascal caase

    modificare nel file .env il database -> riavviare il server
    
    nel controller creare una variabile con dentro il model
    eseguire una funzione:  $data = Product::all();
                            (dump and die) = dd($data)
    --}}


