@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')
<div class="product-page">

    {{-- タブ --}}
    <div class="tab-wrapper">
        <button class="tab active">Giftセット</button>
        <button class="tab">Baked</button>
        <button class="tab">シフォン&キッシュ</button>
    </div>

    {{-- Giftセット --}}
    <div class="product-grid">
        @foreach($products as $product)
        <div class="product-card">
            <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
            <p class="product-name">{{ $product['name'] }}</p>
        </div>
        @endforeach
    </div>

</div>
@endsection