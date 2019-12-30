<?php
    include_once "isChecked_function.php";
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Input Sanitize</title>
</head>
<body>
   <div class="container mt-5">
       <div class="row justify-content-center">
           <div class="card col-lg-6">
               <div class="card-header">
                   <h1 class="text-center">Input Sanitization</h1>
                   <p>
                       <?php
                            $name='';
                            $email='';
                            $checked='';
                            if (isset($_REQUEST['ch']) && $_REQUEST['ch']==1){
                                $checked='checked';
                            }

                       ?>
                       <?php
                            if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])){
                                $name= filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
                            }?>
                            <?Php if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])){
                                $email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
                       } ?>

                   </p>
                   <p>Name: <?php echo $name?> <br>
                      Email: <?php echo $email?>
                   </p>
               </div>
               <div class="card-body">
                   <form action="" method="post">
                       <div class="form-group">
                           <label for="n">Name</label>
                           <input type="text" name="name" id="n" class="form-control" value="<?php echo $name?>">
                       </div>
                       <div class="form-group">
                           <label for="e">Email</label>
                           <input type="text" name="email" id="e" class="form-control" value="<?php echo $email?>"
                       </div>
                       <div class="form-check">
                           <input type="checkbox" name="ch" value="1" class="form-check-input" id="exampleCheck1" <?php echo $checked?>>
                           <label class="form-check-label" for="exampleCheck1">Check me out</label>
                       </div>
                       <label class="form-check-label">Select Some fruits</label> <br>
                       <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits','orange')?> >
                       <label class="form-check-label">Orange</label> <br>
                       <input type="checkbox" name="fruits[]" value="apple" <?php isChecked('fruits','apple')?>>
                       <label class="form-check-label">Apple</label> <br>
                       <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits','mango')?>>
                       <label class="form-check-label">Mango</label> <br>
                       <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits','lemon')?>>
                       <label class="form-check-label">Lemon</label> <br>
                       <div class="form-group text-center">
                           <input type="submit" name="btn" class="btn btn-dark">
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
