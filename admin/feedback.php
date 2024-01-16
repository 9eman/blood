<div class="col-md-11 mx-auto m-3">
    <h2>Feedback entries List</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?p=admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Feedback entries List</li>
        </ol>
    </nav>
    <table class="table">
        <tr class="m-3">
            <th scope="col">Date</th>
            <th scope="col">Phone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Gender</th>
            <th scope="col">Evaluation</th>
            <th scope="col">Helpfull</th>
            <th scope="col">Site View</th>
            <th scope="col">Comments</th>
            <th scope="col"></th>
        </tr>
    <?php
        $sql = "SELECT * FROM feedbacks ORDER BY id DESC";
        $results = $conn->query($sql);
        if($results->num_rows != 0):
            while ($row = $results->fetch_assoc()):
    ?>
        <tr class="m-3">
            <!-- formting the date day/month/year using PHP built-in sotrtime function -->
            <td><?php echo date( "d/m/Y", strtotime($row['created_at'])); ?></td>
            <td><?php echo $row['phoneh']; ?></td>
            <td><?php echo $row['emailh']; ?></td>
            <td><?php echo $row['genderh']; ?></td>
            <td><?php echo $row['evaluateh']; ?></td>
            <td><?php echo $row['helph']; ?></td>
            <td><?php echo $row['viewh']; ?></td>
            <td><?php echo $row['commentsh']; ?></td>
            <td>
                <form method="post" onsubmit="return confirm('Are you sure to delete this?');">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id" />
                    <button class="btn btn-danger align-right" name="delete-feedback">&times; Delete</button>
                </form>
            </td>
        </tr>
    <?php
        endwhile;
    endif;
    ?>
    </table>

</div>

<div style="padding: 5%;"></div>