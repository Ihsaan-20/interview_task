<?php 
require_once ('config.php');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <?php 
                    $sl = "SELECT * FROM `students` INNER JOIN `fathers` ON students.std_id = fathers.f_id ";
                    $result = mysqli_query($conn, $sl);
                    if(mysqli_num_rows($result) > 0){
                        ?>
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Father's Name Dpt</th>
                                        <th scope="col">Student Dpt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    while ($dt = mysqli_fetch_assoc($result)){
                                        ++$count;
                                        ?>
                                        <tr>
                                            <td><?php echo $count?></td>
                                            <td><?php echo $dt['std_name']?></td>
                                            <td><?php echo $dt['f_name']?></td>
                                            <td><?php echo $dt['std_dpt']?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>