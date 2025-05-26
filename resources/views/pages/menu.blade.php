@extends('layouts.app')

@section('title', 'Menu - Perusahaan Website')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 rounded-4 shadow-sm">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="text-uppercase small mb-0">MAIN MENU</p>
                            <ul class="nav flex-column mt-4">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold text-dark ps-0" href="/about">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold text-dark ps-0" href="/our-service">OUR SERVICE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold text-dark ps-0" href="/case-studies">CASE STUDIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold text-dark ps-0" href="/contact">CONTACT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold text-dark ps-0" href="/careers">CAREERS</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <p class="text-uppercase small mb-0">CONTACT</p>
                            <p class="mt-4 fw-bold">012-345-6789</p>
                            <p>hello@company.com</p>
                        </div>
                        <div class="col-md-3">
                            <p class="text-uppercase small mb-0">LOCATION</p>
                            <p class="mt-4">Business innovation centre,<br>
                               Somewhere Street<br>
                               City Name</p>
                        </div>
                        <div class="col-md-3">
                            <p class="text-uppercase small mb-0">SOCIAL</p>
                            <ul class="nav flex-column mt-4">
                                <li class="nav-item">
                                    <a class="nav-link text-dark ps-0" href="#">Facebook</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark ps-0" href="#">Instagram</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark ps-0" href="#">Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection