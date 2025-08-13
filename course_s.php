<?php
// Include database connection
include 'db_connect.php';

// Get the selected branch and search query from the form
$selected_branch = isset($_GET['branch']) ? $_GET['branch'] : 'all';
$search_query = isset($_GET['search']) ? $_GET['search'] : '';

// Prepare the query
$query = "SELECT * FROM courses WHERE 1=1";

// Filter by branch
if ($selected_branch != 'all') {
    $query .= " AND branch = ?";
}

// Search functionality
if (!empty($search_query)) {
    $query .= " AND course_title LIKE ?";
}

// Prepare the statement
if ($stmt = $conn->prepare($query)) {
    // Bind parameters
    if ($selected_branch != 'all' && !empty($search_query)) {
        $like_search = "%" . $search_query . "%";
        $stmt->bind_param('ss', $selected_branch, $like_search);
    } elseif ($selected_branch != 'all') {
        $stmt->bind_param('s', $selected_branch);
    } elseif (!empty($search_query)) {
        $like_search = "%" . $search_query . "%";
        $stmt->bind_param('s', $like_search);
    }

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        header {
            text-align: center;
        }
        .filter-section {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .filter-section select, .filter-section input[type="text"] {
            width: 48%;
            padding: 10px;
            margin: 8px 1%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .filter-section button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .course-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .course {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        iframe {
            width: 100%;
            height: 200px;
        }
    </style>
</head>
<body>

<header>
    <h1>eBuddy - Course Library</h1>
</header>

<!-- Filter Section -->
<section class="filter-section">
    <form method="GET" action="">
        <select name="branch">
            <option value="all">All Branches</option>
            <option value="information-technology" <?php if ($selected_branch == 'information-technology') echo 'selected'; ?>>Information Technology</option>
            <option value="computer-engineering" <?php if ($selected_branch == 'computer-engineering') echo 'selected'; ?>>Computer Engineering</option>
            <option value="mechanical-engineering" <?php if ($selected_branch == 'mechanical-engineering') echo 'selected'; ?>>Mechanical Engineering</option>
            <option value="electrical-engineering" <?php if ($selected_branch == 'electrical-engineering') echo 'selected'; ?>>Electrical Engineering</option>
        </select>

        <input type="text" name="search" placeholder="Search Course" value="<?php echo htmlspecialchars($search_query); ?>">

        <button type="submit">Apply Filters</button>
    </form>
</section>

<!-- Course List -->
<section class="course-list">
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="course">
            <h3><?php echo $row['course_title']; ?></h3>
            <iframe src="https://www.youtube.com/embed/<?php echo substr($row['youtube_url'], strrpos($row['youtube_url'], '/') + 1); ?>" allowfullscreen></iframe>
        </div>
    <?php endwhile; ?>
</section>

</body>
</html>

<?php
// Close the statement and connection
$stmt->close();
$conn->close();
?>
