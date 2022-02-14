@extends('layouts.app')

@section('addictional_css')
<link rel="stylesheet" href="">
@endsection

@section('page_title')
Home
@endsection

@section('main_content')

    <div class="container">

        <span class="section-title">Current Series</span>

        <div class="comics-list">

        @foreach ($comics as $comic)

        @include('components.comicitem')

        @endforeach
            
        </div>

        <button class="load-more">Load More</button>

    </div>

@endsection