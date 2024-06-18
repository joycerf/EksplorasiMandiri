<?php
    include "Pertemuan11.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>

            <link href="Library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
            <link href="Library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
            <link href="Library/assets/styles.css" rel="stylesheet" media="screen">
            <script src="Library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <script>
              function enableSubmitBtn(){
                document.getElementById("mySubmitBtn").disabled = false;
              }
            </script>

            

    </head>
         <body>

            <!-- <form action="Pertemuan7.php" method="POST"> 
                NPM :
                <input type="text" name="npm" value=""\>
                    <br>
                NILAI : 
                <input type="text" name="nilai" value=""\>
                    <br>
                ULANGI :
                <input type="text" name="ulangi" value=""\>
                    <br>
                <button type="submit" name="proses_data">
                            PROSES DATA
                </button>


            </form> -->
    
            <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form action="Pertemuan7.php" method="POST">
                                      <fieldset>
                                        <legend>INPUT DATA MAHASISWA</legend>
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="namamhs">NAMA MAHASISWA : </label>
                                          <div class="controls"> 
                                            <input type="text" class="input-xlarge focused" id="namamhs" name="namamhs" value=""\>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="prodi">PRODI MAHASISWA : </label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value=""\>
                                            </div>
                                        </div>

                                        <!-- <div class="control-group">
                                          <label class="control-label" for="NPM">ULANGI : </label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="NPM" name="NPM" value=""\>
                                          </div>
                                        </div> -->

                                        <div class="mb-3">
                                        <div class="g-recaptcha" data-sitekey="6LfoY-8pAAAAAASOG-JXScCDk0iJ8bRBqLRgE0Gs" data-callback="enableSubmitBtn"></div>
                                        </div>
                                        

                                        <div class="form-actions">
                                          <button type="submit" id=mySubmitBtn disabled=disabled class="btn btn-primary">PROSES DATA</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>

                                </form>
                                
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">DATA MAHASISWA</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>ID</th>
						                  <th>Nama Mahasiswa</th>
						                  <th>Prodi Mahasiswa</th>
						                  <th>Aksi</th>
						                </tr>
						              </thead>
						              <tbody>

                                      <?php
                                        while($data = mysqli_fetch_assoc($proses)){
                                      ?>

						                <tr>
						                  <td><?php echo $data['id'] ?></td>
						                  <td><?php echo $data['namamhs'] ?></td>
						                  <td><?php echo $data['prodi'] ?></td>
						                  <td> <a href="">Edit</a> 
                              | <a href="Pertemuan12.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
						                </tr>

                                      <?php
                                        }
                                      ?>
						                
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    </div>

        </body>
</html>