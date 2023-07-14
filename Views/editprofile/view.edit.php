<?php 
// this function is for edit functionality
    if (isset($_POST['edit'])) { 
        $edit = $_POST['edit']; 
    
      try { 
            $stmt=$app['db']->query("SELECT * FROM login WHERE id ='$edit' "); 
            $values=$stmt->fetchAll(PDO::FETCH_OBJ); 
            // var_dump($values);
        } catch (PDOException $e) { 
            die($e->getMessage()); 
        } 
    }
   ?>
<!-- ========================================================================= -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Page</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>


    <?php foreach($values as $value): ?>
    <form action="/update" method="post">
        <h2>Edit</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="update_user" pattern="[a-z,A-Z]*" autocomplete="on" placeholder="name" required value="<?= $value->username ?>" >

        <label for="email">Email</label>
        <input type="email" id="email" name="upemail" placeholder="email" required value="<?= $value->email ?>" >

        <label for="password">Password</label>
        <input type="password" id="password" name="uppassword" placeholder="password" required value="<?= $value->password ?>" > <i
            class="fa-sharp fa-regular fa-eye-slash"></i>


        <input hidden value="<?= $value->id ?>" name="upuser">
        <button type="submit" name="update">UPDATE</button>
    </form>
    <?php endforeach; ?>
</body>
</html>
 
