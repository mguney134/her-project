<?php
ob_start();
session_start();

include '../settings/connect-db.php';

    if ($_POST['publishcv']) { //post var mı diye bakıyoruz

        //değişkenleri integer olarak alıyoruz
        
        $durum = $_POST['durum'];

        //Güncellme sorgumuzu yazıyoruz
        
        $save = $db->prepare("UPDATE her SET
            
        publish_cv=:publish_cv
       

        WHERE her_id={$_POST['her_id']}");
        $update = $save->execute(array(

                'publish_cv' => $durum
                

        ));

    }

    if ($_POST['mentoringsupport']) { //post var mı diye bakıyoruz

        //değişkenleri integer olarak alıyoruz
        
        $durum = $_POST['durum'];

        //Güncellme sorgumuzu yazıyoruz
        
        $save = $db->prepare("UPDATE her SET
            
            mentoringsupport=:mentoringsupport
       

        WHERE her_id={$_POST['her_id']}");
        $update = $save->execute(array(

                'mentoringsupport' => $durum
                

        ));

    }

    if ($_POST['careercoaching']) { //post var mı diye bakıyoruz
         //veri tabanına bağlanıyoruz

        //değişkenleri integer olarak alıyoruz
        
        $durum = $_POST['durum'];

        //Güncellme sorgumuzu yazıyoruz
        
        $save = $db->prepare("UPDATE her SET
            
            careercoaching=:careercoaching
       

        WHERE her_id={$_POST['her_id']}");
        $update = $save->execute(array(

                'careercoaching' => $durum
                

        ));

    }


?>

