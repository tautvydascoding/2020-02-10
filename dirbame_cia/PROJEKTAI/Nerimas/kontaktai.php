<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body style="background-color: #99ccff">
    <h1>Mūsų puslapio kontaktai</h1><br />
    <br />
    <br />
<div class="row justify-content-center">
<h2>    Telefono numeris: <font color="red"> +37067050*73</font></h2>
</div>
<div class="row justify-content-center">
<h3>    Facebook: </h2>
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Finterestingthoughtss%2F&tabs&width=340&height=154&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=1840901772874724" width="340" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
<!-- <h2>Telefono numeris: +37067050*73</h2> -->

</div>



    <div class="row justify-content-center">
        <form action="email.php" method="post">
    <div class="form-group">
    <label><b>Jūsų vardas</b></label>
    <input type="text" name="vardas" class="form-control" value="" placeholder="Įveskite savo vardą" >
    </div><div class="form-group">
    <label><b>Jūsų el. pašto adresas</b></label>
    <input type="text" name="pastas" class="form-control" value="" placeholder="Įveskite savo el. pašto adresą" >
   </div>
   <div class="form-group">
      <label><b>Tema</b></label>
      <input type="text" name="sritis" class="form-control" value="" placeholder="Įveskite klausimo paskirtį">
     </div>
     <textarea name="klausimas" rows="8" cols="80">
     </textarea><br>
     <input type="hidden" name="kodas" value="">
     <button type="submit" class="btn btn-secondary"><b>Klauskite!</b></button>
     <button type="submit"  class="btn btn-danger btn-sm"><a href="index.php">Grįžti atgal</button>



           <script type="text/javascript" src="libs/jQuery/jquery-3.3.1.min.js" ></script>
           <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js">    </script>
           <!--  mano js pats zemiausias!!!-->
           <script type="text/javascript" src="master.js"></script>
</body>
</html>
