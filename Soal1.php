<?php

$Biodata = 
    [
        "name" => "Muhammad Ridha",
        "age"  => 24,
        "address" => "Jl. Pisang Jorong Guguak Tinggi, Bukittinggi-Sumatera Barat",
        "hobbies" => ["Reading","Design","Music","Editing","Computing"],
        "is_married" => false,
        "list_school" =>
        [
            ["name" => "SDN 04 Birugo","year_in" => 2001,"year_out" => 2007,"major" => "null"],
            ["name" => "SMP N 1 Bukittinggi","year_in" => 2007,"year_out" => 2010,"major" => "null"],
            ["name" => "SMA N 1 Bukittinggi","year_in" => 2010,"year_out" => 2013,"major" => "IPA"],
            ["name" => "Universitas Sumatera Utara","year_in" => 2013,"year_out" => 2017,"major" => "Chemical Engineering"]
        ],
        "skills" =>
        [
            ["skill_name" => "Microsoft Office","level" => "Advanced"],
            ["skill_name" => "Design","level" => "Beginner"],
            ["skill_name" => "Editing","level" => "Beginner"],
            ["skill_name" => "Engineering Software","level" => "Beginner"]
        ],
        "interest_in_coding" => true,
    ];
$data = json_encode($Biodata);
echo $data;

?>