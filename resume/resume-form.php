<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include './include/header.php'
    ?>
    <title>Resume Form</title>
</head>
<body>
    <?php include_once './include/nav.php' ?>

    <section class="mx-40 mt-20">
        <div class=" mt-4 rounded">
            <ul id="tabs" class="inline-flex w-full  pt-2 ">
                <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">Biodata</a></li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Work Experience</a></li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Technical Skills</a></li>
                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fourth">Highest Education</a></li>
            </ul>

            <form action="resume-process.php" method="POST">   <!-- Contents -->
                <div id="tab-contents">
                        <div id="first" class="p-4 ">
                            <label for="">FullName</label> <br>
                            <input name="full_name" required type="text" placeholder="Abraham Isaac Jacob" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                            <label for="">E-mail</label> <br>
                            <input name="email" required type="email" placeholder="Abraham@Isaac.com" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                            <label for="">Mobile Phone</label> <br>
                            <input name="phone" required type="text" placeholder="09090987655" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                            <label for="">Website</label> <br>
                            <input name="website" required type="text" placeholder="http://www.mypage.com" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                            <label for="">Objective</label> <br>
                            <textarea name="objective" placeholder="Highly Passionate and Motivated..." required maxlength="100" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "></textarea> <br>
                            <input type="hidden" name="ref" value="<?= uniqid() ?>">
                            <small>Please proceed to fill your work experience >></small>


                        </div>
                        <div id="second" class="hidden p-4 flex">
                            <div class="w-1/2">
                                <p class="text-lg py-2 text-gray-400">Experience One</p>
                                <label for="">Title</label> <br>
                                <input name="titleone" required type="text" placeholder="e.g Consultant, Mobile-Developer" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-full px-4 "> <br>
                                <label for="">Company Name</label> <br>
                                <input name="companyone" required type="text" placeholder="Andela" class="w-full outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                                <label for="">Date</label> <br>
                                <input name="dateone" required type="text" placeholder="March,2021 - June, 2021" class="w-full outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                                <label for="">Job Description</label> <br>
                                <textarea name="descriptionone" placeholder="Describe what you do at the firm" required maxlength="100" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-full px-4 "></textarea> <br>
                            </div>
                            <div>&emsp;</div>
                            <div class="w-1/2">
                                <p class="text-lg py-2 text-gray-400">Experience Two</p>
                                <label for="">Title</label> <br>
                                <input name="titletwo" required type="text" placeholder="e.g Consultant, Mobile-Developer" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-full px-4 "> <br>
                                <label for="">Company Name</label> <br>
                                <input name="companytwo" required type="text" placeholder="Andela" class="w-full outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                                <label for="">Date</label> <br>
                                <input name="datetwo" required type="text" placeholder="March,2021 - June, 2021" class="w-full outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                                <label for="">Job Description</label> <br>
                                <textarea name="descriptiontwo" placeholder="Describe what you do at the firm" required maxlength="100" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-full px-4 "></textarea> <br>
                                <small>Please proceed to fill your technical skills >></small>
                            </div>
                        </div>
                        <div id="third" class="hidden p-4">
                            <p class="text-lg py-2 text-gray-400">Fill in your technical abilities</p>
                            <label for="">Skills</label> <br>
                            <input name="skills" required type="text" placeholder="e.g Desktop Publishing, Graphic Design" class="outline-none rounded-sm border border-solid border-gray-400 py-2  w-1/2 px-4 "> <br>
                            <small>Please proceed to Highest Education >></small>
                        </div>
                        <div id="fourth" class="hidden p-4">
                            <p class="text-lg py-2 text-gray-400">Highest Education</p>
                            <label for="">Institution</label> <br>
                            <input name="institution" required type="text" placeholder="Lagos state university" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                            <label for="">Course</label> <br>
                            <input name="course" required type="text" placeholder="Computer-Engineering" class="outline-none rounded-sm border border-solid border-gray-400 py-2 w-1/2 px-4 "> <br>
                            <label for="">Graduation Date</label> <br>
                            <input name="graduation_date" required type="text" placeholder="March,2012 " class="outline-none rounded-sm border border-solid border-gray-400 py-2  w-1/2 px-4 "> <br>
                            <small><< Kindly go through all sections to check for errors >></small>
                            <div class="btn">
                                <button class="resume-bg-blue text-white px-4 py-2 rounded-sm">Generate</button>
                            </div>
                        </div>
                </div>
                </form>
        </div>
    </section>

    <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("a");

        tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contents");

        for (let i = 0; i < tabContents.children.length; i++) {

        tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
            continue;
        }
        tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
    });
    });

    document.getElementById("default-tab").click();

    </script>
</body>
</html>