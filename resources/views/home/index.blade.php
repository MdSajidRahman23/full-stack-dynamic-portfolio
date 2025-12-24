@extends('layouts.main')

@section('title', 'Home - Md. Sajid Rahman')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Md. Sajid Rahman</h1>
                <p class="hero-subtitle">Computer Science Engineering Student</p>
                <div class="mb-4">
                    <img src="/images/profile.jpg" 
                         alt="Profile Picture" 
                         class="profile-img">
                </div>
                <p class="lead mb-4">Passionate about technology and innovation, seeking my first professional experience in the tech industry.</p>
                <a href="{{ route('cv') }}" class="cta-button me-3">
                    <i class="fas fa-file-alt me-2"></i>View My CV
                </a>
                <a href="{{ route('portfolio') }}" class="cta-button">
                    <i class="fas fa-folder-open me-2"></i>My Portfolio
                </a>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title-main">About Me</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-card">
                        <div class="card-body text-center">
                            <i class="fas fa-user-graduate fa-3x text-primary mb-4"></i>
                            <h4 class="mb-3">Computer Science Engineering Student</h4>
                            <p class="text-muted mb-4">
                                I consider myself a responsible and disciplined person and am looking for my first job experience. 
                                Currently pursuing my Bachelor's degree in Computer Science and Engineering at Daffodil International University.
                            </p>
                            <div class="row text-center">
                                <div class="col-md-4 mb-3">
                                    <h6 class="text-primary">Education</h6>
                                    <p class="small text-muted">Bachelor of CSE</p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h6 class="text-primary">CGPA</h6>
                                    <p class="small text-muted">3.43</p>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <h6 class="text-primary">Experience</h6>
                                    <p class="small text-muted">Protocol Member</p>
                                </div>
                            </div>
                            <a href="{{ route('about') }}" class="btn btn-custom">
                                <i class="fas fa-arrow-right me-2"></i>Learn More About Me
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Preview Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title-main">Skills & Expertise</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="section-card">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3">
                                <i class="fas fa-brain me-2"></i>Soft Skills
                            </h5>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary">Creativity</span>
                                <span class="badge bg-info">Negotiation Skills</span>
                                <span class="badge bg-success">Critical Thinking</span>
                                <span class="badge bg-warning">Leadership</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="section-card">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-3">
                                <i class="fas fa-laptop-code me-2"></i>Technical Skills
                            </h5>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Microsoft Office</span>
                                    <span>85%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-fill" style="width: 85%"></div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Programming</span>
                                    <span>40%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-fill" style="width: 40%"></div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Video Editing</span>
                                    <span>25%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-fill" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('cv') }}" class="btn btn-custom">
                    <i class="fas fa-eye me-2"></i>View Complete CV
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Preview Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="section-title-main">Portfolio Highlights</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="portfolio-item">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                            <h5>Academic Projects</h5>
                            <p class="text-muted">Various academic assignments and projects completed during my studies</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="portfolio-item">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-tools fa-3x text-success mb-3"></i>
                            <h5>Technical Skills</h5>
                            <p class="text-muted">Proficiency in various software and programming tools</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="portfolio-item">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-lightbulb fa-3x text-warning mb-3"></i>
                            <h5>Creative Solutions</h5>
                            <p class="text-muted">Innovative approaches to problem-solving and project development</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('portfolio') }}" class="btn btn-custom">
                    <i class="fas fa-folder-open me-2"></i>View Full Portfolio
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title-main">Let's Connect</h2>
                    <p class="lead mb-4">
                        I'm always interested in new opportunities and collaborations. 
                        Feel free to reach out and let's discuss how we can work together.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ route('contact') }}" class="btn btn-custom">
                            <i class="fas fa-envelope me-2"></i>Contact Me
                        </a>
                        <a href="https://mdsajidrahman.blogspot.com/" target="_blank" class="btn btn-outline-primary">
                            <i class="fas fa-globe me-2"></i>Visit Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
