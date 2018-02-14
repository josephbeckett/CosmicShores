<?php
    try {

        $stmt = $conn->query("SELECT PostID, PostTitle, PostDescription, PostDate FROM Blog ORDER BY PostID DESC");
        while($row = $stmt->fetch()){
            
            echo '<div>';
                echo '<h1><a href="includes\viewblogpost.php?id='.$row['PostID'].'">'.$row['PostTitle'].'</a></h1>';
                echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['PostDate'])).'</p>';
                echo '<p>'.$row['PostDescription'].'</p>';                
                echo '<p><a href="includes\viewblogpost.php?id='.$row['PostID'].'">Read More</a></p>';                
            echo '</div>';

        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>