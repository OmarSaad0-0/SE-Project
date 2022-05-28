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
<th>Order Date</th>";

foreach($data as $order){
   echo "<tr ><td>".$order->Id."</td><td>".$order->Ordered_By."</td><td>".$order->base_product."</td><td>".$order->Fabric."</td><td>".$order->Colour."</td><td>".$order->printing_Type."</td><td>".$order->Quantity."</td><td>".$order->additionalInfo."</td><td>".$order->deliveryTime."</td><td>".$order->Order_date."</td></tr>";

}
echo"</table>";
?>