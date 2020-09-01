
    
    <?php include '../include/session.php'; ?>
    <?php include '../include/connexion.php'; ?>
    <?php include '../include/header.php'; ?>
    



   <?php 
   
  


  $id=$_GET['id'];
    $query = $bd->query("select * from article where idArticle=' $id'");

    $data5 = $query->fetch();

if(isset($_POST['submit'])){
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image =$_FILES['image']['name'];
    
    $folder = 'img/';
    
    $date = $_POST['date'];
   
    

    
    $id=$_GET['id'];
   


    $req = $bd->prepare('update article set titre=?, description=?, image=?, date=? where idArticle = ?');
    $req->execute([$titre, $description, $folder.$image,  $date, $id]);
   
    header('location: ../categorie.php?id='.$data5['idCategorie']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <script>
                (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
        }
        form.classList.add('was-validated');
        }, false);
        });
        }, false);
        })();
    </script>

<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center p-4">modifier un article</h1>

            </div>
            <div class="col-md-8 mx-auto">
               <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    
                    <div class="form-group">
                        <label for="title" >titre</label>
                        <input  value="<?= $data5['titre'] ?>"type="text" name="titre" id="title"  class="form-control" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea   name="description" id="description"class="form-control"  rows="3" required><?= $data5['description'] ?></textarea >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="image">Image d'article : </label>
                    <input value="<?= $data5['image'] ?>"type="file" name="image" class="form-control" id="image" required>

                    <div class="valid-feedback">
                            Looks good!
                    </div>    
                      
                    </div>
                   

                    

                
                    <div class="form-group">
                        <label for="date">date</label>
                        <input value="<?= $data5['date'] ?>" type="text" name="date" id="date"  class="form-control" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                   
                   
                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-warning btn-block" style="margin-top: 20px;">ajouter</button>
                    </div>
                    </form>
                </div>
               </div>
            </div>
        </div>
    </div>




    </div>
    </div>
  
  </script>
 
</body>
</html>

