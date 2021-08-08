<?php

require_once 'src/OrderManagement/Orders.php';
use OrderManagement\Orders as Ord;


class OrderPage extends Ord{
    function showOrder($orderNo){
        $this->fetchOrders($orderNo);
    }
}

$order1 = new OrderPage();
$order1->showOrder(101);
$order1->generateInvoice(101);
