<section class="list-products">
    <div class="cards">
        @foreach ($data as $card )
        <article class="card" >
            <img :src="{{ $card['thumb'] }}" alt="card.series" >
            <h4>
                {{ $card['title'] }}
            </h4>
        </article>
        @endforeach
        <button> Load more</button>
    </div>
</section>
