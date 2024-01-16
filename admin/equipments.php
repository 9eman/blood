<div class="col-md-11 mx-auto m-3">
    <h2>Equipment Donation List</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?p=admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Equipment Donation List</li>
        </ol>
    </nav>
    <table class="table">
        <tr class="m-3">
            <th scope="col">Date</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Contact number</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">equipment</th>
            <th scope="col">Equipment Photo</th>
            <th scope="col"></th>
        </tr>
    <?php
        $sql = "SELECT * FROM equipments ORDER BY id DESC";
        $results = $conn->query($sql);
        if($results->num_rows != 0):
            while ($row = $results->fetch_assoc()):
    ?>
        <tr class="m-3">
            <td><?php echo date( "d/m/Y", strtotime($row['created_at'])); ?></td>
            <td><?php echo $row['first_nameh']; ?></td>
            <td><?php echo $row['last_nameh']; ?></td>
            <td><?php echo $row['emailh']; ?></td>
            <td><?php echo $row['contact_numberh']; ?></td>
            <td><?php echo $row['cityh']; ?></td>
            <td><?php echo $row['addressh']; ?></td>
            <td><?php echo $row['equipment']; ?></td>
            <td><?php echo $row['date_of_birth']; ?></td>
            <td>
                <img src="assets/uploads/<?php echo $row['equipment_photo']; ?>" class="col-md-6" />
            </td>
            <td>
                <form method="post" onsubmit="return confirm('Are you sure to delete this?');">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id" />
                    <button class="btn btn-danger align-right" name="delete-equipment">&times; Delete</button>
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