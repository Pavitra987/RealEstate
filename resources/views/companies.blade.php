@extends('layouts.app')
@section('content')
<div class="company-page">
<div class="page-header">
        <h1>Explore Companies</h1>
        <p>Take a look at the companies who we trust</p>
    </div>
     <div class="container">
    <div class="row g-4">

        @foreach($companies as $company)

        <div class="col-md-4">
            <div class="company-card">

                <img src="{{ asset('assets/images/' . $company->image) }}" 
                     alt="{{ $company->company_name }}">

                <h3>{{ $company->company_name }}</h3>

                <p>{{ $company->company_location }}</p>

                <p>{{ $company->company_phone }}</p>

            </div>
        </div>

        @endforeach

    </div>
   </div>
</div>

@endsection