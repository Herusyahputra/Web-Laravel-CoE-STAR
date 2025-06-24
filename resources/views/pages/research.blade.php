@extends('layouts.app')

@section('title', 'Research')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm my-4">
                <div class="card-header bg-primary text-white">
                    <h2>Research</h2>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h3>Recent Research Projects</h3>
                        <hr>
                        @forelse($researchProjects ?? [] as $project)
                            <div class="mb-3 p-3 border rounded">
                                <h4>{{ $project->title ?? 'Research Title' }}</h4>
                                <p class="text-muted">{{ $project->date ?? 'Publication Date' }}</p>
                                <p>{{ $project->description ?? 'Research description goes here.' }}</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        @empty
                            <div class="alert alert-info">
                                No research projects available at this time.
                            </div>
                        @endforelse
                    </div>
                    
                    <div class="mt-5">
                        <h3>Research Categories</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Technology</h5>
                                        <p class="card-text">Explore our technology-focused research.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Science</h5>
                                        <p class="card-text">Discover our scientific research projects.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Social Studies</h5>
                                        <p class="card-text">Learn about our social impact research.</p>
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
@endsection