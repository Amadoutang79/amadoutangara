<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Amadou Tangara - Développeur Full Stack</title>
    
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

        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a2e;
            color: #fff;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a2e;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 10px;
        }

        /* ============ PRELOADER ============ */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #0a0a2e;
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
            border-top-color: #667eea;
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
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
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
            color: #667eea;
            margin-right: 10px;
        }
        .navbar-brand::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }
        .navbar-brand:hover::after {
            width: 100%;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.7) !important;
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
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 60%;
        }
        .nav-link:hover {
            color: #fff !important;
            background: rgba(102, 126, 234, 0.08);
        }
        .nav-link.active {
            color: #fff !important;
            background: rgba(102, 126, 234, 0.12);
        }

        .btn-nav {
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #fff;
            padding: 8px 28px;
            border-radius: 50px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .btn-nav::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea, #764ba2);
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

        /* ============ HERO SECTION ============ */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #0a0a2e 0%, #1a1a4e 50%, #0a0a2e 100%);
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
            background: radial-gradient(circle, rgba(102, 126, 234, 0.08) 0%, transparent 70%);
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
            background: radial-gradient(circle, rgba(118, 75, 162, 0.08) 0%, transparent 70%);
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

        .hero .badge-hero {
            display: inline-block;
            background: rgba(102, 126, 234, 0.15);
            color: #667eea;
            padding: 8px 24px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid rgba(102, 126, 234, 0.15);
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
            background: linear-gradient(135deg, #667eea, #764ba2);
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
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }
        .typing-text {
            display: inline-block;
            border-right: 3px solid #667eea;
            padding-right: 8px;
            animation: blink 0.8s step-end infinite;
        }
        @keyframes blink {
            50% { border-color: transparent; }
        }

        .hero p {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.5);
            max-width: 600px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .hero .btn-group-custom {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #667eea, #764ba2);
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
            background: linear-gradient(135deg, #764ba2, #667eea);
            transition: left 0.4s ease;
            z-index: 0;
        }
        .btn-primary-custom:hover::before {
            left: 0;
        }
        .btn-primary-custom:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.4);
            color: #fff;
        }
        .btn-primary-custom * {
            position: relative;
            z-index: 1;
        }

        .btn-outline-custom {
            border: 2px solid rgba(102, 126, 234, 0.3);
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
        }
        .btn-outline-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: rgba(102, 126, 234, 0.1);
            transition: width 0.4s ease;
        }
        .btn-outline-custom:hover::before {
            width: 100%;
        }
        .btn-outline-custom:hover {
            border-color: #667eea;
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
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: pulse 3s infinite;
        }
        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.3); }
            50% { box-shadow: 0 0 0 30px rgba(102, 126, 234, 0); }
        }
        .hero-avatar .avatar-circle .avatar-inner {
            width: 360px;
            height: 360px;
            border-radius: 50%;
            background: #0a0a2e;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        /* Style pour l'image dans l'avatar */
        .hero-avatar .avatar-circle .avatar-inner img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .hero-avatar .floating-badge {
            position: absolute;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(20px);
            padding: 12px 20px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.85rem;
            animation: floatBadge 6s infinite ease-in-out;
            transition: all 0.3s ease;
        }
        .hero-avatar .floating-badge:hover {
            transform: scale(1.1);
            background: rgba(255, 255, 255, 0.1);
        }
        .hero-avatar .floating-badge:nth-child(2) {
            top: 10px;
            right: -30px;
            animation-delay: 0s;
        }
        .hero-avatar .floating-badge:nth-child(3) {
            bottom: 40px;
            left: -40px;
            animation-delay: 2s;
        }
        .hero-avatar .floating-badge:nth-child(4) {
            bottom: -20px;
            right: 0px;
            animation-delay: 4s;
        }
        @keyframes floatBadge {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        .hero-avatar .floating-badge i {
            color: #667eea;
            margin-right: 8px;
        }

        /* ============ STATS SECTION ============ */
        .stats-section {
            padding: 60px 0;
            background: rgba(255, 255, 255, 0.02);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .stat-card {
            text-align: center;
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.05);
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
        .stat-card:hover::before {
            opacity: 1;
        }
        .stat-card:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(102, 126, 234, 0.3);
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .stat-card .number {
            font-size: 3.2rem;
            font-weight: 900;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: block;
            line-height: 1.2;
            transition: transform 0.3s ease;
        }
        .stat-card:hover .number {
            transform: scale(1.1);
        }
        .stat-card .label {
            color: rgba(255, 255, 255, 0.6);
            font-size: 1rem;
            font-weight: 500;
            margin-top: 5px;
        }
        .stat-card .icon {
            font-size: 2.2rem;
            color: rgba(102, 126, 234, 0.3);
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        .stat-card:hover .icon {
            color: #667eea;
            transform: scale(1.2);
        }

        /* ============ ABOUT SECTION ============ */
        .about-section {
            padding: 100px 0;
            position: relative;
        }
        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(102,126,234,0.03) 0%, transparent 70%);
            pointer-events: none;
        }
        .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 15px;
        }
        .section-title .highlight {
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .section-subtitle {
            color: rgba(255, 255, 255, 0.5);
            font-size: 1.1rem;
        }
        .about-text {
            color: rgba(255, 255, 255, 0.7);
            line-height: 2;
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto;
        }
        .about-text strong {
            color: #fff;
        }
        .about-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }
        .about-tags .tag {
            background: rgba(102, 126, 234, 0.1);
            color: #667eea;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(102, 126, 234, 0.1);
            transition: all 0.3s ease;
            cursor: default;
        }
        .about-tags .tag:hover {
            background: rgba(102, 126, 234, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102,126,234,0.1);
        }

        /* ============ PROJECTS SECTION ============ */
        .projects-section {
            padding: 100px 0;
            background: rgba(255, 255, 255, 0.02);
            position: relative;
        }
        .project-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
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
        .project-card:hover::before {
            opacity: 1;
        }
        .project-card:hover {
            transform: translateY(-12px) scale(1.02);
            border-color: rgba(102, 126, 234, 0.3);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
        }
        .project-card .card-img-top {
            height: 220px;
            object-fit: cover;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: rgba(255, 255, 255, 0.15);
            transition: transform 0.5s ease;
        }
        .project-card:hover .card-img-top {
            transform: scale(1.05);
        }
        .project-card .card-body {
            padding: 28px;
            position: relative;
            z-index: 1;
        }
        .project-card .card-body .badge-category {
            background: rgba(102, 126, 234, 0.15);
            color: #667eea;
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
            color: rgba(255, 255, 255, 0.6);
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
            background: rgba(255, 255, 255, 0.05);
            padding: 4px 14px;
            border-radius: 50px;
            font-size: 0.7rem;
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }
        .project-card .card-body .tech-stack .tech:hover {
            background: rgba(102,126,234,0.2);
            color: #667eea;
        }

        /* ============ TECH SECTION ============ */
        .tech-section {
            padding: 100px 0;
            background: rgba(255, 255, 255, 0.02);
        }
        .tech-item {
            background: rgba(255, 255, 255, 0.03);
            padding: 25px 20px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-align: center;
            cursor: default;
        }
        .tech-item:hover {
            transform: translateY(-8px) scale(1.05);
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(102, 126, 234, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .tech-item i {
            font-size: 2.8rem;
            margin-bottom: 12px;
            transition: transform 0.3s ease;
        }
        .tech-item:hover i {
            transform: scale(1.2) rotate(-5deg);
        }
        .tech-item p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            margin: 0;
            font-weight: 500;
        }

        /* ============ TESTIMONIALS ============ */
        .testimonials-section {
            padding: 100px 0;
            position: relative;
        }
        .testimonial-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.05);
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
            color: rgba(102, 126, 234, 0.2);
            margin-bottom: 15px;
        }
        .testimonial-card .text {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.1rem;
            line-height: 1.9;
            font-style: italic;
        }
        .testimonial-card .author {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .testimonial-card .author .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
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
            color: rgba(255, 255, 255, 0.4);
        }

        /* ============ CONTACT SECTION ============ */
        .contact-section {
            padding: 100px 0;
            background: rgba(255, 255, 255, 0.02);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
        .contact-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            padding: 45px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s ease;
        }
        .contact-card:hover {
            border-color: rgba(102,126,234,0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .contact-card .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #fff;
            padding: 14px 20px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        .contact-card .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            color: #fff;
        }
        .contact-card .form-control::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }
        .contact-info-item {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }
        .contact-info-item:hover {
            transform: translateX(5px);
        }
        .contact-info-item:last-child {
            border-bottom: none;
        }
        .contact-info-item .icon {
            width: 55px;
            height: 55px;
            background: rgba(102, 126, 234, 0.08);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #667eea;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }
        .contact-info-item:hover .icon {
            background: rgba(102, 126, 234, 0.2);
            transform: scale(1.1);
        }
        .contact-info-item .info .label {
            color: rgba(255, 255, 255, 0.4);
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
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            background: rgba(10, 10, 46, 0.98);
        }
        .footer .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .footer .social-links a {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
            font-size: 1.2rem;
        }
        .footer .social-links a:hover {
            background: rgba(102, 126, 234, 0.2);
            color: #667eea;
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 30px rgba(102,126,234,0.2);
        }
        .footer p {
            color: rgba(255, 255, 255, 0.3);
            font-size: 0.9rem;
            margin: 0;
        }
        .footer .footer-links a {
            color: rgba(255, 255, 255, 0.4);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            margin-bottom: 8px;
        }
        .footer .footer-links a:hover {
            color: #667eea;
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
            background: linear-gradient(135deg, #667eea, #764ba2);
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
                    <li class="nav-item"><a class="nav-link active" href="#accueil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#apropos">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#competences">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projets">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Expérience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-2">
                        <a href="#contact" class="btn-nav">Me contacter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================================ -->
    <!-- HERO SECTION AVEC L'IMAGE DU DÉVELOPPEUR -->
    <!-- ============================================================ -->
    <section class="hero" id="accueil">
        <canvas id="particles-canvas"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content" data-aos="fade-right" data-aos-duration="1000">
                    <div class="badge-hero">
                        <i class="fas fa-rocket me-2"></i>Disponible pour des projets
                    </div>
                    <h1>
                        <span class="wave">👋</span><br>
                        Je suis <span class="highlight">Amadou Tangara</span>
                    </h1>
                    <h2>
                        <span class="typing-text" id="typing-text"></span>
                    </h2>
                    <p>
                        Je conçois et développe des applications web modernes, performantes et sécurisées 
                        avec Laravel, PHP, MySQL et JavaScript. J'aide les entreprises et organisations 
                        à digitaliser leurs processus et à atteindre leurs objectifs.
                    </p>
                    <div class="btn-group-custom">
                        <a href="#projets" class="btn-primary-custom">
                            <i class="fas fa-project-diagram"></i>Voir mes projets
                        </a>
                        <a href="#contact" class="btn-outline-custom">
                            <i class="fas fa-envelope"></i>Me contacter
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 hero-avatar" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="avatar-circle mx-auto">
                        <div class="avatar-inner">
                            <!-- ============================================================ -->
                            <!-- IMAGE DU DÉVELOPPEUR FULL STACK PHP LARAVEL -->
                            <!-- ============================================================ -->
                            <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?w=400&h=400&fit=crop&crop=face&auto=format" 
                                 alt="Développeur Full Stack" 
                                 style="width:100%; height:100%; border-radius:50%; object-fit:cover;">
                        </div>
                    </div>
                    <div class="floating-badge" style="top: 20px; right: -20px;">
                        <i class="fas fa-check-circle"></i> 4+ ans d'expérience
                    </div>
                    <div class="floating-badge" style="bottom: 50px; left: -30px;">
                        <i class="fas fa-code"></i> 12+ projets
                    </div>
                    <div class="floating-badge" style="bottom: -10px; right: 10px;">
                        <i class="fas fa-heart"></i> 100% engagé
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- STATS SECTION -->
    <!-- ============================================================ -->
    <section class="stats-section" id="stats">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="0">
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                        <span class="number" data-count="4">0</span>
                        <span class="label">Années d'expérience</span>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-project-diagram"></i></div>
                        <span class="number" data-count="12">0</span>
                        <span class="label">Projets réalisés</span>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-check-circle"></i></div>
                        <span class="number" data-count="8">0</span>
                        <span class="label">Applications complètes</span>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <div class="stat-card">
                        <div class="icon"><i class="fas fa-heart"></i></div>
                        <span class="number" data-count="100">0</span>
                        <span class="label">Engagement</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- ABOUT SECTION -->
    <!-- ============================================================ -->
    <section class="about-section" id="apropos">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up" data-aos-duration="800">
                    <span class="badge-hero" style="background: rgba(102,126,234,0.15); color: #667eea; padding: 6px 18px; border-radius: 50px; font-size: 0.8rem; font-weight: 600; display: inline-block;">
                        À PROPOS DE MOI
                    </span>
                    <h2 class="section-title">
                        Passionné par la création de <span class="highlight">solutions digitales</span> à impact
                    </h2>
                    <p class="about-text">
                        Développeur Full Stack spécialisé en <strong>PHP, Laravel et MySQL</strong> avec plus de 
                        <strong>4 ans d'expérience</strong> dans la conception d'applications web robustes et évolutives. 
                        J'ai une forte capacité à comprendre les besoins métiers et à transformer des idées en 
                        solutions numériques efficaces dans les domaines de l'<strong>éducation</strong>, la 
                        <strong>santé</strong>, le <strong>commerce</strong> et la <strong>gestion</strong>.
                    </p>
                    <div class="about-tags">
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> Laravel</span>
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> PHP</span>
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> MySQL</span>
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> JavaScript</span>
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> Bootstrap</span>
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> API REST</span>
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> Git</span>
                        <span class="tag"><i class="fas fa-check-circle me-1"></i> Docker</span>
                    </div>
                    <a href="#contact" class="btn-primary-custom mt-4" style="display: inline-flex;">
                        <i class="fas fa-user"></i>En savoir plus sur moi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- PROJECTS SECTION -->
    <!-- ============================================================ -->
    <section class="projects-section" id="projets">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="600">
                <span class="badge-hero" style="background: rgba(102,126,234,0.15); color: #667eea; padding: 6px 18px; border-radius: 50px; font-size: 0.8rem; font-weight: 600; display: inline-block;">
                    MES PROJETS PHARES
                </span>
                <h2 class="section-title">Découvrez mes <span class="highlight">réalisations</span></h2>
                <p class="section-subtitle">Des solutions concrètes pour des besoins réels</p>
            </div>

            <div class="row g-4">
                <!-- Projet 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="0">
                    <div class="project-card">
                        <div class="card-img-top">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="card-body">
                            <span class="badge-category">Education</span>
                            <h5>EduConnect AI Sahel</h5>
                            <p>Plateforme éducative intégrant l'IA pour l'apprentissage et la gestion scolaire.</p>
                            <div class="tech-stack">
                                <span class="tech">Laravel</span>
                                <span class="tech">MySQL</span>
                                <span class="tech">AI</span>
                            </div>
                            <a href="#" class="btn-primary-custom w-100 mt-2" style="padding: 12px; font-size: 0.9rem; justify-content: center; border-radius: 50px;">
                                <i class="fas fa-eye"></i>Voir le projet
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="project-card">
                        <div class="card-img-top">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="card-body">
                            <span class="badge-category">Gestion commerciale</span>
                            <h5>POS App</h5>
                            <p>Système de point de vente avec gestion des stocks, ventes et clients.</p>
                            <div class="tech-stack">
                                <span class="tech">Laravel</span>
                                <span class="tech">MySQL</span>
                                <span class="tech">Bootstrap</span>
                            </div>
                            <a href="#" class="btn-primary-custom w-100 mt-2" style="padding: 12px; font-size: 0.9rem; justify-content: center; border-radius: 50px;">
                                <i class="fas fa-eye"></i>Voir le projet
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div class="project-card">
                        <div class="card-img-top">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <div class="card-body">
                            <span class="badge-category">Santé</span>
                            <h5>Clinique Management</h5>
                            <p>Gestion de clinique : patients, rendez-vous, dossiers médicaux et facturation.</p>
                            <div class="tech-stack">
                                <span class="tech">Laravel</span>
                                <span class="tech">MySQL</span>
                                <span class="tech">Bootstrap</span>
                            </div>
                            <a href="#" class="btn-primary-custom w-100 mt-2" style="padding: 12px; font-size: 0.9rem; justify-content: center; border-radius: 50px;">
                                <i class="fas fa-eye"></i>Voir le projet
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                <a href="#" class="btn-outline-custom">
                    <i class="fas fa-arrow-right"></i>Voir tous mes projets
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- TECH SECTION -->
    <!-- ============================================================ -->
    <section class="tech-section" id="competences">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="600">
                <span class="badge-hero" style="background: rgba(102,126,234,0.15); color: #667eea; padding: 6px 18px; border-radius: 50px; font-size: 0.8rem; font-weight: 600; display: inline-block;">
                    TECHNOLOGIES MAÎTRISÉES
                </span>
                <h2 class="section-title">Mes <span class="highlight">compétences techniques</span></h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="0">
                    <div class="tech-item">
                        <i class="fab fa-laravel" style="color: #FF2D20;"></i>
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="50">
                    <div class="tech-item">
                        <i class="fab fa-php" style="color: #777BB4;"></i>
                        <p>PHP</p>
                    </div>
                </div>
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="100">
                    <div class="tech-item">
                        <i class="fas fa-database" style="color: #4479A1;"></i>
                        <p>MySQL</p>
                    </div>
                </div>
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="150">
                    <div class="tech-item">
                        <i class="fab fa-js" style="color: #F7DF1E;"></i>
                        <p>JavaScript</p>
                    </div>
                </div>
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="200">
                    <div class="tech-item">
                        <i class="fab fa-html5" style="color: #E34F26;"></i>
                        <p>HTML5</p>
                    </div>
                </div>
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="250">
                    <div class="tech-item">
                        <i class="fab fa-css3-alt" style="color: #1572B6;"></i>
                        <p>CSS3</p>
                    </div>
                </div>
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="300">
                    <div class="tech-item">
                        <i class="fab fa-bootstrap" style="color: #7952B3;"></i>
                        <p>Bootstrap</p>
                    </div>
                </div>
                <div class="col-3 col-md-2" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="350">
                    <div class="tech-item">
                        <i class="fab fa-git-alt" style="color: #F05032;"></i>
                        <p>Git</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4" data-aos="fade-up" data-aos-duration="600">
                <a href="#" class="btn-outline-custom">
                    <i class="fas fa-arrow-right"></i>Voir toutes mes compétences
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- TESTIMONIALS SECTION -->
    <!-- ============================================================ -->
    <section class="testimonials-section" id="experience">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="600">
                <span class="badge-hero" style="background: rgba(102,126,234,0.15); color: #667eea; padding: 6px 18px; border-radius: 50px; font-size: 0.8rem; font-weight: 600; display: inline-block;">
                    EXPÉRIENCE PROFESSIONNELLE
                </span>
                <h2 class="section-title">Ce que les autres disent de <span class="highlight">moi</span></h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-duration="600">
                    <div class="testimonial-card">
                        <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p class="text">
                            "Amadou est un développeur sérieux, compétent et très impliqué. 
                            Il livre toujours un travail de qualité dans les délais."
                        </p>
                        <div class="author">
                            <div class="avatar">MD</div>
                            <div>
                                <div class="name">M. Diarra</div>
                                <div class="role">Chef de projet - Solution</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================ -->
    <!-- CONTACT SECTION -->
    <!-- ============================================================ -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="600">
                <span class="badge-hero" style="background: rgba(102,126,234,0.15); color: #667eea; padding: 6px 18px; border-radius: 50px; font-size: 0.8rem; font-weight: 600; display: inline-block;">
                    ME CONTACTER
                </span>
                <h2 class="section-title">Vous avez un projet ? <span class="highlight">Discutons-en</span></h2>
                <p class="section-subtitle">Je suis à votre écoute pour vos projets</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-7" data-aos="fade-right" data-aos-duration="600">
                    <div class="contact-card">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" 
                                           name="nom" placeholder="Votre nom" value="{{ old('nom') }}" required>
                                    @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           name="email" placeholder="Votre email" value="{{ old('email') }}" required>
                                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control @error('sujet') is-invalid @enderror" 
                                           name="sujet" placeholder="Sujet" value="{{ old('sujet') }}" required>
                                    @error('sujet')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control @error('message') is-invalid @enderror" 
                                              name="message" rows="4" placeholder="Votre message..." required>{{ old('message') }}</textarea>
                                    @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-primary-custom w-100" style="border: none; justify-content: center; border-radius: 50px;">
                                        <i class="fas fa-paper-plane"></i>Envoyer le message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="600" data-aos-delay="100">
                    <div class="contact-card">
                        <h5 style="font-weight: 700; margin-bottom: 25px; color: #fff; font-size: 1.2rem;">
                            <i class="fas fa-info-circle" style="color: #667eea;"></i> Informations
                        </h5>
                        
                        <div class="contact-info-item">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="info">
                                <div class="label">Email</div>
                                <div class="value">amadoutangara91@gmail.com</div>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="info">
                                <div class="label">Téléphone</div>
                                <div class="value">+223 71 70 79 12</div>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="info">
                                <div class="label">Localisation</div>
                                <div class="value">Bamako, Mali</div>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="icon"><i class="fab fa-github"></i></div>
                            <div class="info">
                                <div class="label">GitHub</div>
                                <div class="value">github.com/Amadoutang79</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 style="font-weight: 600; color: #fff; font-size: 1rem;">Liens rapides</h5>
                    <div class="footer-links" style="display: flex; flex-direction: column; gap: 6px;">
                        <a href="#accueil">Accueil</a>
                        <a href="#apropos">À propos</a>
                        <a href="#competences">Compétences</a>
                        <a href="#projets">Projets</a>
                        <a href="#contact">Contact</a>
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
                <p>© 2026 Amadou Tangara. Tous droits réservés. <span style="color: #667eea;">❤</span></p>
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
            document.getElementById('preloader').classList.add('hidden');
        });

        // ============ AOS ANIMATIONS ============
        AOS.init({
            once: true,
            offset: 50,
            duration: 800,
        });

        // ============ TYPING EFFECT ============
        const roles = [
            'Développeur Full Stack PHP / Laravel',
            'Créateur d\'applications web innovantes',
            'Expert en solutions digitales',
            'Passionné par la technologie'
        ];
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingElement = document.getElementById('typing-text');

        function typeEffect() {
            const currentRole = roles[roleIndex];
            if (isDeleting) {
                typingElement.textContent = currentRole.substring(0, charIndex - 1);
                charIndex--;
                if (charIndex === 0) {
                    isDeleting = false;
                    roleIndex = (roleIndex + 1) % roles.length;
                    setTimeout(typeEffect, 1500);
                    return;
                }
                setTimeout(typeEffect, 50);
            } else {
                typingElement.textContent = currentRole.substring(0, charIndex + 1);
                charIndex++;
                if (charIndex === currentRole.length) {
                    isDeleting = true;
                    setTimeout(typeEffect, 2500);
                    return;
                }
                setTimeout(typeEffect, 80);
            }
        }
        typeEffect();

        // ============ PARTICLE SYSTEM ============
        const canvas = document.getElementById('particles-canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];

        function resizeCanvas() {
            canvas.width = canvas.parentElement.offsetWidth;
            canvas.height = canvas.parentElement.offsetHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 0.5;
                this.speedX = (Math.random() - 0.5) * 0.3;
                this.speedY = (Math.random() - 0.5) * 0.3;
                this.opacity = Math.random() * 0.5 + 0.1;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x > canvas.width) this.x = 0;
                if (this.x < 0) this.x = canvas.width;
                if (this.y > canvas.height) this.y = 0;
                if (this.y < 0) this.y = canvas.height;
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(102, 126, 234, ${this.opacity})`;
                ctx.fill();
            }
        }

        function initParticles() {
            particles = [];
            const count = Math.min(80, (canvas.width * canvas.height) / 15000);
            for (let i = 0; i < count; i++) {
                particles.push(new Particle());
            }
        }
        initParticles();

        function connectParticles() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    if (distance < 150) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(102, 126, 234, ${0.1 * (1 - distance / 150)})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            connectParticles();
            requestAnimationFrame(animateParticles);
        }
        animateParticles();

        // ============ NAVBAR SCROLL ============
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // ============ BACK TO TOP ============
        const backToTop = document.getElementById('backToTop');
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

        // ============ COUNTER ANIMATION ============
        function animateCounter(element) {
            const target = parseInt(element.dataset.count);
            const duration = 2000;
            const startTime = Date.now();

            function update() {
                const elapsed = Date.now() - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const current = Math.floor(progress * target);
                element.textContent = current + (target === 100 ? '%' : '+');
                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    element.textContent = target + (target === 100 ? '%' : '+');
                }
            }
            update();
        }

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const numbers = entry.target.querySelectorAll('.number');
                    numbers.forEach(num => animateCounter(num));
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        document.querySelectorAll('.stats-section .row').forEach(row => {
            statsObserver.observe(row);
        });

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
</body>
</html>