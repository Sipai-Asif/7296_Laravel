@extends('layouts.master')

@section('title', 'Contact')

@push('styles')
<style> #contact-note { font-style: italic; } </style>
@endpush

@section('content')
<section>
    <header class="main"><h1>Contact</h1></header>
    <p id="contact-note">Is page ne @@push('styles') se apni extra CSS master layout me jodi hai.</p>

    <form method="post" action="#">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
        <label>Message</label>
        <textarea name="message" rows="5" placeholder="Enter your message"></textarea>
        <button type="submit" class="btn">Send Message</button>
    </form>
</section>
@endsection
