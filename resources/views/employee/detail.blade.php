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
    <!--<link rel="stylesheet" type="text/css"  href="../../TOOLS/css/bootstrap.min.css">
    -->
</head>

@section('title', 'Employee Detail')

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
<div class='container-fluid'>
     <div class="row">
        <nav id="sidebarMenu" class="col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky">
            <ul class="nav flex-column"><br><br>
            <li>
              <h3 font-family="Nimbus Mono L, Bold">KARYAWAN</h3>
            </li>
              <li class="nav-item">
                <a class="nav-link btn btn-secondary text-light">
                    <span data-feather="folder-plus"></span>
                    Tambah Orang
                </a><br>  
              </li>
              <li class="nav-item">
                <a clasS="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class=".col-sm-8 col-sm-7">
          <div class="col-6" style="margin-top: 5px">
          <h4 style="font-family: arial black">DATA KARYAWAN</h4><br>
          <div class="card">    
              <div class="card-body">
                <h4 class="card-title">Nama: {{ $employee->username }}</h4>
                <p class="card-text">Email: {{ $employee->email }}</p>
                <p class="card-text">Jabatan: {{ $employee->jabatan }}</p>
                <a href="{{ $employee->id }}/edit" class="btn btn-primary">Edit</a>
                <form action="{{ $employee->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/employee" class="card-link" style="margin-left: 110px">Kembali</a>
              </div>
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
