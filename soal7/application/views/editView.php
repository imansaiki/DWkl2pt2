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
                <form action="<?php echo base_url('main/editBuku/'.$buku['id']);?>" method="post">
                    <input type="text" name="name" placeholder="name" value="<?php if (isset($buku['name'])) { echo $buku['name'];} ?>">
                    <input type="text" name="deskripsi" placeholder="deskripsi" value="<?php if (isset($buku['deskripsi'])) {echo $buku['deskripsi'];}?>">
                    <input type="number" name="stok" placeholder="stok" value="<?php if (isset($buku['stok'])) {echo $buku['stok'];}?>">
                    <p>
      <label>
        <input name="category" type="radio" checked value="1" />
        <span>novel</span>
      </label>
    </p>
    <p>
      <label>
        <input name="category" type="radio" value="2" />
        <span>teknik</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="category" type="radio" value="3"  />
        <span>komik</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="category" type="radio" value="4"  />
        <span>biografi</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="category" type="radio" value="5"  />
        <span>komputer</span>
      </label>
    </p>
    
                    <input type="hidden" name="submit" value="submit">
                    <input type="hidden" name="id" value="<?php if (isset($buku['id'])) {echo $buku['id'];}?>">
                    <button type="submit" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
    <body>
</html>