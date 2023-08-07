<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Laporan</h4>
                  <div class="table-responsive">
                    <table class="table table-striped" class="table" >
                      <thead>
                        <tr>
                          <th>
                            Id<br>Pelapor
                          </th>
                          <th>
                            Nama<br>Pelapor
                          </th>
                          <th class="small-padding">
                            Lokasi
                          </th>
                          <th class="small-padding">
                            Tanggal<br>Pelaporan
                          </th>
                          <th>
                            Nomor<br>Telepon
                          </th>
                          <th>
                            Keterangan<br>Tambahan
                          </th>
                          <th>
                            Foto<br>Jalanan<br>Rusak 
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $query = mysqli_query($connect, "SELECT * FROM laporan");
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
                          <td class="small-padding">
                          <?php echo $data['alamat']; ?>
                          </td>
                          <td class="small-padding">
                          <?php echo $data['tanggal']; ?>
                          </td>
                          <td>
                          <?php echo $data['nomor_telepon']; ?>
                          </td>
                          <td>
                          <?php echo $data['keterangan']; ?>
                          </td>
                           <td>
                            <a href="../Laporan page/images/<?php echo $data['photo']; ?>"><img src="../Laporan page/images/<?php echo $data['photo']; ?>"></a>
                          </td>
                          <td>
                          <?php echo $data['status']; ?>  
                          </td>
                          <td>
                            <a href="pages/tables/proses_laporan.php?id=<?php echo $data['id']; ?>" id="proses">proses laporan</a>
                            <br>
                            <br>
                            <br>
                            <a href="pages/tables/selesai_laporan.php?id=<?php echo $data['id']; ?>" id="selesai">selesai</a>
                          <br>
                          <br>
                          <br>
                          <a href="pages/tables/laporan_hapus.php?id=<?php echo $data['id']; ?>" id="hapus">hapus</a> 
                        </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>