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

@section('title', 'Ketua')

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
              <h3 font-family="Nimbus Mono L, Bold">Ketua</h3>
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
              <li class="nav-item">
                <a class="nav-link text-dark" href="/sekretariat/show">
                    <span data-feather="book-open"></span>
                    Tampilkan Laporan
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

        <main role="main" class=".col-sm-8 col-sm-7 flex-column">
          <h4 style="font-family: arial black; margin-top: 10px">DATA USER</h4><br>
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status')}}
            </div>
          @endif
          
            <table class="table table-striped" style="margin-top: 20px">
              <thead class="bg-secondary text-white">
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Jabatan</th>    
                  <th>Password</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          <div style="overflow-y: scroll; height: 400px">
            <table class="table table-striped">
              <tbody>
                @foreach( $tbl_user as $dt )
                <tr>
                  <th scope="row">{{ $dt->id }}</th>
                  <th>{{ $dt->username }}</th>
                  <th>{{ $dt->email}} </th>
                  <th>{{ $dt->jabatan }}</th>
                  <th>{{ $dt->password }}</th>
                  <td>
                    <a href="data/{{ $dt->id }}/edit" class="badge badge-success">edit</a>
                    <form action="/data/{{ $dt->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="badge badge-danger">delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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
