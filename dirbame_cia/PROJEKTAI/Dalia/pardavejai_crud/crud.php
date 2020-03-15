<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />

    <?php require_once 'process.php'; ?>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
        <div class="container">
        <?php
            $mysqli = new mysqli('localhost','root','root','parduotuve') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM pardavejai") or die($mysqli->error);
            ?>

            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Skyrius</th>
                            <th >Veiksmas</th>
                        </tr>
                    </thead>

            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td>
                            <a href="crud.php?edit=<?php echo $row['id']; ?>"
                               class="btn btn-success">Redaguoti</a>
                            <a href="process.php?delete=<?php echo $row['id']; ?>"
                               class="btn btn-danger">Ištrinti</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </table>
            </div>
            <?php

            function pre_r( $array ) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>

        <div class="row justify-content-center">
        <form action="process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
            <label>Vardas</label>
            <input type="text" name="name" class="form-control"
                   value="<?php echo $name; ?>" placeholder="Įvesti vardą">
            </div>

            <div class="form-group">
            <label>Pavardė</label>
            <input type="text" name="lname" class="form-control"
                   value="<?php echo $lname; ?>" placeholder="Įrašyti pavardę">
            </div>

            <div class="form-group">
            <label>Skyrius</label>
            <input type="text" name="location"
                   value="<?php echo $location; ?>" class="form-control" placeholder="Įrašyti skyrių">
            </div>
            <div class="form-group">
            <?php
            if ($update == true):
            ?>
                <button type="submit" class="btn btn-success" name="update">Atnaujinti</button>
            <?php else: ?>
                <button type="submit" class="btn btn-success" name="save">Išsaugoti</button>
                <a href="../registration_login/admin/home.php"class="btn btn-success" >Grįžti į admin</a>
            <?php endif; ?>
            </div>
        </form>
        </div>
        </div>
