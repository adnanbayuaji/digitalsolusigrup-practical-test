<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<a href="<?php echo base_url().'product/tambah'; ?>" class="btn btn-primary btn-sm">Tambah Data</a>

<?php
echo form_open('product/carimerek', 'class="form-horizontal"');
?>
<br/>Cari Data berdasarkan merek: 
<?php
    $merek = array('name'=>'merek', 'maxlength'=>'254','value'=>"", 'class'=>'form-control');
    echo form_input($merek);
    echo form_error('merek');
?>
<?php 
    echo form_submit('submit', 'Cari Data!', 'id="submit" class="btn btn-primary"');
?>
<?php echo form_close(); ?> 

<table id="example" class="table table-striped">
    <thead>
    <tr>
        <th>Merek Produk</th>
        <th>Jenis Produk</th>
        <th>Jumlah Stock</th>
        <th>Harga Produk</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $no = 1;
        if(!empty($hasil))
        {
            foreach($hasil as $data)
            {
                ?>
                <tr>
                <td> <?php echo $data->merek; ?> </td>
                <td> <?php echo $data->jenis; ?> </td>
                <td> <?php echo $data->jumlah; ?> </td>
                <td> <?php echo 'Rp '.number_format($data->harga).',-'; ?> </td>
                <td> <?php echo $data->keterangan; ?> </td>
                <td> 
                <a href='<?php echo base_url()."product/update/".$data->id; ?>'>edit</a> &nbsp;
                <a href='<?php echo base_url()."product/delete/".$data->id; ?>'>delete</i></a>
                </td>
                </tr>
                <?php
            }
        }
    ?>
    </tbody>
    </table>
</body>
</html>