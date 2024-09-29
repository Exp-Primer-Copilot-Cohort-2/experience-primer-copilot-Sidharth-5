<!DOCTYPE html>
<head>
    <title>Review and Rating</title>
    <link rel="stylesheet" href="style/home.css">
    <link rel="stylesheet" href="style/review.css"> <!-- Include your specific CSS for the review page -->
</head>
<body>
    <?php include 'menu.php'; ?> <!-- Including the navigation header -->

    <section class="review-section">
      
        <h1>Customer Reviews</h1>

        <!-- Review Form -->
        <div class="review-form-container">
            <h2>Leave a Review</h2>
            <form action="submit_review.php" method="post" class="review-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required minlength="2" maxlength="50">

                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="" disabled selected>Select a rating</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>

                <label for="review">Review:</label>
                <textarea id="review" name="review" rows="5" required minlength="10" maxlength="500"></textarea>

                <button type="submit">Submit Review</button>
            </form>
        </div>

        <!-- Displaying Reviews -->
        <div class="existing-reviews">
           
      
        </div>


    </section>
</body>
</html>
