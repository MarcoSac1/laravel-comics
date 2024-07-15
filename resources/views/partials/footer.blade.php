<footer>
    <section class="container">
        <nav>
            <div>
                <h3>dc comics</h3>
                <ul>
                    <li v-for="link in footerLinks"  :key="link.id">
                        <a :href="link.url">

                        </a>
                    </li>
                </ul>
                <h3>shop</h3>
                <ul>
                    <li v-for="link in footerShop"  :key="link.id">
                        <a :href="link.url">

                        </a>
                    </li>>
                </ul>
            </div>
            <div>
                <h3>dc</h3>
                <ul>
                    <li v-for="link in footerTermOfUse"  :key="link.id">
                        <a :href="link.url">

                        </a>
                    </li>
                </ul>
            </div>
            <div>
                    <h3>sites</h3>
                <ul>
                    @foreach ($footerSites as $link )
                    <li >
                        {{ $link['title'] }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <section class="img">
        </section>
    </section>
        <section class="social">
            <div>
                <section class="sing">
                    <button> sing-up now! </button>
                </section>
                <section class="follow">
                    <h2>follow us</h2>
                <ul>
                    <li v-for="link in footerSocialIcon"  :key="link.id">
                        <a :href="link.url">
                            <img :src="getImagePath(link.img)" alt="">

                        </a>
                    </li>
                </ul>
                </section>
            </div>
        </section>
</footer>
