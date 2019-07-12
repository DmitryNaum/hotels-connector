<?php

namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\AddElementsTypes;

class SearchHotelAvailabilityRequest extends BaseRequest
{
    /**
     * Идентификатор города, по которому будет осуществлен поиск.
     * The identifier of the city that will be searched.
     *
     * @var int
     */
    public $cityId;

    /**
     * Идентификаторы отелей, по которым будет осуществлен поиск.
     * The identifiers of the hotels that will be searched.
     *
     * @var HotelIds
     */
    public $hotelIds;

    /**
     * Идентификаторы отелей, по которым будет осуществлен поиск.
     * The identifiers of the hotels that will be searched.
     *
     * @var GeoLocation
     */
    public $geolocation;

    /**
     * Дата заезда.
     * Arrival date.
     *
     * @var string
     */
    public $checkInDate;

    /**
     * Дата выезда.
     * Departure date.
     *
     * @var string
     */
    public $checkOutDate;

    /**
     * Валюта (трекхбуквенный код)
     * The currency (three-letter code)
     *
     * @var string
     */
    public $currency;

    /**
     * Критерии поиска.
     * The search criteria.
     *
     * @var SearchOfferCriterion[]
     */
    public $searchCriteria = [];

    /**
     * @var AddElements
     * @see AddElementsTypes
     */
    public $addElements;

    /**
     * @param int $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param HotelIds $hotelIds
     */
    public function setHotelIds($hotelIds)
    {
        $this->hotelIds = $hotelIds;
    }

    /**
     * @return HotelIds
     */
    public function getHotelIds()
    {
        return $this->hotelIds;
    }

    /**
     * @param GeoLocation $geolocation
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;
    }

    /**
     * @return GeoLocation
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * @param string $checkInDate
     */
    public function setCheckInDate($checkInDate)
    {
        $this->checkInDate = $checkInDate;
    }

    /**
     * @return string
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * @param string $checkOutDate
     */
    public function setCheckOutDate($checkOutDate)
    {
        $this->checkOutDate = $checkOutDate;
    }

    /**
     * @return string
     */
    public function getCheckOutDate()
    {
        return $this->checkOutDate;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return bool
     */
    public function hasSearchCriteria()
    {
        return count($this->searchCriteria) > 0;
    }

    /**
     * @return SearchOfferCriterion[]
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param SearchOfferCriterion $searchCriteria
     */
    public function addSearchCriteria($searchCriteria)
    {
        $this->searchCriteria[] = $searchCriteria;
    }

    /**
     * @param AddElements $addElements
     */
    public function setAddElements($addElements)
    {
        $this->addElements = $addElements;
    }

    /**
     * @return AddElements
     */
    public function getAddElements()
    {
        return $this->addElements;
    }
}
