@extends('layouts.app')
@section('content')

<section class="hero">
<div class="hero-content">
    <h2>Find Your Dream Homes<h2>
        <p>Discover your dream property</p>
        <a href="/property" class="hero-btn">Explore Property</a>
</div>
</section>

    <section class="property-search">

        <div class="search-container">

            <h2>Find Your Perfect Property</h2>

            <form>

                <div class="search-field">
                    <label>Location</label>
                    <input type="text" placeholder="Enter location">
                </div>

                <div class="search-field">
                    <label>Property Type</label>
                    <select>
                        <option value="">Select Type</option>
                        <option>Apartment</option>
                        <option>Villa</option>
                        <option>House</option>
                        <option>Office</option>
                    </select>
                </div>

                <div class="search-field">
                    <label>Price Range</label>
                    <select>
                        <option value="">Select Price</option>
                        <option>Below ₹50 Lakhs</option>
                        <option>₹50 Lakhs - ₹1 Crore</option>
                        <option>₹1 Crore - ₹2 Crore</option>
                        <option>Above ₹2 Crore</option>
                    </select>
                </div>

                <button type="submit" class="search-btn">
                    Search
                </button>
            </form>
        </div>
    </section>
<section class="featured">

    <h2>Featured Properties</h2>

    <div class="property-cards">

        @foreach($properties as $property)

            <div class="card">

                @if($property->image)
                   <img src="{{ asset('assets/images/' . $property->image) }}"
     alt="{{ $property->title }}">
                @endif

                <h3>{{ $property->title }}</h3>

                <p>📍 {{ $property->location }}</p>

                <h4>₹ {{ number_format($property->price) }}</h4>

                <p>{{ $property->type }}</p>

            </div>

        @endforeach

    </div>
<div class="view-all">
    <a href="/property">View All Properties</a>
</div>
</section>
<section class="locations">

    <h2>Popular Locations</h2>

    <div class="location-cards">

        <div class="location">
            <h3>Kochi</h3>
            <p>120 Properties</p>
        </div>

        <div class="location">
            <h3>Bangalore</h3>
            <p>250 Properties</p>
        </div>

        <div class="location">
            <h3>Chennai</h3>
            <p>180 Properties</p>
        </div>

        <div class="location">
            <h3>Hyderabad</h3>
            <p>150 Properties</p>
        </div>

    </div>

</section>


<section class="agents">

    <h2>Featured Agents</h2>

    <div class="agent-cards">

        <div class="agent">
            <h3>Alex</h3>
            <p>Experienced in helping clients find the right property at the best value.</p>
           <span>contact:9895647522</span>
        </div>

        <div class="agent">
            <h3>Samuel</h3>
            <p>Knows the local market well and makes your property search simple and smooth.</p>
          <span>contact:9895647522</span>
        </div>

        <div class="agent">
            <h3>Rishika</h3>
            <p>Dedicated to providing honest advice and guiding you through every step of your property journey.</p>
               <span>contact:9895647522</span>
        </div>

        <div class="agent">
            <h3>Andrea</h3>
            <p>Committed to understanding your needs and helping you find a home that feels just right.</p>
          <span>contact:9895647522</span>
        </div>

    </div>

</section>

@endsection