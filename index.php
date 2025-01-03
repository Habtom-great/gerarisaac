<?php include 'header.php'; ?>

<script>
    // Mobile Menu Script
    const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
    const mobileNavMenu = document.querySelector('.mobile-nav-menu');

    mobileMenuIcon.addEventListener('click', () => {
        mobileNavMenu.classList.toggle('hidden');
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<!-- Hero Section with Church Image -->
<section id="hero" class="hero-section">
    <div class="hero-content">
        <h1>Welcome to Our Church</h1>
        <p>Your spiritual home for worship, community, and growth.</p>
        <a href="#about" class="btn btn-primary">Join Us Today</a>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="about-section">
    <div class="container">
        <h2>About Our Church</h2>
        <p>We are a community dedicated to worship, spiritual growth, and outreach. Our mission is to spread the gospel and serve those in need.</p>
        <a href="#learn-more" class="btn btn-primary">Learn More About Us</a>
    </div>
</section>

<!-- Programs Section -->
<section id="programs" class="programs-section">
    <div class="container">
        <h2>Our Programs</h2>
        <div class="programs-grid">
            <div class="program-card">
                <video class="program-video" controls>
                    <source src="videos/preaching.mp4" type="video/mp4">
                </video>
                <h3>Preaching</h3>
                <p>Engage in powerful preaching that inspires and encourages.</p>
            </div>
            <div class="program-card">
                <video class="program-video" controls>
                    <source src="videos/kids-teaching.mp4" type="video/mp4">
                </video>
                <h3>Kids Teaching</h3>
                <p>Fun and engaging activities to help children grow in faith.</p>
            </div>
            <div class="program-card">
                <video class="program-video" controls>
                    <source src="videos/summer-camp.mp4" type="video/mp4">
                </video>
                <h3>Summer Camp for Kids</h3>
                <p>An exciting summer camp where children learn, play, and grow spiritually.</p>
            </div>
            <div class="program-card">
                <video class="program-video" controls>
                    <source src="videos/prayer-fasting.mp4" type="video/mp4">
                </video>
                <h3>Prayer & Fasting</h3>
                <p>Join us for moments of spiritual reflection, prayer, and fasting.</p>
            </div>
            <div class="program-card">
                <video class="program-video" controls>
                    <source src="videos/training.mp4" type="video/mp4">
                </video>
                <h3>Training & Coaching</h3>
                <p>Equipping leaders and members with spiritual and practical skills.</p>
            </div>
            <div class="program-card">
                <video class="program-video" controls>
                    <source src="videos/seminars-workshops.mp4" type="video/mp4">
                </video>
                <h3>Seminars & Workshops</h3>
                <p>Attend inspiring seminars and workshops to enhance your spiritual journey.</p>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="events-section">
    <div class="container">
        <h2>Upcoming Events</h2>
        <div class="event-card">
            <video class="event-video" controls>
                <source src="videos/event1.mp4" type="video/mp4">
            </video>
            <h3>Event Title 1</h3>
            <p>Date: October 15, 2024</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
        <div class="event-card">
            <video class="event-video" controls>
                <source src="videos/event2.mp4" type="video/mp4">
            </video>
            <h3>Event Title 2</h3>
            <p>Date: November 1, 2024</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</section>

<!-- Event Photos Section -->
<section id="event-photos" class="event-photos-section">
    <div class="container">
        <h2>Event Photos</h2>
        <div class="photo-gallery">
            <img src="images/event1.jpg" alt="Event 1" class="gallery-image">
            <img src="images/event2.jpg" alt="Event 2" class="gallery-image">
            <img src="images/event3.jpg" alt="Event 3" class="gallery-image">
            <img src="images/event4.jpg" alt="Event 4" class="gallery-image">
            <img src="images/event5.jpg" alt="Event 5" class="gallery-image">
            <img src="images/event6.jpg" alt="Event 6" class="gallery-image">
            <!-- Add more images as needed -->
        </div>
    </div>
</section>

<!-- Giving Section -->
<section id="giving" class="about-section">
    <div class="container">
        <h2>Giving</h2>
        <p>Bank account details and other giving options will be provided here.</p>
        <a href="#learn-more" class="btn btn-primary">Learn More About Us</a>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2>Contact Us</h2>
        <div class="contact-box">
            <form class="contact-form">
                <div class="input-group">
                    <input type="text" id="name" placeholder="Your Name" required>
                </div>
                <div class="input-group">
                    <input type="email" id="Email" placeholder="Your Email" required>
                </div>
                <div class="input-group">
                    <input type="tel" id="phone" placeholder="Telephone Number" required>
                </div>
                <div class="input-group">
                    <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>

        <div class="address-box">
            <h2>Our Address</h2>
            <p>123 Church St, City, Country</p>
            <p>Phone: +123 456 7890</p>
            <p>Email: info@church.org</p>
            <div class="address-container">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.0801106392054!2d-122.08341868518838!3d37.422065279827944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba0b71d62f79%3A0xe1522ae7d720676e!2sGoogleplex!5e0!3m2!1sen!2sus!4v1615568393006!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<style>
    body {
        font-family: 'Open Sans', sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    /* Hero Section */
    .hero-section {
        background: url('images/church.jpg') no-repeat center center/cover;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        position: relative;
    }

    .hero-content {
        z-index: 1;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .hero-section::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }

    .btn {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #218838;
    }

    .about-section, .programs-section, .events-section, .event-photos-section, .giving-section, .contact-section {
        padding: 60px 20px;
        background: #fff;
        margin: 20px 0;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .programs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .program-card, .event-card {
        background: #f9f9f9;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

    .program-video, .event-video {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .photo-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .gallery-image {
        width: 300px;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

    .contact-box, .address-box {
        flex: 1;
        min-width: 45%;
        margin: 10px;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
    }

    .contact-form input,
    .contact-form textarea,
    .contact-form button {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    .contact-form button {
        background-color: #28a745;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-form button:hover {
        background-color: #218838;
    }

    .map iframe {
        width: 100%;
        height: 350px;
        border: 0;
        border-radius: 5px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .contact-box, .address-box {
            min-width: 100%;
        }
    }
</style>

</body>
</html>

