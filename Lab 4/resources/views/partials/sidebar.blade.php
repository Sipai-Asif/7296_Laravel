<!-- Menu (config/theme.php se loop chalake banta hai) -->
<nav id="menu">
    <header class="major"><h2>Menu</h2></header>
    <ul>
        @foreach (config('theme.menu') as $item)
            <li class="{{ request()->routeIs($item['route']) ? 'active' : '' }}">
                <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>

<!-- Dynamic theme switcher -->
<section>
    <header class="major"><h2>Change Theme</h2></header>
    <p>
        @foreach (config('theme.colors') as $name => $c)
            <a href="{{ route('theme.set', $name) }}" title="{{ ucfirst($name) }}"
               style="display:inline-block;width:2rem;height:2rem;border-radius:50%;background:{{ $c['accent'] }};margin-right:.4rem;border:3px solid {{ session('theme', config('theme.default')) === $name ? '#3d4449' : '#fff' }}"></a>
        @endforeach
    </p>
</section>

{{-- Har page apna extra sidebar content yahan de sakta hai --}}
@yield('sidebar')

<footer id="footer">
    <p class="copyright">&copy; {{ date('Y') }} {{ config('theme.footer') }}.
        Design: <a href="https://html5up.net">HTML5 UP (Editorial style)</a>.</p>
</footer>
