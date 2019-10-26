<!DOCTYPE HTML>
<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <header>
      <nav class="blue darken-1">
        <div class="container">
          <div class="nav-wrapper">
            <a href="<?php echo base_url()?>" class="brand-logo">Perpus</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href=""></a></li>
            </ul>
          </div>
        </div>
        <div class="progress" style="display:none;">
          <div class="indeterminate"></div>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Olah Data</a></li>
      </ul>

    </header>
    <main>
        <div class="" style="padding:0px 35px">
            <div class="row">
                <div class="section"><a class="waves-effect waves-light btn" href="<?php echo base_url('main/tambahbuku');?>">Tambah Buku</a></div>
            </div>
            <div class="row">
                <?php foreach($buku as $row){?>
                <div class="col l3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src=<?php echo base_url("assets/NA.jpg");?>>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?php echo $row["name"];?><i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $row["name"];?><i class="material-icons right">close</i></span>
                            <p>Stok : <?php echo $row["stok"];?></p>
                            <p>Kategori : <?php echo $row["category"];?></p>
                            <p>Deskripsi : <?php echo $row["deskripsi"];?></p>
                            <a class="purple waves-effect waves-light btn-small" href="<?php echo base_url('main/editbuku/'.$row['id']);?>">edit</a>
                            <a class="red waves-effect waves-light btn-small" href="<?php echo base_url('main/deletebuku/'.$row['id']);?>" >delete</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>
    <body>
</html>