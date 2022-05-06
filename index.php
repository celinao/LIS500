<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'navbar.php'; ?>

    <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold">Welcome to our Conference!</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Our conference will have a physical component as well as a virtual component at the same time.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a class="btn btn-primary btn-lg px-4 gap-3" href="schedule.php">Detailed Schedule</a>
          <a class="btn btn-outline-secondary btn-lg px-4" href="registration.php">Registration</a>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
