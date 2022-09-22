<?php
session_start();
if(isset($_POST['tambahMovie'])){
    include ('../db.php');
    $genre = $_POST['genre'];
    $name = $_POST['name'];
    $realese = $_POST['realese'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];
    $id = $_POST['id'];
    $queryEdit = mysqli_query($con, "UPDATE movies SET genre='$genre', name='$name', realese='$realese', season='$season' WHERE id='$id'") or
    die(mysqli_error($con));
    if($queryEdit){
        echo
        '<script>
        alert("Edit Success"); window.location = "../page/listMoviesPage.php"
        </script>';
    }else{
        echo
        '<script>
        alert("Edit Failed"); window.location = "../page/listMoviesPage.php"
        </script>';
    }
}else {
    echo
    '<script>
    window.history.back()
    </script>';
}

?>