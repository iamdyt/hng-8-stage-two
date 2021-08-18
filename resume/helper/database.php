<?php

    class ResumeDB{

        public $host = 'localhost';
        public $db_name = 'resume';
        public $db_username = 'root';
        public $db_password ='root';
        public $conn;

        public function __construct(){
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->db_username, $this->db_password);
        }

        public function insertBio($ref, $full_name, $email, $phone, $website, $objective){
            $query = "INSERT INTO bio(ref,full_name,email,phone,website,objective) VALUES(?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$ref, $full_name, $email, $phone, $website, $objective]);
            return;
        }

        public function insertEducation($institution, $course, $graduation_date,$author_ref){
            $query = "INSERT INTO highest_education(institution, course, graduation_date, author_ref) VALUES(?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$institution, $course,$graduation_date,$author_ref]);
            return;
        }

        public function insertSkills($skills, $author_ref){
            $query = "INSERT INTO skills(skills, author_ref) VALUES (?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$skills, $author_ref]);
            return;
        }

        public function insertExperience($title, $company, $from_to, $job_description,$author_ref){
            $query = "INSERT INTO work_experience(title, company, from_to,job_description, author_ref) VALUES(?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$title, $company, $from_to,$job_description, $author_ref]);
            return;
        }

        public function fetchData($ref){
            
            $query = "SELECT * FROM bio JOIN skills ON bio.ref=skills.author_ref JOIN highest_education ON bio.ref=highest_education.author_ref JOIN work_experience ON bio.ref = work_experience.author_ref WHERE bio.ref = '{$ref}' ";
            $stmt = $this->conn->query($query);
            $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }
    }


?>