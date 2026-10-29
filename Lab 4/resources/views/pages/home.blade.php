@extends('layouts.master')

@section('title', 'Home')

@section('banner')
<section id="banner">
    <div class="content">
        <header>
            <h1>Blade Template<br> Inheritance</h1>
            <p>Ek master layout, kai child pages.</p>
        </header>
        <p>Ye page <code>layouts/master.blade.php</code> ko extend karta hai aur
           title, banner, content aur sidebar sections apne hisab se bharta hai.</p>
        <ul class="actions">
            <li><a href="{{ route('about') }}" class="button">Learn More</a></li>
            <li><a href="{{ route('services') }}" class="button alt">Services</a></li>
        </ul>
    </div>
    <div class="banner-art">&#9733;</div>
</section>
@endsection

@section('content')
<section>
    <header class="major"><h2>Blade ke 3 main directives</h2></header>
    <div class="features">
        @foreach ($features as $f)
            <article>
                <span class="icon">&#10003;</span>
                <h3>{{ $f['title'] }}</h3>
                <p>{{ $f['text'] }}</p>
            </article>
        @endforeach
    </div>
</section>
@endsection

@section('sidebar')
<section>
    <header class="major"><h2>Quick links</h2></header>
    <p><a href="{{ route('contact') }}">Contact us</a></p>
</section>
@endsection
