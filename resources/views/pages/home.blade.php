@extends('layouts.app')

@section('title', 'Home - Center of Excellence | CoE')

@section('content')
<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="position-relative d-flex justify-content-center align-items-center" style="height: 100vh;">
        <img src="{{ asset('images/banner.jpg') }}" class="img-fluid w-100" style="height: 100vh; object-fit: cover; filter: brightness(0.8);">
        <div class="hero-content position-absolute" style="width: 150%; max-width: 1400px;">
            <div class="container-fluid px-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="hero-card" data-aos="zoom-in" data-aos-duration="1200" style="transform: scale(1.2);">
                            <div class="row g-0">
                                <!-- Ketua Photo Section -->
                                <div class="col-md-5" data-aos="fade-right" data-aos-delay="300">
                                    <img src="{{ asset('images/leader.jpg') }}" class="img-fluid" style="object-fit: cover; object-position: center; height: 380px;">
                                </div>
                                <!-- Quote Section -->
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="p-4" data-aos="fade-left" data-aos-delay="400">
                                        <p class="text-uppercase small mb-2">Telkom University | The Best Private University in Indonesia </p>
                                        <h5 class="fw-bold mb-3" style="color: #0d6efd;">Welcome to the Center of Excellence (CoE)</h5>

                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <i class="fas fa-quote-left fa-2x text-muted opacity-50"></i>
                                            </div>
                                            <p class="fst-italic"> Smart Transportation and Robotics (STAR) at Telkom University. As a leading hub for research and innovation, we are dedicated to advancing cutting-edge studies in intelligent transportation and robotics. Our focus spans across smart mobility systems, signaling, telecommunications, power systems, train control, operations, and robotic technologies. Driven by a spirit of collaboration and innovation, CoE STAR is committed to fostering connectivity and convergence for smart living.</p>
                                            <div class="d-flex align-items-center mt-3">
                                                <div class="border-end pe-3 me-3">
                                                    <h5 class="mb-0">Dr. Eng. Ahmad Sugiana, S.Si.,M.T</h5>
                                                    <p class="small text-muted mb-0">Director</p>
                                                </div>
                                                <img src="{{ asset('images/signature.png') }}" alt="Signature" style="height: 40px;">
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
        <div class="scroll-indicator">
            <a href="#research" class="text-white">
                <i class="fas fa-chevron-down fa-2x"></i>
            </a>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="section-divider" style="background-color: #212529;">
    <div class="divider-wave"></div>
</div>

<!-- Research Section -->
<section class="research-section" id="research">
    <div class="container my-5">
        <div class="row">
            <div class="col-12" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4">Activity</h1>
            </div>
        </div>
        <div class="row g-4" data-aos="fade-up" data-aos-duration="1200">
            <!-- Foto 1 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 1">
            </div>
            <!-- Foto 2 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 2">
            </div>
            <!-- Foto 3 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 3">
            </div>
            <!-- Foto 4 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo1.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 4">
            </div>
            <!-- Foto 5 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 5">
            </div>
            <!-- Foto 6 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 6">
            </div>
            <!-- Foto 7 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 7">
            </div>
            <!-- Foto 8 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo2.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 8">
            </div>
             <!-- Foto 5 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 5">
            </div>
            <!-- Foto 6 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 6">
            </div>
            <!-- Foto 7 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 7">
            </div>
            <!-- Foto 8 -->
            <div class="col-md-3 col-sm-6">
                <img src="{{ asset('images/photo3.jpg') }}" class="img-fluid rounded shadow-sm" style="aspect-ratio: 16/9; object-fit: cover;" alt="Photo 8">
            </div>
        </div>
    </div>
</section>


<!-- Diagonal Divider -->
<div class="section-divider" style="background-color: #f8f9fa;">
    <div class="divider-diagonal"></div>
</div>

<!-- Team Section -->
<section class="team-section" id="team">
    <div class="container my-5">
    <h2 class="text-center mb-5 display-5 fw-bold text-primary" data-aos="fade-up">Research Division</h2>

    <!-- Kategori 1 -->
    <div class="mb-5">
        <h4 class="text-center mb-4 text-uppercase text-secondary" data-aos="fade-up" data-aos-delay="100">Meet the Innovators Behind CoE STAR</h4>
        <p class="text-center mx-auto w-75 lead" data-aos="fade-up" data-aos-delay="150">
            The <strong>Center of Excellence for Smart Technology and Applied Research (CoE STAR)</strong> is powered by four cutting-edge research divisions. Each division is led by visionary experts and supported by passionate researchers who are redefining the future through innovation in mobility, robotics, transportation, and railway systems. Discover the brilliant minds driving breakthrough technologies below.
        </p>
    </div>
