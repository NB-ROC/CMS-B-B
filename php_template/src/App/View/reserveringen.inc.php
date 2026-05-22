<!-- Get todays date -->
<?php 
    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
?>

<!-- Main -->
<div class="mx-auto my-5 flex w-[85%] flex-col rounded-[10px] bg-white px-[35px] pt-[15px] pb-[20px] shadow-md">
    
    <!-- Room name -->
    <h2>Lorum ipsum</h2>

    <img src="images/luxeSuit.png" alt="Room-image" class="aspect-[4/1] w-full rounded-[10px] object-cover">

    <div class="mt-[25px] flex w-full flex-row justify-between">
        
        <!-- Info section -->
        <div class="flex w-[47%] flex-col gap-5">
            
            <!-- Extra info -->
            <ul class="flex flex-row flex-wrap gap-[10px] text-[#6c6c6c]">
                <li>4 gasten</li>
                <li>2 kamer</li>
                <li>2 bedden</li>
                <li>1 badkamer</li>
            </ul>

            <!-- Description -->
            <div class="h-[180px] w-[125%] scale-x-[-1] overflow-y-scroll pr-[10px] box-border">
                <p class="scale-x-[-1]">
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

        <!-- Booking section -->
        <div class="flex flex-col gap-[10px] rounded-[15px] bg-white p-[15px] shadow-md">

            <form id="bookingFrom" class="flex flex-col gap-4 text-1000">

                <!-- Checkin / Checkout -->
                <div class="flex flex-row gap-0">

                    <!-- Check in -->
                    <div class="flex flex-col rounded-l-[15px] border border-[#6c6c6c] pt-[5px] pr-[5px] pb-[5px] pl-[15px]">
                        <label class="text-[0.8rem] font-bold">
                            Check in
                        </label>

                        <input id="checkIn" type="date" name="checkIn" value="<?php echo $today; ?>" class="focus:outline-none">
                    </div>

                    <!-- Check out -->
                    <div class="flex flex-col rounded-r-[15px] border border-l-0 border-[#6c6c6c] pt-[5px] pr-[5px] pb-[5px] pl-[15px]">
                        <label class="text-[0.8rem] font-bold">
                            Check Out
                        </label>

                        <input id="checkOut" type="date" name="checkOut" class="focus:outline-none">
                    </div>
                </div>

                <!-- Total persons -->
                <div class="flex flex-col rounded-[15px] border border-[#6c6c6c] px-[15px] py-[5px]">
                    
                    <label for="totalPersons" class="text-[0.8rem] font-bold">
                        Totaal personen - Max person: 4
                    </label>

                    <input id="totalPersons" value="1" type="number" min="1" step="1" max="4" name="persons" class="focus:outline-none">
                </div>
            </form>

            <!-- Button -->
            <button class="rounded-[15px] bg-[#ff5656] p-[5px] text-[1.5rem] font-bold text-white hover:bg-[#ec4949]"onclick="ValidateCheckOutDate()">
                Boek nu
            </button>
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