@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Community</div>

                <div class="card-body">
                    <h1>Welcome to Our Community</h1>
                    <p>This is a simple community page template. You can customize this according to your needs.</p>
                    
                    <!-- Community Content -->
                    <div class="community-content mt-4">
                        <h3>Recent Posts</h3>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Post Title 1</h5>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Post description goes here.</p>
                                <small>Posted by: Username</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Post Title 2</h5>
                                    <small>5 days ago</small>
                                </div>
                                <p class="mb-1">Post description goes here.</p>
                                <small>Posted by: Username</small>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Join Community Form -->
                    <div class="join-community mt-4">
                        <h3>Join Our Community</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Join Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection