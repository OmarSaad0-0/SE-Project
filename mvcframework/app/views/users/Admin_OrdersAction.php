<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>

<table class="table table-striped table-hover table-bordered">
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
<th>Order status</th>
<?php
foreach($data as $order){
   echo "<tr ><td>".$order->Id."</td><td>".$order->Ordered_By."</td><td>".$order->base_product."</td><td>".$order->Fabric."</td><td>".$order->Colour."</td><td>".$order->printing_Type."</td><td>".$order->Quantity."</td><td>".$order->additionalInfo."</td><td>".$order->deliveryTime."</td>
   <td>".$order->Order_date."</td><td>".$order->Order_status."</td><td><form action ='http://localhost/mvcframework/users/Admin_OrdersAction?action=decline&id=$order->Id' method = 'POST'>
      <div class='opacity-75'><input type = 'submit' name = 'decline-button' value ='Decline'  class='btn btn-dark' ></input></div>
      </form><form action ='http://localhost/mvcframework/users/Admin_OrdersAction?action=accept&id=$order->Id' method = 'POST'>
         <div class='opacity-77'><input type = 'submit' name = 'accept-button' value ='Accept' class='btn btn-primary' ></input></div></form></td></tr>";

}
echo"</table>";
?>