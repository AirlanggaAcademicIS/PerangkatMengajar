<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Bacaan</title>
    <link href="Assets/Css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<form id="form1" name="form1" method="post" action="bacaan.php">
<div class="col-md-12">    
    <div class="form-group">
        <label class="col-md-4 control-label" for="textfield">Nama Pengarang</label>
        <div class="col-md-5">
            <input name="namapengarang" type="text" placeholder="Nama Pengarang" class="form-control input-md" oninvalid="this.setCustomValidity('Isikan Nama Pengarang')" oninput="setCustomValidity('')" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textfield2">Tahun Terbit</label>
        <div class="col-md-5">
            <input name="tahunterbit" type="number" placeholder="Tahun Terbit" class="form-control input-md" oninvalid="this.setCustomValidity('Isikan Tahun Terbit')" oninput="setCustomValidity('')" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textfield3">Judul Buku</label>
        <div class="col-md-5">    
            <input name="judulbuku" type="text" placeholder="Judul Buku" oninvalid="this.setCustomValidity('Isikan Judul Buku')" oninput="setCustomValidity('')" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textfield4">Kota Tempat Terbit</label>
        <div class="col-md-5">
            <input name="kotatempatterbit" type="text" placeholder="Kota Tempat Terbit" class="form-control input-md" oninvalid="this.setCustomValidity('Isikan Kota Tempat Terbit')" oninput="setCustomValidity('')" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="textfield5">Nama Penerbit</label>
        <div class="col-md-5">
            <input name="namapenerbit" type="text" placeholder="Nama Penerbit" class="form-control input-md" oninvalid="this.setCustomValidity('Isikan Nama Penerbit')" oninput="setCustomValidity('')" required>
        </div>
    </div>
</div>    
    <tr>
        <td colspan="3" align="right">
            <input type="submit" name="Submit" value="Submit" class="button facebook"/>
        </td>
    </tr>

</form>
</body>
</html>
