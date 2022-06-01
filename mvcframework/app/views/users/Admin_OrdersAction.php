<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>
<?php
echo "<table border=1 >
<th >id</th>
<th>Ordered By</th>
<th>Base Product</th>
<th>Fabric</th>
<th>Colour</th>
<th>Printing Type</th>
<th>Quantity</th>
<th>Additional Info</th>
<th>delivery time</th>
<th>Order Date</th>
<th>Order status</th>
<th>Order status</th>";

foreach($data as $order){
   echo "<tr ><td>".$order->Id."</td><td>".$order->Ordered_By."</td><td>".$order->base_product."</td><td>".$order->Fabric."</td><td>".$order->Colour."</td><td>".$order->printing_Type."</td><td>".$order->Quantity."</td><td>".$order->additionalInfo."</td><td>".$order->deliveryTime."</td>
   <td>".$order->Order_date."</td><td>".$order->Order_status."</td><td><form action ='http://localhost/mvcframework/users/Admin_OrdersAction?action=decline&id=$order->Id' method = 'POST'>
      <input type = 'submit' name = 'decline-button' value ='Decline'  ></input>
      </form><form action ='http://localhost/mvcframework/users/Admin_OrdersAction?action=accept&id=$order->Id' method = 'POST'>
         <input type = 'submit' name = 'accept-button' value ='Accept'  ></input></form></td></tr>";

}
echo"</table>";
?>