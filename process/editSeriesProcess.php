<?php
session_start();
if(isset($_POST['editSeries'])){
    include ('../db.php');
    $name = $_POST['name'];
    $realese = $_POST['realese'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];
    $id = $_POST['id'];
    foreach ($_POST['genre'] as $value) {
        $query = mysqli_query($con,"UPDATE series SET genre='$value' WHERE id='$id'");
    }
    $queryEdit = mysqli_query($con, "UPDATE series SET name='$name', episode='$episode', realese='$realese', season='$season' WHERE id='$id'") or
    die(mysqli_error($con));
    if($queryEdit){
        echo
        '<script>
        alert("Edit Success"); window.location = "../page/listSeriesPage.php"
        </script>';
    }else{
        echo
        '<script>
        alert("Edit Failed"); window.location = "../page/listSeriesPage.php"
        </script>';
    }
}else {
    echo
    '<script>
    window.history.back()
    </script>';
}

?>