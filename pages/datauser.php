<?php
session_start();

if (!isset($_SESSION["login"])) {

?>
    <script>
        window.location.href = "login.php";
    </script>
<?php

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUstore - Data User input</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link href="../dist/output.css" rel="stylesheet">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function() {
                switch (cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        cont = 1;

                        break;
                    }
                    case 1: {

                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");

                        cont = 0;

                        break;
                    }


                }
            }, 8000);

        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }



        function sliderButton1() {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 0

        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            reinitLoop(4000);
            cont = 1

        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");


            loopSlider();






        });
    </script>
</head>

<body class="bg-gradient-to-r from-purple-900 via-indigo-900 to-black">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <!-- Header Start -->
    <header>
        <nav class="bg-purple-800 shadow-lg">
            <div class="max-w-screen mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <!-- Website Logo -->
                            <a href="#" class="flex items-center py-4 px-2">
                                <img src="../images/phone-call-svgrepo-com (1).svg" alt="Logo" class="h-9 w-9 mr-3">
                                <span class="font-semibold text-white text-4xl">KUstore</span>
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="home.php" class="py-4 px-2 text-white  font-semibold hover:text-fuchsia-500 transition duration-300 ">Home</a>
                            <a href="datauser.php" class="py-4 px-2 text-white font-semibold hover:text-fuchsia-500 transition duration-300">User-data</a>
                            <a href="" class="py-4 px-2 text-white font-semibold hover:text-fuchsia-500 transition duration-300">About</a>
                            <a href="" class="py-4 px-2 text-white font-semibold hover:text-fuchsia-500 transition duration-300">Contact Us</a>
                        </div>
                    </div>

                    <?php


                    if (isset($_SESSION["login"])) {
                    ?>

                        <!-- Secondary Navbar items -->
                        <div class="hidden md:flex items-center space-x-3 ">
                            <a href="logout.php" class="py-2 px-2 font-medium text-white rounded hover:bg-fuchsia-500 hover:text-white transition duration-300">Log Out</a>
                        </div>
                    <?php
                    } else {

                    ?>
                        <!-- Secondary Navbar items -->
                        <div class="hidden md:flex items-center space-x-3 ">
                            <a href="login.php" class="py-2 px-2 font-medium text-white rounded hover:bg-fuchsia-500 hover:text-white transition duration-300">Log In</a>
                            <a href="register.php" class="py-2 px-2 font-medium text-white bg-fuchsia-500 rounded hover:bg-fuchsia-400 transition duration-300">Sign Up</a>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class=" w-6 h-6 text-fuchsia-500 hover:text-fuchsia-400 " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="hidden mobile-menu">
                <ul class="">
                    <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-fuchsia-500 font-semibold">Home</a></li>
                    <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-fuchsia-500 transition duration-300">User-data</a></li>
                    <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-fuchsia-500 transition duration-300">About</a></li>
                    <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-fuchsia-500 transition duration-300">Contact Us</a></li>
                </ul>
            </div>
            <script>
                const btn = document.querySelector("button.mobile-menu-button");
                const menu = document.querySelector(".mobile-menu");

                btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            </script>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Section Start -->
    <Section class="mx-3 mt-3 shadow-2xl shadow-fuchsia-500">
        <div class="shadow-lg shadow-fuchsia-500">
            <div class="md:grid md:grid-cols-3 md:gap-6 shadow-lg shadow-fuchsia-500">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-white">Profile</h3>
                        <p class="mt-1 text-sm text-white">This information will be displayed publicly so be careful what you share.</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2 shadow-2xl shadow-white">
                    <form action="terima-data.php" method="POST" enctype="multipart/form-data">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-pink-400  sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-white">First name</label>
                                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 bg-pink-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block text-sm font-medium text-white">Last name</label>
                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 bg-pink-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email-address" class="block text-sm font-medium text-white">Email address</label>
                                        <input type="text" name="email" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 bg-pink-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-white">Country</label>
                                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 text-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-pink-300 sm:text-sm">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                            <option>Indonesia</option>
                                            <option>Malaysia</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street-address" class="block text-sm font-medium text-white">Street address</label>
                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 bg-pink-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-white">City</label>
                                        <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 bg-pink-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="region" class="block text-sm font-medium text-white">State / Province</label>
                                        <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 bg-pink-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="postal-code" class="block text-sm font-medium text-white">ZIP / Postal code</label>
                                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 bg-pink-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="about" class="block text-sm font-medium text-white"> About You </label>
                                        <div class="mt-1">
                                            <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 px-2 py-1 block w-full sm:text-sm border border-gray-300 bg-pink-300 rounded-md" placeholder="you@example.com"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-white">Brief description for your profile. URLs are hyperlinked.</p>
                                    </div>

                                    <div class="col-span-6">
                                        <label class="block text-sm font-medium text-gray-700"> Photo </label>
                                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-white">
                                                    <label for="file-upload" class="relative cursor-pointer px-2 border-2 border-pink-600 rounded-md font-medium text-white-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-white">PNG, JPG, GIF up to 10MB</p>
                                            </div>
                                        </div>
                                    </div>

                                    <fieldset>
                                        <legend class="sr-only">By Email</legend>
                                        <div class="text-base font-medium text-white   " aria-hidden="true">By Email</div>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox" value="Comments" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="comments" class="font-medium text-slate-800">Comments</label>
                                                    <p class="text-slate-800">Get notified when someones posts a comment on a posting.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="contents text-base font-medium text-white">Push Notifications</legend>
                                        <p class="text-sm text-white">These are delivered via SMS to your mobile phone.</p>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input id="push-everything" name="push-notifications" type="radio" value="Everything" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push-everything" class="ml-3 block text-sm font-medium text-slate-800"> Everything </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-email" name="push-notifications" type="radio" value="Same As Email" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push-email" class="ml-3 block text-sm font-medium text-slate-800"> Same as email </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio" value="No Push Notification" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                <label for="push-nothing" class="ml-3 block text-sm font-medium text-slate-800"> No push notifications </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="px-4 py-3 bg-pink-400 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border-2 border-pink-700 shadow-xl text-sm font-medium rounded-md text-white bg-pink-400  hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">Save</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Section End -->

    <!-- Footer Start -->

    <footer class="p-4 bg-purple-800 sm:p-6 dark:bg-gray-800 mt-8 ">
        <div class="md:flex md:justify-between  ">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="../images/phone-call-svgrepo-com (1).svg" class="mr-3 h-10" alt="FlowBite Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">KUstore</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold  uppercase text-white dark:text-white">Resources</h2>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="#" class="text-white hover:text-pink-200 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-pink-200 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-pink-200 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-pink-200 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-pink-200 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Footer End -->


</body>

</html>