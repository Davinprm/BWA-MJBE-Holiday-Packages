<x-layout>
    <x-slot:title>Home</x-slot:title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

    <section id="home-hero-container">
        <img src="{{ Storage::url('video/yacht.mp4') }}" class="video home-video"></img>
        <div>
            <h1 class="text-title">Private Yacht Charter in Indonesia</h1>
            <p class="text-description-4">Experience the scenery of the beauty of Indonesia with our private yacht
                charter. An embodiment of
                unparalleled comfort and impeccable service, our bespoke private cruises aboard Antaraja, Penida and
                Uluwatu promise to transport you deep into Indonesia’s vibrant culture, as you glide across turquoise
                waters. Welcome to Indoneyacht, where we redefine the fine art of yachting.</p>
        </div>
    </section>

    <section id="home-highlight-container">
        <header>
            <h1 class="text-title">Flexibility on Your Vacation</h1>
        </header>
        <div>
            <div class="highlight-text">
                <span>Private Yacht Charter</span><span>|</span><span>Design Your Trip</span><span>|</span><span>Nusa
                    Penida</span><span>|</span><span>Fine Dinning</span>
            </div>
            <p class="text-description-4">Discover the perfect fusion of adventure, relaxation and luxury on our
                tailor-made private yachts in Indonesia, namely Antaraja, Penida, and Uluwatu. Meticulously curated by
                our expert team, these voyages are designed to carve cherished memories into the hearts of our
                distinguished guests.</p>
            <a href="{{ route('home') }}" class="text-description-4">View Yachts</a>
        </div>
    </section>

    <section id="home-nataraja">
        <div>
            <img src="{{ asset('img/yacht43.jpg') }}">
            <h1 class="text-title-3">Nataraja</h1>
            <div class="highlight-text">
                <span>Exclusive</span><span>|</span><span>Romantic</span><span>|</span><span>Private</span>
            </div>
        </div>
        <div>

            <div id="home-nataraja-left">
                <div class="left">
                    <header>
                        <h1 class="text-title-3">Nataraja</h1>
                        <h3 class="text-description-5">Exclusive and Romantic</h3>
                    </header>
                    <div class="highlight-text">
                        <span>4 Cabins</span><span>|</span><span>$3,000 /night</span><span>|</span><span>4 to 6
                            guest</span>
                    </div>
                    <p class="text-description-5">A lovers sanctuary, Senja is the epitome of romance and exclusivity.
                        Designed for honeymoons and intimate family retreats, this private yacht charter navigates the
                        Indonesian archipelago in the utmost style and luxury, with itineraries catering to guests
                        distinct
                        desires.</p>
                    <a href="{{ route('home') }}" class="text-description-5">Discover Nataraja</a>
                </div>
            </div>
            <div id="home-nataraja-right">
                <img src="{{ asset('img/yacht4.jpg') }}" alt="">
                <img src="{{ asset('img/yacht20.jpg') }}" alt="">
                <img src="{{ asset('img/yacht47.jpg') }}" alt="">
                <img src="{{ asset('img/yacht49.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section id="home-penida">
        <div>
            <img src="{{ asset('img/yacht44.jpg') }}">
            <h1 class="text-title-3">Penida</h1>
            <div class="highlight-text">
                <span>Exclusive</span><span>|</span><span>Romantic</span><span>|</span><span>Private</span>
            </div>
        </div>
        <div>
            <div id="home-penida-left">
                <div class="left">
                    <header>
                        <h1 class="text-title-3">Penida</h1>
                        <h3 class="text-description-5">Exclusive and Romantic</h3>
                    </header>
                    <div class="highlight-text">
                        <span>4 Cabins</span><span>|</span><span>$3,000 /night</span><span>|</span><span>4 to 6
                            guest</span>
                    </div>
                    <p class="text-description-5">A lovers sanctuary, Senja is the epitome of romance and exclusivity.
                        Designed for honeymoons and intimate family retreats, this private yacht charter navigates the
                        Indonesian archipelago in the utmost style and luxury, with itineraries catering to guests
                        distinct
                        desires.</p>
                    <a href="{{ route('home') }}" class="text-description-5">Discover Penida</a>
                </div>
            </div>
            <div id="home-penida-right">
                <img src="{{ asset('img/yacht5.jpg') }}" alt="">
                <img src="{{ asset('img/yacht36.jpg') }}" alt="">
                <img src="{{ asset('img/yacht39.jpg') }}" alt="">
                <img src="{{ asset('img/yacht18.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section id="home-uluwatu">
        <div>
            <img src="{{ asset('img/yacht1.jpg') }}">
            <h1 class="text-title-3">Uluwatu</h1>
            <div class="highlight-text">
                <span>Exclusive</span><span>|</span><span>Romantic</span><span>|</span><span>Private</span>
            </div>
        </div>
        <div>
            <div id="home-uluwatu-left">
                <div class="left">
                    <header>
                        <h1 class="text-title-3">Uluwatu</h1>
                        <h3 class="text-description-5">Exclusive and Romantic</h3>
                    </header>
                    <div class="highlight-text">
                        <span>4 Cabins</span><span>|</span><span>$3,000 /night</span><span>|</span><span>4 to 6
                            guest</span>
                    </div>
                    <p class="text-description-5">A lovers sanctuary, Senja is the epitome of romance and exclusivity.
                        Designed for honeymoons and intimate family retreats, this private yacht charter navigates the
                        Indonesian archipelago in the utmost style and luxury, with itineraries catering to guests
                        distinct
                        desires.</p>
                    <a href="{{ route('home') }}" class="text-description-5">discover Uluwatu</a>
                </div>
            </div>
            <div id="home-uluwatu-right">
                <img src="{{ asset('img/yacht8.jpg') }}">
                <img src="{{ asset('img/yacht30.jpg') }}">
                <img src="{{ asset('img/yacht19.jpg') }}">
                <img src="{{ asset('img/yacht36.jpg') }}">
            </div>
        </div>
    </section>

    <section id="home-destination-container">
        <img src="{{ Storage::url('video/bali.mp4') }}" class="video home-video"></img>
        <div>
            <h1 class="text-title">Design your Destination</h1>
            <p class="text-description-4">Unlock the extraordinary with our passionately-crafted, awe-inspiring
                itineraries through Raja Ampat, Komodo National Park, Nusa Penida, Uluwatu and more. Dive, kayak and
                trek your way through Indonesia’s mesmerizing biodiversity aboard our private yachts.</p>
            <a href="{{ route('home') }}" class="text-description-4">Discover More</a>
        </div>
    </section>

    <section id="home-destination">
        <div>
            <div>
                <img src="{{ asset('img/yacht23.jpg') }}">
                <h1 class="text-title-2">Nusa Penida</h1>
            </div>
            <div>
                <img src="{{ asset('img/yacht35.jpg') }}">
                <h1 class="text-title-2">Komodo National Park</h1>
            </div>
        </div>
        <div>
            <img src="{{ asset('img/yacht51.jpg') }}">
            <h1 class="text-title-2">Raja Ampat</h1>
        </div>
    </section>
</x-layout>
