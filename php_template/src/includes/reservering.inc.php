<!-- Get todays date -->
<?php 
    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
?>

<!-- Main -->
<div class="reservering-column-container">
    <!-- Room name -->
    <h2>Lorum ipsum</h2>
    
    <img src="images/luxeSuit.png" alt="Room-image">

    <div class="reservering-row-container">
        <div class="reservering-info-column-section">
            <!-- Extra info section -->
            <ul class="reservering-extra-info-container">
                <li>4 gasten</li>
                <li>2 kamer</li>
                <li>2 bedden</li>
                <li>1 badkamer</li>
            </ul>

            <!-- Room description -->
            <div class="reservering-description">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>

        <!-- Reservering section -->
        <form action="php/reservering" method="post" class="reservering-booking-section">
            <!-- Checkin CheckOut section -->
            <div class="reservering-date-container">
                <div class="reservering-input-check-in-date">
                    <label class="reservering-date-text">Check in</label>
                    <input type="date" id="checkInDate" class="reservering-date-input" name="checkIn" value="<?php echo $today; ?>">
                </div>

                <div class="reservering-input-check-out-date">
                    <label class="reservering-date-text">Check Out</label>
                    <input type="date" class="reservering-date-input" name="checkOut">
                </div>
            </div>
            <!-- Total person section -->
            <div class="total-persons-container">
                <label for="totalPersons">Totaal personen -Max person: 4</label>
                <input id="totalPersons" value="1" type="number" min="1" step="1" max="4" name="persons">
            </div>

            <!-- Submit button -->
            <input class="booking-button" type="submit" value="Boek nu">
        </form>
    </div>
</div>