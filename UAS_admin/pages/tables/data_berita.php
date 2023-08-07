<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Berita</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id Berita</th>
                          <th>Judul Berita</th>
                          <th>Isi Berita</th>
                          <th>Gambar</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $query = mysqli_query($connect, "SELECT * FROM berita");
                      $no=1;
                      while($data = mysqli_fetch_array($query)){

                      ?>
                        <tr>
                          <td class="py-1"><?php echo $no++; ?></td>
                          <td><?php echo $data['judul']; ?></td>
                          <td><?php echo $data['isi']; ?></td>
                          <td><a href="../Berita page/img/<?php echo $data['photo']; ?>"><img src="../Berita page/img/<?php echo $data['photo']; ?>"></a></td>
                          <td>
                          <a href="pages/tables/berita_hapus.php?id=<?php echo $data['id']; ?>" id="hapus" id="hapus">hapus</a> 
                          </td>
                        </tr>  
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>