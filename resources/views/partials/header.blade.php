@php
    $headerMenues = config('menues.nav')
@endphp

<header>

    <div class="container">
        <img src="/img/dc-logo.png" alt="Logo DC">

        <ul class="header-menu">

            @foreach ($headerMenues as $item)
                <li>
                    <a href="#">{{$item['text']}}</a>
                </li>
            @endforeach

        </ul>
    </div>

</header>
