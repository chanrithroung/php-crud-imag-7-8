<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="them.css">
    <title>Create | Product</title>
</head>
<body class="bg-light">

    <div class="container-fluid bg-dark text-white p-5 text-center">
        <h3>PHP CRUD IMAGE</h3>
        <button class="btn mt-4 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"x > <i class="bi bi-plus-circle-fill"></i> Add products </button>
    </div>

    <div class="container p-4 bg-white shadow mt-5">
        <h3>List Product</h3>
        <table class="table ">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Thumbnail</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr class="align-middle">
                    <td>1001</td>
                    <td>Computer</td>
                    <td> 1200$ </td>
                    <td> <img class="thumbnail" src="https://www.asus.com/media/Odin/Websites/global/Series/9.png" alt="thumbnail"> </td>
                    <td> <span class="hgithlight"> 2024-12-24 </span> </td>
                    <td>
                        <button class="btn btn-primary me-1 shadow"> <i class="bi bi-pencil-square"></i> </button>
                        <button class="btn btn-danger shadow"> <i class="bi bi-x-circle"></i> </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="bi bi-x-square-fill"></i> Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="bi bi-cloud-download-fill"></i> Save Product</button>
            </div>
        </form>
      </div>
    
    </div>
  </div>
</div>