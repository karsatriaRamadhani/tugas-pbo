<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
  include '../Controllers/Controller_pembayaran.php';
    // Membuat Object dari Class pembayaran
    $pembayaran = new Controller_pembayaran();
    $GetSpp = $pembayaran->GetData_Siswa();
    ?>

<div class="card">
<div class="card-header"> <h3 class="text-center">Membuat Data Pembayaran</h3></div>
<form action="../Config/Routes.php?function=create_pembayaran" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table class="table table-bordered table-striped">
        <input type="hidden" name="id_pembayaran">
        <tr>
            <td class="col-sm-2 col-form-label">ID Petugas</td>
            <td>
                <select class="form-control" id="floatingTextarea"  required name="id_petugas">
                    <option value="">Pilih Petugas</option>
                    <option value="1">petugas 1</option>
                    <option value="2">petugas 2</option>
                </select>
            </td>
        </tr>

    <tr>
        <td class="col-sm-2 col-form-label">Nama Siswa</td>
        <td>
        <select class="form-control" id="floatingTextarea"  required name="nisn">
                <option value="">Pilih Nama Siswa</option>
                <?php         
                 foreach ($GetSpp as $GetP) : ?>
                    <option value="<?php echo $GetP['nisn']; ?>"><?php echo $GetP['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>

    <tr>
        <td class="col-sm-2 col-form-label">Tanggal Bayar</td>
        <td><input  class="form-control" id="floatingTextarea" required type="number" name="tgl_bayar"></td>
    </tr>

    <tr>
        <td class="col-sm-2 col-form-label">Bulan Bayar</td>
        <td><input  class="form-control" id="floatingTextarea" required type="text" name="bulan_dibayar"  onkeypress="return event.charCode < 48 || event.charCode  >57"></td>
    </tr>

    <tr>
        <td class="col-sm-2 col-form-label">Tahun Bayar</td>
        <td><input class="form-control" id="floatingTextarea" required type="number" name="tahun_dibayar"></td>
    </tr>

    <tr>
    <td class="col-sm-2 col-form-label">ID Spp</td>
        <td>
            <select class="form-control" id="floatingTextarea" required name="id_spp">
                <option value="">Pilih Nominal SPP</option>
                <option value="1">300000</option>
                <option value="2">350000</option>
                <option value="3">700000</option>
                <option value="4">150000</option>
            </select>
        </td>
    </tr>

    <tr>
        <td class="col-sm-2 col-form-label">Jumlah Bayar</td>
        <td><input class="form-control" id="floatingTextarea" required type="text" name="jumlah_bayar"></td>
    </tr>
    

    <tr>
        <td colspan="2" align="right">
        <input type="submit" class="btn btn-info" name="proses" value="Tambah">
        </td>
    </tr>
</table
</form>
