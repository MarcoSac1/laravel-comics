<footer>
    <section class="container">
        <nav>
            <div>
                <h3>dc comics</h3>
                <ul>
                    @foreach ($dcComicsList as $link )
                    <li >
                        {{ $link['title'] }}
                    </li>
                    @endforeach
                </ul>
                <h3>shop</h3>
                <ul>
                    @foreach ($shopList as $link )
                    <li >
                        {{ $link['title'] }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3>dc</h3>
                <ul>
                    @foreach ($dcList as $link )
                    <li >
                        {{ $link['title'] }}
                    </li>
                    @endforeach
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
                    @foreach ($socialList as $link )
                    <li >
                        <img src="{{ $link['icon'] }}" alt="">
                    </li>
                    @endforeach
                </ul>
                </section>
            </div>
        </section>
</footer>
