<?php
include 'db.php';

$searchResults = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search = "%".trim($_POST['search'])."%";
    
    $stmt = $pdo->prepare("SELECT * FROM books WHERE title LIKE ? OR author LIKE ?");
    $stmt->execute([$search, $search]);
    
    $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!-- Search Form -->
<form method="POST">
    <input type="text" name="search" placeholder="Search by title or author" required>
    <button type="submit">Search</button>
</form>

<!-- Display Results -->
<?php if (!empty($searchResults)): ?>
    <h3>Search Results:</h3>
    <ul>
        <?php foreach ($searchResults as $book) : ?>
            <li><strong><?= $book['title']; ?></strong> by <?= $book['author']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo "<p>No results found.</p>"; ?>
<?php endif; ?>
