<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container-fluid mt-3">
          <div class="card mx-auto w-25">
          <p class="h3 mx-auto mt-3">REGISTER</p>
              <div class="card-body">
                  <form action="../actions/register.php" method="post">
                      <label for="first-name">First Name</label>
                      <input type="text" name="first_name" id="first-name" class="form-control" autofocus required>

                      <label for="last-name">Last Name</label>
                      <input type="text" name="last_name" id="last-name" class="form-control" autofocus required>

                      <label for="username">Username</label>
                      <input type="text" name="username" id="username" class="form-control" maxlength="15" autofocus required>

                      <label for="">Password</label>
                      <input type="password" name="password" id="password" class="form-control" autofocus required>

                      <button type="submit" class="btn btn-success mt-2 w-100" minlength="8">REGISTER</button>
                      <p class="text-center mt-3 small">Registered already? <a href="../views/">Log in.</a></p>
                  </form>
              </div>
          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>