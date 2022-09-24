<?php

    if(isset($_POST['tambahSeries'])){
        include('../db.php');
        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realese = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,
                "INSERT INTO series(genre, realese, name, episode, season, synopsis)
                    VALUES
            ('$genre', '$realese', '$name','$episode', '$season', '$synopsis')")
                or die(mysqli_error($con)); 

            if($query){
                echo
                    '<script>
                    alert("Add Series Success");
                    window.location = "../page/listSeriesPage.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Add Series Failed");
                    </script>';
            }
    }else{
      echo
       '<script>
        window.history.back()
        </script>';
     }
?>