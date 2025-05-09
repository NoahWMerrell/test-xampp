<?php
// Load HTML template as a string
$template = file_get_contents('template.html');

// Connect to database
$pdo = new PDO("mysql:host=127.0.0.1;dbname=test;charset=utf8mb4", 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// Get search term
$search = isset($_GET['search']) ? $_GET['search'] : '';
$search_html = htmlspecialchars($search);

// Fetch messages
if ($search) {
    $stmt = $pdo->prepare('SELECT text FROM message WHERE text LIKE :search ORDER BY text ASC');
    $stmt->execute(['search' => "%$search%"]);
} else {
    $stmt = $pdo->query('SELECT text FROM message ORDER BY text ASC');
}

$messages = $stmt->fetchAll();

// Build message list HTML
$messageListHtml = "<ul>";
foreach ($messages as $msg) {
    $messageListHtml .= "<li>" . htmlspecialchars($msg['text']) . "</li>";
}
$messageListHtml .= "</ul>";

// Inject values into HTML template
$output = str_replace(
    ['[[search_value]]', '[[message_list]]'],
    [$search_html, $messageListHtml],
    $template
);

// Output final HTML
echo $output;