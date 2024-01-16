<div class="col-md-11 mx-auto m-3">
    <h2>Blood Donors List</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?p=admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blood Donors List</li>
        </ol>
    </nav>
    <table class="table">
        <tr class="m-3">
            <th scope="col">Date</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Contact number</th>
            <th scope="col">Address</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Blood group</th>
            <th scope="col"></th>
        </tr>
    <?php
        $sql = "SELECT * FROM blood_donors ORDER BY id DESC";
        $results = $conn->query($sql);
        if($results->num_rows != 0):
            while ($row = $results->fetch_assoc()):
    ?>
        <tr class="m-3">
            <!-- formting the date day/month/year using PHP built-in sotrtime function -->
            <td><?php echo date( "d/m/Y", strtotime($row['created_at'])); ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact_number']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td>
                <form method="post" onsubmit="return confirm('Are you sure to delete this?');">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id" />
                    <button class="btn btn-danger align-right" name="delete-blood">&times; Delete</button>
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