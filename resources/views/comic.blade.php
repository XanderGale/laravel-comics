@extends('layouts.app')

@section('addictional_css')
<link rel="stylesheet" href="">
@endsection

@section('page_title')
Comic Details
@endsection

@section('main_content')

    <div class="container">

        <img src="{{ $comic_info['thumb'] }}" alt="Product Image">

        <div class="comic-info">

            <p>{{ $comic_info['description'] }}</p>
                
        </div>

        <button class="buy-now">Buy Now</button>

    </div>

@endsection