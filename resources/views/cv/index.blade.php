@extends('layouts.app')

@section('title', 'CV - ' . ($cv->name ?? 'CV'))

@section('content')
    @if($cv)
        <!-- Header Section -->
        <div class="header-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Profile Picture -->
                        <div class="mb-4">
                            <img src="/images/profile.jpg" 
                                 alt="Profile Picture" 
                                 class="profile-img">
                        </div>
                        <h1 class="display-4 fw-bold mb-3">{{ $cv->name ?? 'Name Not Available' }}</h1>
                        <h2 class="h4 mb-3">{{ $cv->position ?? 'Position Not Available' }}</h2>
                        <p class="lead mb-0">{{ $cv->address ?? 'Address Not Available' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Contact Information -->
                    @if($cv->contact)
                    <div class="card section-card">
                        <div class="card-body">
                            <h3 class="section-title">
                                <i class="fas fa-address-book me-2"></i>Contact Information
                            </h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>{{ $cv->contact }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- About Me -->
                    @if($cv->about)
                    <div class="card section-card">
                        <div class="card-body">
                            <h3 class="section-title">
                                <i class="fas fa-user me-2"></i>About Me
                            </h3>
                            <p class="text-muted">{{ $cv->about }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Education -->
                    @if($cv->education && is_array($cv->education) && count($cv->education) > 0)
                    <div class="card section-card">
                        <div class="card-body">
                            <h3 class="section-title">
                                <i class="fas fa-graduation-cap me-2"></i>Education
                            </h3>
                            @foreach($cv->education as $edu)
                            <div class="mb-4 pb-3 border-bottom">
                                <h5 class="fw-bold text-primary">{{ $edu['degree'] ?? 'Degree Not Specified' }}</h5>
                                <p class="mb-1">
                                    <i class="fas fa-university me-2"></i>
                                    {{ $edu['institution'] ?? 'Institution Not Specified' }}
                                </p>
                                <p class="mb-1">
                                    <i class="fas fa-calendar me-2"></i>
                                    {{ $edu['year'] ?? 'Year Not Specified' }}
                                </p>
                                @if(isset($edu['cgpa']) || isset($edu['gpa']))
                                <p class="mb-0">
                                    <i class="fas fa-star me-2"></i>
                                    @if(isset($edu['cgpa']))
                                        CGPA: {{ $edu['cgpa'] }}
                                    @else
                                        GPA: {{ $edu['gpa'] }}
                                    @endif
                                </p>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Experience -->
                    @if($cv->experience && is_array($cv->experience) && count($cv->experience) > 0)
                    <div class="card section-card">
                        <div class="card-body">
                            <h3 class="section-title">
                                <i class="fas fa-briefcase me-2"></i>Experience
                            </h3>
                            @foreach($cv->experience as $exp)
                            <div class="mb-3">
                                <p class="mb-0">
                                    <i class="fas fa-check-circle me-2 text-success"></i>
                                    {{ $exp }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Skills -->
                    @if($cv->skills && is_array($cv->skills) && count($cv->skills) > 0)
                    <div class="card section-card">
                        <div class="card-body">
                            <h3 class="section-title">
                                <i class="fas fa-cogs me-2"></i>Skills
                            </h3>
                            
                            <!-- Soft Skills -->
                            @foreach($cv->skills as $key => $skill)
                                @if(is_string($skill))
                                <div class="mb-2">
                                    <span class="badge bg-primary me-2">{{ $skill }}</span>
                                </div>
                                @endif
                            @endforeach

                            <!-- Technical Skills with Proficiency -->
                            @if(isset($cv->skills['technical_skills']) && is_array($cv->skills['technical_skills']))
                            <div class="mt-4">
                                <h5 class="mb-3">Technical Skills</h5>
                                @foreach($cv->skills['technical_skills'] as $techSkill)
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>{{ $techSkill['skill'] ?? 'Skill Not Specified' }}</span>
                                        <span>{{ $techSkill['proficiency'] ?? 0 }}%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-fill" style="width: {{ $techSkill['proficiency'] ?? 0 }}%"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif

                    <!-- Languages -->
                    @if($cv->languages && is_array($cv->languages) && count($cv->languages) > 0)
                    <div class="card section-card">
                        <div class="card-body">
                            <h3 class="section-title">
                                <i class="fas fa-language me-2"></i>Languages
                            </h3>
                            <div class="row">
                                @foreach($cv->languages as $language)
                                <div class="col-md-6 mb-2">
                                    <span class="badge bg-info me-2">{{ $language }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Portfolio -->
                    @if($cv->portfolio)
                    <div class="card section-card">
                        <div class="card-body">
                            <h3 class="section-title">
                                <i class="fas fa-folder-open me-2"></i>Portfolio & Projects
                            </h3>
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="fw-bold text-primary mb-3">My Portfolio</h5>
                                    <p class="text-muted mb-3">
                                        Explore my work, projects, and professional journey through my comprehensive portfolio.
                                    </p>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-success">Web Development</span>
                                        <span class="badge bg-info">Design</span>
                                        <span class="badge bg-warning">Problem Solving</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <div class="portfolio-preview mb-3">
                                            <i class="fas fa-laptop-code fa-3x text-primary mb-2"></i>
                                        </div>
                                        <a href="{{ $cv->portfolio }}" target="_blank" class="btn btn-primary btn-lg">
                                            <i class="fas fa-external-link-alt me-2"></i>Visit Portfolio
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Highlights -->
                            <div class="mt-4">
                                <h6 class="fw-bold mb-3">Featured Highlights:</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>Academic Projects</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>Research Work</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>Technical Skills</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            <span>Creative Solutions</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <script>
            // Animate skill bars on page load
            document.addEventListener('DOMContentLoaded', function() {
                const skillBars = document.querySelectorAll('.skill-fill');
                skillBars.forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0%';
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 500);
                });
            });

            // Add smooth scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all section cards
            document.querySelectorAll('.section-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });

            // Add portfolio interaction
            const portfolioCard = document.querySelector('.portfolio-preview');
            if (portfolioCard) {
                portfolioCard.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.1) rotate(5deg)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                portfolioCard.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1) rotate(0deg)';
                });
            }

            // Dynamic typing effect for the header
            const headerTitle = document.querySelector('.display-4');
            if (headerTitle) {
                const originalText = headerTitle.textContent;
                headerTitle.textContent = '';
                
                let i = 0;
                const typeWriter = () => {
                    if (i < originalText.length) {
                        headerTitle.textContent += originalText.charAt(i);
                        i++;
                        setTimeout(typeWriter, 100);
                    }
                };
                
                setTimeout(typeWriter, 1000);
            }
        </script>
    @else
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card section-card">
                        <div class="card-body text-center">
                            <h3 class="section-title">
                                <i class="fas fa-exclamation-triangle me-2"></i>No CV Data Found
                            </h3>
                            <p class="text-muted">There is no CV data available to display. Please contact the administrator.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
