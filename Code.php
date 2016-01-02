<?php

 session_start();
 
function get($query)
  {
     $con = mysqli_connect("127.0.0.1","root","","commerce");
     $res = mysqli_query($con , $query);
     $i=1;
     $str='<table id="product_table" class="CSSTableGenerator" > <tr> <td> Picture </td> <td> Info </td> <td> Select </td>';
     $str.='<td> Quantity </td>';
     if(mysqli_num_rows($res)==0)
     {
        echo'Sorry No Products Right Now';
     }
     else
     {
            while($product_info = mysqli_fetch_array($res))
         {     
            $str.='<tr>';
            $str.='<td> <img  src="'.$product_info['Picture'].'" width="101px" height="140px"/> </td>';
            $str.= '<td id="mine" >'.$product_info['Name'] . '<br/> <hr/>' . $product_info['Description'];
            $str.= '<br/> <hr/>'. 'Price : '.$product_info['Price'].'</td>';
            $str.='<td>' . '<input  type="checkbox" class="pub" name="chk[]" id="chkk" value ="'.$product_info['ID'].'" />' . '</td>';
            $droplist = '<select id="'.$product_info['ID'].'" name="'.$product_info['ID'].'">';
            $size = $product_info['Quantity'];
            for($i=1 ; $i<=$size ; $i++)
            {
                $droplist.='<option>'.$i.'</option>';
            }
            $droplist.='</select>';
            $str.='<td>'.$droplist.'</td>';
            $str.='</tr>';
            
         }
         
         $str.='</table>';
                              
         
          echo $str;
     }
     
  }
  
function  view_selected()
{   
    $customer_id = $_SESSION['customerid'];
    
    $con = mysqli_connect('127.0.0.1','root','','commerce');
    $date = date("Y-m-d / h:i:sa");
  
    $product = $_POST['chk'];
    if(count($product)!= 0 )
    {
        $str='<table id="product_table" class="CSSTableGenerator" > <tr> <td >Name</td> <td> Price</td> <td>Select </td>  <td>Quantity </td> </tr> ';
         foreach($product as $product_id)
         {
             $Quantity = $_POST[$product_id];
             $query = 'select Name,price,Quantity from product where ID = '. $product_id.'';
             $res = mysqli_query($con, $query);
             
              while($product_info = mysqli_fetch_array($res))
             {     
                
                $str.= '<tr> <td>'.$product_info['Name'] . '</td> <td>' . $product_info['price'].'</td>';
                $str.='<td> <input  type="checkbox" name="chk2[]" id="chk" checked value ="'.$product_id.'" /> </td>';
                $size = $product_info['Quantity'];
                $droplist='<select name="'.$product_id.'">';
                for($i=1 ; $i<=$size ; $i++)
                {
                    if($i == $Quantity)
                    {
                        $droplist.='<option selected >'.$i.'</option>';
                    }
                    else
                    {
                        $droplist.='<option>'.$i.'</option>';
                    }
                    
                }
                $droplist.='</select>';
                $str.='<td>'.$droplist.'</td>';
                $str.='</tr>';          
             }
        
         }
         $str.='</table>';
         
         echo $str;
    }
}

function Buy_selected()
{
    
    $customer_id = $_SESSION['customerid'];
    
    $check=false;
    $con = mysqli_connect('127.0.0.1','root','','commerce');
    $date = date("Y-m-d / h:i:sa");
    
    $product = $_POST['chk2'];
    if(count($product)!= 0)
    {
         foreach($product as $product_id)
         {
             $Quantity = $_POST[$product_id];
             $query_insert ="INSERT INTO ordeer(Customer_id,Product_id,Quantity,Purchase_date,Processed_flag) VALUES($customer_id,$product_id,$Quantity,'$date',1)";
             $query_update = "UPDATE product set Quantity=(Quantity-$Quantity) where ID = $product_id";
             
              if (mysqli_query($con, $query_insert) && mysqli_query($con, $query_update))
               {
                   echo "Thank You For Dealing With Galaxy Store";
               } 
             else 
               {
                   echo "Error: " . $query_insert . "<br>" . mysqli_error($con);
               }
        
         }
    }
    else
    {
        echo 'Please select at least one product to be Purchesed';
    }

} 
?>

<html>
<head>

</head>
</html>