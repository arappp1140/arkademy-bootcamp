<?php 
    $kolom      = 3;
    $baris      = 4;
    $alphabet   = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','y'];
    function print_abc($kolom, $baris){
        global $alphabet;
        $no = 0;
        for($i = 0; $i < $baris;$i++){
            for($j = 0; $j < $kolom;$j++){
                $num = $no++;
                foreach ($alphabet as $key => $value) {
                    if($key == $num){
                        echo $value." ";
                    }
                }
            }
            echo "<br>";
        }
    }
    
    echo print_abc($kolom, $baris);
?>