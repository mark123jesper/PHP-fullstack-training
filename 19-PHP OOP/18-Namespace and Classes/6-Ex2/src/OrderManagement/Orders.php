<?php namespace OrderManagement;

require_once 'src/OrderManagement/Invoice.php';
use OrderManagement\Invoice;


class Orders extends Invoice
{
   function fetchOrders($orderNo){
        echo "Here is your order details: $orderNo" . PHP_EOL;
    }
}