@extends('layouts.app')

@section('content')

<section class="properties-page">

    <div class="page-header">
        <h1>Our Properties</h1>
        <p>Find your perfect home from our collection of properties.</p>
    </div>

    <div class="property-filter">

        <form method="GET" action="/property">

            <input
                type="text"
                name="location"
                placeholder="Enter location"
                value="{{ request('location') }}"
            >

            <select name="type">
                <option value="">Property Type</option>
                <option value="Villa">Villa</option>
                <option value="Apartment">Apartment</option>
                <option value="House">House</option>
            </select>

            <select name="price">
                <option value="">Price Range</option>
                <option value="low">Below ₹50 Lakhs</option>
                <option value="medium">₹50 Lakhs - ₹1 Crore</option>
                <option value="high">Above ₹1 Crore</option>
            </select>

            <button type="submit">Search</button>

        </form>

    </div>


    <div class="row g-4">

    @foreach($properties as $property)

        <div class="col-md-4">

            <div class="property-card">

                <img src="{{ asset('assets/images/' . $property->image) }}" alt="">

                <div class="property-info">
                    <h3>{{ $property->title }}</h3>

                    <p>📍 {{ $property->location }}</p>

                    <h4>₹ {{ $property->price }}</h4>

                    <span>{{ $property->type }}</span>
                </div>

            </div>

        </div>

    @endforeach

</div>
   

      


<br><br>
<section class="pagination">
    {{ $properties->links() }}
</section>

@endsection