<!DOCTYPE html>
<html lang="en">
<head>
    <title>Que system</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Que system</a>
        </div>


        <form class="navbar-form navbar-left" action="index.php?person=client&action=waiting" method="post">
            <div class="form-group">
                <input type="code" class="form-control" name="code" id="code" placeholder="code">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <?php

        if($_SESSION['online'] != "is"){
        ?>
        <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" action="index.php?person=specialist&action=login" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </ul>
        <?php
}
?>
    </div>
</nav>

</body>
</html>

