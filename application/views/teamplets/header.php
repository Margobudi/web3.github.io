<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      {
                margin: 0px;
                padding: 0;
                outline: 0;
                font-family: 'Open Sans', sans-serif;
                border:0px;
               
            
            }
            body{
            font-family: sans-serif;
                        height: 100vh;
                        background-image:url(../../../background/img/cream.jpg);
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
            }
      nav{
         margin-bottom: 10px;
         padding: 10% auto;
         background-color: rgba(238, 235, 241, 0.514);
         
         border-bottom: solid:1px;
         
      }
      article{
         padding-top:0px;
         padding-bottom: 0%;
      }
     header{
        padding: top 0;px;
        padding: bottom 0;px;
        
     }
      .img{
         margin-top: 5px;
        
      }
      .h3{
         margin: top 10%;
         
         
      }
      .p{
         margin: 10px:auto;
      }
      footer{
         padding: 0% auto%;
        
      }
      p{
         margin: auto;
         padding-left: 0%;
      }
      hr{
         padding-top: 0% ;
      }
      div{
         margin-bottom: auto;
         padding-top: 0% ;
      }
                
   </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
        <a class="nav-link disabled">MARGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup ">
        <div class="navbar-nav text-auto">
            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>blog">Home</a>
            <a class="nav-link" href="<?= base_url(); ?>About">About</a>
            <a class="nav-link" href="<?= base_url(); ?>Contac">Contac</a>
        </div>
        </div>
  </div>
</nav>