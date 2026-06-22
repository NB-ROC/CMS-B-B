<div class="w-full min-h-[calc(100vh-160px)] grid grid-cols-[300px_1fr]">
    <aside class="border-r border-[#d0d0d0] pt-[80px] px-[35px] pb-[40px] flex flex-col gap-[20px]">
        <button class="bg-transparent text-[#ff5656] font-bold" onclick="showAdminSection('bookingen', this)">Admin</button>
        <button class="bg-transparent text-[#111] border-0 p-0 text-left text-[24px] cursor-pointer" onclick="showAdminSection('contact', this)">Contact berichten</button>
        <button class="bg-transparent text-[#111] border-0 p-0 text-left text-[24px] cursor-pointer" onclick="showAdminSection('website', this)">Website opstellen</button>

        <div class="mt-auto flex flex-col gap-[12px]">
            <a class="text-[#111] no-underline text-[22px" href="http://localhost:8000/">Home</a>
            <a  class="text-[#111] no-underline text-[22px" href="logout.php">Log out</a>
        </div>
    </aside>

    <main class="p-[70px] bg-white">
        <section id="bookingen" class="block;">
            <h1 class="text-[#111] text-[38px] mb-[35px]">Alle boekingen</h1>

            <table class="w-full border-collapse bg-white">
                <thead>
                    <tr>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Boeking ID</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Datum</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Reis</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Klant</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Bedrag</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">#10956</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">17-06-2026</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Stedenreis Parijs</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Sarah Janssen</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">€ 850</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Nieuw</td>
                    </tr>
                    <tr>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">#10843</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">18-06-2026</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Strandvakantie Bali</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Mark de Vries</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">€ 1200</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">In afwachting</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="contact" class="hidden;">
            <h1>Contact berichten</h1>

            <table>
                <thead>
                    <tr>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Naam</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Email</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Onderwerp</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Bericht</th>
                        <th class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Actie</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Anna Peeters</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">anna@mail.com</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Vraag over Bali</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]">Is deze reis nog beschikbaar?</td>
                        <td class="p-[16px] border-b border-[#ddd] text-left text-[#111]"><button class="w-fit py-[12px] px-[20px]">Verwijderen</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="website" class=" p-[16px] border-b border-[#ddd] text-left text-[#111]">
            <h1>Website opstellen</h1>

            <div class="w-full h-[130px] p-[12px]">
                <h3>Home pagina</h3>
                <label>Tekst</label>
                <textarea class="w-full h-[130px] p-[12px]">Welkom op onze website</textarea>

                <label>Afbeelding</label>
                <input type="file">

                <button class="w-fit py-[12px] px-[20px]">Opslaan</button>
            </div>
        </section>

    </main>
</div>

<script>
    function showAdminSection(id, btn) {
        document.querySelectorAll('p-[16px] border-b border-[#ddd] text-left text-[#111]').forEach(section => {
            section.classList.remove('active');
        });

        document.querySelectorAll('bg-transparent text-[#111] border-0 p-0 text-left text-[24px] cursor-pointer').forEach(button => {
            button.classList.remove('active');
        });

        document.getElementById(id).classList.add('active');
        btn.classList.add('active');
    }
</script>