<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include './include/header.php'
    ?>
    <title>HNG-8 Resume</title>
</head>
<body>
    <?php include_once './include/nav.php' ?>
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="mx-40 bg-green-400 py-4 mt-4 text-white">
            <p class="px-4"><?= $_SESSION['message']; ?></p>
        </div>
    <?php } ?>
    <?php session_destroy(); ?>
    <main class="mx-40 mt-8 flex">
        <section class="w-1/2">
            <p class="text-xl text-green-400">OLANLOKUN LANRE OLALEKAN</p>
            <span>Fullstack Web Developer</span> <br>
            <span class="text-blue-400 underline"><a href="mailto:olanlokunlanre@gmail.com">olanlokunlanre@gmail.com</a>,</span>
            <span>08131871049</span>, &nbsp; <span class="text-blue-400 underline"><a target="_blank" href="https://github.com/iamdyt"> GitHUB </a></span>

            <div class="summary py-2">
                <p class="text-green-400 font-medium text-xl uppercase">Summary</p>
                <span>Passion and Mission Driven Software Developer seeking to use my skills to develop and maintain 
                    quality software products.
                </span>
            </div>

            <div class="experience py-2">
                <p class="text-green-400 font-medium text-xl uppercase py-2">Work Experience</p>
                <span class="font-medium text-xl">Software Developer</span> <br>
                <span>Cyberline Technologies</span> <br>
                <span>August, 2020</span>
                <p> - Developed Websites according to requirement. <br>
                    - Enhanced websites to fit responsively <br>
                    - Rebuilt existing websites according to TetFund Specifications
                </p>
            </div>
            <div class="skills py-2">
                <p class="text-green-400 font-medium text-xl uppercase py-2">Technical Skills</p>
                <p> Software Design / Software Debugging / API Design / Database Design / Software Development / 
                    Laravel / PHP / HTML/CSS/ VUEJS/NuxtJS/Git/GitHub/Software Deployment.
                </p>

            </div>
        </section>
        <div class="mx-8"></div>
        <section class="w-1/2 bg-gray-200">
            
           <form action="processor.php" method="post" class="mx-4">
               <p class="mt-20">Have a gig/projects for me? Kindly fill in the form below</p>
               <label for="" class=" block mt-4">Name</label>
               <input type="text" required placeholder="Please enter your fullname" class="outline-none p-4 w-full">
               <label for="">E-mail</label>
               <input type="email" required placeholder="Enter a valid e-mail" class="outline-none p-4 w-full">
               <label for="">Message</label>
               <textarea name="" id="" class="outline-none w-full" cols="30" rows="5"></textarea>
               <div>
                   <button type="submit" class="bg-green-400 w-full p-2 text-white rounded-sm">Send</button>
               </div>
           </form>
        </section>
    </main>
    <div class="border border-solid border-b-4 mt-8"></div>
    <footer class="mx-40 my-4">
        <section class="flex justify-between">
                <div class="w-1/3">
                    <a href="https://hng.tech/"> <img src="./assets/images/brand-logo.png" width="50%" alt=""></a>
                </div>

                <div class="w-1/3">
                    <a href="https://ingressive.org/"> <img src="./assets/images/i4g.png" width="50%" alt=""></a>
                </div>

                <div class="w-1/3">
                    <a href="https://zuri.team/"> <img src="./assets/images/zuri-logo-full.svg" width="50%" alt=""></a>
                </div>
        </section>
    </footer>
</body>
</html>
