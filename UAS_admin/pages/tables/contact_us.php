<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pesan Masuk </h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id Admin
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Nomor Telepon
                          </th>
                          <th>
                            Pesan
                          </td>
                          <td>
                            action
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $query = mysqli_query($connect, "SELECT * FROM pesan");
                      $no=1;
                      while($data = mysqli_fetch_array($query)){

                      ?>
                        <tr>
                          <td class="py-1">
                          <?php echo $no++; ?>
                          </td>
                          <td>
                          <?php echo $data['username']; ?>
                          </td>
                          <td>
                          <?php echo $data['nomor_telepon']; ?>
                          </td>
                          <td>
                          <?php echo $data['pesan']; ?>
                          </td>
                          <td>
                          <a href="pages/tables/pesan_hapus.php?id=<?php echo $data['id']; ?>" id="hapus">hapus</a> 
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>