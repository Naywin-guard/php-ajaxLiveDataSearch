<?php 
    $connect = mysqli_connect("localhost","root","","testing");
    $output="";
    $num=1;
    $sql = "SELECT * FROM tbl_customer WHERE CustomerName LIKE '%".$_POST["serach"]."%'";
    $result = mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){
        $output.="<h4 align='center'>Data Resut</h4>";
        $output.='<table class="table">
                    <tr>
                        <th>NO.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Postal Code</th>
                        <th>Country</th>
                    </tr>';
        while($row=mysqli_fetch_assoc($result)){
            $output.='<tr>
                        <td>'.$num++.'</td>
                        <td>'.$row["CustomerName"].'</td>
                        <td>'.$row["Address"].'</td>
                        <td>'.$row["City"].'</td>
                        <td>'.$row["PostalCode"].'</td>
                        <td>'.$row["Country"].'</td>
                      </tr>';
        }
        echo $output;
    }else{
        echo "Data Not Found";
    }
?>