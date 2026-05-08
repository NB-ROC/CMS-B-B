<div> 
<?php
// Later kun je deze arrays vervangen door data uit de database.
$boekingen = [
    ['id' => '#10956', 'datum' => '17-06-2026', 'reis' => 'Stedenreis Parijs', 'klant' => 'Sarah Janssen', 'bedrag' => '€ 850', 'status' => 'Nieuw'],
    ['id' => '#10843', 'datum' => '18-06-2026', 'reis' => 'Strandvakantie Bali', 'klant' => 'Mark de Vries', 'bedrag' => '€ 1200', 'status' => 'In afwachting'],
    ['id' => '#10932', 'datum' => '24-06-2026', 'reis' => 'Avontuur in IJsland', 'klant' => 'Linda Smit', 'bedrag' => '€ 1500', 'status' => 'Bevestigd'],
    ['id' => '#10909', 'datum' => '19-06-2026', 'reis' => 'Vakantie Dubrovnik', 'klant' => 'Sophie Kuipers', 'bedrag' => '€ 1100', 'status' => 'Geannuleerd'],
];

$berichten = [
    ['naam' => 'Anna Peeters', 'email' => 'anna@mail.com', 'onderwerp' => 'Vraag over Bali', 'bericht' => 'Is deze reis nog beschikbaar?'],
    ['naam' => 'Tom Willems', 'email' => 'tom@mail.com', 'onderwerp' => 'Betaling', 'bericht' => 'Kan ik ook later betalen?'],
];

$paginas = [
    ['pagina' => 'Home', 'tekst' => 'Welkom op onze reiswebsite', 'image' => 'home.jpg'],
    ['pagina' => 'Kamers', 'tekst' => 'Bekijk onze mooiste kamers', 'image' => 'kamers.jpg'],
    ['pagina' => 'Galerij', 'tekst' => 'Foto’s van bestemmingen', 'image' => 'galerij.jpg'],
];
?>

<div class="admin-page">
    <aside class="admin-sidebar">
        <h2>Admin</h2>

        <button class="admin-link active" onclick="showSection('reserveren', this)">Reserveren</button>
        <button class="admin-link" onclick="showSection('contact', this)">Contact berichten</button>
        <button class="admin-link" onclick="showSection('website', this)">Website opstellen</button>

        <div class="sidebar-bottom">
            <a href="index.php">Home</a>
            <a href="logout.php">Log out</a>
        </div>
    </aside>

    <main class="admin-content">
        <div class="admin-top">
            <h1>dashboard</h1>
            <input type="text" placeholder="Zoeken..." class="search-input">
            <div class="profile-circle"></div>
        </div>

        <section id="reserveren" class="admin-section active">
            <div class="cards">
                <div class="card light">Nieuwe<br>boekingen</div>
                <div class="card pink">In afwachting</div>
                <div class="card light">Bevestigd</div>
                <div class="card blue">Geannuleerd</div>
            </div>

            <h2>Alle boekingen</h2>

            <table>
                <thead>
                    <tr>
                        <th>Boeking ID</th>
                        <th>Datum</th>
                        <th>Reis</th>
                        <th>Klant</th>
                        <th>Bedrag</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($boekingen as $boeking): ?>
                        <tr>
                            <td><?= htmlspecialchars($boeking['id']) ?></td>
                            <td><?= htmlspecialchars($boeking['datum']) ?></td>
                            <td><?= htmlspecialchars($boeking['reis']) ?></td>
                            <td><?= htmlspecialchars($boeking['klant']) ?></td>
                            <td><?= htmlspecialchars($boeking['bedrag']) ?></td>
                            <td>
                                <span class="status">
                                    <?= htmlspecialchars($boeking['status']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section id="contact" class="admin-section">
            <h2>Contact berichten</h2>

            <table>
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Onderwerp</th>
                        <th>Bericht</th>
                        <th>Actie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($berichten as $bericht): ?>
                        <tr>
                            <td><?= htmlspecialchars($bericht['naam']) ?></td>
                            <td><?= htmlspecialchars($bericht['email']) ?></td>
                            <td><?= htmlspecialchars($bericht['onderwerp']) ?></td>
                            <td><?= htmlspecialchars($bericht['bericht']) ?></td>
                            <td><button class="delete-btn">Verwijderen</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section id="website" class="admin-section">
            <h2>Website opstellen</h2>
            <p>Hier kan de admin tekst en afbeeldingen van pagina’s aanpassen.</p>

            <?php foreach ($paginas as $pagina): ?>
                <form class="edit-box">
                    <h3><?= htmlspecialchars($pagina['pagina']) ?></h3>

                    <label>Tekst aanpassen</label>
                    <textarea><?= htmlspecialchars($pagina['tekst']) ?></textarea>

                    <label>Afbeelding</label>
                    <input type="file">

                    <div class="form-buttons">
                        <button type="button">Opslaan</button>
                        <button type="button" class="delete-btn">Verwijderen</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </section>
    </main>
</div>

<script>
function showSection(sectionId, button) {
    document.querySelectorAll('.admin-section').forEach(section => {
        section.classList.remove('active');
    });

    document.querySelectorAll('.admin-link').forEach(link => {
        link.classList.remove('active');
    });

    document.getElementById(sectionId).classList.add('active');
    button.classList.add('active');
}
</script>


</div>