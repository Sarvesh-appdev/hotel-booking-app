    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="styles.css">
      <body>
    <?php include("../templates/header.php");  ?>
    <div class="search-form container mt-5">
            <h1 class="title">Welcome to the Hotel Booking System</h1>
            <p>Find the best rooms at the best prices.</p>
            <form action="../includes/fileHandler.php" method="GET">
             <label for="roomType">Enter Room Type:</label>
             <input type="text" name="roomType" id="roomType"  placeholder="Single, Double, Suite" required>
             <button type="submit">Search</button>
        </form>
        </div>
      <?php include("../templates/footer.php"); ?>

    </body>
    </html>

