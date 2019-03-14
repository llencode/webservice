<?php
	include'konek.php';
	$query = mysqli_query($konek,"SELECT * FROM customer");
	$query1 = mysqli_query($konek,"SELECT * FROM mahasiswa");
	$query2 = mysqli_query($konek,"SELECT * FROM matakuliah");
	$query3 = mysqli_query($konek,"SELECT * FROM nilai");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>tugas2</title>
    </head>
    <body>
        <h1> menampilkan data dari mysql dari situs 000webhost.com</h1></br>
        <h5>Customer</h5>
          <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id customer</th>
            <th>username </th>
             <th>nama</th>
             <th>umur</th>
             <th>alamat</th>
             <th>telp</th>
             <th>email</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["id_customer"];?></td>
            <td><?php echo $data["username"];?></td>
             <td><?php echo $data["nama"];?></td>
              <td><?php echo $data["umur"];?></td>
               <td><?php echo $data["alamat"];?></td>
                <td><?php echo $data["telp"];?></td>
                 <td><?php echo $data["email"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
    </br>
    
    <h5>mahasiswa</h5>
              <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
             <th>prodi</th>
        </tr>
        <?php if(mysqli_num_rows($query1)>0){ ?>
        <?php
            $no1 = 1;
            while($data1 = mysqli_fetch_array($query1)){
        ?>
        <tr>
            <td><?php echo $no1 ?></td>
            <td><?php echo $data1["nim"];?></td>
            <td><?php echo $data1["nama"];?></td>
             <td><?php echo $data1["prodi"];?></td>
        </tr>
        <?php $no1++; } ?>
        <?php } ?>
    </table>
    
    </br>
    <h5>matakuliah</h5>
              <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id customer</th>
            <th>username </th>
             <th>nama</th>
             <th>umur</th>
        </tr>
        <?php if(mysqli_num_rows($query2)>0){ ?>
        <?php
            $no2 = 1;
            while($data2 = mysqli_fetch_array($query2)){
        ?>
        <tr>
            <td><?php echo $no2 ?></td>
            <td><?php echo $data2["kdmk"];?></td>
            <td><?php echo $data2["nmmk"];?></td>
             <td><?php echo $data2["sks"];?></td>
              <td><?php echo $data2["prodi"];?></td>
        </tr>
        <?php $no2++; } ?>
        <?php } ?>
    </table>
    
    </br>
    <h5>nilai</h5>
              <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>id customer</th>
            <th>username </th>
             <th>nama</th>
             <th>umur</th>
        </tr>
        <?php if(mysqli_num_rows($query3)>0){ ?>
        <?php
            $no3 = 1;
            while($data3 = mysqli_fetch_array($query3)){
        ?>
        <tr>
            <td><?php echo $no3 ?></td>
            <td><?php echo $data3["thakd"];?></td>
            <td><?php echo $data3["nim"];?></td>
             <td><?php echo $data3["kdmk"];?></td>
              <td><?php echo $data3["nilai"];?></td>
        </tr>
        <?php $no3++; } ?>
        <?php } ?>
    </table>
    </body>
</html>