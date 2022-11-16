<?php 
    require_once("ketnoi.php");

    $sql = "SELECT `masv`, `holot`, `ten`, `ngaysinh`, `gioitinh`, `dienthoai` FROM `sinhvien`";
    $result = mysqli_query($connect, $sql);
    
    require_once("menu.html");

    require_once("dongketnoi.php");
?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title> QLSV </title> 
	</head> 
	<body> 
        
    <table align="center" border="1px solid blue;"> 
		</tr> 
              <th> MaSV </th> 
			  <th> Họ lót </th> 
			  <th> Tên </th> 
              <th> Ngày Sinh </th> 
              <th> Giới Tính </th> 
              <th> SĐT </th> 
		</tr> 
        <?php while($row=mysqli_fetch_assoc($result)) 
		{ 
		?> 
        <tr> 
            <td><?php echo $row["masv"]; ?></td> 
            <td><?php echo $row["holot"]; ?></td> 
		    <td><?php echo $row["ten"]; ?></td> 
            <td><?php echo $row["ngaysinh"]; ?></td> 
            <td><?php echo $row["gioitinh"]; ?></td> 
            <td><?php echo $row["dienthoai"]; ?></td> 
		</tr> 
        <?php 
               } 
          ?> 
    </table>
    </body>
</html>