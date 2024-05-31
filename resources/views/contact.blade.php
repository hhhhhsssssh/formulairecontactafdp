<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de Contact</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=great-vibes:400|mansalva:400" rel="stylesheet" />
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
        </script>
        <script type="text/javascript">
            (function(){
                emailjs.init({
                    publicKey: "vo-DBCoEr9P2JtjNe",
                });
            })();
        </script>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="min-h-screen bg-white py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-[#FFBF66] shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="text-[#00353F] relative px-4 py-10 bg-[#D46F4D] shadow-lg sm:rounded-3xl sm:p-20">

                    <div class="text-center pb-6">
                        <h1 class="text-3xl font-[Mansalva]">CONTACTEZ-NOUS !</h1>
                    </div>

                    <form class="font-[Mansalva]">
    
                        <div class="mb-4">
                            <label class="block text-[#00353F] mb-2" for="name">Nom</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" id="name" name="name">
                        </div>

                        <div class="mb-4">
                            <label class="block text-[#00353F] mb-2" for="email">Email</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="email" id="email" name="email">
                        </div>

                        <div class="mb-4">
                            <label class="block text-[#00353F] mb-2" for="_subject">Objet</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" id="_subject" name="_subject">
                        </div>

                        <div class="mb-4">
                            <label class="block text-[#00353F] mb-2" for="message">Message</label>
                            <textarea
                                class="shadow min-h-0 appearance-none border rounded h-64 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="message" name="message" style="height: 121px;"></textarea>
                        </div>

                        <div class="flex justify-between">
                            <button
                                class="shadow bg-[#00353F] hover:bg-white text-white hover:text-[#00353F] font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button" onclick="sendMail()">envoyer</button>
                            <button
                                class="shadow bg-[#00353F] hover:bg-white text-white hover:text-[#00353F] font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="reset">réinitialiser</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>