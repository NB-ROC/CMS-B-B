<section class="w-full bg-[#dcdcdc] py-[80px]">
    <div class="w-[70%] mx-auto flex justify-between bg-[#e6e6e6] p-[60px]">
        <div class="w-[40%]">
            <h2 class=" text-[32px] mb-[25px]">NEEM CONTACT OP</h2>
            <p class="mb-[12px] text-[16px]"><strong>Telefoon:</strong> +31 6 12345678</p>
            <p class="mb-[12px] text-[16px]"><strong>Email:</strong> info@calmcorner.nl</p>
            <p class="mb-[12px] text-[16px]"><strong>Adres:</strong> Straatnaam 1, Nijmegen</p>
        </div>

        <div class="w-[50%]">
            <h2 class="mb-[25px] text-[24px]">Laten we contact maken</h2>

            <form class="flex flex-col" method="POST" action="php/contact.php">

                <label for="name">Uw naam</label>
                <input class="p-[14px] mb-[18px] border border-[#ccc] text-[15px] bg[#f9f9f9]" type="text" id="name" name="name" placeholder="Uw naam" required>

                <label for="email">E-mailadres</label>
                <input class="p-[14px] mb-[18px] border border-[#ccc] text-[15px] bg[#f9f9f9]" type="email" id="email" name="email" placeholder="E-mailadres" required>

                <label for="phone">Telefoonnummer</label>
                <input class="p-[14px] mb-[18px] border border-[#ccc] text-[15px] bg[#f9f9f9]" type="tel" id="phone" name="phone" placeholder="Telefoonnummer">

                <label for="message">Uw bericht</label>
                <textarea class="p-[14px] mb-[18px] border border-[#ccc] text-[15px] bg[#f9f9f9] h-[140px] resize-none" id="message" name="message" placeholder="Uw bericht" rows="6" required></textarea>

                <button class = 'p-[14px] bg-[#8a855c] text-white border-none text-[15px] cursor-pointer hover:bg-[#3e5f6d]'
                     type="submit">Bericht verzenden</button>

            </form>
        </div>
    </div>
</section>