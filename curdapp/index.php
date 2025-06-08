<?php include('include/header.php'); ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>PHP-CURD
                            <a href="res.php" class="btn btn-primary float-end">Register/Add</a>
                        </h4>

                    </div>
                    <div class="card-body">
                        <table class="table  table-bordered border-secondary">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                     <th scope="col">Phone number</th>
                                      <th scope="col">Edit</th>
                                       <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kundan</td>
                                        <td>Rathore</td>
                                        <td>kundanrathore450@gmail.com</td>
                                        <td>Kundan@7348</td>
                                          <td>8########3</td>
                                           <td> <a href="res.php" class="btn btn-outline-info ">Edit</a></td>
                                             <td> <a href="res.php" class="btn btn-outline-danger ">Delete</a></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>
<?php include('include/footer.php'); ?>
