<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../src/bootstrap.min.css">
</head>
<body>
      <div class="container">
        <div class="row">
        <div class="col-md-4">
        </div>
            <div class="col-md-4">
            <br><br><br>                
            <div class="card">
                <div class="card-header text-center">
                <div class="card-body">

                    <form method="POST" action="../../logica/auth.php">
                    <div class = "form-group">


                    <label>Usuario:</label>
                    <input required type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Escribe tu usuario">
                    </div>

                    <br> 
                    <div class="form-group">
                    <label>Contraseña:</label>
                    <input required type="password" class="form-control" name="password" placeholder="Escribe tu contraseña">
                    </div>

                    <br>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">A matear</button>
                    </div>
                    </form>
                    
                    

                </div>
            </div>    
        
        <br>
          </div>
        </div>
      </div>
  </body>
</html>