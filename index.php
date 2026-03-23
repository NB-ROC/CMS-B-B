<?php
// Wait for database to be ready (max 30 seconds)
$wait = 30;
$db_host = 'db';
$db_name = getenv('DB_DATABASE');
$db_user = getenv('DB_USERNAME');
$db_pass = getenv('DB_PASSWORD');

$start = time();
$connected = false;

while (time() - $start < $wait && !$connected) {
    try {
        $pdo = new PDO(
            "mysql:host=$db_host;dbname=$db_name",
            $db_user,
            $db_pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_TIMEOUT => 5
            ]
        );

        $connected = true;
        echo "<h2>Database connection successful!</h2>";

        // Test query
        $stmt = $pdo->query("SELECT VERSION()");
        $version = $stmt->fetchColumn();
        echo "<p>MySQL version: $version</p>";

        // Show users (for debugging)
        $users = $pdo->query("SELECT user, host FROM mysql.user")->fetchAll();
        echo "<pre>MySQL Users:\n" . print_r($users, true) . "</pre>";
    } catch (PDOException $e) {
        if (time() - $start >= $wait) {
            echo "<h2>Database connection failed after $wait seconds</h2>";
            echo "<p>Error: " . $e->getMessage() . "</p>";
            echo "<pre>Debug Info:\n";
            echo "Host: $db_host\n";
            echo "DB: $db_name\n";
            echo "User: $db_user\n";

            // Network check
            echo "\nNetwork check:\n";
            echo "</pre>";
        }
        sleep(2);
    }
}