@extends('layouts.app')

@section('title', 'Headline - Perusahaan Website')

@section('content')
<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-12">
            <img src="{{ asset('images/abstract.jpg') }}" class="img-fluid w-100" style="height: 50vh; object-fit: cover;">
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-1 fw-bold mb-5">Headline.</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum, ex et lobortis varius, lectus diam vehicula quam, id tempor sapien ante at velit amet.</p>
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum, ex et lobortis varius.</p>
        </div>
    </div>
</div>
@endsection