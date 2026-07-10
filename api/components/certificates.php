<section class="certificates section" id="certificates">
    <h2 class="section-title">Certificates</h2>

    <div class="certificate-container">

        <!-- Certificate 1 -->
        <div class="certificate-card">
            <img src="images/certificates/google-it.jpg" alt="Google IT Support">

            <div class="certificate-info">
                <h3>Google IT Support Professional</h3>

                <span>Google • Coursera</span>

                <p>Issued: January 2026</p>

                <button class="view-btn"
                    onclick="openCertificate('images/certificates/google-it.jpg')">
                    View Certificate
                </button>
            </div>
        </div>

        <!-- Certificate 2 -->
        <div class="certificate-card">
            <img src="images/certificates/cisco.jpg" alt="Cisco">

            <div class="certificate-info">
                <h3>Networking Essentials</h3>

                <span>Cisco Networking Academy</span>

                <p>Issued: March 2026</p>

                <button class="view-btn"
                    onclick="openCertificate('images/certificates/cisco.jpg')">
                    View Certificate
                </button>
            </div>
        </div>

        <!-- Certificate 3 -->
        <div class="certificate-card">
            <img src="images/certificates/freecodecamp.jpg" alt="FCC">

            <div class="certificate-info">
                <h3>Responsive Web Design</h3>

                <span>freeCodeCamp</span>

                <p>Issued: April 2026</p>

                <button class="view-btn"
                    onclick="openCertificate('images/certificates/freecodecamp.jpg')">
                    View Certificate
                </button>
            </div>
        </div>

    </div>

</section>

<!-- Modal -->
<div class="certificate-modal" id="certificateModal">

    <span class="close-modal">&times;</span>

    <img id="certificateImage">

</div>