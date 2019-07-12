<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\PaymentRecipients;

class BaseOffer
{
    /**
     * Название предложения
     * The offer name
     *
     * @var string
     */
    public $name;

    /**
     * Идентификатор номера
     * The room id
     * Type: xsd:int
     *
     * @var int
     */
    public $roomId;

    /**
     * Список политик аннуляций
     * The list of cancellation policies
     *
     * @var HotelOfferCancellationPolicy[]
     */
    public $cancellationPolicies = [];

    /**
     * Список доступных типов питания
     * The list of available meal services
     *
     * @var AvailableMeals
     */
    public $meals;

    /**
     * Количество доступных номеров
     * The amount of available rooms within this offer
     *
     * @var int
     */
    public $freeRooms;

    /**
     * Место оплаты
     * Specifies the payment scheme
     *
     * @var string
     * @see PaymentRecipients
     */
    public $paymentRecipient;

    /**
     * Тип размещения в номере
     * The room type
     *
     * @var string
     */
    public $roomType;

    /**
     * Является ли номер номером с подселением
     * Specifies whether the room is dorm or private
     *
     * @var boolean
     */
    public $isSharedRoom;

    /**
     * Является ли номер блочным (Блочный номер - это номер с общей ванной комнатой и туалетом
     *                                 для нескольких номеров)
     * Specifies whether the bathroom is located in the hallway and shared by all of the guests
     *                                 on that floor
     *
     * @var boolean
     */
    public $isBlockRoom;

    /**
     * Флаг невозвратности предложения
     * Whether the offer is non-refundable
     *
     * @var boolean
     */
    public $nonRefundable;

    public function __construct()
    {
        $this->meals = new AvailableMeals();
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     * @return int
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @return bool
     */
    public function hasCancellationPolicies()
    {
        return count($this->cancellationPolicies) > 0;
    }

    /**
     * @return HotelOfferCancellationPolicy[]
     */
    public function getCancellationPolicies()
    {
        return $this->cancellationPolicies;
    }

    /**
     * @param HotelOfferCancellationPolicy $cancellationPolicies
     */
    public function addCancellationPolicies($cancellationPolicies)
    {
        $this->cancellationPolicies[] = $cancellationPolicies;
    }

    /**
     * @param AvailableMeals $meals
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;
    }

    /**
     * @return AvailableMeals
     */
    public function getMeals()
    {
        return $this->meals;
    }

    /**
     * @param int $freeRooms
     */
    public function setFreeRooms($freeRooms)
    {
        $this->freeRooms = $freeRooms;
    }

    /**
     * @return int
     */
    public function getFreeRooms()
    {
        return $this->freeRooms;
    }

    /**
     * @param string $paymentRecipient
     */
    public function setPaymentRecipient($paymentRecipient)
    {
        $this->paymentRecipient = $paymentRecipient;
    }

    /**
     * @return string
     */
    public function getPaymentRecipient()
    {
        return $this->paymentRecipient;
    }

    /**
     * @param string $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param boolean $isSharedRoom
     */
    public function setIsSharedRoom($isSharedRoom)
    {
        $this->isSharedRoom = $isSharedRoom;
    }

    /**
     * @return boolean
     */
    public function getIsSharedRoom()
    {
        return $this->isSharedRoom;
    }

    /**
     * @param boolean $isBlockRoom
     */
    public function setIsBlockRoom($isBlockRoom)
    {
        $this->isBlockRoom = $isBlockRoom;
    }

    /**
     * @return boolean
     */
    public function getIsBlockRoom()
    {
        return $this->isBlockRoom;
    }

    /**
     * @param boolean $nonRefundable
     */
    public function setNonRefundable($nonRefundable)
    {
        $this->nonRefundable = $nonRefundable;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
        return $this->nonRefundable;
    }
}
