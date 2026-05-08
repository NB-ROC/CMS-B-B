<?php
use App\Controller\GeneralController;
?>

<section class="review-section">

    <div class="review-container">

        <div class="review-info">

            <img src="/images/imagelogofavicon.png" alt="Calm Corner" class="review-logo">

            <h2>Recensies</h2>

            <div class="review-score">
                <strong>4.5</strong>
                <span>★★★★★</span>
            </div>

            <p>
                Laat weten hoe u uw verblijf heeft ervaren.
            </p>

        </div>

        <div class="review-form">

            <h2>Review plaatsen</h2>

            <?php
            echo ("<form method='POST' action='" . GeneralController::linkToAction('review') . "'>");
            ?>

            <label for="name">Uw naam</label>

            <input type="text" id="name" name="name" placeholder="Uw naam" required>

            <label for="message">Uw bericht</label>

            <textarea id="message" name="message" placeholder="Uw bericht" rows="6" required></textarea>

            <label>Beoordeling</label>

            <div class="review-stars">
                <?php
                for ($i = 1; $i < 6; $i++) {
                    if ($i == 0) {
                        echo "<label><input type='radio' name='rating' value='$i' required>★</label>";
                    } else {
                        echo "<label><input type='radio' name='rating' value='$i'>★</label>";
                    }
                }
                ?>

            </div>

            <button type="submit">
                Versturen
            </button>

            </form>

        </div>

    </div>

</section>