               <?php
              //data user
              $user = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(username) as total_user from user"));
              
              //data admin
              $admin = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(username) as total_admin from admin"));

              //data berita
              $berita = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(judul) as total_berita from berita"));

              //data laporan
              $laporan = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(username) as total_laporan from laporan"));

              //data laporan belum diproses
              $laporan_belum = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(username) as total_laporan from laporan WHERE status = 'menunggu diproses'"));
              
              //data laporan diproses
              $laporan_proses = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(username) as total_laporan from laporan WHERE status = 'sedang diproses'"));

              //data laporan selesai
              $laporan_selesai = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(username) as total_laporan from laporan WHERE status = 'selesai'"));

              //data pesan masuk
              $pesan = mysqli_fetch_array(mysqli_query($connect, "SELECT COUNT(username) as total_pesan from pesan"));
              ?> 
               <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">User</p>
                            <h3 class="rate-percentage"><?php echo $user['total_user'] ?></h3>
                            <p class="statistics-title">Jumlah User</p>
                          </div>
                          <div>
                            <p class="statistics-title">Admin</p>
                            <h3 class="rate-percentage"><?php echo $admin['total_admin'] ?></h3>
                            <p class="statistics-title">Jumlah Admin</p>
                          </div>
                          <div>
                            <p class="statistics-title">Berita</p>
                            <h3 class="rate-percentage"><?php echo $berita['total_berita'] ?></h3>
                            <p class="statistics-title">Jumlah Berita</p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Pesan</p>
                            <h3 class="rate-percentage"><?php echo $pesan['total_pesan'] ?></h3>
                            <p class="statistics-title">Jumlah pesan</p>
                          </div>
                        </div>
                      </div>
                    </div>   
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Laporan</p>
                            <h3 class="rate-percentage"><?php echo $laporan['total_laporan'] ?></h3>
                            <p class="statistics-title">All laporan</p>
                          </div>
                          <div>
                            <p class="statistics-title">Laporan</p>
                            <h3 class="rate-percentage"><?php echo $laporan_belum['total_laporan'] ?></h3>
                            <p class="statistics-title">Belum diproses</p>
                          </div>
                          <div>
                            <p class="statistics-title">Laporan</p>
                            <h3 class="rate-percentage"><?php echo $laporan_proses['total_laporan'] ?></h3>
                            <p class="statistics-title">Sedang diproses</p>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Laporan</p>
                            <h3 class="rate-percentage"><?php echo $laporan_selesai['total_laporan'] ?></h3>
                            <p class="statistics-title">Selesai diproses</p>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>