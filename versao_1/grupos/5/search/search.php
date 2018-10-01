 <?php  
 $connect = mysqli_connect("localhost", "root", "usbw", "contasreceber");  
 if(isset($_POST["nome"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM clientes WHERE nome LIKE '".$_POST["nome"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled" style="cursor : pointer">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                //$output .= '<li>'.$row["nome"].'</li>';  
                $output .= '<input type="text" class="form-control" name="parametro2" id="nomeNovo" value='.$row["nome"].'>';  
           }  
      }   
      $output .= '</ul>';  
      echo $output;  
 }  

 if(isset($_POST["nfe"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM clientes WHERE nfe LIKE '".$_POST["nfe"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled" style="cursor : pointer">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                //$output .= '<li>'.$row["nome"].'</li>';  
                $output .= '<input type="text" class="form-control" name="parametro2" id="nfeNovo" value='.$row["nfe"].'>';  
           }  
      }   
      $output .= '</ul>';  
      echo $output;  
 }
 ?> 