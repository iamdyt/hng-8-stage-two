<?php

    include_once './helper/database.php';

    $db = new ResumeDB();

    function clean_data($data){
        return htmlspecialchars(stripslashes($data));
    }

    //  Biodata

    $ref = clean_data($_POST['ref']);
    $full_name = clean_data($_POST['full_name']);
    $email = clean_data($_POST['email']);
    $phone = clean_data($_POST['phone']);
    $website = $_POST['website'];
    $objective = clean_data($_POST['objective']);

    $db->insertBio($ref, $full_name, $email,$phone, $website, $objective);

    // Eductaion

    $institution = clean_data($_POST['institution']);
    $course = clean_data($_POST['course']);
    $graduation_date = clean_data($_POST['graduation_date']);

    $db->insertEducation($institution, $course, $graduation_date, $ref);

    // Skills

    $skills =clean_data($_POST['skills']);
    $db->insertSkills($skills, $ref);

    // Experience

    $titleone = clean_data($_POST['titleone']);
    $companyone = clean_data($_POST['companyone']);
    $dateone = clean_data($_POST['dateone']);
    $descriptionone = clean_data($_POST['descriptionone']);
    $db->insertExperience($titleone, $companyone, $dateone, $descriptionone, $ref);

    $titletwo = clean_data($_POST['titletwo']);
    $companytwo = clean_data($_POST['companytwo']);
    $datetwo = clean_data($_POST['datetwo']);
    $descriptiontwo = clean_data($_POST['descriptiontwo']);
    $db->insertExperience($titletwo, $companytwo, $datetwo, $descriptiontwo, $ref);



    header('location: resume-preview.php?user='.$ref);


