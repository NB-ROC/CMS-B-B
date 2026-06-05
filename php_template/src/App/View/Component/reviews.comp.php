<?php
use App\Statics\Route;
?>

<section class="bg-gray-200 p-10">
    <div class="bg-white w-[80%] mx-auto p-[30px] flex gap-10">

        <!-- LEFT SIDE -->
        <div class="w-1/2">

            <img src="/images/imagelogofavicon.png" alt="Calm Corner" class="w-[250px] mb-5">

            <h2 class="text-[30px] text-[#c40000] mb-4">
                Recensies
            </h2>

            <div class="mb-4">
                <strong class="text-[#c40000] text-2xl">4/5</strong>
                <span class="text-yellow-500 text-xl ml-2">★★★★</span>
            </div>

            <p class="text-gray-700">
                Laat weten hoe u uw verblijf heeft ervaren.
            </p>

        </div>

        <!-- RIGHT SIDE (FORM) -->
        <div class="w-1/2">

            <h2 class="text-[#c40000] text-[24px] mb-[25px]">
                Review plaatsen
            </h2>

            <form method="POST" action="<?= Route::linkToAction('review') ?>" class="flex flex-col">

                <label class="mb-1">Uw naam</label>
                <input type="text" name="name" placeholder="Uw naam" required
                    class="text-black w-[300px] p-[10px] mb-[18px] border border-gray-300 bg-gray-50 text-[15px]">

                <label class="mb-1">Uw bericht</label>
                <textarea name="message" rows="6" placeholder="Uw bericht" required
                    class="text-black w-[300px] p-[10px] mb-[18px] border border-gray-300 bg-gray-50 text-[15px]"></textarea>

                <label class="mb-2">Beoordeling</label>

                <h4 class="text-black font-bold">Beoordeel je verblijf</h4>

                <div class="flex w-[40%] justify-between">
                    <span class="flex gap-2 mb-5 text-yellow-500">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            echo '<label onClick="getValue(' . $i . ')" class="cursor-pointer"> <input type="radio" name="rating" value=' . $i . ' class="hidden">★</label>';
                        }
                        ?>
                    </span>

                    <span class="text-black">
                        <p id="starholder"></p>
                    </span>
                </div>


                <button type="submit"
                    class="bg-[#8f8a5f] text-white py-[12px] px-[30px] border-0 cursor-pointer hover:bg-[#3e5f6d] transition">
                    Versturen
                </button>
            </form>
        </div>
    </div>
</section>

<script>
    function getValue(value) {
        let val = value;
        let starholder = document.getElementById("starholder");

        starholder.textContent = val.toString().concat("/5");
    }
</script>