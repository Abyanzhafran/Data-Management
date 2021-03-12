<?php

    class index 
    {		
        public function ketua() {
            
            if(isset($_POST['username']) && ($_POST['Password'])) {
            $sql = "SELECT * FROM user_or WHERE username = '".$_POST['username']."' AND Password = '".$_POST['password']."' ";
            $query = mysqli_query($conn, $sql);

            if(mysqli_num_rows($query) > 0) {
                echo "Login successfully";
                header("location: cek_login.php");
            } else {
                echo"<script>alert('Login gagal')</script>";
            }
            } 
        }

        public function reg() {
            if(isset($_POST['submit'])) {
                include 'connect.php';
                if($_POST['password'] == $_POST['confirm_password']) { 
                $username = $_POST['username'];
                $password = $_POST['password'];
                $jabatan = $_POST['jabatan'];
    
                    $sql = "INSERT INTO user_or SET username = '$username', password = '$password', jabatan = '$jabatan'";
    
                    if(mysqli_query($conn, $sql)) {
                        echo "Berhasil diInput";
                    } else {
                        echo "<script>alert('harus diisi')</script>";
                    }
                    header("location: index.php");
                } else {
                    echo "<script>alert('The password is not the same')</script>";
                }
            }
        } 
    }

    class time 
    {
        public function clock() {
             $tanggal = mktime(date('m'), date("d"), date('Y'));
             echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
             date_default_timezone_set("Asia/Jakarta");
             $jam = date ("H:i:s");
             echo " | Pukul : <b> " . $jam . " " ." </b> ";
             $a = date ("H");
             if (($a>=6) && ($a<=11)) {
                 echo " <b>, Selamat Pagi !! </b>";
             }else if(($a>=11) && ($a<=15)){
                 echo " , Selamat  Siang !! ";
             }elseif(($a>15) && ($a<=18)){
                 echo ", Selamat Sore !!";
             }else{
                 echo ", <b> Selamat Malam </b>";
             }
        }
    }

    // class time_JS {
        //public function digital() {
                
       // }
    //}

    class sekre 
    {
        public function modal() {
            include 'connect.php';
            if(isset($_POST['submit'])) {
                $nama_unit = $_POST['nama_unit'];
                $jenis_unit = $_POST['jenis_unit'];
                $des_unit = $_POST['des_unit']; 

                $query = "INSERT INTO data_unit SET Nama_Unit ='$nama_unit', Jenis_Unit ='$jenis_unit', Deskripsi_Unit ='$des_unit' ";

                if(mysqli_query($conn, $query)) {
                    echo "";
                } else {
                    echo "<script>alaert'GAGAL Input'</script>";
                }
            }
        }

        public function upload() {
            include 'connect.php';
            if(isset($_POST['submit'])) {
                $allowed_extension = array('png', 'jpg');
                $target_dir = "../UPLOADS/";
                $image_name = $_FILES['upload']['name'];
                $target_file = $target_dir . basename($image_name);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $image_size = $_FILES['upload']['size'];
                $file_tmp = $_FILES['upload']['tmp_name'];

                $query = "INSERT INTO uploads(Photo) VALUES('$file_tmp') ";

                $cek = getimagesize($file_tmp);
                    if($cek == true) {
                        echo "file is an image - " . $cek['mime'] . " . ";
                        $uploadOK = 1;
                    } else {
                        echo "file is not an image";
                        $uploadOK = 0;
                    }

                if(mysqli_query($conn, $query)) {
                    echo "upload berhasil";
                } else {
                    echo "<script>alert'upload gagal'</script>";
                }

                if(file_exists($target_file)) {
                    echo "<script>alert'sorry lurr filenya sudah ada'</script>";
                    $uploadOK = 0;
                }

                if($file_tmp > 500000) {
                    echo "<script>alert'Ukuran file melebihi 5MB'</script>";
                }

                if($uploadOK == 0) {
                    echo "file tidak terupload";
                } else {
                    if(move_uploaded_file($file_tmp, $target_file)) {
                        echo "The file" . basename($file_tmp) . "Sudah terupload";
                    }
                }
            }
        } 
    }

    class aplot 
    {
        public function foto_sql() {
            include 'connect.php';

            $allowed_extension = array('png', 'jpg');
            $target_dir = "UPLOADS/";
            $target_file = $target_dir . basename($_FILES['Background_OR']['tmp_name']);
            $uploadOk = 1;
            $imageFileType = strolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $image_name = $_FILES['Background_OR']['name'];
            $image_size = $_FILES['Background_OR']['size'];
            $file_tmp = $_FILES['Background_OR']['tmp_name'];


            if(isset($_POST['submit'])) {
                $check = getimagesize($file_tmp);
                    if($check == true) {
                        echo "file is an image - " . $check['mime'] . " . ";
                        $uploadOk = 1;
                    } else {
                        echo "file is not an image";
                        $uploadOk = 0;
                    }
            }

            if(file_exists($targert_file)) {
                echo "sorry lurr filenya udh ada";
                $uploadOk = 0;
            }

            if($file_tmp > 500000) {
                echo "<script>alert'Maaf ukuran file melebihi 5MB'</script>";
                $uploadOk = 0;
            }
            if($uploadOk == 0) {
                echo "<script>alert'File tidak terupload'</script>";
            } else {
                if(move_uploaded_file($file_tmp, $target_file)) {
                    echo "the file" . basename($file_tmp) . "Sudah terupload";
                    $sql = mysqli_query("INSERT INTO data_organisasi VALUES(NULL, '$image_name')");

                    if($sql) {
                        echo "";
                    } else {
                        echo "<script>alert'GAGAL BAGIAN QUERY'</script>";
                    }

                } else {
                    echo "<script>alert'Sorry, there was an error uploading your file'</script>";
                }
            }
        }
    }

    class crud 
    {
        
        public function tambah_user() {
            include 'connect.php';
            if(isset($_POST['save'])) {
                $uname = $_POST['username'];
                $pass = $_POST['password'];
                $jabatan = $_POST['jabatan'];

                $sql = "INSERT INTO user_or SET username = '$uname', password = '$pass', jabatan = '$jabatan' ";

                if($conn ->query($sql) === true) {
                    echo "<script>'Record Successfully'</script>";    
                } else {
                    echo "<script>'error'</script>";
                }

            } else {
                echo "<script>Gagal (data)</script>";
            }
        }

        public function hapus() {
            include 'connect.php';
            if(isset($_POST['delete'])) {
                $id = $_POST['delete']; 

                $sql = "DELETE FROM user_or WHERE id='$id' ";
                
                if($conn->query($sql) === TRUE) {
                    $_SESSION['message'] = "Record has been deleted!";
                    $_SESSION['msg_type'] = "danger!";

                    //header("location: data_user.php");
                } else {
                    echo "<script>alert'Hapus Gagal'</script>";
                }
            }
        }

        public function ubah() {
            include 'connect.php';
            if(isset($_POST['ubah'])) {
                $id = $_POST['ubah'];

                $sql = "UPDATE user_or SET id = '$id' ";

                if(mysqli_num_rows($sql) > 0) {
                    $row = $sql->fetch_assoc();
                    $uname = $row['username'];
                    $pass = $row['password'];
                    $jabatan = $row['jabatan'];
                } else {
                    echo "<div class='alert alert-danger'>
                    <strong>edit table gagal</strong></div>";
                }

            } 
        }
    }
?>


