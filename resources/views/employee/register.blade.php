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

    <body>
      <div class="container-fluid">
        <div class="col-6" style="margin-top: 20px">
          <h4 style="font-family: arial black; font-size: 24px">Form Tambah Karyawan</h4>
          <form action="/employee" method="post" style="margin-top: 15px">
            @csrf
            <div class="form-group">
              <label for="text">Username:</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" 
              name="username" value="{{ old('username') }}">
              @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" 
              name="email" value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" 
              name="password" value="{{ old('password') }}">
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!--<div class="form-group">
              <label for="pwd">Confirm Password:</label>
              <input type="password" class="form-control @error('-/-/-') is-invalid @enderror" id="confirm_pass">
            </div>-->

            <div class="form-group">
              <label for="jabatan">Jabatan:</label>
              <select placeholder="jabatan" class="custom-select-sm @error('jabatan') is-invalid @enderror"
              name="jabatan" value="{{ old('jabatan') }}">
                <option></option>
          		  <option>Ketua</option>
          		  <option>bendahara</option>
          		  <option>Sekertariat</option>
          	  </select><br>
              @error('jabatan')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror              
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>
      </div>
    </body>
</html>