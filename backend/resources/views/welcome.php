<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - Modern Web Development</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Modern CSS -->
    <link rel="stylesheet" href="/css/modern.css">
</head>

<body>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="/project">Projects</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Laravel Mindset</h1>
            <p class="subtitle">Build Modern Web Applications with Elegance</p>
            <p class="description">
                Crafting powerful, scalable solutions with Laravel's elegant syntax and modern development practices.
                Transform your ideas into reality with clean code and beautiful design.
            </p>
            <div class="btn-group">
                <a href="/project" class="btn btn-primary">
                    <span>View Projects</span>
                    <span>→</span>
                </a>
                <a href="#features" class="btn btn-secondary">
                    <span>Learn More</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Laravel</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <div class="feature-text">
                        <h4>Lightning Fast</h4>
                        <p>Optimized performance with modern caching strategies and efficient routing</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🔒</div>
                    <div class="feature-text">
                        <h4>Secure by Default</h4>
                        <p>Built-in protection against common vulnerabilities and security threats</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🎨</div>
                    <div class="feature-text">
                        <h4>Elegant Syntax</h4>
                        <p>Write clean, expressive code that's a joy to maintain and scale</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🚀</div>
                    <div class="feature-text">
                        <h4>Rapid Development</h4>
                        <p>Ship features faster with powerful tools and comprehensive ecosystem</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📦</div>
                    <div class="feature-text">
                        <h4>Rich Ecosystem</h4>
                        <p>Access thousands of packages and a vibrant community of developers</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">💎</div>
                    <div class="feature-text">
                        <h4>Best Practices</h4>
                        <p>Follow industry standards with MVC architecture and modern patterns</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our Tech Stack</h2>
            <div class="grid">
                <div class="card">
                    <div class="card-icon">🔧</div>
                    <h3>Backend</h3>
                    <p>Laravel 12 with PHP 8.3, providing robust API development and server-side logic with modern
                        features and performance optimizations.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🎯</div>
                    <h3>Frontend</h3>
                    <p>Modern CSS with responsive design, smooth animations, and an intuitive user experience across all
                        devices.</p>
                </div>
                <div class="card">
                    <div class="card-icon">💾</div>
                    <h3>Database</h3>
                    <p>Eloquent ORM for elegant database interactions, migrations for version control, and powerful
                        query building.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>