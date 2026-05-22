<div class="min-h-screen bg-white flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-gray-100 text-black p-8 rounded-2xl shadow-lg">

        <h1 class="text-4xl font-bold mb-6 text-center">
            Inloggen
        </h1>

        <div class="flex justify-center items-center gap-2 mb-6 text-gray-600">
            <p>Nog geen account?</p>

            <a
                href="index.php?page=register"
                class="text-red-500 hover:text-red-600 transition">
                Aanmelden
            </a>
        </div>

        <form
            class="flex flex-col gap-4"
            method="POST"
            action="php/login.php">

            <div class="flex flex-col">
                <label
                    for="username"
                    class="mb-2 text-sm font-medium text-gray-700">
                    Gebruikersnaam
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    class="bg-white border border-gray-300 rounded-lg px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-red-400">
            </div>

            <div class="flex flex-col">
                <label
                    for="password"
                    class="mb-2 text-sm font-medium text-gray-700">
                    Wachtwoord
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    class="bg-white border border-gray-300 rounded-lg px-4 py-3 text-black focus:outline-none focus:ring-2 focus:ring-red-400">
            </div>

            <button
                type="submit"
                class="bg-red-500 hover:bg-red-600 transition text-white rounded-lg py-3 font-semibold text-lg mt-2">
                Inloggen
            </button>

        </form>

        <div class="text-center mt-6">
            <a
                class="text-gray-500 hover:text-red-600 transition"
                href="#">
                Wachtwoord vergeten?
            </a>
        </div>

    </div>

</div>