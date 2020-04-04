<?php
//Include database configuration file
include '../settings/connect-db.php';

if($_POST['id']){

    $groupcheck=$db->prepare("SELECT * FROM eventsgroup WHERE type_id=:type_id");
    $groupcheck->execute(array(
            'type_id' => $_POST['id']
        )
    );

    //Count total number of rows
    $rowCount = $groupcheck->rowCount();

    //Display group list
    if($rowCount > 0){
        echo '<option value="">Select Group</option>';
        while($groupinfo = $groupcheck->fetch(PDO::FETCH_ASSOC)){
            echo '<option value="'.$groupinfo['group_id'].'">'.$groupinfo['group_name'].'</option>';
        }
    }else{
        echo '<option value="">Group not available</option>';
    }
}

?>