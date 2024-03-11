<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat your account</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full font-semibold">

    <div class="flex justify-center m-24">
        <div class="w-[800px] h-full bg-gray-100 shadow-lg rounded-lg">

            <!--title-->
            <div>
                <h1 class="text-3xl text-center mt-16 text-purple-950 text-opacity-60">create your account</h1>
            </div>

            <!--inputs-->
            <div class="m-8 ">

                    <!--name-->
                    <div class="grid grid-cols-2 justify-items-center mb-20">
                        <div>
                            <h1 class="text-sm mb-2 ml-2">first name:</h1>
                            <input id="firstname" type="text" class="w-72 p-2 rounded-xl" placeholder="first name">
                            <h1 id="firstnameAlert" class="text-red-700 mt-1" style="display: none;"></h1>
                        </div>
                        <div>
                            <h1 class="text-sm mb-2 ml-2">last name:</h1>
                            <input id="lastname" type="text" class="w-72 p-2 rounded-xl" placeholder="last name">
                            <h1 id="lastnameAlert" class="text-red-700 mt-1" style="display: none;"></h1>
                        </div>
                    </div>

                    <!--email-->
                    <div class="ml-10 mt-7">
                        <h1 class="text-sm mb-2 ml-2">email:</h1>
                        <input id="email" type="email" class="w-96 p-2 rounded-xl" placeholder="example@gmail.com">
                    </div>
                    <h1 id="emailAlert" class="text-red-700 ml-10 mt-1" style="display: none;"></h1>


                    <!--phone number-->
                    <div class="ml-10 mt-7">
                        <h1 class="text-sm mb-2 ml-2">phone number:</h1>
                        <input id="phone" type="text" class="w-96 p-2 rounded-xl" placeholder="05XXXXXXXX">
                    </div>
                    <h1 id="phoneAlert" class="text-red-700 ml-10 mt-1" style="display: none;"></h1>

                    <!--password-->
                    <div class="mt-20 mb-10">
                        <!--password 1-->
                        <div class="ml-10 mt-7">
                            <h1 class="text-sm mb-2 ml-2">enter password</h1>
                            <input id="password1" type="password" class="w-96 p-2 rounded-xl" placeholder="*****">
                        </div>

                        <!--password 2-->
                        <div class="ml-10 mt-7">
                            <h1 class="text-sm mb-2 ml-2">enter password again</h1>
                            <input id="password2" type="password" class="w-96 p-2 rounded-xl" placeholder="*****">
                        </div>
                        <h1 id="passwordAlert" class="text-red-700 ml-10 mt-1" style="display: none;"></h1>
                    </div>

                    <!--buttons-->
                    <di class="flex justify-between mx-64 ">
                        <!--button create-->
                        <div class="flex justify-center mt-11">
                            <button type="submit"
                                class="bg-gray-300 bg-opacity-75 py-1.5 px-2.5 rounded-lg shadow-md hover:bg-opacity-100">create</button>
                        </div>

                        <!--button clear all-->
                        <div class="flex justify-center mt-11">
                            <button onclick="clearField()"
                                class="bg-purple-950 bg-opacity-30 py-1.5 px-2.5 rounded-lg shadow-md hover:bg-opacity-45">clear
                                all</button>
                        </div>
                    </di>


                <div id="correct" style="display: none;" class="text-center m-7">
                    <h1 class="mt-1 text-green-800">Your account is created!</h1>
                    <div class="mt-3 flex justify-center gap-2">
                        <a href="index.html"
                            class="underline text-purple-950 text-opacity-70 hover:text-opacity-90">Clike here</a>
                        <p class="text-purple-950 text-opacity-60"> to go to your account</p>
                    </div>

                </div>

            </div>

        </div>
    </div>

</body>
</html>