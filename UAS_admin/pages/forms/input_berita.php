              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Berita</h4>
                  <p class="card-description">
                    Silahkan memasukkan berita terkait tentang kerusakan jalanan 
                  </p>
                  <form class="forms-sample" method="post" action="pages/forms/action_berita.php" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Judul Berita</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Judul berita" name="judul" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Isi Berita</label>
                      <textarea id="beritaTextarea" class="form-control" style="height: 200px;" placeholder="Isi berita" name="isi" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputImage">Masukkan Gambar </label>
                      <input type="file" class="form-control" id="exampleInputImage" accept="image/png,image/jpg" name="photo" required>
                    </div>
                  
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>