@extends('layouts.app')

@section('content')

<div class="contact-page">

    <h1>Contact Us</h1>

    <div class="contact-info">
        <h2>Contact Information</h2>

        <p>Address: Kochi, Kerala</p>
        <p>Phone: +91 9876543210</p>
        <p>Email: info@realestate.com</p>
    </div>

    <div class="contact-form">
        <h2>Send us a Message</h2>
<form method="POST" action="/contact">
 @csrf

            <label>Name</label>
            <input type="text" name="name">

            <label>Email</label>
            <input type="email" name="email">

            <label>Phone</label>
            <input type="text" name="phone">

            <label>Message</label>
            <textarea name="message"></textarea>

            <button type="submit">Submit</button>

        </form>
    </div>

</div>

@endsection