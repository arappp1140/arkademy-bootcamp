<?php 
    $huruf_kecil          = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','y'];
    $huruf_besar          = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $angka                = ['1','2','3','4','5','6','7','8','9','0'];
    $karakter_spesial     = ['`','~','!','@','#','$','%','^','&','*','(',')','_','-','=','+','{','}','[',']','|','\'','"','"',';',':','/','?','.','>','<',',','\\'];    
    $username             = 'soloabcc';
    $email                = 'Kamu1@aku.com';
    function is_username_valid($username){
        global $huruf_kecil;
        $split_username     = str_split($username);
        $cek_hurufkecil     = 0;
        $cek_jumlahkarakter = 0;
        
        foreach ($split_username as $baris_nama) {
            foreach ($huruf_kecil as $lowCase) {
                if($baris_nama == $lowCase){
                    $cek_hurufkecil += 1;
                }
            }
                
        }
        if(count($split_username) == 8){
                   $cek_jumlahkarakter += 1;
        }
        if($cek_hurufkecil > 0 &&  $cek_jumlahkarakter > 0){
            return true;
        }else {
            return false;
        }
    }
    function is_email_valid($email){
        global $huruf_kecil, $huruf_besar, $angka, $karakter_spesial;
        $split_email     = str_split($email);
        $cek_hurufkecil     = 0;
        $cek_hurufbesar     = 0;
        $cek_angka          = 0;
        $cek_karakterspesial= 0;
        $cek_jumlahkarakter = 0;
            foreach ($split_email as $baris_email) {
                foreach ($huruf_kecil as $lowCase) {
                    if($baris_email == $lowCase){
                        $cek_hurufkecil += 1;
                    }
                }
                foreach ($huruf_besar as $upCase) {
                    if($baris_email == $upCase) {
                        $cek_hurufbesar += 1;
                    }
                }
                foreach ($angka as $num) {
                    if($baris_email == $num){
                         $cek_angka += 1;
                    }
                }
                foreach ($karakter_spesial as $symbol) {
                    if($baris_email == $symbol){
                        $cek_karakterspesial += 1;
                    }
                }
            }
                if(count($split_email) +- 4){
                        $cek_jumlahkarakter += 1;
                }
                if($cek_hurufkecil > 0 && $cek_hurufbesar > 0 && $cek_angka > 0 && $cek_karakterspesial > 0 && $cek_jumlahkarakter > 0){
                    return true;
                }else{
                    return false;
                }
    }
    $username = is_username_valid($username);
    $email = is_email_valid($email);
    if($username == true && $email == true){
        echo "Yeayyy !! Username telah memiliki kombinasi dari huruf kecil atau titik. Dengan panjang 8 karakter dan email
        juga sudah memiliki kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang 8 karakter";
    }else if($username == true && $email == false){
        echo "Upss Salah!! Email juga belum memiliki kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang 8 karakter";
    }else if($username == false && $email == true){
        echo "Upss Salah!! Username belum memiliki kombinasi dari huruf kecil atau titik. Dengan panjang 8 karakter";
    }else if($username == false && $email == false){
        echo "Upss Salah!! Username belum memiliki kombinasi dari huruf kecil atau titik. Dengan panjang 8 karakter dan email
        juga belum memiliki kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang 8 karakter";
    }
?>