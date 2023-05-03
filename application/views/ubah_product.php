<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product | Ubah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
echo form_open('product/update/'.$hasil->id, 'class="form-horizontal"');
?>
<br/>Merek: 
<?php
    $merek = array('name'=>'merek', 'maxlength'=>'254','value'=>$hasil->merek, 'class'=>'form-control');
    echo form_input($merek);
    echo form_error('merek');
?>
<br/>Jenis: 
<?php
    $jenis = array('name'=>'jenis', 'maxlength'=>'254','value'=>$hasil->jenis, 'class'=>'form-control');
    echo form_input($jenis);
    echo form_error('jenis');
?><br/>Jumlah: 
<?php
    $jumlah = array('name'=>'jumlah', 'maxlength'=>'254','value'=>$hasil->jumlah, 'class'=>'form-control');
    echo form_input($jumlah);
    echo form_error('jumlah');
?><br/>Harga: 
<?php
    $harga = array('name'=>'harga', 'maxlength'=>'254','value'=>$hasil->harga, 'class'=>'form-control');
    echo form_input($harga);
    echo form_error('harga');
?><br/>Keterangan: 
<?php
    $keterangan = array('name'=>'keterangan', 'maxlength'=>'254','value'=>$hasil->keterangan, 'class'=>'form-control');
    echo form_input($keterangan);
    echo form_error('keterangan');
?><br/>
<?php 
    echo form_submit('submit', 'Ubah Data', 'id="submit" class="btn btn-primary"');
?>
<?php echo form_close(); ?> 
</body>
</html>