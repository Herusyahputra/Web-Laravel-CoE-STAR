@extends('layouts.app')

@section('title', 'About CoE STAR')

@section('content')
<div class="about-content py-5">
    <div class="container">
            
        <div class="row g-4 mt-4">
            <!-- Leader Card -->
            <div class="col-12">
                <div class="info-card h-100 p-4 bg-white shadow-sm rounded-3">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-user-tie fs-2 me-3 text-primary"></i>
                        <h2 class="h3 mb-0">Leader</h2>
                    </div>
                    <p class="lead mb-0">Dr. Eng. Ahmad Sugiana <span class="text-muted">(+6281320429546)</span></p>
                </div>
            </div>

            <!-- Description Card -->
            <div class="col-12">
                <div class="info-card h-100 p-4 bg-white shadow-sm rounded-3">
                    <h2 class="h3 mb-4">Description</h2>
                    <p class="lead mb-0">
                        The Center of Excellence (CoE) for Smart Transportation and Robotics (STAR) at Telkom University acts as a center of excellence in conducting in-depth studies and research related to the latest developments in transportation (automotive, train, ship, plane) and robotics. Research related to Intelligent Transportation, signaling, Telecommunications, Power Systems, Train Control, Operations and Robotics. This CoE is not only committed to producing innovative knowledge but also providing a broad positive impact.
                    </p>
                </div>
            </div>

            <!-- Focus Area Card -->
            <div class="col-12">
                <div class="info-card h-100 p-4 bg-white shadow-sm rounded-3">
                    <h2 class="h3 mb-4">Focus Area & Sub Focus Area</h2>
                    <div class="mb-3">
                        <h4 class="h5 text-primary mb-2">Main Focus:</h4>
                        <p class="lead mb-0">Connectivity and Convergence for Smart Living</p>
                    </div>
                    <div>
                        <h4 class="h5 text-primary mb-2">Sub Focus:</h4>
                        <p class="lead mb-0">Smart System and Application, Advanced Mobility, Logistic & Supply-Chain</p>
                    </div>
                </div>
            </div>

            <!-- Expertise Card -->
            <div class="col-12">
                <div class="info-card h-100 p-4 bg-white shadow-sm rounded-3">
                    <h2 class="h3 mb-4">Expertise</h2>
                    <div class="row g-3">
                        @foreach(['Intelligent Transportation', 'IoT', 'Railway System', 'AI', 'Robotics', 'Power', 'Computer Vision', 'Control', 'Signal Processing', 'Public Policy', 'Computational Mathematics'] as $expertise)
                        <div class="col-md-4 col-lg-3">
                            <div class="expertise-item p-3 text-center bg-light rounded-3 h-100">
                                <span class="fw-medium">{{ $expertise }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

