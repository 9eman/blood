<br>
<div class="col-11 mx-auto">
    <h2>Physiotherapy</h2>
    <br>
    <p>Click on the box to complete the treatment.</p>
</div>
<div class="row col-11 mx-auto">
    <?php
        $sql = "SELECT * FROM physiotherapy ORDER BY id DESC";
        $results = $conn->query($sql);
        if($results->num_rows != 0):
            while ($row = $results->fetch_assoc()):
    ?>
    <div class="column">
        <div class="card">
            <img src="assets\images\<?php echo $row['image']; ?>" alt="Mike" style="width:100%" height="200">
            <div class="card-body">
            <h2><?php echo $row['title']; ?></h2>
            <p class="title"><?php echo $row['author']; ?></p>
            <p><?php echo $row['email']; ?></p>
            <p><a href="?p=watch&v=<?php echo $row['id']; ?>" class="button">Watch the video</a>    </p>
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


