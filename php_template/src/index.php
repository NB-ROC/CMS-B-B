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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" sizes="128x128" href="images/imagelogofavicon.png"></head>
</head>
<body>
    <header class="header">
        <div class="logo">
        <img src="images/imagegroot.png" alt="Calm Corner hotel">    
        </div>

        <nav>
            <a href="index.html">Home</a>
            <a href="kamers.html">Kamers</a>
            <a href="galerij.html">Galerij</a>
            <a href="resevering.html">Reserveren</a>
            <a href="contact.html">Contact</a>
            <a href="login.html">Login</a>
        </nav>
    </header>

    <main>
        <div class="head-section">
            <h2 class="head-section-header-text">Welkom bij Calm Corner</h2>
            <p class="head-section-text">
                Ontspan in onze rustieke Bed & Breakfast in het hart van de Nederlandse natuur
            </p>
            <div class="head-section-button-container">
                <button class="button-red">Nu reserveren</button>
                <button class="button-white">Meer informatie</button>
            </div>
        </div>
        <div class="faciliteiten-section">
            <h2 class="head-section-header-text">Faciliteiten</h2>
            <div class="faciliteiten-info-container-row">
                <div class="faciliteiten-info-container-column">
                    <div class="faciliteiten-info-box-container">
                        <img class="faciliteiten-icon" src="images/wifi.png" alt="wifi">
                        <h3>Gratis wifi</h3>
                        <p>Snel internet overal</p>
                    </div>

                    <div class="faciliteiten-info-box-container">
                        <img class="faciliteiten-icon" src="images/P.png" alt="wifi">
                        <h3>Gratis parkeerplaats</h3>
                        <p>Privé parkeerplaats</p>
                    </div>

                    <div class="faciliteiten-info-box-container">
                        <img class="faciliteiten-icon" src="images/location.png" alt="wifi">
                        <h3>Centrale locatie</h3>
                        <p>Nabij attracties</p>
                    </div>
                </div>

                <div class="faciliteiten-info-container-column">
                    <div class="faciliteiten-info-box-container">
                        <img class="faciliteiten-icon" src="images/cofee.png" alt="wifi">
                        <h3>Ontbijt inbegrepen</h3>
                        <p>Vers en lokaal</p>
                    </div>

                    <div class="faciliteiten-info-box-container">
                        <img class="faciliteiten-icon" src="images/shield.png" alt="wifi">
                        <h3>24/7 Veiligheid</h3>
                        <p>Beveiligde omgeving</p>
                    </div>

                    <div class="faciliteiten-info-box-container">
                        <img class="faciliteiten-icon" src="images/star.png" alt="wifi">
                        <h3>5-Sterren Service</h3>
                        <p>Uitstekende reviews</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="room-section">
            <h2 class="head-section-header-text">Onze kamers</h2>
            <div class="room-image-row-container">
                <div class="room-image-container bedroom">
                    <p>Comfort kamer</p>
                </div>

                <div class="room-image-container luxe-suite">
                    <p>Luxe suite</p>
                </div>

                <div class="room-image-container kitchen">
                    <p>Ontbijt ruimte</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
    </footer>
    
    <script type="module" src="scripts/main.js"></script>


</body>
</html>