<?php
if (isset($_POST['new-user'])) {
    // we define our ueser input after we parse any inserted input and escape it for security reasons
    $first_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['first_name']));
    $last_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['last_name']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));
    $encrpted_pass = password_hash($password, PASSWORD_BCRYPT);
    
    // Insert user data into the database
    $sql = "INSERT INTO user_auth(first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$encrpted_pass')";

    if ($conn->query($sql) == true) {
        header("Location: ?p=admin&s=users");
    } else {
        // Incorrect password
        echo '<p class="text-white bg-danger">Sorry sonething went wrong.</p>';
    }
}

if(isset($_POST['delete-user'])){
    $item = mysqli_real_escape_string($conn, htmlspecialchars($_POST['id']));

    // delete user from database
    $sql = "DELETE FROM user_auth WHERE id = '$item'";

    if ($conn->query($sql) == true) {
        header("Location: ?p=admin&s=users");
    } else {
        // Incorrect password
        echo '<p class="text-white bg-danger">Sorry sonething went wrong.</p>';
    }

}


if (isset($_POST['login'])) {
    // we define our ueser input after we parse any inserted input and escape it for security reasons
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));

    // Retrieve user data from the database
    $sql = "SELECT * FROM user_auth WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        // Verify password
        if (password_verify($password, $stored_password)) {
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['logged_in'] = true;
            // Login successful
            header("Location: ?p=admin");
        } else {
            // Incorrect password
            echo '<p class="text-white bg-danger">Incorrect password.</p>';
        }
    } else {
        // User does not exist, but for secruity and privacy reasons we won't tell and only say wrong email or password 
        echo '<p class="text-white bg-danger">Wrong email or password, try again.</p>';
    }
}

if(isset($_POST['new-equipment'])){
    // Handle new equipment form submission
    $first_nameh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['first_nameh']));
    $last_nameh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['last_nameh']));
    $emailh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['emailh']));
    $contact_numberh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['contact_numberh']));
    $cityh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['cityh']));
    $addressh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['addressh']));
    $equipmenth = mysqli_real_escape_string($conn, htmlspecialchars($_POST['equipmenth']));
    $equipment_photo = mysqli_real_escape_string($conn, htmlspecialchars($_FILES['equipment_photo']['name']));

    // Upload profile photo
    $target_dir = "assets/uploads/";
    $target_file = $target_dir . basename($_FILES["equipment_photo"]["name"]);
    move_uploaded_file($_FILES["equipment_photo"]["tmp_name"], $target_file);

    $sql = "INSERT INTO equipments(first_nameh, last_nameh, emailh, contact_numberh, cityh, addressh, equipment, equipment_photo) VALUES ('$first_nameh', '$last_nameh', '$emailh', '$contact_numberh', '$cityh', '$addressh', '$equipmenth', '$equipment_photo')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ?p=thankyou");
    } else {
        echo '<p class="text-white bg-danger">Sorry sometging went wrong, try again.</p>';
    }
}

if(isset($_POST['delete-equipment'])){
    $item = mysqli_real_escape_string($conn, htmlspecialchars($_POST['id']));

    $sql = "DELETE FROM equipments WHERE id = '$item'";

    if ($conn->query($sql) == true) {
        header("Location: ?p=admin&s=equipments");
    } else {
        // Incorrect password
        echo '<p class="text-white bg-danger">Sorry sonething went wrong.</p>';
    }
}

if(isset($_POST['new-feedback'])){
    // Handle new equipment form submission
    $phoneh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phoneh']));
    $emailh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['emailh']));
    $genderh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['genderh']));
    $evaluateh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['evaluateh']));
    $helph = mysqli_real_escape_string($conn, htmlspecialchars($_POST['helph']));
    $viewh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['viewh']));
    $commentsh = mysqli_real_escape_string($conn, htmlspecialchars($_POST['commentsh']));

    $sql = "INSERT INTO feedbacks(phoneh, emailh, genderh, evaluateh, helph, viewh, commentsh) VALUES ('$phoneh', '$emailh', '$genderh', '$evaluateh', '$helph', '$viewh', '$commentsh')";

    if (mysqli_query($conn, $sql)) {
        header("Location: /?p=thankyou");
    } else {
        echo '<p class="text-white bg-danger">Sorry sometging went wrong, try again.</p>';
    }
}

