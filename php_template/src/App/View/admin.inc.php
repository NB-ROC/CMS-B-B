

<div class="admin-layout">
    <aside class="admin-menu">
        <button class="admin-btn active" onclick="showAdminSection('bookingen', this)">Admin</button>
        <button class="admin-btn" onclick="showAdminSection('contact', this)">Contact berichten</button>
        <button class="admin-btn" onclick="showAdminSection('website', this)">Website opstellen</button>

        <div class="admin-menu-bottom">
            <a href="index.php">Home</a>
            <a href="logout.php">Log out</a>
        </div>
    </aside>

    <main class="admin-results">
        <section id="bookingen" class="admin-section active">
            <h1>Alle boekingen</h1>

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
                    <tr>
                        <td>#10956</td>
                        <td>17-06-2026</td>
                        <td>Stedenreis Parijs</td>
                        <td>Sarah Janssen</td>
                        <td>€ 850</td>
                        <td>Nieuw</td>
                    </tr>
                    <tr>
                        <td>#10843</td>
                        <td>18-06-2026</td>
                        <td>Strandvakantie Bali</td>
                        <td>Mark de Vries</td>
                        <td>€ 1200</td>
                        <td>In afwachting</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="contact" class="admin-section">
            <h1>Contact berichten</h1>

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
                    <tr>
                        <td>Anna Peeters</td>
                        <td>anna@mail.com</td>
                        <td>Vraag over Bali</td>
                        <td>Is deze reis nog beschikbaar?</td>
                        <td><button class="delete-btn">Verwijderen</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="website" class="admin-section">
            <h1>Website opstellen</h1>

            <div class="edit-card">
                <h3>Home pagina</h3>
                <label>Tekst</label>
                <textarea>Welkom op onze website</textarea>

                <label>Afbeelding</label>
                <input type="file">

                <button class="save-btn">Opslaan</button>
            </div>
        </section>

    </main>
</div>

<script>
    function showAdminSection(id, btn) {
        document.querySelectorAll('.admin-section').forEach(section => {
            section.classList.remove('active');
        });

        document.querySelectorAll('.admin-btn').forEach(button => {
            button.classList.remove('active');
        });

        document.getElementById(id).classList.add('active');
        btn.classList.add('active');
    }
</script>