@extends('layouts.master')

@section('title', 'About')

@section('content')
<section>
    <header class="main"><h1>About</h1></header>
    <p>Ye Laravel Lab Work 4 hai: Blade template inheritance se ek dynamic theme banana
       (Editorial style, HTML5 UP se inspired).</p>

    <h2>Kaise kaam karta hai</h2>
    <ul>
        <li><strong>@@extends('layouts.master')</strong> - page master layout ko inherit karta hai.</li>
        <li><strong>@@section('content') ... @@endsection</strong> - page apna content deta hai.</li>
        <li><strong>@@yield('content')</strong> - master layout me wo jagah jahan content aata hai.</li>
        <li><strong>@@include('partials.sidebar')</strong> - reusable sidebar / header.</li>
        <li><strong>Dynamic theme</strong> - sidebar ke colour circles se theme colour badalta hai (session me save hota hai).</li>
    </ul>
</section>
@endsection
