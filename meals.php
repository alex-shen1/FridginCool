<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Meal Planning Web Application" />
        <meta name="author" content="Jennifer Long, Alex Shen" />
        <title>Fridgin'Cool - My Meals</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Stylesheets (includes Bootstrap)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Bootstrap Scripts -->
        <script
          src="https://code.jquery.com/jquery-3.6.0.js"
          integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
          crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

        <style>
        </style>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Fridgin'Cool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
            <a class="nav-link active" href="meals.php">Meals</a>
            <a class="nav-link" href="shopping-list.php">Shopping List</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Planner (TBD)</a>
          </div>
        </div>
      </nav>

      <div id="content" class="container py-5">
        <h2 id="pageHeader">My Meals</h2>
        <div class="row py-4">
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Mac & Cheese</h5>
                <p class="card-text">Ingredients: Mac, Cheese, Butter, Milk</p>
                <a href="#" class="btn btn-primary bg-radish">
                  <i class="fas fa-edit" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Broccoli Stir-Fry</h5>
                <p class="card-text">Ingredients: Broccoli, Olive oil, Soy sauce</p>
                <a href="#" class="btn btn-primary bg-radish">
                  <i class="fas fa-edit" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Mashed Potatoes</h5>
                <p class="card-text">Ingredients: Potatoes, Butter, Milk</p>
                <a href="#" class="btn btn-primary bg-radish">
                  <i class="fas fa-edit" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-end">
            <a class="display-3 text-radish" data-toggle="modal" data-target="#mealCreateModal">
              <i class="fas fa-plus-circle" data-toggle="tooltip" data-placement="bottom" title="Add a recipe"></i>
            </a>
          </div>
        </div>
      </div>

      <footer class="primary-footer bg-dark text-white">
        <small class="copyright">&copy; 2021 Jennifer Long (rz5sc), Alex Shen (as5gd)</small>
      </footer>

      <!-- Modal for creating new meals -->
      <div class="modal fade" id="mealCreateModal" tabindex="-1" aria-labelledby="mealCreateLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="mealCreateLabel">Add a recipe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="RecipeTitle">Recipe Title</label>
                  <input type="text" class="form-control" id="RecipeTitle" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="NumServings">Number of servings</label>
                  <select class="form-control" id="NumServings">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="Ingredients">Ingredients</label>
                  <textarea class="form-control" id="Ingredients" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="Recipe">Recipe</label>
                  <textarea class="form-control" id="Recipe" rows="3"></textarea>
                </div>
                <small id="note" class="form-text text-muted">
                  Note: This form is not currently functional (planning to add PHP + database).
                </small>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-success">Save recipe</button>
            </div>
          </div>
        </div>
      </div>

    </body>

    <script>
      // Initialize tooltips
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

      // For input autofocus in the modal
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
    </script>

</html>