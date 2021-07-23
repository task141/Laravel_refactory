
<h2> Simpan Data kedalam file dengan PHP </h2>

<table>
<form method="post" action="">
  <tr>
  <td>Nama</td><td><input type="text" name="nama" style="width:300px"></td>
  </tr>

  <tr>
  <td>Emaill</td><td><input type="text" name="email" style="width:300px"></td>
  </tr>

  <tr>
  <td>Nomor Telepon</td><td><input type="text" name="nomor_telepon" style="width:300px"></td>
  </tr>
  <tr><td></td><td><input type="submit" name="ok" value="Simpan"></td></tr>
</form>

</table>
<table>
  <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</table>

    

<?php
if(isset($_POST['submit'])){
    if(empty($_POST['nama'])){
        print "Lengkapi form";
    }else{
        $nama=$_POST['nama'];
        $data=$_POST['email'];
       $data=$_POST['nomor_telepon'];
       // $data=$_POST['profil picture'];
      //  $data=$_POST['dokumen'];
        $tanggal=date("h:i:s");
        $buka=fopen("hasil.csv",'a');
        fwrite($buka,"nama : ${nama} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fwrite($buka,"email : ${email} <br> ");
        fwrite($buka,"nomor_telepon : ${nomor_telepon} <br> ");
      //  fwrite($buka," isi : ${data} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);
        print "data berhasil disimpan";
    }
}


