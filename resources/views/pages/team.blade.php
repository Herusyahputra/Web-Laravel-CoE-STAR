@extends('layouts.app')

@section('title', 'Tim CoE STAR')

@section('content')
<!-- Hero Section with Parallax (Banner Style) -->
<div class="team-hero parallax-bg d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/team-bg.jpg') }}'); min-height: 60vh; height: 60vh; position: relative;">
    <div class="overlay" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:1;"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="text-center hero-content" data-aos="fade-up">
            <h1 class="display-1 fw-bold text-white" style="font-size:4rem;">Tim CoE STAR</h1>
            <div class="gold-divider mx-auto my-4" style="height:4px;width:100px;background:gold;"></div>
            <p class="lead text-white mb-0" style="font-size:1.5rem;">Struktur dan Anggota Tim Center of Excellence STAR</p>
        </div>
    </div>
</div>

<div class="container-fluid py-5 team-content">
    <div class="container">
        <!-- Team Introduction -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 mx-auto">
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
                'head' => ['name' => 'Angga Rusdinar, S.T., M.T., Ph.D', 'image' => '/member/anggarusdinar.png'],
                'members' => [
                    ['name' => 'Irwan Purnama, S.T., M.Sc.Eng.Ph.D.', 'image' => 'member4.jpg'],
                    ['name' => 'Ramdhan Nugraha, S.Pd.,Ph.D, S.T.', 'image' => '/member/ramdhannugraha.png'],
                ]
            ],
            [
                'title' => 'Intelligent Robotics',
                'head' => ['name' => 'M. Zakiyullah Romdlony, S.T., M.T., Ph.D',  'image' => '/member/zakiyullah.png'],
                'members' => [
                     ['name' => 'Dr. Ir, Sony Sunaryo, S.T., M.T.', 'image' => '/member/sonysunaryo.png'],
                    ['name' => 'Erwin Susanto, S.T.M.T.,Ph.D', 'image' => '/member/erwinsusanto.png'],
                    ['name' => 'Ir Porman Pangaribuan, S.T.M.T', 'image' => '/member/pormanpangaribuan.png'],
                    ['name' => 'Muhammad Azhar Ismail, S.T.M.T', 'image' => '/member/muhammadazhar.png'],
                ]
            ],
            [
                'title' => 'Intelligent Railway System',
                'head' => ['name' => 'Heru Syah Putra, S.Kom., M.Sc.Eng', 'image' => '/member/hue.png'],
                'members' => [
                     ['name' => 'Kharisma Bani Adam, S.T., M.T., Ph.D', 'image' => 'member4.jpg'],
                    ['name' => 'Agung Surya Wibowo, S.T., M.T.,Ph.D', 'image' => '/member/agungsurya.png'],
                    ['name' => 'Mohamad Ramdhani, S.T.,M.T', 'image' => '/member/mohamadramdhani.png'],
                    ['name' => 'M. Rivaldi Ali ASeptian, S.T..,M.Sc.Eng', 'image' => '/member/rivaldiali.png'],
                    ['name' => 'Fussy Mentari Dirgantara, S.T.M.T', 'image' => 'member6.jpg'],
                    ['name' => 'Nurwulan Fitriyanti, S.Pd., M.Si, S.T., M.T.', 'image' => 'member4.jpg'],

                ]
            ],
            [
                'title' => 'Intelligent Transportation',
                'head' => ['name' => 'Surya M. Nasution, S.T., M.T., Ph.D', 'image' => '/member/suryanasution.png'],
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
            <div class="luxury-card mx-auto" style="max-width: 1200px;">
                <div class="card-header-custom d-flex align-items-center justify-content-center">
                    <h3 class="mb-0">{{ $division['title'] }}</h3>
                </div>
                
                <!-- Division Head -->
                <div class="card-body-custom pb-0">
                    <h4 class="section-title text-center">Head Division</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-4 mb-5">
                            <div class="member-card member-head mx-auto">
                                <div class="position-relative">
                                    <div class="member-photo">
                                        <img src="{{ asset('images/' . $division['head']['image']) }}" 
                                            alt="{{ $division['head']['name'] }}"
                                            onerror="this.src='https://via.placeholder.com/300x300?text=Photo'">
                                    </div>
                                </div>
                                <div class="member-info text-center">
                                    <h5 class="member-name">{{ $division['head']['name'] }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Division Members -->
                    <h4 class="section-title text-center">Members</h4>
                    <div class="row justify-content-center">
                        @foreach($division['members'] as $member)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex align-items-stretch">
                            <div class="member-card mx-auto" style="width: 100%; max-width: 260px;">
                                <div class="position-relative">
                                    <div class="member-photo">
                                        <img src="{{ asset('images/' . $member['image']) }}" 
                                            alt="{{ $member['name'] }}"
                                            onerror="this.src='https://via.placeholder.com/300x300?text=Photo'">
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