<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</head>

<body>
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
                            <a href="home.php" class="py-4 px-2 text-fuchsia-500 border-b-4 border-fuchsia-500 font-semibold ">Home</a>
                            <a href="datauser.php" class="py-4 px-2 text-white font-semibold hover:text-fuchsia-500 transition duration-300">User-data</a>
                            <a href="" class="py-4 px-2 text-white font-semibold hover:text-fuchsia-500 transition duration-300">About</a>
                            <a href="" class="py-4 px-2 text-white font-semibold hover:text-fuchsia-500 transition duration-300">Contact Us</a>
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3 ">
                        <a href="login.php" class="py-2 px-2 font-medium text-white rounded hover:bg-fuchsia-500 hover:text-white transition duration-300">Log In</a>
                        <a href="register.php" class="py-2 px-2 font-medium text-white bg-fuchsia-500 rounded hover:bg-fuchsia-400 transition duration-300">Sign Up</a>
                    </div>
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
</body>

</html>