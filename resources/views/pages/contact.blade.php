@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mt-5 py-5">
    <h1 class="mb-4">Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- Contact Information -->
            <h4>Our Address</h4>
            <p>
                Jl. Telekomunikasi No. 1, Bandung<br>
                Terusan Buahbatu - Bojongsoang, Sukapura,<br>
                Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257
            </p>
            <h4>Email</h4>
            <p>
                coestar@telkomuniversity.ac.id
            </p>
            <h4>Phone</h4>
            <p>
                (022) 7564108
            </p>
        </div>
        <div class="col-md-6">
            <!-- Contact Form -->
            <h4>Send Us a Message</h4>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
