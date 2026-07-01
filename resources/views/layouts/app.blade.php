<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Amadou Tangara - Développeur Full Stack PHP / Laravel. Portfolio professionnel avec projets, compétences et expériences.">
    <meta name="keywords" content="Développeur Full Stack, PHP, Laravel, MySQL, JavaScript, Portfolio">
    <meta name="author" content="Amadou Tangara">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Amadou Tangara - Développeur Full Stack">
    <meta property="og:description" content="Portfolio professionnel de Amadou Tangara, Développeur Full Stack PHP / Laravel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <title>@yield('title', 'Amadou Tangara - Développeur Full Stack')</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ============ BASE ============ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #667eea;
            --secondary: #764ba2;
            --dark: #0a0a2e;
            --dark-card: rgba(255,255,255,0.03);
            --border-color: rgba(255,255,255,0.05);
            --text-primary: #ffffff;
            --text-secondary: rgba(255,255,255,0.6);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark);
            color: var(--text-primary);
            overflow-x: hidden;
            padding-top: 76px;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--dark);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 10px;
        }

        /* ============ PRELOADER ============ */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--dark);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.8s ease;
        }
        #preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }
        .loader {
            width: 60px;
            height: 60px;
            border: 3px solid rgba(102,126,234,0.1);
            border-top-color: var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ============ NAVBAR ============ */
        .navbar {
            padding: 15px 0;
            background: rgba(10, 10, 46, 0.9) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        .navbar.scrolled {
            padding: 10px 0;
            background: rgba(10, 10, 46, 0.98) !important;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }

        .navbar-brand {
            font-size: 1.4rem;
            font-weight: 800;
            color: #fff !important;
            position: relative;
        }
        .navbar-brand i {
            color: var(--primary);
            margin-right: 10px;
        }
        .navbar-brand::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }
        .navbar-brand:hover::after {
            width: 100%;
        }

        .nav-link {
            color: rgba(255,255,255,0.7) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 8px 20px !important;
            border-radius: 10px;
            font-size: 0.95rem;
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 60%;
        }
        .nav-link:hover {
            color: #fff !important;
            background: rgba(102,126,234,0.08);
        }
        .nav-link.active {
            color: #fff !important;
            background: rgba(102,126,234,0.12);
        }

        .btn-nav {
            border: 1px solid rgba(255,255,255,0.15);
            color: #fff;
            padding: 8px 28px;
            border-radius: 50px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: inline-block;
            background: transparent;
        }
        .btn-nav::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            transition: left 0.4s ease;
            z-index: -1;
        }
        .btn-nav:hover::before {
            left: 0;
        }
        .btn-nav:hover {
            color: #fff !important;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102,126,234,0.3);
        }

        /* ============ HERO ============ */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
            background: linear-gradient(135deg, var(--dark) 0%, #1a1a4e 50%, var(--dark) 100%);
            position: relative;
            overflow: hidden;
        }

        #particles-canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(102,126,234,0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 20s infinite ease-in-out;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(118,75,162,0.08) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 25s infinite ease-in-out reverse;
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(-30px, 30px) scale(1.1); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .badge-hero {
            display: inline-block;
            background: rgba(102,126,234,0.15);
            color: var(--primary);
            padding: 8px 24px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid rgba(102,126,234,0.15);
            animation: pulseBadge 2s infinite;
        }
        @keyframes pulseBadge {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 10px;
            line-height: 1.1;
        }
        .hero h1 .wave {
            display: inline-block;
            animation: wave 2.5s infinite;
        }
        @keyframes wave {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(20deg); }
            75% { transform: rotate(-20deg); }
        }
        .hero h1 .highlight {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: gradientMove 4s ease infinite;
        }
        @keyframes gradientMove {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .hero h2 {
            font-size: 1.6rem;
            font-weight: 400;
            color: rgba(255,255,255,0.7);
            margin-bottom: 20px;
        }
        .typing-text {
            display: inline-block;
            border-right: 3px solid var(--primary);
            padding-right: 8px;
            animation: blink 0.8s step-end infinite;
        }
        @keyframes blink {
            50% { border-color: transparent; }
        }

        .hero p {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.5);
            max-width: 600px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .btn-group-custom {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border: none;
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }
        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            transition: left 0.4s ease;
            z-index: 0;
        }
        .btn-primary-custom:hover::before {
            left: 0;
        }
        .btn-primary-custom:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 20px 40px rgba(102,126,234,0.4);
            color: #fff;
        }
        .btn-primary-custom * {
            position: relative;
            z-index: 1;
        }

        .btn-outline-custom {
            border: 2px solid rgba(102,126,234,0.3);
            color: #fff;
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            background: transparent;
        }
        .btn-outline-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: rgba(102,126,234,0.1);
            transition: width 0.4s ease;
        }
        .btn-outline-custom:hover::before {
            width: 100%;
        }
        .btn-outline-custom:hover {
            border-color: var(--primary);
            transform: translateY(-3px);
            color: #fff;
        }

        .hero-avatar {
            position: relative;
            z-index: 1;
        }
        .hero-avatar .avatar-circle {
            width: 380px;
            height: 380px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: pulse 3s infinite;
        }
        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(102,126,234,0.3); }
            50% { box-shadow: 0 0 0 30px rgba(102,126,234,0); }
        }
        .hero-avatar .avatar-circle .avatar-inner {
            width: 360px;
            height: 360px;
            border-radius: 50%;
            background: var(--dark);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .hero-avatar .avatar-circle .avatar-inner img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .floating-badge {
            position: absolute;
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(20px);
            padding: 12px 20px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.08);
            font-size: 0.85rem;
            animation: floatBadge 6s infinite ease-in-out;
            transition: all 0.3s ease;
        }
        .floating-badge:hover {
            transform: scale(1.1);
            background: rgba(255,255,255,0.1);
        }
        .floating-badge:nth-child(2) { top: 10px; right: -30px; animation-delay: 0s; }
        .floating-badge:nth-child(3) { bottom: 40px; left: -40px; animation-delay: 2s; }
        .floating-badge:nth-child(4) { bottom: -20px; right: 0px; animation-delay: 4s; }
        @keyframes floatBadge {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        .floating-badge i {
            color: var(--primary);
            margin-right: 8px;
        }

        /* ============ STATS ============ */
        .stats-section {
            padding: 60px 0;
            background: rgba(255,255,255,0.02);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }
        .stat-card {
            text-align: center;
            padding: 30px 20px;
            background: var(--dark-card);
            border-radius: 16px;
            border: 1px solid var(--border-color);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(102,126,234,0.05) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .stat-card:hover::before { opacity: 1; }
        .stat-card:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255,255,255,0.06);
            border-color: rgba(102,126,234,0.3);
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .stat-card .number {
            font-size: 3.2rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: block;
            line-height: 1.2;
            transition: transform 0.3s ease;
        }
        .stat-card:hover .number { transform: scale(1.1); }
        .stat-card .label {
            color: var(--text-secondary);
            font-size: 1rem;
            font-weight: 500;
            margin-top: 5px;
        }
        .stat-card .icon {
            font-size: 2.2rem;
            color: rgba(102,126,234,0.3);
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        .stat-card:hover .icon {
            color: var(--primary);
            transform: scale(1.2);
        }

        /* ============ PROJECTS ============ */
        .projects-section {
            padding: 100px 0;
            background: rgba(255,255,255,0.02);
        }
        .project-card {
            background: var(--dark-card);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            position: relative;
        }
        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102,126,234,0.05), rgba(118,75,162,0.05));
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .project-card:hover::before { opacity: 1; }
        .project-card:hover {
            transform: translateY(-12px) scale(1.02);
            border-color: rgba(102,126,234,0.3);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
        }
        .project-card .card-img-top {
            height: 220px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: rgba(255,255,255,0.15);
            transition: transform 0.5s ease;
        }
        .project-card:hover .card-img-top { transform: scale(1.05); }
        .project-card .card-img-top img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.3;
        }
        .project-card .card-img-top i {
            position: relative;
            z-index: 1;
        }
        .project-card .card-body {
            padding: 28px;
            position: relative;
            z-index: 1;
        }
        .project-card .card-body .badge-category {
            background: rgba(102,126,234,0.15);
            color: var(--primary);
            padding: 4px 14px;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .project-card .card-body h5 {
            font-weight: 700;
            margin: 12px 0 10px;
            color: #fff;
            font-size: 1.15rem;
        }
        .project-card .card-body p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.7;
        }
        .project-card .card-body .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin: 15px 0;
        }
        .project-card .card-body .tech-stack .tech {
            background: rgba(255,255,255,0.05);
            padding: 4px 14px;
            border-radius: 50px;
            font-size: 0.7rem;
            color: rgba(255,255,255,0.5);
            transition: all 0.3s ease;
        }
        .project-card .card-body .tech-stack .tech:hover {
            background: rgba(102,126,234,0.2);
            color: var(--primary);
        }

        /* ============ TECH ============ */
        .tech-section {
            padding: 100px 0;
            background: rgba(255,255,255,0.02);
        }
        .tech-item {
            background: var(--dark-card);
            padding: 25px 20px;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            cursor: default;
            position: relative;
            overflow: hidden;
        }
        .tech-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            transform: scaleX(0);
            transition: transform 0.4s ease;
            transform-origin: left;
        }
        .tech-item:hover::before { transform: scaleX(1); }
        .tech-item:hover {
            transform: translateY(-8px) scale(1.05);
            background: rgba(255,255,255,0.06);
            border-color: rgba(102,126,234,0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .tech-item i {
            font-size: 2.8rem;
            margin-bottom: 12px;
            transition: transform 0.3s ease;
            display: block;
        }
        .tech-item:hover i { transform: scale(1.2) rotate(-5deg); }
        .tech-item p {
            color: rgba(255,255,255,0.7);
            font-size: 0.9rem;
            margin: 0;
            font-weight: 500;
        }
        .tech-item .tech-level {
            display: inline-block;
            margin-top: 8px;
            font-size: 0.65rem;
            padding: 2px 12px;
            border-radius: 50px;
            background: rgba(102,126,234,0.15);
            color: var(--primary);
            border: 1px solid rgba(102,126,234,0.1);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ============ SECTION TITLES ============ */
        .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 15px;
            color: #fff;
        }
        .section-title .highlight {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .section-subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
        }

        /* ============ ABOUT ============ */
        .about-section {
            padding: 100px 0;
            position: relative;
        }
        .about-text {
            color: var(--text-secondary);
            line-height: 2;
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto;
        }
        .about-text strong { color: #fff; }
        .about-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
        .about-tags .tag {
            background: rgba(102,126,234,0.1);
            color: var(--primary);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(102,126,234,0.1);
            transition: all 0.3s ease;
            cursor: default;
        }
        .about-tags .tag:hover {
            background: rgba(102,126,234,0.2);
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102,126,234,0.1);
        }

        /* ============ TESTIMONIALS ============ */
        .testimonial-card {
            background: var(--dark-card);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid var(--border-color);
            transition: all 0.4s ease;
            position: relative;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            border-color: rgba(102,126,234,0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .testimonial-card .quote-icon {
            font-size: 2.5rem;
            color: rgba(102,126,234,0.2);
            margin-bottom: 15px;
        }
        .testimonial-card .text {
            color: var(--text-secondary);
            font-size: 1.1rem;
            line-height: 1.9;
            font-style: italic;
        }
        .testimonial-card .author {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .testimonial-card .author .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            color: #fff;
        }
        .testimonial-card .author .name {
            font-weight: 600;
            color: #fff;
        }
        .testimonial-card .author .role {
            font-size: 0.85rem;
            color: var(--text-secondary);
        }

        /* ============ CONTACT ============ */
        .contact-card {
            background: var(--dark-card);
            border-radius: 20px;
            padding: 45px;
            border: 1px solid var(--border-color);
            transition: all 0.4s ease;
        }
        .contact-card:hover {
            border-color: rgba(102,126,234,0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .contact-card .form-control {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            color: #fff;
            padding: 14px 20px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        .contact-card .form-control:focus {
            background: rgba(255,255,255,0.08);
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(102,126,234,0.15);
            color: #fff;
        }
        .contact-card .form-control::placeholder {
            color: rgba(255,255,255,0.3);
        }
        .contact-info-item {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        .contact-info-item:hover { transform: translateX(5px); }
        .contact-info-item:last-child { border-bottom: none; }
        .contact-info-item .icon {
            width: 55px;
            height: 55px;
            background: rgba(102,126,234,0.08);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }
        .contact-info-item:hover .icon {
            background: rgba(102,126,234,0.2);
            transform: scale(1.1);
        }
        .contact-info-item .info .label {
            color: var(--text-secondary);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .contact-info-item .info .value {
            color: #fff;
            font-weight: 500;
        }

        /* ============ FOOTER ============ */
        .footer {
            padding: 50px 0 30px;
            border-top: 1px solid var(--border-color);
            background: rgba(10,10,46,0.98);
        }
        .footer .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .footer .social-links a {
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.5);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
            font-size: 1.2rem;
        }
        .footer .social-links a:hover {
            background: rgba(102,126,234,0.2);
            color: var(--primary);
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 30px rgba(102,126,234,0.2);
        }
        .footer p {
            color: rgba(255,255,255,0.3);
            font-size: 0.9rem;
            margin: 0;
        }
        .footer .footer-links a {
            color: rgba(255,255,255,0.4);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            margin-bottom: 8px;
        }
        .footer .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        /* ============ BACK TO TOP ============ */
        #backToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: #fff;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            z-index: 1000;
            box-shadow: 0 10px 30px rgba(102,126,234,0.3);
        }
        #backToTop.visible {
            opacity: 1;
            visibility: visible;
        }
        #backToTop:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 20px 40px rgba(102,126,234,0.4);
        }

        /* ============ RESPONSIVE ============ */
        @media (max-width: 992px) {
            .hero h1 { font-size: 3rem; }
            .hero-avatar .avatar-circle { width: 300px; height: 300px; }
            .hero-avatar .avatar-circle .avatar-inner { width: 280px; height: 280px; }
            .floating-badge { display: none !important; }
            .section-title { font-size: 2.2rem; }
        }
        @media (max-width: 768px) {
            .hero { padding: 100px 0 50px; text-align: center; }
            .hero p { margin: 0 auto 30px; }
            .hero .btn-group-custom { justify-content: center; }
            .hero h1 { font-size: 2.5rem; }
            .hero h2 { font-size: 1.3rem; }
            .hero-avatar .avatar-circle { width: 200px; height: 200px; margin: 0 auto; }
            .hero-avatar .avatar-circle .avatar-inner { width: 180px; height: 180px; }
            .section-title { font-size: 2rem; }
            .stat-card .number { font-size: 2.5rem; }
            .contact-card { padding: 25px; }
            .testimonial-card { padding: 25px; }
        }
    </style>
    
    @stack('styles')
</head>
<body>

    <!-- ============ PRELOADER ============ -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- ============ BACK TO TOP ============ -->
    <button id="backToTop" title="Retour en haut">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- ============================================================ -->
    <!-- NAVBAR -->
    <!-- ============================================================ -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('accueil') }}">
                <i class="fas fa-code"></i>Amadou Tangara
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('accueil') ? 'active' : '' }}" href="{{ route('accueil') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}" href="{{ route('apropos') }}">À propos</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('competences') ? 'active' : '' }}" href="{{ route('competences') }}">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('projets.*') ? 'active' : '' }}" href="{{ route('projets.index') }}">Projets</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}" href="{{ route('experience') }}">Expérience</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item ms-lg-2">
                        <a href="{{ route('contact') }}" class="btn-nav">Me contacter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================================ -->
    <!-- CONTENU PRINCIPAL -->
    <!-- ============================================================ -->
    @yield('content')

    <!-- ============================================================ -->
    <!-- FOOTER -->
    <!-- ============================================================ -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 style="font-weight: 700; color: #fff; font-size: 1.1rem;">
                        <i class="fas fa-code" style="color: #667eea;"></i> Amadou Tangara
                    </h5>
                    <p style="color: rgba(255,255,255,0.4); font-size: 0.9rem; max-width: 300px;">
                        Développeur Full Stack PHP / Laravel passionné par la création de solutions digitales innovantes et utiles.
                    </p>
                    <div class="social-links" style="justify-content: flex-start;">
                        <a href="https://github.com/Amadoutang79" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 style="font-weight: 600; color: #fff; font-size: 1rem;">Liens rapides</h5>
                    <div class="footer-links" style="display: flex; flex-direction: column; gap: 6px;">
                        <a href="{{ route('accueil') }}">Accueil</a>
                        <a href="{{ route('apropos') }}">À propos</a>
                        <a href="{{ route('competences') }}">Compétences</a>
                        <a href="{{ route('projets.index') }}">Projets</a>
                        <a href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 style="font-weight: 600; color: #fff; font-size: 1rem;">Contact</h5>
                    <div style="display: flex; flex-direction: column; gap: 8px; color: rgba(255,255,255,0.4);">
                        <span><i class="fas fa-envelope" style="color: #667eea; width: 20px;"></i> amadoutangara91@gmail.com</span>
                        <span><i class="fas fa-phone" style="color: #667eea; width: 20px;"></i> +223 71 70 79 12</span>
                        <span><i class="fas fa-map-marker-alt" style="color: #667eea; width: 20px;"></i> Bamako, Mali</span>
                    </div>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.05); margin: 30px 0 20px;">
            <div class="text-center">
                <p>© {{ date('Y') }} Amadou Tangara. Tous droits réservés. <span style="color: #667eea;">❤</span></p>
            </div>
        </div>
    </footer>

    <!-- ============================================================ -->
    <!-- SCRIPTS -->
    <!-- ============================================================ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // ============ PRELOADER ============
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.classList.add('hidden');
            }
        });

        // ============ AOS ANIMATIONS ============
        AOS.init({
            once: true,
            offset: 50,
            duration: 800,
        });

        // ============ NAVBAR SCROLL ============
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
        });

        // ============ BACK TO TOP ============
        const backToTop = document.getElementById('backToTop');
        if (backToTop) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });
            backToTop.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // ============ SMOOTH SCROLL ============
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    const navbarCollapse = document.getElementById('navbarNav');
                    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                        navbarCollapse.classList.remove('show');
                    }
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>