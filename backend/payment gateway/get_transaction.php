<?php
session_start();
include './config.php';

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit();
}

// Retrieve user ID from session
$user_id = $_SESSION['id'];

// Fetch recent transactions
$sql_recent_transactions = "SELECT * FROM transactions WHERE user_id = $user_id ORDER BY timestamp DESC LIMIT 5";
$result_recent_transactions = $conn->query($sql_recent_transactions);

// Fetch transaction counts
$sql_successful_transactions = "SELECT COUNT(*) AS successful_count FROM transactions WHERE user_id = $user_id AND status = 'success'";
$sql_failed_transactions = "SELECT COUNT(*) AS failed_count FROM transactions WHERE user_id = $user_id AND status = 'failed'";

$result_successful_transactions = $conn->query($sql_successful_transactions);
$result_failed_transactions = $conn->query($sql_failed_transactions);

if ($result_recent_transactions === false || $result_successful_transactions === false || $result_failed_transactions === false) {
    echo json_encode(['error' => 'Error executing database query']);
    exit();
}

$recent_transactions = [];
while ($row = $result_recent_transactions->fetch_assoc()) {
    $recent_transactions[] = $row;
}

$successful_count = ($result_successful_transactions->num_rows > 0) ? $result_successful_transactions->fetch_assoc()['successful_count'] : 0;
$failed_count = ($result_failed_transactions->num_rows > 0) ? $result_failed_transactions->fetch_assoc()['failed_count'] : 0;

$total_count = $successful_count + $failed_count;

// Close database connection
$conn->close();

// Prepare JSON response
$response = [
    'recent_transactions' => $recent_transactions,
    'successful_transactions' => $successful_count,
    'failed_transactions' => $failed_count,
    'total_transactions' => $total_count
];

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
