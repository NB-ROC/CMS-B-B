<section class="contact-section">
    <div class="contact-container">
        <div class="contact-info">
            <h2>NEEM CONTACT OP</h2>
            <p><strong>Telefoon:</strong> +31 6 12345678</p>
            <p><strong>Email:</strong> info@calmcorner.nl</p>
            <p><strong>Adres:</strong> Straatnaam 1, Nijmegen</p>
        </div>

        <div class="contact-form">
            <h2>Laten we contact maken</h2>

            <form method="POST" action="php/contact.php">

                <label for="name">Uw naam</label>
                <input type="text" id="name" name="name" placeholder="Uw naam" required>

                <label for="email">E-mailadres</label>
                <input type="email" id="email" name="email" placeholder="E-mailadres" required>

                <label for="phone">Telefoonnummer</label>
                <input type="tel" id="phone" name="phone" placeholder="Telefoonnummer">

                <label for="message">Uw bericht</label>
                <textarea id="message" name="message" placeholder="Uw bericht" rows="6" required></textarea>

                <button type="submit">Bericht verzenden</button>

            </form>
        </div>
    </div>
</section>