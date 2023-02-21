<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel= "stylesheet" href="css/style1.css">
    <title>Sign-up</title>
</head>
<body>
    <div class= "container">

        <form action= "php/signIn.php"
                method= "post">

            <h4 class = "display-4 ">Sign-Up</h4>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-warning" role= "alert">
                    <?php echo $_GET['error']; ?>
                
                </div>
            <?php } ?>
            

            <div class="form-group">
                <label for=" user email">User Email:</label>
                <input type="email" 
                        class="form-control"
                        id="email"
                        name= "email"
                        value = "<?php if(isset($_GET['email']))
                                            echo($_GET['email']); ?>"
                        placeholder="Enter User email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" 
                        class="form-control"
                        id="password"
                        name= "password"
                        value = "<?php if(isset($_GET['password']))
                                            echo($_GET['password']); ?>"
                        placeholder="Enter Password">
            </div>
            <button type="submit"
                    class="btn btn-default"
                    name= "signIn">submit</button>  
        </form>
    </div>
    
</body>
</html>