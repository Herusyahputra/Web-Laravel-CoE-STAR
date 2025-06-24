@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold">Visi & Misi</h1>
                <div class="divider mx-auto my-4"></div>
            </div>
            
            <div class="row g-4 mb-5">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4 bg-primary d-flex align-items-center">
                                <div class="p-4 text-white">
                                    <h2 class="fw-bold">Visi</h2>
                                    <p class="text-white-50">Our Vision</p>
                                    <div class="d-none d-md-block">
                                        <i class="fas fa-eye fa-4x opacity-25"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4 p-xl-5">
                                    <p class="lead">
                                        To be a global leader in the advancement of intelligent railways and robotics systems, driving innovation, sustainability, and efficiency in the transportation sector.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-4 bg-success d-flex align-items-center">
                                <div class="p-4 text-white">
                                    <h2 class="fw-bold">Misi</h2>
                                    <p class="text-white-50">Our Mission</p>
                                    <div class="d-none d-md-block">
                                        <i class="fas fa-bullseye fa-4x opacity-25"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4 p-xl-5">
                                    <div class="mission-list">
                                        <div class="d-flex mb-4">
                                            
                                            <div>
                                                <p class="mb-0">Our mission is to develop cutting-edge technologies, foster interdisciplinary research, and cultivate talent to create intelligent, safe, and sustainable solutions for the railways and robotics industry. We are committed to addressing the evolving challenges of transportation through collaboration, innovation, and continuous improvement.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.divider {
    width: 70px;
    height: 3px;
    background-color: var(--bs-primary);
}

.mission-number {
    width: 36px;
    height: 36px;
    min-width: 36px;
    background-color: var(--bs-success);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-right: 1rem;
}

.rounded-4 {
    border-radius: 1rem !important;
}
</style>
@endsection