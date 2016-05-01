<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>


    <h4>Tabel Barang</h4>
    <?php if( !empty($barang) ) { ?>
    <table>
      <thead>
       <tr>
        <td><strong>Nama Barang</strong></td>
        <td><strong>Jenis</strong></td>
        <td><strong>Tgl masuk</strong></td>
        <td><strong>Harga</strong></td>
        <td><strong>Jumlah</strong></td>
        <td><strong>Keterangan</strong></td>
      </tr>
    </thead>

     <?php foreach($barang as $b):?>
     <tr>
         <td><?php echo $b->nama_barang;?></td>
         <td><?php echo $b->jenis_barang;?></td>
         <td><?php echo $b->tgl_masuk;?></td>
         <td><?php echo $b->harga;?></td>
         <td><?php echo $b->jumlah;?></td>
         <td><?php echo $b->keterangan;?></td>
      </tr>
    <?php endforeach;
    }else{
      echo "Empty";
    }
    ?>

   </table>
  </body>
</html>
