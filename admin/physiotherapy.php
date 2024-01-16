<div class="col-md-11 mx-auto m-3">
    <h2>Physiotherapy List</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?p=admin">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Physiotherapy List</li>
        </ol>
        <a href="?p=admin&s=new-physiotherapy" class="btn btn-info mb-3">&#43; Add</a>
    </nav>
    <table class="table">
        <tr class="m-3">
            <th scope="col">title</th>
            <th scope="col">author</th>
            <th scope="col">E-mail</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    <?php
        $sql = "SELECT * FROM physiotherapy ORDER BY id DESC";
        $results = $conn->query($sql);
        if($results->num_rows != 0):
            while ($row = $results->fetch_assoc()):
    ?>
        <tr class="m-3">
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><a href="?p=watch&v=<?php echo $row['id']; ?>" class="btn btn-success">Watch</a></td>
            <td>
                <form method="post" onsubmit="return confirm('Are you sure to delete this?');">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id" />
                    <button class="btn btn-danger align-right" name="delete-physiotherapy">&times; Delete</button>
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