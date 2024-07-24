<?php
// Example database connection (adjust credentials and database settings as needed)
$host = "localhost";
$db = "your_database";
$user = "your_username";
$pass = "your_password";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle AJAX request to load categories
if (isset($_POST['action']) && $_POST['action'] == 'getCategories') {
    $result = $conn->query("SELECT id, name FROM categories");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='category-row'>";
            echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
            echo "<div class='movies' id='cat-" . $row['id'] . "'>";
            // Optionally load some initial movies or placeholders
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No categories found.</p>";
    }
    exit;
}

// Main HTML structure
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Netflix-Style Movies Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: white;
        }

        .container {
            width: 95%;
            max-width: 1200px;
            margin: auto;
        }

        .category-row {
            margin-bottom: 20px;
        }

        .movie-card {
            background-color: #333;
            color: #fff;
            padding: 10px;
            margin-right: 10px;
            flex: 0 0 20%;
            box-shadow: 0 2px 8px rgba(0,0,0,0.8);
            border-radius: 5px;
        }

        .movie-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        @media screen and (max-width: 600px) {
            .movie-card {
                flex: 0 0 50%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="category-container">
            <!-- Categories will be dynamically loaded here -->
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        loadCategories();
    });

    function loadCategories() {
        $.ajax({
            url: 'moviesnew.php', // AJAX calls this same page
            method: 'POST',
            data: { action: 'getCategories' },
            success: function(response) {
                $('#category-container').html(response);
            },
            error: function() {
                console.error("Failed to fetch categories.");
            }
        });
    }
    </script>
</body>
</html>
