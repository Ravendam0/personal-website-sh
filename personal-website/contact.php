<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Me | Get in Touch</title>
    <meta name="description"
        content="Contact Harrison for professional inquiries, project collaborations, or web development consultations.">
    <meta name="keywords" content="contact form, email, phone, web consultant, collaboration, inquiry">
    <meta name="author" content="Harrison">
    <link rel="shortcut icon" href="https://royaltech254.co.ke/img/logo.png" type="image/x-icon">
  <link rel="icon" href="https://royaltech254.co.ke/img/logo.png" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="https://royaltech254.co.ke/img/logo.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="https://royaltech254.co.ke/img/logo.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="https://royaltech254.co.ke/img/logo.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="https://royaltech254.co.ke/img/logo.png">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>My Website</h1>

        <nav>
            <ul>
                <li><a href="index">Homepage</a></li>
                <li><a href="projects">Projects</a></li>
                <li><a href="articles">Articles</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="contact-form-section">
            <h2>Get in Touch</h2>
            <p>Fill out the form below to send me a message directly.</p>

            <form action="codes/codes.php" method="POST" id="contactForm">

                <fieldset>
                    <legend>Your Contact Details</legend>
                    <div>
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject">
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Your Message</legend>
                    <div>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                </fieldset>

                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </section>
        <!-- Toast Notification -->
        <div id="toast" class="toast"></div>
        <style>
            .toast {
                position: fixed;
                bottom: -80px;
                left: 50%;
                transform: translateX(-50%);
                min-width: 280px;
                padding: 16px 22px;
                background: rgba(0, 0, 0, 0.85);
                color: #fff;
                text-align: center;
                border-radius: 14px;
                font-size: 15px;
                letter-spacing: 0.5px;
                z-index: 9999;
                opacity: 0;
                transition: all 0.5s ease;
                box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
            }

            .toast.show {
                bottom: 50px;
                opacity: 1;
                animation: glowPulse 1.5s infinite alternate;
            }

            @keyframes glowPulse {
                0% {
                    box-shadow: 0 0 10px rgba(0, 255, 255, 0.4), 0 0 20px rgba(0, 255, 255, 0.2);
                }

                100% {
                    box-shadow: 0 0 20px rgba(0, 255, 255, 0.8), 0 0 30px rgba(0, 255, 255, 0.4);
                }
            }
        </style>

        <section id="other-contact">
            <h3>Other Ways to Connect</h3>
            <address>
                <p>Email: <a href="mailto:care@royaltech254.co.ke">care@royaltech254.co.ke</a></p>
                <p>Github: <a href="#" target="_blank">https://github.com/Ravendam0</a></p>
            </address>
        </section>
    </main>
    <script>
        document.querySelector("#contactForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);
            const submitBtn = form.querySelector(".btn-submit");

            submitBtn.disabled = true;
            submitBtn.innerHTML = "TRANSMITTING...";
            submitBtn.style.background = "linear-gradient(45deg, #8000ff, #00ffff)";

            fetch("codes/codes.php", {
                method: "POST",
                body: formData
            })
                .then(res => res.text())
                .then(data => {
                    console.log("SERVER RESPONSE:", data);

                    const response = data.toLowerCase();

                    if (response.includes("success")) {
                        showToast("✅ Message sent successfully!", "success");
                        submitBtn.innerHTML = "TRANSMISSION COMPLETE";
                        form.reset();
                    } else if (response.includes("error")) {
                        showToast("❌ Server error. Try again.", "error");
                    } else {
                        showToast("⚠️ Unexpected response. Check logs.", "error");
                    }
                })
                .catch(err => {
                    showToast("⚠️ Network Error: " + err, "error");
                });


        });

        function showToast(message, type) {
            const toast = document.getElementById("toast");
            toast.textContent = message;

            if (type === "success") {
                toast.style.boxShadow = "0 0 20px #00ffcc, 0 0 40px #00ffcc";
            } else {
                toast.style.boxShadow = "0 0 20px #ff0033, 0 0 40px #ff6600";
            }

            toast.className = "toast show";

            setTimeout(() => {
                toast.className = "toast";
            }, 4000);
        }
    </script>

    <footer>
        <p>&copy;
            <span id="year">Loading...</span>/
            <span id="nextYear">Laoding...</span>

            My Professional Portfolio. All rights reserved.
        </p>
    </footer>
    <script src="https://script.royaltech254.co.ke/main.js"></script>
</body>

</html>