<!DOCTYPE html>
<head>
    <title>About Us</title>
    <?php include 'menu.php'; ?> <!-- Including the navigation header from menu.php -->
    <link rel="stylesheet" href="style/home.css"> <!-- Including home.css for navigation styles -->
    <link rel="stylesheet" href="style/about.css"> <!-- Including cover.css for page-specific styles -->
</head>

<body>
     <section class="about-section">
        <div class="about-image">
            <img src="img/cover-img.jpg" alt="About Us Image">
        </div>
        <div class="about-content">
            <h2>About Us</h2>
            <p>BookLab is a cutting-edge online e-library and bookshop dedicated to providing a convenient and 
                comprehensive book purchasing experience.
            </p>
            <br><br>
            <p> Our platform offers a vast collection of books across a wide 
                range of genres, including fiction, non-fiction, academic, self-help, and more. Customers can find books 
                from popular authors and publishers as well as independent and self-published works, ensuring a diverse 
                selection to suit all reading preferences.
            </p>
        </div>
    </section>

    <section class="work-section">
        <div class="work-path">
            <br><br><br>
            <h1>Our Mission</h1>
        </div>
        <div class="work-info">
            <p>
                BookLab aims to inspire a love for reading by offering a diverse e-book selection, a user-friendly platform, and competitive pricing. We cater to readers, students, and professionals, with features like personalized accounts, wishlists, and secure purchases, while administrators ensure a smooth user experience.
            </p>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-path">
            <h1>Contact Us</h1>
        </div>

        <div class="contact-info">
            <p>
                If you have any questions, feedback, or concerns, please feel free to contact us. Our customer service team is available to assist you with any inquiries or issues you may have. You can reach us via email, phone, or our online contact form.
            </p>
        </div>

        <div class="contact-details">
            <p>
                Email: booklab@gmail.com <br>
                Phone: +230-59876543
            </p>
        </div>

            <!-- Contact Form -->
            <form class="contact-form" action="submit_contact.php" method="post" onsubmit="return validateForm()">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required minlength="2" maxlength="50" pattern="[A-Za-z\s]+" title="Please enter a valid name (letters and spaces only).">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address.">

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required minlength="10" maxlength="500" title="Message should be between 10 and 500 characters."></textarea>

                <button type="submit">Send Message</button>
            </form>

            <script>
            function validateForm() {
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const message = document.getElementById('message').value;

                // Name validation
                if (name.trim() === '') {
                    alert('Name is required.');
                    return false;
                }

                // Email validation
                const emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
                if (!emailPattern.test(email)) {
                    alert('Please enter a valid email address.');
                    return false;
                }

                // Message validation
                if (message.trim().length < 10) {
                    alert('Message must be at least 10 characters long.');
                    return false;
                }

                return true;
            }
            </script>

        </div>
    </section>
</body>
</html>

