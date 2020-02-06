<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Simple PHP CMS</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <h2>Login page</h2>
            <form action="process_login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" id="password" class="btn btn-primary">
                </div>
            </form>
        </div> 
    </body>
</html>