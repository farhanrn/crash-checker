  
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data User</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id User
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Password
                          </th>
                          <th>
                            action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            $query = mysqli_query($connect, "SELECT * FROM user");
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
                          <?php echo $data['email']; ?>
                          </td>
                          <td>
                          <?php echo $data['password']; ?>
                          </td>
                          <td>
                          <a href="pages/tables/user_hapus.php?id=<?php echo $data['id']; ?>" id="hapus">hapus</a> 
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>