@extends('layouts.main')

@section('title', 'Portfolio - Md. Sajid Rahman')

@section('content')
    <section class="content-section">
        <div class="container">
            <h1 class="section-title-main">My Portfolio</h1>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-card">
                        <div class="card-body">
                            <h3 class="text-primary mb-4">Projects & Achievements</h3>
                            
                            <div class="portfolio-item mb-4">
                                <h4 class="text-primary">Academic Projects</h4>
                                <p>
                                    During my studies at Daffodil International University, I have completed various 
                                    academic assignments and projects that demonstrate my understanding of computer 
                                    science fundamentals and practical application skills.
                                </p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-info">Data Structures</span>
                                    <span class="badge bg-info">Algorithms</span>
                                    <span class="badge bg-info">Database Design</span>
                                    <span class="badge bg-info">Software Engineering</span>
                                </div>
                            </div>
                            
                            <div class="portfolio-item mb-4">
                                <h4 class="text-primary">Technical Skills</h4>
                                <p>
                                    I have developed proficiency in various software tools and programming languages, 
                                    continuously working to expand my technical toolkit for real-world applications.
                                </p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-success">Microsoft Office</span>
                                    <span class="badge bg-success">Programming Basics</span>
                                    <span class="badge bg-success">Web Technologies</span>
                                    <span class="badge bg-success">Problem Solving</span>
                                </div>
                            </div>
                            
                            <div class="portfolio-item mb-4">
                                <h4 class="text-primary">Creative Solutions</h4>
                                <p>
                                    I enjoy approaching problems from different angles and developing innovative 
                                    solutions that combine technical knowledge with creative thinking.
                                </p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-warning">Critical Thinking</span>
                                    <span class="badge bg-warning">Creative Problem Solving</span>
                                    <span class="badge bg-warning">Innovation</span>
                                    <span class="badge bg-warning">Research</span>
                                </div>
                            </div>
                            
                            <div class="portfolio-item mb-4">
                                <h4 class="text-primary">Leadership & Soft Skills</h4>
                                <p>
                                    Beyond technical skills, I have developed strong interpersonal skills through 
                                    various activities and leadership roles, including my experience as a Protocol Member.
                                </p>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-primary">Leadership</span>
                                    <span class="badge bg-primary">Communication</span>
                                    <span class="badge bg-primary">Teamwork</span>
                                    <span class="badge bg-primary">Negotiation</span>
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <a href="{{ route('cv') }}" class="btn btn-primary me-3">
                                    <i class="fas fa-file-alt me-2"></i>View My CV
                                </a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-envelope me-2"></i>Contact Me
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
