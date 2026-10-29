@extends('layouts.master')

@section('title', 'Services')

@section('content')
<section>
    <header class="main"><h1>Services</h1></header>
    <div class="table-wrapper">
        <table>
            <thead><tr><th>Directive</th><th>Kaam</th></tr></thead>
            <tbody>
                <tr><td>@@extends</td><td>Parent layout ko inherit karna</td></tr>
                <tr><td>@@section / @@endsection</td><td>Child page me content block define karna</td></tr>
                <tr><td>@@yield</td><td>Parent layout me content ki jagah mark karna</td></tr>
                <tr><td>@@include</td><td>Chhota reusable view (partial) jodna</td></tr>
                <tr><td>@@push / @@stack</td><td>Page-wise extra CSS/JS jodna</td></tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
