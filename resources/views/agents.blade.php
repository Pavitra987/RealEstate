@extends('layouts.app')
@section('content')

<div class="agents-page">

    <div class="page-header">
        <h1>Our Agents</h1>
        <p>Meet our professional real estate agents</p>
    </div>

   <div class="container">
    <div class="row g-4">

        @foreach($agents as $agent)

        <div class="col-md-4">
            <div class="agent-card">

                <img src="{{ asset('assets/images/' . $agent->image) }}" 
                     alt="{{ $agent->name }}">

                <h3>{{ $agent->name }}</h3>

                <p>{{ $agent->company_name }}</p>

                <p>{{ $agent->phone }}</p>

            </div>
        </div>

        @endforeach

    </div>
   </div>
</div>

@endsection