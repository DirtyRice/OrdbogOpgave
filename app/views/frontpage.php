<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Opgave til ordbog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=login">Log ind</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=admin">admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=createnewuser">Opret ny bruger</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=logout">Log ud</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        <h1>Forside</h1>
        <p class="lead">Forsiden viser, hvem der er logged ind.</p>
        <?php if(isset($_SESSION['username'])){ ?>
        <p>Hej <?= $_SESSION['username']; ?></p>
        <?php }else{ ?>
        <p>Ingen er logged ind</p>
        <?php } ?>
    </div>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>