</div>
<!-- Vice Director Section -->
<div class="container my-5">
    <div class="text-center" data-aos="fade-up">
        <h5 class="text-uppercase mb-4" style="border-bottom: 2px solid #0d6efd; color: #0d6efd; display: inline-block;">
            Vice Director
        </h5>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('images/vicedirector.jpg') }}" class="rounded-circle mb-3 shadow" style="width: 180px; height: 180px; object-fit: cover;" alt="Vice Director">
            <h6 class="fw-bold text-primary mb-0">Basith Abdurrohman Asy'ari, S.TrT., M.T.</h6>
            <p class="text-muted">Secretary | Center of Excellence</p>
        </div>
    </div>
</div>

<!-- Tim Riset CoE STAR -->
<div class="container">

    <!-- Template Struktur Tim -->
    @php
    $divisions = [
        [
            'title' => 'Intelligent Mobility System',
            'head' => ['name' => 'Angga Rusdinar, S.T., M.T., Ph.D', 'role' => 'AGR', 'image' => 'member1.jpg'],
            'members' => [
                ['name' => 'Irwwan Purnama, S.T., M.Sc.Eng.Ph.D.', 'image' => 'member4.jpg'],
                ['name' => 'Ramdhan Nugraha, S.Pd.,Ph.D, S.T.', 'image' => 'member5.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T., M.T.', 'image' => 'member4.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member5.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
            ]
        ],
        [
            'title' => 'Intelligent Robotics',
            'head' => ['name' => 'M. Zakiyullah Romdlony, S.T., M.T., Ph.D', 'role' => 'ZAR', 'image' => 'member2.jpg'],
            'members' => [
                 ['name' => 'Dr. Ir, Sony Sunaryo, S.T., M.T.', 'image' => 'member4.jpg'],
                ['name' => 'Erwin Susanto, S.T.M.T.,Ph.D', 'image' => 'member5.jpg'],
                ['name' => 'Ir Porman Pangaribuan, S.T.M.T', 'image' => 'member6.jpg'],
                ['name' => 'Muhammad Azhar Ismail, S.T.M.T', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T., M.T.', 'image' => 'member4.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member5.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
            ]
        ],
        [
            'title' => 'Intelligent Railway System',
            'head' => ['name' => 'Heru Syah Putra, S.Kom., M.Sc.Eng', 'role' => 'HUE', 'image' => 'hue.png'],
            'members' => [
                 ['name' => 'Kharisma Bani Adam, S.T., M.T., Ph.D', 'image' => 'member4.jpg'],
                ['name' => 'Agung Surya Wibowo, S.T., M.T.,Ph.D', 'image' => 'member5.jpg'],
                ['name' => 'Muhammad Ramdhani, S.T.,M.T', 'image' => 'member6.jpg'],
                ['name' => 'M. Rivaldi Ali ASeptian, S.T..,M.Sc.Eng', 'image' => 'member5.jpg'],
                ['name' => 'Fussy Mentari Dirgantara, S.T.M.T', 'image' => 'member6.jpg'],
                ['name' => 'Nurwulan Fitriyanti, S.Pd., M.Si, S.T., M.T.', 'image' => 'member4.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member5.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
            ]
        ],
        [
            'title' => 'Intelligent Transportation',
            'head' => ['name' => 'Surya M. Nasution, S.T., M.T., Ph.D', 'role' => 'SMN', 'image' => 'member13.jpg'],
            'members' => [
                ['name' => 'Name_member, S.T., M.T.', 'image' => 'member4.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member5.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T., M.T.', 'image' => 'member4.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member5.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
                ['name' => 'Name_member, S.T.', 'image' => 'member6.jpg'],
            ]
        ]
    ];
    @endphp

    @foreach($divisions as $index => $division)
    <div class="mb-5 border-top pt-5">
        <h5 class="text-uppercase text-center mb-4" data-aos="fade-up" data-aos-delay="100">{{ $division['title'] }}</h5>
        
        <!-- Head -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="150">
                <img src="{{ asset('images/' . $division['head']['image']) }}" class="rounded-circle mb-2 border border-3 border-primary" style="width: 150px; height: 150px; object-fit: cover;">
                <h6><strong>{{ $division['head']['name'] }}</strong><br><small>Head | {{ $division['head']['role'] }}</small></h6>
            </div>
        </div>

        <!-- Members -->
        <div class="row justify-content-center">
            @foreach($division['members'] as $i => $member)
            <div class="col-md-3 text-center mb-3" data-aos="fade-up" data-aos-delay="{{ 200 + $i * 50 }}">
                <img src="{{ asset('images/' . $member['image']) }}" class="rounded-circle mb-2 border" style="width: 150px; height: 150px; object-fit: cover;">
                <h6>{{ $member['name'] }}</h6>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach

</div>


        </div>
    </div>
</section>


<!-- Curves Divider -->
<div class="section-divider">
    <div class="divider-curves"></div>
</div>
@endsection