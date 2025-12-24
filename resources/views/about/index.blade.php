@extends('layouts.main')

@section('title', 'About - Md. Sajid Rahman')

@section('content')
    <section class="content-section">
        <div class="container">
            <h1 class="section-title-main">About Me</h1>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-card">
                        <div class="card-body">
                            <h3 class="text-primary mb-4">Get to Know Me</h3>
                            <p class="lead">
                                I am a passionate Computer Science Engineering student at Daffodil International University, 
                                dedicated to learning and implementing innovative technology solutions.
                            </p>
                            
                            <h4 class="text-primary mt-4 mb-3">My Journey</h4>
                            <p>
                                Throughout my academic journey, I have developed a strong foundation in programming, 
                                software development, and problem-solving. I consider myself a responsible and disciplined 
                                person who is always eager to take on new challenges and learn from experiences.
                            </p>
                            
                            <h4 class="text-primary mt-4 mb-3">Goals & Aspirations</h4>
                            <p>
                                I am actively seeking my first professional experience in the tech industry. My goal is to 
                                contribute to meaningful projects while continuously expanding my skills and knowledge in 
                                computer science and emerging technologies.
                            </p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h5 class="text-primary">Personal Qualities</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Responsible & Disciplined</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Quick Learner</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Team Player</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Problem Solver</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="text-primary">Interests</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-heart text-danger me-2"></i>Technology & Innovation</li>
                                        <li><i class="fas fa-heart text-danger me-2"></i>Web Development</li>
                                        <li><i class="fas fa-heart text-danger me-2"></i>Software Engineering</li>
                                        <li><i class="fas fa-heart text-danger me-2"></i>Learning New Skills</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <a href="{{ route('contact') }}" class="btn btn-primary">
                                    <i class="fas fa-envelope me-2"></i>Get In Touch
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
