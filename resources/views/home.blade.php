<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Forces</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    height: 50px;
    width: auto;
    margin-left: 20px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ffd700; /* Change color on hover */
}

.hero {
    background-image: url('hero-background.jpg'); /* Replace 'hero-background.jpg' with your image */
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.hero-content {
    max-width: 800px;
    margin: 0 auto;
}

.hero h1 {
    font-size: 3em;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffd700;
    color: #333;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #ffc107; /* Darker shade on hover */
}

.about-section {
    background-color: #f9f9f9; /* Light gray background */
    padding: 80px 0; /* Adjust padding as needed */
    text-align: center;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}

.about-section h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
}

.about-section p {
    font-size: 1.1em;
    margin-bottom: 20px;
}

.about-section .cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.about-section .cta-button:hover {
    background-color: #555; /* Darker shade on hover */
}

.mission-section {
    background-color: #333; /* Dark background */
    color: #fff;
    padding: 80px 0; /* Adjust padding as needed */
    text-align: center;
}

.mission-section .container {
    max-width: 800px;
    margin: 0 auto;
}

.mission-section h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
}

.mission-section p {
    font-size: 1.1em;
    margin-bottom: 20px;
}

.mission-section .cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffd700; /* Yellow button */
    color: #333;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.mission-section .cta-button:hover {
    background-color: #ffc107; /* Darker shade on hover */
}

.team-section {
    background-color: #f9f9f9; /* Light gray background */
    padding: 80px 0; /* Adjust padding as needed */
    text-align: center;
}

.team-section .container {
    max-width: 800px;
    margin: 0 auto;
}

.team-section h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
}

.team-members {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.team-member {
    margin: 20px;
}

.team-member img {
    width: 200px; /* Adjust image size as needed */
    height: 200px; /* Adjust image size as needed */
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #333; /* Dark border around images */
}

.team-member h3 {
    margin-top: 10px;
}

.team-member p {
    margin-top: 5px;
    color: #666;
}

.training-section {
    background-color: #333; /* Dark background */
    color: #fff;
    padding: 80px 0; /* Adjust padding as needed */
    text-align: center;
}

.training-section .container {
    max-width: 800px;
    margin: 0 auto;
}

.training-section h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
}

.training-details {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.training-item {
    margin: 20px;
}

.training-item img {
    width: 200px; /* Adjust image size as needed */
    height: 200px; /* Adjust image size as needed */
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #fff; /* White border around images */
}

.training-item h3 {
    margin-top: 10px;
}

.training-item p {
    margin-top: 5px;
}

.gallery-section {
    padding: 80px 0; /* Adjust padding as needed */
    text-align: center;
}

.gallery-section .container {
    max-width: 1000px;
    margin: 0 auto;
}

.gallery-section h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
}

.gallery-images {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.gallery-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow effect */
}

.contact-section {
    background-color: #f9f9f9; /* Light gray background */
    padding: 80px 0; /* Adjust padding as needed */
    text-align: center;
}

.contact-section .container {
    max-width: 800px;
    margin: 0 auto;
}

.contact-section h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
}

.contact-section p {
    font-size: 1.1em;
    margin-bottom: 30px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form textarea {
    resize: vertical;
}

.submit-button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background-color: #555; /* Darker shade on hover */
}

.footer-section {
    background-color: #333; /* Dark background */
    color: #fff;
    padding: 40px 0; /* Adjust padding as needed */
}

.footer-section .container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}

.footer-content {
    display: flex;
    align-items: center;
}

.footer-logo img {
    height: 50px; /* Adjust logo size as needed */
    width: auto;
}

.footer-links ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.footer-links ul li {
    display: inline;
    margin-right: 20px;
}

.footer-links ul li:last-child {
    margin-right: 0;
}

.footer-links ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links ul li a:hover {
    color: #ffd700; /* Yellow color on hover */
}

.footer-bottom {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-bottom p {
    margin: 0;
}

.social-icons a {
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
}

.social-icons a:hover {
    color: #ffd700; /* Yellow color on hover */
}

</style>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Special Forces Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#mission">Mission</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#training">Training</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
                @guest

<li>
    <a  href="{{ route('login') }}">Login</a>
</li>
<li >
    <a  href="{{ route('registration') }}">Register</a>
</li>

@else
<span >{{ auth()->user()->name }}</span>
<li >
    <a  href="{{ route('logout') }}">Logout</a>
</li>
@endguest
            </ul>
        </nav>
    </header>

    <section class="hero">
    <div class="hero-content">
        <h1>Welcome to Special Forces</h1>
        <p>Join us in our mission to protect and serve.</p>
        <a href="#about" class="cta-button">Learn More</a>
    </div>
</section>

<section id="about" class="about-section">
    <div class="container">
        <h2>About Us</h2>
        <p>We are a dedicated team of highly trained individuals committed to protecting our nation...</p>
        <p>Learn more about our history, mission, and values...</p>
        <a href="#mission" class="cta-button">Our Mission</a>
    </div>
</section>

<section id="mission" class="mission-section">
    <div class="container">
        <h2>Our Mission</h2>
        <p>Our mission is to protect and defend our nation...</p>
        <p>We strive to uphold our values of integrity, courage, and excellence...</p>
        <a href="#team" class="cta-button">Meet Our Team</a>
    </div>
</section>

<section id="team" class="team-section">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="team-member1.jpg" alt="Team Member 1">
                <h3>John Doe</h3>
                <p>Position: Team Leader</p>
            </div>
            <div class="team-member">
                <img src="team-member2.jpg" alt="Team Member 2">
                <h3>Jane Smith</h3>
                <p>Position: Sniper</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </div>
</section>

<section id="training" class="training-section">
    <div class="container">
        <h2>Training Program</h2>
        <div class="training-details">
            <div class="training-item">
                <img src="training1.jpg" alt="Training 1">
                <h3>Combat Skills</h3>
                <p>Intensive training in hand-to-hand combat techniques.</p>
            </div>
            <div class="training-item">
                <img src="training2.jpg" alt="Training 2">
                <h3>Firearms Proficiency</h3>
                <p>Extensive firearms training including marksmanship and tactical shooting.</p>
            </div>
            <!-- Add more training items as needed -->
        </div>
    </div>
</section>

<section id="gallery" class="gallery-section">
    <div class="container">
        <h2>Gallery</h2>
        <div class="gallery-images">
            <div class="gallery-item">
                <img src="gallery1.jpg" alt="Gallery Image 1">
            </div>
            <div class="gallery-item">
                <img src="gallery2.jpg" alt="Gallery Image 2">
            </div>
            <!-- Add more gallery items as needed -->
        </div>
    </div>
</section>

<section id="contact" class="contact-section">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions or want to learn more? Get in touch with us!</p>
        <form action="#" method="post" class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </div>
</section>

<footer class="footer-section">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="logo.png" alt="Special Forces Logo">
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#mission">Mission</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#training">Training</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Special Forces. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>


    <!-- Rest of the page content goes here -->

</body>
</html>