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
        <div class="reservering-booking-section">
            <!-- action="php/reservering" -->
            <form id="bookingFrom">
                <!-- Checkin CheckOut section -->
                <div class="reservering-date-container">
                    <div class="reservering-input-check-in-date">
                        <label class="reservering-date-text">Check in</label>
                        <input id="checkIn" type="date" id="checkInDate" class="reservering-date-input" name="checkIn" value="<?php echo $today; ?>">
                    </div>

                    <div class="reservering-input-check-out-date">
                        <label class="reservering-date-text">Check Out</label>
                        <input id="checkOut" type="date" class="reservering-date-input" name="checkOut">
                    </div>
                </div>
                <!-- Total person section -->
                <div class="total-persons-container">
                    <label for="totalPersons">Totaal personen -Max person: 4</label>
                    <input id="totalPersons" value="1" type="number" min="1" step="1" max="4" name="persons">
                </div>

                <!-- Submit button -->
            </form>
            <button class="booking-button" onclick="ValidateCheckOutDate()">Boek nu</button>
        </div>

    </div>
</div>

<script>
    function ValidateCheckOutDate(){
        let today = new Date();
        let totalPersons = document.getElementById("totalPersons").value;
        let checkOut = new Date(document.getElementById("checkOut").value);
        let checkIn = new Date(document.getElementById("checkIn").value);

        if(isNaN(checkOut) || isNaN(checkIn) || totalPersons <= 0)
        {
            alert("Values cannot be empty")
            return null;
        }
        if(checkOut.toDateString() === new Date().toDateString())
        {
            alert("Check out date cannot be the same")
            return null;
        }
        if(checkOut.toDateString() === checkIn.toDateString())
        {
            alert("Check out and check in date cannot be today")
            return null;
        }
        if(checkIn > checkOut)
        {
            alert("Check out cant be before check in date")
            return null;
        }
        if(checkIn.setHours(0, 0, 0, 0) < today.setHours(0, 0, 0, 0))
        {
            alert("Check in date cannot be in the past")
            return null;
        }
        if(totalPersons > 4)
        {
            alert("The total persons cannot be higher than 4")
            return null;
        }

        const form = document.getElementById("bookingFrom");
        fetch("php/reservering.php", {
            method: "POST",
            body: new URLSearchParams(new FormData(form))
        })
        .then(res => res.text())
        .then(data => console.log(data));
    }
</script>