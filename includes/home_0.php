<style>
    .button {
  background-color: #38B3E3;
  border: none;
  color: white;
  padding: 10px;
  padding-right: 30px;
  padding-left: 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
.button4 {border-radius: 12px;}

.row-fluid{ background-image: url("img/book.jpg")}

</style>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<div class="row-fluid" style :  background-image: url("img/book.jpg") >
<section class="form-02-main">
        <form method="post" action="checklogin.php">
        <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
        <div class="logo rounded-circle">
                  <img src="img/user.png">
                </div>
        <section class="form-02-main">
            <label align="center">
                <input name="username" id="username" type="text" value="" placeholder="Username..." class="form-control _ge_de_ol" autofocus>
            </label>
            <label align="center">
                <input name="password" id="password" type="password" value="" placeholder="Password..." class="form-control _ge_de_ol">
            </label>
            <label align="center">
                <select name="type" class="form-control _ge_de_ol">
                  <option value=1>Petugas</option>
                  <option value=2>Dosen</option>
                  <option value=3>Mahasiswa</option>
                </select>
            </label>
            <div class="form-group">
            <label align="center">
                <input name="login" id="login" type="submit" value="Login" class="button button4">
            </label>
</div>
</div>
                </div>
              </div>

  
                <?php
                if(!isset($page)) {
                } else
                    include("includes/p_". $page .".php");
              ?>

            </div><!--/span-->
        </div><!--/row-->
    </div><!--/span-->
</div>

<div>
    <div align="center" margin="20px">
        <p>Copyright © 2024 digilibme-PENS.com. All Right Reserved<br>Design by Kelompok 3</p>
    </div>
</div>