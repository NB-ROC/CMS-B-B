<?php
use App\Controller\GeneralController;
?>

<section style="width:100%; padding:70px 20px; background:#eeeeee; box-sizing:border-box;">
    <div style="max-width:1150px; margin:0 auto; background:#ffffff; display:grid; grid-template-columns:360px 1fr; gap:40px; padding:45px; box-sizing:border-box;">

        <div style="display:flex; flex-direction:column; justify-content:center;">
            <img src="images/imagelogofavicon.png" alt="Calm Corner" style="width:220px; max-width:100%; height:auto; margin-bottom:25px;">

            <h2 style="font-size:36px; line-height:1.1; color:#111111; margin:0 0 12px 0;">Recensies</h2>

            <div style="display:flex; align-items:center; gap:10px; margin-bottom:18px;">
                <strong style="font-size:20px; color:#111111;">4.5</strong>
                <span style="color:#f4c400; font-size:22px; letter-spacing:2px;">★★★★★</span>
            </div>

            <p style="font-size:16px; color:#555555; line-height:1.5; margin:0;">
                Laat weten hoe u uw verblijf heeft ervaren.
            </p>
        </div>

        <div style="background:#f7f7f7; padding:35px; border-radius:6px;">
            <h2 style="font-size:30px; color:#c40000; margin:0 0 25px 0;">Review plaatsen</h2>

            <?php
            echo ("<form method='POST' action='" . GeneralController::linkToAction('review') . "' style='display:flex; flex-direction:column; width:100%;'>");
            ?>

                <label for="name" style="display:block; font-size:15px; color:#111111; font-weight:600; margin:0 0 7px 0;">Uw naam</label>
                <input type="text" id="name" name="name" placeholder="Uw naam" required
                       style="width:100%; box-sizing:border-box; padding:14px 15px; margin:0 0 18px 0; border:1px solid #d5d5d5; background:#ffffff; color:#333333; font-size:15px;">

                <label for="message" style="display:block; font-size:15px; color:#111111; font-weight:600; margin:0 0 7px 0;">Uw bericht</label>
                <textarea id="message" name="message" placeholder="Uw bericht" rows="6" required
                          style="width:100%; box-sizing:border-box; padding:14px 15px; margin:0 0 18px 0; border:1px solid #d5d5d5; background:#ffffff; color:#333333; font-size:15px; min-height:135px; resize:vertical;"></textarea>

                <label style="display:block; font-size:15px; color:#111111; font-weight:600; margin:0 0 7px 0;">Beoordeling</label>

                <div style="display:flex; gap:6px; margin:0 0 22px 0;">
                    <label style="font-size:34px; color:#f4c400; cursor:pointer;">
                        <input type="radio" name="rating" value="1" required style="margin-right:4px;">★
                    </label>

                    <label style="font-size:34px; color:#f4c400; cursor:pointer;">
                        <input type="radio" name="rating" value="2" style="margin-right:4px;">★
                    </label>

                    <label style="font-size:34px; color:#f4c400; cursor:pointer;">
                        <input type="radio" name="rating" value="3" style="margin-right:4px;">★
                    </label>

                    <label style="font-size:34px; color:#f4c400; cursor:pointer;">
                        <input type="radio" name="rating" value="4" style="margin-right:4px;">★
                    </label>

                    <label style="font-size:34px; color:#f4c400; cursor:pointer;">
                        <input type="radio" name="rating" value="5" style="margin-right:4px;">★
                    </label>
                </div>

                <button type="submit"
                        style="width:100%; padding:15px 20px; background:#8f8a5f; color:#ffffff; border:none; font-size:16px; font-weight:600; cursor:pointer;">
                    Versturen
                </button>

            </form>
        </div>

    </div>
</section>