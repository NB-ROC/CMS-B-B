<div class="w-full min-h-[calc(100vh-160px)] grid grid-cols-[300px_1fr]">
    <aside class="border-r border-[#d0d0d0] pt-[80px] px-[35px] pb-[40px] flex flex-col gap-[20px]">
        <button class="bg-transparent text-[#ff5656] font-bold" onclick="showAdminSection('bookingen', this)">Admin</button>
        <button class="bg-transparent text-[#111] border-0 p-0 text-left text-[24px] cursor-pointer" onclick="showAdminSection('contact', this)">Contact berichten</button>
        <button class="bg-transparent text-[#111] border-0 p-0 text-left text-[24px] cursor-pointer" onclick="showAdminSection('website', this)">Website opstellen</button>

        <div class="mt-auto flex flex-col gap-[12px]">
            <a href="http://localhost:8000/">Home</a>
            <a href="logout.php">Log out</a>
        </div>
    </aside>

    <main class="p-[70px] bg-white">
        <section id="bookingen" class="block;">
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

        <section id="contact" class="hidden;">
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
                        <td><button class="w-fit py-[12px] px-[20px]">Verwijderen</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="website" class=" p-[16px] border-b border-[#ddd] text-left text-[#111]">
            <h1>Website opstellen</h1>

            <div class="w-full h-[130px] p-[12px]">
                <h3>Home pagina</h3>
                <label>Tekst</label>
                <textarea>Welkom op onze website</textarea>

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