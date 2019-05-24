<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <title>Dashboard</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-bark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">CMS System</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.html" class="nav-link active">Posts</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link active">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link active">Users</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-user"></i>Welcome User
                </a>
                <div class="dropdown-menu">
                  <a href="profile.html" class="dropdown-item">
                    <i class="fas fa-user-circle"></i> Profile 
                  </a>
                  <a href="profile.html" class="dropdown-item">
                      <i class="fas fa-user-cog"></i> Setting
                    </a>
                </div>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fas fa-user-times">Logout</i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- HEADER -->
<header id="main-header" class="py-2 my-2 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
          <i class="fas fa-cog"></i>
          Dashboard
        </h1>
      </div>
    </div>
  </div>
</header>
<!-- actions -->
<section id="actions" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModel">
            <i class="fas fa-plus"></i>Add Post
        </a>
      </div>
      <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModel">
              <i class="fas fa-plus"></i>Add Category
          </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModel">
                <i class="fas fa-plus"></i>Add Post
            </a>
          </div>
    </div>
  </div>
</section>
<!-- Modals -->
<!-- add post modal -->
<div class="modal fade" id="addPostModal">
  <div class="model-dialog modal-lg">
    <div class="model-content">
      <div class="model-header bg-primary text-white">
        <h5 class="modal-title">Post title</h5>
      </div>
    </div>
  </div>
</div>






  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>