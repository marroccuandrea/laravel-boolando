@extends('layout.main')

@section('content')
    @php
        $cards = config('productcards');
    @endphp
    <main>
        <div class="container">

            @foreach ($cards['products'] as $item)
                <div class="card">
                    <div class="card-images">
                        <img src="{{ Vite::asset('public/img/') . $item['frontImage'] }}" alt="">
                        {{-- <img class="secondary-image" :src="`/img/${vestito.backImage}`" alt="1"> --}}
                        <div class="favourite">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div class="badges">
                            @foreach ($item['badges'] as $badge)
                                <span class="{{ $badge['type'] }}">{{ $badge['value'] }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-text">
                        <div class="brand">{{ $item['brand'] }}</div>
                        <div class="product-name">{{ $item['name'] }}</div>
                        <div class="price">
                            <span>{{ $item['price'] }} &#8364</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
