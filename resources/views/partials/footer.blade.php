
<footer>
    <div id="nav-container">
        <div class="container">

            <nav>

                <div>

                    <h3>DC COMICS</h3>
                    <ul>
                        <li v-for="link in comicsLinks">
                            <a href="#">link</a>
                        </li>
                    </ul>

                    <h3>SHOP</h3>
                    <ul>
                        <li v-for="link in comicsLinks">
                            <a href="#">link</a>
                        </li>
                    </ul>

                </div>

                <div>

                    <h3>DC</h3>
                    <ul>
                        <li v-for="link in comicsLinks">
                            <a href="#">link</a>
                        </li>
                    </div>

                    <div>
                        <h3>SITES</h3>
                        <ul>
                            <li v-for="link in comicsLinks">
                                <a href="#">link</a>
                            </li>
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
