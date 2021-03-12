@extends('layout/main')

@section('title', 'Bendahara')

@section('navbar')
<nav class="navbar navbar-expand-sm bg-info navbar-dark shadow sticky-top">

      <!--brand-->
          <a class="navbar-brand col-sm-2" href="">Public_OR</a>

      <!--LInks-->
      <ul class="navbar-nav" style="width: 100%; height: 2%">
        <li>

        </li>
        <li>
          <a class="nav-link text-light"  href="#home">Home</a>
        </li>
        <li>
          <a class="nav-link text-light"  href="#menu1">Agenda</a>
        </li>
        <li>
          <a class="nav-link text-light"  href="#menu2">Tugas form-group</a>
        </li>
        <li class="col-md-5 col-sm-4" style="margin-left: 25%">
          <form class='form-inline' >
              <input class="form-control col-md-8" type="text" placeholder="Search...">
              <button class="btn btn-success text-light" type="submit">Search</button>
          </form>
        </li>
        <li>
      	<a href="..\index.php"><input type="button" class='btn btn-danger' name="logout" value="Logout"></a><br>
        </li>
       </ul>
      <!--</header> -->
      </nav>
@endsection

@section('container')


<div class='container-fluid'>
     <div class="row">
        <nav id="sidebarMenu" class="col-lg-2 d-md-block bg-light bd-sidebar collapse">
          <div class="sidebar-sticky">
            <ul class="nav flex-column"><br><br>
            <li>
              <h3 font-family="Nimbus Mono L, Bold">Bendahara</h3>
            </li>
              <li class="nav-item">
                <a clasS="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a clasS="nav-link text-dark" href="#">
                    <span data-feather="users"></span>
                    Data user
                </a>
              </li>
              <li class="nav-item" data-toggle='modal' data-target='#modal-laporan'>
                <a class="nav-link text-dark" href="#">
                    <span data-feather="send"></span>
                    Upload Laporan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#" data-target="#demo" data-slide-to="0">
                    <span data-feather="book-open"></span>
                    Laporan Keuangan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#" data-target="#demo" data-slide-to="1">
                    <span data-feather="book-open"></span>
                    Tampilkan Jadwal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#" data-target="#demo" data-slide-to="2">
                    <span data-feather="grid"></span>
                    Semua Unit
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9">
        <h4 style="font-family: arial black; margin-top: 10px">Laporan Keuangan</h4><br>
    
        <div style="margin-top: 30px">
          <div id="demo" class="carousel slide" data-ride="carousel">
  
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
  
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active bg-secondary">
                <div class="card-columns" style="margin: 20px 40px 40px 40px; overflow-x: scroll; height: 400px">
                  <?php for($x=1; $x<=12; $x++) {?>
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Laporan Keuangan</h4>
                        <p class="card-text">Laporan_keuangan_DK_2k19...</p>
                        <a href="#" class="card-link">Open</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <div class="carousel-item bg-danger">
                <div class="card-columns" style="margin: 20px 40px 40px 40px; overflow-x: scroll; height: 400px">
                  <?php for($x=1; $x<=12; $x++) {?>
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Jadwal Acara</h4>
                        <p class="card-text">Kunjungan Turkey Bbid</p>
                        <a href="#" class="card-link">Open</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <div class="carousel-item bg-success">
                <div class="card-columns" style="margin: 20px 40px 40px 40px; overflow-x: scroll; height: 400px">
                  <?php for($x=1; $x<=12; $x++) {?>
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Manager</h4>
                        <p class="card-text">Quality Control</p>
                        <a href="#" class="card-link">Open</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
  
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon" style="margin-right: 110px"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon" style="margin-left: 110px"></span>
            </a>
  
          </div>
        </div>
        
        </main>
     </div>
    </div>    

    <script>
        feather.replace()
    </script>
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="javascript.js"></script>
@endsection
