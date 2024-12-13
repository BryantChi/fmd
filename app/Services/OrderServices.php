<?php
namespace App\Services;

use App\Models\Admin\OrderInfo as Order;

class OrderServices
{
    public function generateOrderNumber(): string
    {
        do {
            $orderNumber = 'ORD-' . strtoupper(uniqid());
        } while (Order::where('order_number', $orderNumber)->exists());

        return $orderNumber;
    }
}
