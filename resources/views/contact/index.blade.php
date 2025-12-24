@extends('layouts.main')

@section('title', 'Contact - Md. Sajid Rahman')

@section('content')
    <section class="content-section">
        <div class="container">
            <h1 class="section-title-main">Contact Me</h1>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-card">
                        <div class="card-body">
                            <h3 class="text-primary mb-4">Let's Connect</h3>
                            <p class="lead">
                                I'm always interested in new opportunities, collaborations, and meaningful conversations. 
                                Feel free to reach out and let's discuss how we can work together.
                            </p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6 mb-4">
                                    <div class="contact-info text-center">
                                        <div class="contact-icon mb-3">
                                            <i class="fas fa-envelope fa-3x text-primary"></i>
                                        </div>
                                        <h5 class="text-primary">Email</h5>
                                        <p>mdsajidrahman24@gmail.com</p>
                                        <a href="mailto:mdsajidrahman24@gmail.com" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-paper-plane me-2"></i>Send Email
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 mb-4">
                                    <div class="contact-info text-center">
                                        <div class="contact-icon mb-3">
                                            <i class="fas fa-globe fa-3x text-success"></i>
                                        </div>
                                        <h5 class="text-success">Blog</h5>
                                        <p>Visit my blog for more insights</p>
                                        <a href="https://mdsajidrahman.blogspot.com/" target="_blank" class="btn btn-outline-success btn-sm">
                                            <i class="fas fa-external-link-alt me-2"></i>Visit Blog
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <hr class="my-4">
                            
                            <div class="text-center">
                                <h5 class="text-primary mb-3">Follow Me</h5>
                                <p class="text-muted">
                                    Stay connected and follow my journey through my blog and other platforms.
                                </p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="https://mdsajidrahman.blogspot.com/" target="_blank" class="btn btn-success">
                                        <i class="fab fa-blogger me-2"></i>Blogger
                                    </a>
                                </div>
                            </div>
                            
                            <div class="mt-5 p-4 bg-light rounded">
                                <h5 class="text-primary mb-3">Availability</h5>
                                <p class="mb-2">
                                    <i class="fas fa-clock text-success me-2"></i>
                                    <strong>Available for:</strong> Internships, Entry-level positions, Freelance projects
                                </p>
                                <p class="mb-2">
                                    <i class="fas fa-graduation-cap text-info me-2"></i>
                                    <strong>Status:</strong> Computer Science Engineering Student
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-map-marker-alt text-warning me-2"></i>
                                    <strong>Location:</strong> Dhaka, Bangladesh
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
