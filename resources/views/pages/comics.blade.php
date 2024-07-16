@extends('app')
@section('main-content')
<main>
    @include('partials.jumbotron')
    <section class="text">
        @include('partials.listProduct')
    </section>

</main>

@endsection
