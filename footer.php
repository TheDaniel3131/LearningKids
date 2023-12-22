<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');

    footer {
        background-color: #27374D; /* Dark background */
        color: #fff;
        font-family: 'Open Sans', sans-serif; /* Modern font */
        padding: 40px 0;
        text-align: center;
    }

    .footer-content {
        display: flex;
        justify-content: center;
        flex-wrap: wrap; /* Ensures content wraps on smaller screens */
        align-items: center;
        max-width: 1200px; /* Set a max-width for larger screens */
        margin: auto; /* Center the content */
        text-align: center;
    }

    .footer-content div {
        flex: 1; /* Each section should take equal space */
        min-width: 200px; /* Minimum width for each section */
        margin: 10px; /* Add some margin for spacing */
    }

    .footer-content h4 {
        margin-bottom: 15px;
        font-size: 24px;
        color: #4fc3f7; /* Bright color for headings */
    }

    .footer-content p, .footer-bottom p {
        font-size: 14px;
        line-height: 1.6;
    }

    .social-media a {
        display: inline-block;
        margin: 0 10px;
    }

    .social-media img {
        width: 24px;
        height: auto;
        vertical-align: middle; /* Align images with text */
    }

    .footer-bottom {
        border-top: 1px solid #555;
        padding-top: 20px;
        margin-top: 20px; /* Add space between content and bottom */
    }

    .footer-bottom p {
        margin: 0; /* Remove default margins */
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
        }

        .footer-content div {
            margin-bottom: 20px; /* Add spacing between items when stacked */
        }
    }

</style>


<footer>
    <div class="container">
        <div class="footer-content">
            <div class="about-section">
                <h4>About LearningKids</h4>
                <p>Making learning fun and accessible for kids everywhere.</p>
            </div>
            <div class="contact-section">
                <h4>Contact Us</h4>
                <p>Email: contact@learningkids.com</p>
                <p>Phone: +60 10-848 3602</p>
            </div>
            <div class="social-media">
                <h4>Connect With Us</h4>
                <a href="#"><img src="assets/images/facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="assets/images/twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="assets/images/linkedin-icon.png" alt="LinkedIn"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright ©2023 LearningKids</p>
        </div>
    </div>
</footer>
