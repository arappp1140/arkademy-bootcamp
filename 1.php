<?php 
    function biodata(){
        $biodata = [
            "name"          => "Muhammad Rafli",
            "address"       => "Banda Aceh, Jl Cinta kasih timur 5 no 28 komplek panteriek",
            "hobbies"       => ["Koding","Gaming","Futsal"],
            "is_married"    => false,
            "school"        => (object)[
                                "highSchool" => "SMKN Telkom Banda Aceh",
                                "university" => "-"
            ],
            "skills"        => (object)[
                                "skill"              => "HTML, CSS, PHP",
                                "skill_framework"    => "Codeigniter"
            ]
        ];
        return $biodata;
    }
    echo json_encode(biodata());
?>