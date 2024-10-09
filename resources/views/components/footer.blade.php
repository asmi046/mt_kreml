<footer>
    {{-- <a class="logo" href="https://www.mirturizma46.ru/">
        <img src="{{ asset('img/logo_white.svg')}}" alt="Тур в Санкт-Петербург - МирТуризма 46">
    </a> --}}

    <nav>
        <x-menu-puncts></x-menu-puncts>
    </nav>
    <hr>
    <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
    <br>
    <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>


</footer>
