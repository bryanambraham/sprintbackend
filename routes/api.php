<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Database connection
$host = '127.0.0.1';
$db   = 'sprintbackend';
$user = 'root';
$charset = 'utf8mb4_general_ci';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $options);

    // Get parameters
    $method = $_GET['method'] ?? '';
    $destination = $_GET['destination'] ?? '';

    // Select table based on shipping method
    $table = '';
    switch($method) {
        case 'DARAT':
            $table = 'cargodarat';
            break;
        case 'LAUT':
            $table = 'cargolaut';
            break;
        case 'UDARA':
            $table = 'cargoudara';
            break;
        case 'MOBIL':
            $table = 'cargomobil';
            break;
        default:
            throw new Exception('Invalid shipping method');
    }

    // Prepare and execute query
    $query = "SELECT * FROM $table WHERE destination LIKE :destination";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['destination' => "%$destination%"]);
    $results = $stmt->fetchAll();

    echo json_encode([
        'success' => true,
        'data' => $results
    ]);

} catch (\PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Database error: ' . $e->getMessage()
    ]);
} catch (\Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>
