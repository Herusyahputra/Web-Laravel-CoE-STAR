
@extends('layouts.app')

@section('title', 'Tim CoE STAR')

@section('content')
<!-- Hero Section with Parallax -->
<div class="team-hero parallax-bg" style="background-image: url('{{ asset('images/team-bg.jpg') }}');">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="text-center hero-content" data-aos="fade-up">
            <h1 class="display-3 fw-bold text-white">Tim CoE STAR</h1>
            <div class="gold-divider mx-auto my-4"></div>
            <p class="lead text-white mb-0">Struktur dan Anggota Tim Center of Excellence STAR</p>
        </div>
    </div>
</div>

<div class="container-fluid py-5 team-content">
    <div class="container">
        <!-- Team Introduction -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="team-intro text-center p-4" data-aos="fade-up">
                    <h2 class="elegant-title mb-4">Profesional Experts</h2>
                    <p class="lead">Tim kami terdiri dari para ahli di bidangnya yang berkomitmen untuk menghadirkan solusi inovatif dalam bidang transportasi cerdas dan robotika.</p>
                </div>
            </div>
        </div>

        <!-- Template Struktur Tim -->
        @php
        $divisions = [
            [
                'title' => 'Intelligent Mobility System',
                'icon' => 'fa-car-side',
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
                'icon' => 'fa-robot',
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
                'icon' => 'fa-train',
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
                'icon' => 'fa-bus',
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

        <!-- Divisions -->
        @foreach($divisions as $index => $division)
        <div class="mb-5" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <div class="luxury-card">
                <div class="card-header-custom">
                    <div class="icon-circle">
                        <i class="fas {{ $division['icon'] }} fa-2x"></i>
                    </div>
                    <h3 class="mb-0">{{ $division['title'] }}</h3>
                </div>
                
                <!-- Division Head -->
                <div class="card-body-custom pb-0">
                    <h4 class="section-title">Ketua Divisi</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-5">
                            <div class="member-card member-head">
                                <div class="position-relative">
                                    <div class="hexagon">
                                        <div class="hexagon-inner">
                                            <img src="{{ asset('images/' . $division['head']['image']) }}" 
                                                alt="{{ $division['head']['name'] }}"
                                                onerror="this.src='https://via.placeholder.com/300x300?text=Photo'">
                                        </div>
                                    </div>
                                    <div class="role-badge">
                                        {{ $division['head']['role'] }}
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <h5 class="member-name">{{ $division['head']['name'] }}</h5>
                                    <div class="social-links">
                                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Division Members -->
                    <h4 class="section-title">Anggota</h4>
                    <div class="row">
                        @foreach($division['members'] as $member)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="member-card">
                                <div class="position-relative">
                                    <div class="hexagon">
                                        <div class="hexagon-inner">
                                            <img src="{{ asset('images/' . $member['image']) }}" 
                                                alt="{{ $member['name'] }}"
                                                onerror="this.src='https://via.placeholder.com/300x300?text=Photo'">
                                        </div>
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <h6 class="member-name">{{ $member['name'] }}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@section('extra-css')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    });
</script>
@endsection
@endsection