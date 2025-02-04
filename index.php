<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelanceHub - Find Work & Hire Talent</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Navigation */
        .nav {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #14a800;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }

        /* Hero section */
        .hero {
            padding: 8rem 5% 4rem;
            background: linear-gradient(135deg, #14a800 0%, #0d8400 100%);
            color: white;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hero-text {
            flex: 1;
            padding-right: 3rem;
        }

        .hero-text h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: #fff;
            color: #14a800;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
        }

        /* Categories section */
        .categories {
            padding: 4rem 5%;
            background: #f9f9f9;
        }

        .categories-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .categories h2 {
            text-align: center;
            margin-bottom: 3rem;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .category-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }

        .category-card h3 {
            margin: 1rem 0;
            color: #14a800;
        }

        /* Featured jobs section */
        .featured-jobs {
            padding: 4rem 5%;
        }

        .jobs-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .job-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .job-card h3 {
            margin-bottom: 1rem;
            color: #333;
        }

        .job-details {
            color: #666;
            margin-bottom: 1rem;
        }

        .apply-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: #14a800;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        /* Footer */
        .footer {
            background: #333;
            color: white;
            padding: 3rem 5%;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer-section h4 {
            margin-bottom: 1rem;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="nav-content">
            <a href="/" class="logo">FreelanceHub</a>
            <div class="nav-links">
                <a href="/find-work">Find Work</a>
                <a href="/hire">Hire Talent</a>
                <a href="/login">Log In</a>
                <a href="/signup">Sign Up</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Find great talent.<br>Build your business.</h1>
                <p>Access the top 1% of talent on our platform, and build your team today.</p>
                <a href="/signup" class="cta-button">Get Started</a>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="categories-content">
            <h2>Browse by Category</h2>
            <div class="category-grid">
                <div class="category-card">
                    <h3>Web Development</h3>
                    <p>Website creation, maintenance, and optimization</p>
                </div>
                <div class="category-card">
                    <h3>Design & Creative</h3>
                    <p>Logos, graphics, and visual content</p>
                </div>
                <div class="category-card">
                    <h3>Writing</h3>
                    <p>Content creation and copywriting</p>
                </div>
                <div class="category-card">
                    <h3>Marketing</h3>
                    <p>Digital marketing and SEO services</p>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-jobs">
        <div class="jobs-content">
            <h2>Featured Jobs</h2>
            <div class="jobs-grid">
                <?php
                // Sample job data - in a real application, this would come from a database
                $featured_jobs = [
                    [
                        'title' => 'Senior Frontend Developer',
                        'budget' => '$50-70/hr',
                        'description' => 'Looking for an experienced React developer for a long-term project.'
                    ],
                    [
                        'title' => 'Content Writer',
                        'budget' => '$30-40/hr',
                        'description' => 'Need a skilled writer for creating engaging blog content.'
                    ],
                    [
                        'title' => 'UI/UX Designer',
                        'budget' => '$45-60/hr',
                        'description' => 'Seeking a designer for mobile app interface design.'
                    ]
                ];

                foreach ($featured_jobs as $job) {
                    echo '<div class="job-card">
                        <h3>' . htmlspecialchars($job['title']) . '</h3>
                        <div class="job-details">
                            <p><strong>Budget:</strong> ' . htmlspecialchars($job['budget']) . '</p>
                            <p>' . htmlspecialchars($job['description']) . '</p>
                        </div>
                        <a href="/job-details" class="apply-button">Apply Now</a>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>For Clients</h4>
                <a href="#">How to Hire</a>
                <a href="#">Talent Marketplace</a>
                <a href="#">Project Catalog</a>
            </div>
            <div class="footer-section">
                <h4>For Talent</h4>
                <a href="#">How to Find Work</a>
                <a href="#">Direct Contracts</a>
                <a href="#">Getting Paid</a>
            </div>
            <div class="footer-section">
                <h4>Resources</h4>
                <a href="#">Help & Support</a>
                <a href="#">Success Stories</a>
                <a href="#">Blog</a>
            </div>
            <div class="footer-section">
                <h4>Company</h4>
                <a href="#">About Us</a>
                <a href="#">Careers</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>
