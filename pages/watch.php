<div class="col-8 mx-auto row">
    <?php
        // get the id and check database and diplay the video along with details
        $video = htmlspecialchars($_GET['v']);
        $sql = "SELECT * FROM physiotherapy WHERE id = '$video'";
        $results = $conn->query($sql);
        if($results->num_rows != 0):
            while ($row = $results->fetch_assoc()):
    ?>
    <div class="card col-12">
        <div class="col-11 mx-auto">
            <video width="100%" height="540" controls poster="assets\images\<?php echo $row['image']; ?>">
                <source src="assets\videos\<?php echo $row['video']; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="card-body">
            <h2><?php echo $row['title']; ?></h2>
            <p class="title"><?php echo $row['author']; ?></p>
            <p><?php echo $row['email']; ?></p>
            </div> 
        </div>
    </div>
    <?php
        endwhile;
    endif;
    ?>
</div>

<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
