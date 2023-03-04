<?php
$conn = mysqli_connect("localhost","root","","proyek");


function($query){
    $global = $conn;

    $row = mysqli_query($conn, $query);
    $rows=[];

    while($result = mysqli_fetch_assoc($row)){
        $rows[]= $result;
    }
    return $rows;

};

function simpan(){
        $global = $conn;

    $project_name = $data["project_name"];
    $project_size = $data["project_size"];
    $project_img = $data["project_img"];
    $project_amount = $data["project_amount"];
    $project_expense = $data["project_expense"];
    $project_location = $data["project_location"];

    $add = "INSERT INTO projectname VALUES("",
                "$project_name","$project_size",
                "$project_img","$project_amount",
                "$project_expense","$project_location")";
    $save = mysqli_fetch_assoc($conn, $add);

    
}



?>