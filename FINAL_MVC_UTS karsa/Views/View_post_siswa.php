<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

  include '../Controllers/Controller_siswa.php';
 // Membuat Object dari Class siswa
 $siswa = new Controller_siswa();
 $GetKelas = $siswa->GetData_Kelas();
?>
     <div class="card">
     <div class="card-header"> <h3 class="text-center">Tambah Siswa Baru</h3></div>
    <form action="../Config/Routes.php?function=create_siswa" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
    <table  class="table table-bordered table-striped">
        <tr>
            <td  class="col-sm-2 col-form-label">NISN</td>
            <td><input class="form-control" id="floatingTextarea" required type="number" name="nisn" placeholder="HARAP ISI NISN !!"></td>
        </tr>
        <tr>
            <td  class="col-sm-2 col-form-label">NIS</td>
            <td><input class="form-control" id="floatingTextarea" required type="number" name="nis"></td>
        </tr> 
        <tr>
            <td  class="col-sm-2 col-form-label">Nama</td>
            <td><input class="form-control" id="floatingTextarea" required type="text" name="nama"  onkeypress="return event.charCode < 48 || event.charCode  >57"></td>
        </tr>
        <tr>
            <td  class="col-sm-2 col-form-label">Kelas</td>


            <td>
                <select class="form-control" id="floatingTextarea" required name="id_kelas">
                    <option value="">Pilih Kelas</option>
                <?php 
                foreach ($GetKelas as $Get) : ?>
                    <option value="<?php echo $Get['id_kelas'] ?>"><?php echo $Get['nama_kelas'] ?></option>
                
                <?php endforeach; ?>
                </select>
            </td>

        </tr>
        <tr>
            <td  class="col-sm-2 col-form-label">Alamat</td>
            <td><input class="form-control" id="floatingTextarea" required type="text" name="alamat"></td>
        </tr>
        <tr>
            <td  class="col-sm-2 col-form-label">No Telepon</td>
            <td><input class="form-control" id="floatingTextarea" required type="number" name="id_telp"></td>
        <tr>
                <td  class="col-sm-2 col-form-label">Nominal SPP</td>


            <td>
            <select class="form-control" id="floatingTextarea"  required name="id_spp">

            <option value="">Pilih Nominal SPP</option>
                    <option value="1">300000</option>
                    <option value="2">350000</option>
                    <option value="3">700000</option>
                    <option value="4">150000</option>
                </select>

            </td>
        </tr>
        <tr>
            <td colspan="2" align="right"> <input type="submit" class="btn btn-info" name="proses" value="Tambah"></td>
        </tr>
    </table
    </form>
    </div>