if(isset($_POST['delete-feedback'])){
    $item = mysqli_real_escape_string($conn, htmlspecialchars($_POST['id']));

    $sql = "DELETE FROM feedbacks WHERE id = '$item'";

    if ($conn->query($sql) == true) {
        header("Location: ?p=admin&s=feedback");
    } else {
        // Incorrect password
        echo '<p class="text-white bg-danger">Sorry sonething went wrong.</p>';
    }
}

if(isset($_POST['new-blood'])){
    // Handle new equipment form submission
    $first_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['first_name']));
    $last_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['last_name']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $contact_number = mysqli_real_escape_string($conn, htmlspecialchars($_POST['contact_number']));
    $address = mysqli_real_escape_string($conn, htmlspecialchars($_POST['address']));
    $date_of_birth = mysqli_real_escape_string($conn, htmlspecialchars($_POST['date_of_birth']));
    $blood_group = mysqli_real_escape_string($conn, htmlspecialchars($_POST['blood_group']));

    // Insert user data into the database
    $sql = "INSERT INTO blood_donors(first_name, last_name, email, contact_number, address, date_of_birth, blood_group) VALUES ('$first_name', '$last_name', '$email', '$contact_number', '$address', '$date_of_birth', '$blood_group')";
    if (mysqli_query($conn, $sql)) {
        header("Location: ?p=thankyou");
    } else {
        echo '<p class="text-white bg-danger">Sorry sometging went wrong, try again.</p>';
    }
}

if(isset($_POST['delete-blood'])){
    $item = mysqli_real_escape_string($conn, htmlspecialchars($_POST['id']));

    $sql = "DELETE FROM blood_donors WHERE id = '$item'";

    if ($conn->query($sql) == true) {
        header("Location: ?p=admin&s=blood");
    } else {
        // Incorrect password
        echo '<p class="text-white bg-danger">Sorry sonething went wrong.</p>';
    }
}

if(isset($_POST['new-physiotherapy'])){
    // Handle new equipment form submission
    $title = mysqli_real_escape_string($conn, htmlspecialchars($_POST['title']));
    $author = mysqli_real_escape_string($conn, htmlspecialchars($_POST['author']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['emailh']));
    $image = mysqli_real_escape_string($conn, htmlspecialchars($_FILES['image']['name']));
    $video = mysqli_real_escape_string($conn, htmlspecialchars($_FILES['video']['name']));

    // Upload profile photo
    $target_img_dir = "assets/images/";
    $target_file = $target_img_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $target_vid_dir = "assets/videos/";
    $target_file = $target_vid_dir . basename($_FILES["video"]["name"]);
    move_uploaded_file($_FILES["video"]["tmp_name"], $target_file);

    $sql = "INSERT INTO physiotherapy(title, author, email, image, video) VALUES ('$title', '$author', '$email', '$image', '$video')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ?p=admin&s=physiotherapy");
    } else {
        echo '<p class="text-white bg-danger">Sorry sometging went wrong, try again.</p>';
    }
}

if(isset($_POST['delete-physiotherapy'])){
    $item = mysqli_real_escape_string($conn, htmlspecialchars($_POST['id']));

    $sql = "DELETE FROM physiotherapy WHERE id = '$item'";

    if ($conn->query($sql) == true) {
        header("Location: ?p=admin&s=physiotherapy");
    } else {
        // Incorrect password
        echo '<p class="text-white bg-danger">Sorry sonething went wrong.</p>';
    }
}

?>