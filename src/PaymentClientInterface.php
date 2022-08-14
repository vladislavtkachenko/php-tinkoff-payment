<?php

namespace Pada\Tinkoff\Payment;

use Pada\Tinkoff\Payment\Contract\CancelResultInterface;
use Pada\Tinkoff\Payment\Contract\CheckOrderResultInterface;
use Pada\Tinkoff\Payment\Contract\GetStateResultInterface;
use Pada\Tinkoff\Payment\Contract\NewPaymentInterface;
use Pada\Tinkoff\Payment\Contract\NewPaymentResultInterface;
use Pada\Tinkoff\Payment\Contract\ResendResultInterface;
use Psr\Log\LoggerAwareInterface;

interface PaymentClientInterface extends LoggerAwareInterface
{
    public function init(NewPaymentInterface $newPayment): NewPaymentResultInterface;
    public function cancel(int $paymentId, ?int $amount = null, ?string $ip = null): CancelResultInterface;
    public function getState(int $paymentId, ?string $ip = null): GetStateResultInterface;
    public function checkOrder(int $orderId): CheckOrderResultInterface;
    public function resendNotifications(): ResendResultInterface;
}
