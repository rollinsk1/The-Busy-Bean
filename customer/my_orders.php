
<center><!-- center Starts -->

<h1>My Orders</h1>

</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Amount</th>
<th>Invoice</th>
<th>Qty</th>
<th>Order Date</th>
<th>Status</th>
<th>Action</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php

$i=0;

$get_customer_order = "select * from customer_orders where order_id='$order_id'";

$run_customer_order = mysqli_query($con,$get_customer_order);

$row_customer_order = mysqli_fetch_array($run_customer_order);

while($row_c=mysqli_fetch_array($run_customer_order)){

$order_id = $row_customer_order['order_id'];

$due_amount = $row_customer_order['due_amount'];

$invoice_no = $row_customer_order['invoice_no'];

$qty = $row_customer_order['qty'];

$order_date = substr($row_customer_order['order_date'],0,11);

$order_status = $row_customer_order['order_status'];

$i++;

?>

<tr><!-- tr Starts -->

<th><?php echo $i; ?></th>

<td>$<?php echo $due_amount; ?></td>

<td><?php echo $invoice_no; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $order_date; ?></td>

<td><?php echo $order_status; ?></td>

<td>
<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-success btn-xs" > Confirm If Paid </a>
</td>


</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->


</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->



