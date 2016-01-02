<?php

/**
 * @author 
 * @copyright 2014
 */
  function get($query)
  {
     $con = mysqli_connect("127.0.0.1","root","","commerce");
     $res = mysqli_query($con , $query);
     $i=1;
     $str='<table id="product_table" style="border: 1px solid gray ; border-collapse: collapse;" >';
     if(mysqli_num_rows($res)==0)
     {
        echo'Sorry No Products Right Now';
     }
     else
     {
            while($product_info = mysqli_fetch_array($res))
         {     
            $str.='<tr>';
            $str.='<td width="30">'.($i++).'</td>' .'<td> <img  src="'.$product_info['Picture'].'"'.'/> </td>';
            $str.= '<td>'.$product_info['Name'] . '<br/> <hr/>' . $product_info['Description'];
            $str.= '<br/> <hr/>'. 'Price : '.$product_info['Price'].'</td>';
            $str.='<td width="30">' . '<input  type="checkbox" name="chk[]" id="chk" value ="'.$product_info['ID'].'" />' . '</td>';
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
?>
