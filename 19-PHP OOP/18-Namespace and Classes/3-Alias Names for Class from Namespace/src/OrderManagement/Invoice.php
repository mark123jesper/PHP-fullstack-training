<?php namespace OrderManagement;


class Invoice
{
    function generateInvoice($orderNo){
        echo "Here is your Invoice for Order: $orderNo" . PHP_EOL;
    }

}