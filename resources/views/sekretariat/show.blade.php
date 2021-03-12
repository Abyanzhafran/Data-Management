@extends('layout/main')

@section('title', 'Sekertariat')

@section('navbar')
<nav class="navbar navbar-expand-sm bg-info navbar-dark shadow">

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- MODAL LAPORAN-->
<form method='post' action='' enctype="multipart/form-data">
  <!-- Modal BREE -->
  <div class='modal fade' id='modal-laporan'>
      <div class='modal-dialog'>
          <div class='modal-content'>

           <!-- Modal header -->
           <div class="modal-header">
               <h4 class="modal-title">Buat Berkas</h4>
               <button type='button' class="close" data-dismiss='modal'></button>
           </div>

           <!-- Modal Body -->
           <div class='modal-body'>
                <form method="post" action=''>
                  <div class="form-group">
                      <input type="text" class="form-control" name='nama_berkas' placeholder="Nama Berkas" required="required">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name='jenis_berkas' placeholder="Jenis Berkas" required="required">
                  </div>
                  <div class="toast" data-autohide="false">
                      <div class="toast-header">
                        <strong class="mr-auto text-primary">Laporan Contoh</strong>
                        <small class="text-muted">5 mins ago</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                      </div>
                      <div class="toast-body">
                        Lorem ipsum dolor sit amet
                      </div>
                  </div>  
                  <div class="toast" data-autohide="false">
                      <div class="toast-header">
                        <strong class="mr-auto text-primary">Laporan Contoh</strong>
                        <small class="text-muted">5 mins ago</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                      </div>
                      <div class="toast-body">
                        Lorem ipsum dolor sit amet
                      </div>
                  </div>  
                </form>
            </div>
            

           <!-- Modal Footer -->
           <div class="modal-footer">
              <input type="file">
              <input type='submit' class='btn btn-success' name='submit' value='Submit'>
              <button type='button' class="btn btn-danger" data-dismiss='modal'>Close</button>
           </div>
          </div>
      </div>
  </div>
</form>

<div class='container-fluid'>
     <div class="row">
        <nav id="sidebarMenu" class="col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky">
            <ul class="nav flex-column"><br><br>
            <li>
              <h3 font-family="Nimbus Mono L, Bold">Sekretariat</h3>
            </li>
              <li class="nav-item">
                <a class="nav-link btn btn-secondary text-light">
                    <span data-feather="folder-plus"></span>
                    Tambah unit
                </a><br>  
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
                <a class="nav-link text-dark" href="#">
                    <span data-feather="book-open"></span>
                    Tampilkan Laporan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <span data-feather="paperclip"></span>
                    Buat Jadwal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <span data-feather="book-open"></span>
                    Tampilkan Jadwal
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9">
        <h4 style="font-family: arial black; margin-top: 10px">Tampilan Laporan</h4><br>
            <div class="card-columns" style="margin-top: 40px; overflow-y: auto; height: 400px">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Laporan Keuangan</h4>
                  <p class="card-text">Laporan_keuangan_DK_2k19...</p>
                  <a href="#" class="card-link">Open</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Lorem title</h4>
                  <p class="card-text">Lorem Ipsum Dolor Sit Amet</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
        </main>
     </div>
    </div>    

    <!--Feather icon JS -->
    <script>
        feather.replace()
    </script>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="javascript.js"></script>
@endsection
