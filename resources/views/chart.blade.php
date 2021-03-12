@extends('layout/main')

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS Online-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

    <!-- Bootstrap css offline -->
    <!--<link rel="stylesheet" type="text/css" href="../../+/TOOLS/css/bootstrap.css">-->
    

</head>

@section('title', 'UserData')

@section('navbar')
<nav class="navbar navbar-expand-sm bg-info sticky-top navbar-dark shadow">

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
        <nav class="col-md-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky position-fixed">
            <ul class="nav flex-column"><br><br>
            <li>
              <h3 font-family="Nimbus Mono L, Bold">KETUA</h3>
            </li>
              <li class="nav-item">
                <a class="nav-link btn btn-secondary text-light">
                    <span data-feather="folder-plus"></span>
                    Tambah Unit
                </a><br>  
              </li>
              <li class="nav-item">
                <a clasS="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a clasS="nav-link active" href="#">
                    <span data-feather="users"></span>
                    Data user
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                    <span data-feather="menu"></span>
                    Tampilkan Laporan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                    <span data-feather="menu"></span>
                    Daftar Laporan
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class=".col-sm-8 col-sm-7 flex-column">
          <h4 style="font-family: arial black">GRAFIK PERTAMBAHAN USER</h4><br>
          <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
          <div style="width: 800px; height: 800px">
          	<canvas id="myChart"></canvas>
          </div>
          <script>
          var ctx = document.getElementById('myChart').getContext('2d');
          var chart = new Chart(ctx, {
              // The type of chart we want to create
              type: 'bar',
          
              // The data for our dataset
              data: {
                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus'],
                  datasets: [{
                      label: 'the gold time of bbid',
                      backgroundColor: 'rgb(255, 99, 71)',
                      borderColor: 'rgb(black)',
                      data: [0, 10, 5, 2, 20, 30, 40, 44]
                  }]
              },
            
              // Configuration options go here
              options: {}
          });

          </script>
          

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
