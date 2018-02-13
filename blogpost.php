<?php
    try {

        $stmt = $conn->query("SELECT PostID, PostTitle, PostDescription, PostDate FROM Blog ORDER BY PostID DESC");
        while($row = $stmt->fetch()){
            
            echo '<div>';
                echo '<h1><a href="viewpost.php?id='.$row['PostID'].'">'.$row['PostTitle'].'</a></h1>';
                echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                echo '<p>'.$row['PostDescription'].'</p>';                
                echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';                
            echo '</div>';

        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>