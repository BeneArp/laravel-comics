@php
    $comicsMenu = config('menues.nav');
    $shopMenu = config('menues.footerNav.shopLinks');
    $dcMenu = config('menues.footerNav.dcLinks');
    $siteMenu = config('menues.footerNav.siteLinks')
    // dump($dcMenu)

@endphp

<footer>
    <div id="nav-container">
        <div class="container">

            <nav>

                <div>

                    <h3>DC COMICS</h3>
                    <ul>

                        @foreach ( $comicsMenu as $item )
                            <li>
                                <a href="#">{{$item['name']}}</a>
                            </li>
                        @endforeach

                    </ul>

                    <h3>SHOP</h3>
                    <ul>

                        @foreach ( $shopMenu as $item )
                            <li>
                                <a href="#">{{$item['text']}}</a>
                            </li>
                        @endforeach

                    </ul>

                </div>

                <div>

                    <h3>DC</h3>
                    <ul>

                        @foreach ( $dcMenu as $item )
                            <li>
                                <a href="#">{{$item['text']}}</a>
                            </li>
                        @endforeach

                    </ul>

                    </div>

                    <div>
                        <h3>SITES</h3>
                        <ul>

                            @foreach ( $siteMenu as $item )
                                <li>
                                    <a href="#">{{$item['text']}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

            </nav>

            <img src="/img/dc-logo-bg.png" alt="">

        </div>
    </div>

    <div id="footer-banner">
        <div class="container">

            <div class="button">
                SIGN-UP NOW!
            </div>

            <div id="social">
                <h3>FOLLOW US</h3>
                <a :href="social.url" v-for="social in socialLinks"><img :src="getImagePath(`../assets/${social.image}`)" :alt="social.alt"></a>
            </div>

        </div>
    </div>
</footer>
