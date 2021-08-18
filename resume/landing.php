<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include './include/header.php'
    ?>
    <title>HNG-8 Resume Builder</title>
</head>
<body class="">
    <?php include_once './include/nav.php' ?>
    <section class="mx-40">
        <div class="flex mt-20">
            <div class="w-1/2 mt-16">
                <p class="text-4xl pb-6 font-bold">Impressive Resume</p>
             
                <p class="text-base text-gray-400" style="font-weight: 300 !important;">Stand out from the crowd, with our professional, instant and out-of the box resume, compiled algorithmically with the most advanced and state of the art resume builder</p>
                <div class="button py-2 mt-6">
                    <button onclick="window.location.href='./resume-form.php'" class="resume-bg-blue  text-white px-16 py-4 rounded-lg hover:bg-black">Start Here</button>
                </div>
            </div>
            <div>&emsp; &emsp; &emsp;</div>
            <div class="w-1/2">
                <img src="./assets/images/hiring.svg" width="70%" alt="">
            </div>
        </div>
    </section>
</body>
</html>