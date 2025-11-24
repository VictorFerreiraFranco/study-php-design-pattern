<?php

namespace Study\Design\Shop\Facade;

use Study\Design\Shop\Models\Order;
use Study\Design\Shop\Services\InventoryService;
use Study\Design\Shop\Services\InvoiceService;
use Study\Design\Shop\Services\NotificationService;
use Study\Design\Shop\Services\PaymentService;

class OrderFacade
{
    private InventoryService $inventoryService;
    private PaymentService $paymentService;
    private InvoiceService $invoiceService;
    private NotificationService $notificationService;
    
    public function __construct(
        InventoryService $inventoryService,
        PaymentService $paymentService,
        InvoiceService $invoiceService,
        NotificationService $notificationService
    ) {
        $this->inventoryService = $inventoryService;
        $this->paymentService = $paymentService;
        $this->invoiceService = $invoiceService;
        $this->notificationService = $notificationService;
    }
    
    public function placeOrder(Order $order): void
    {
        if (!$this->inventoryService->checkStock($order->getProduct())) {
            echo "Produto sem estoque! <br/>";
            return;
        }
        
        $this->paymentService->processPayment($order);
        $this->invoiceService->generateInvoice($order);
        $this->notificationService->sendConfirmation($order);
    }
}