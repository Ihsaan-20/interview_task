<!doctype html>
<html lang="en">

<head>
  <title>add data</title>
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
            <div class="col-lg-6 mx-auto">
                <form action="process.php" method="post">
                    <div class="mb-3">
                        <label for="">Student Name:</label>
                        <input type="text" class="form-control" name="std_name">
                    </div>
                    <div class="mb-3">
                        <label for="">Student Dpt:</label>
                        <input type="text" class="form-control" name="std_dpt">
                    </div>
                    <div class="mb-3">
                        <label for="">Father's Name:</label>
                        <input type="text" class="form-control" name="f_name">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-outline-primary" name="add" type="submit">Add Record</button>
                    </div>
                </form>
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