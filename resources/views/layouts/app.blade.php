<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV - Md. Sajid Rahman')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .cv-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            margin: 20px auto;
            overflow: hidden;
        }
        .header-section {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }
        
        .header-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .section-card {
            margin-bottom: 30px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        .section-card:hover {
            transform: translateY(-5px);
        }
        .section-title {
            color: #4facfe;
            border-bottom: 3px solid #4facfe;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .skill-bar {
            background: #f8f9fa;
            border-radius: 20px;
            height: 10px;
            margin-bottom: 15px;
        }
        .skill-fill {
            background: linear-gradient(90deg, #4facfe, #00f2fe);
            height: 100%;
            border-radius: 20px;
            transition: width 1s ease;
        }
        .contact-item {
            margin-bottom: 15px;
        }
        .contact-item i {
            color: #4facfe;
            margin-right: 10px;
            width: 20px;
        }

        /* Navigation Styles */
        .navbar-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: white !important;
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link.active {
            background: rgba(255,255,255,0.3);
            color: white !important;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="white" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button {
            background: white;
            color: #4facfe;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            color: #4facfe;
        }

        /* Content Sections */
        .content-section {
            padding: 80px 0;
        }

        .section-title-main {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title-main::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cv-container">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
