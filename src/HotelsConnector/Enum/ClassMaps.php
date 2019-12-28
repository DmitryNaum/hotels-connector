<?php

namespace Bronevik\HotelsConnector\Enum;

use Bronevik\HotelsConnector\Element as Element;

class ClassMaps
{
    const CLASSMAP_FOR_BASE_ENDPOINT = [
        'AddElements'                            => Element\AddElements::class,
        'AdditionalInfo'                         => Element\AdditionalInfo::class,
        'Amenity'                                => Element\Amenity::class,
        'AvailableAmenities'                     => Element\AvailableAmenities::class,
        'AvailableAmenity'                       => Element\AvailableAmenity::class,
        'AvailableMeal'                          => Element\AvailableMeal::class,
        'AvailableMeals'                         => Element\AvailableMeals::class,
        'BaseOffer'                              => Element\BaseOffer::class,
        'BaseRequest'                            => Element\BaseRequest::class,
        'BaseResponse'                           => Element\BaseResponse::class,
        'Bed'                                    => Element\Bed::class,
        'BedSet'                                 => Element\BedSet::class,
        'BedSets'                                => Element\BedSets::class,
        'BreakfastInfo'                          => Element\BreakfastInfo::class,
        'CancelOrderRequest'                     => Element\CancelOrderRequest::class,
        'CancelOrderResponse'                    => Element\CancelOrderResponse::class,
        'CancelServicesRequest'                  => Element\CancelServicesRequest::class,
        'CancelServicesResponse'                 => Element\CancelServicesResponse::class,
        'CancellationPolicy'                     => Element\CancellationPolicy::class,
        'CancelledService'                       => Element\CancelledService::class,
        'CancelledServices'                      => Element\CancelledServices::class,
        'Change'                                 => Element\Change::class,
        'ChangeList'                             => Element\ChangeList::class,
        'City'                                   => Element\City::class,
        'ClientPriceDetails'                     => Element\ClientPriceDetails::class,
        'Contract'                               => Element\Contract::class,
        'Coordinates'                            => Element\Coordinates::class,
        'Country'                                => Element\Country::class,
        'CountryCodes'                           => Element\CountryCodes::class,
        'CreateOrderRequest'                     => Element\CreateOrderRequest::class,
        'CreateOrderResponse'                    => Element\CreateOrderResponse::class,
        'Credentials'                            => Element\Credentials::class,
        'DailyPrice'                             => Element\DailyPrice::class,
        'DailyPriceMeals'                        => Element\DailyPriceMeals::class,
        'DailyPrices'                            => Element\DailyPrices::class,
        'DescriptionDetails'                     => Element\DescriptionDetails::class,
        'DetailedPrice'                          => Element\DetailedPrice::class,
        'FaultDetail'                            => Element\FaultDetail::class,
        'GeoLocation'                            => Element\GeoLocation::class,
        'GetAmenitiesRequest'                    => Element\GetAmenitiesRequest::class,
        'GetAmenitiesResponse'                   => Element\GetAmenitiesResponse::class,
        'GetCheckinCheckoutPricingRequest'       => Element\GetCheckinCheckoutPricingRequest::class,
        'GetCheckinCheckoutPricingResponse'      => Element\GetCheckinCheckoutPricingResponse::class,
        'GetCitiesRequest'                       => Element\GetCitiesRequest::class,
        'GetCitiesResponse'                      => Element\GetCitiesResponse::class,
        'GetCountriesRequest'                    => Element\GetCountriesRequest::class,
        'GetCountriesResponse'                   => Element\GetCountriesResponse::class,
        'GetHotelInfoRequest'                    => Element\GetHotelInfoRequest::class,
        'GetHotelInfoResponse'                   => Element\GetHotelInfoResponse::class,
        'GetHotelOfferPricingRequest'            => Element\GetHotelOfferPricingRequest::class,
        'GetHotelOfferPricingResponse'           => Element\GetHotelOfferPricingResponse::class,
        'GetHotelOfferRequest'                   => Element\GetHotelOfferRequest::class,
        'GetHotelOfferResponse'                  => Element\GetHotelOfferResponse::class,
        'GetMealsRequest'                        => Element\GetMealsRequest::class,
        'GetMealsResponse'                       => Element\GetMealsResponse::class,
        'GetOrderRequest'                        => Element\GetOrderRequest::class,
        'GetOrderResponse'                       => Element\GetOrderResponse::class,
        'GetOrdersChangelogRequest'              => Element\GetOrdersChangelogRequest::class,
        'GetOrdersChangelogResponse'             => Element\GetOrdersChangelogResponse::class,
        'GetServiceMessagesRequest'              => Element\GetServiceMessagesRequest::class,
        'GetServiceMessagesResponse'             => Element\GetServiceMessagesResponse::class,
        'Hotel'                                  => Element\Hotel::class,
        'HotelAmenity'                           => Element\HotelAmenity::class,
        'HotelGeo'                               => Element\HotelGeo::class,
        'HotelIds'                               => Element\HotelIds::class,
        'HotelInfo'                              => Element\HotelInfo::class,
        'HotelOffer'                             => Element\HotelOffer::class,
        'HotelOfferCancellationPolicy'           => Element\HotelOfferCancellationPolicy::class,
        'HotelOffers'                            => Element\HotelOffers::class,
        'HotelPriceDetails'                      => Element\HotelPriceDetails::class,
        'HotelRoom'                              => Element\HotelRoom::class,
        'HotelVatInfo'                           => Element\HotelVatInfo::class,
        'HotelWithCheapestOffer'                 => Element\HotelWithCheapestOffer::class,
        'HotelWithInfo'                          => Element\HotelWithInfo::class,
        'HotelWithOffers'                        => Element\HotelWithOffers::class,
        'Hotels'                                 => Element\Hotels::class,
        'HotelsWithCheapestOffer'                => Element\HotelsWithCheapestOffer::class,
        'Image'                                  => Element\Image::class,
        'Info'                                   => Element\Info::class,
        'InformationForGuest'                    => Element\InformationForGuest::class,
        'Meal'                                   => Element\Meal::class,
        'MealPriceDetails'                       => Element\MealPriceDetails::class,
        'Message'                                => Element\Message::class,
        'Messages'                               => Element\Messages::class,
        'NamedDetailedPrice'                     => Element\NamedDetailedPrice::class,
        'OfferCheckinCheckoutPrices'             => Element\OfferCheckinCheckoutPrices::class,
        'OfferCodes'                             => Element\OfferCodes::class,
        'OfferHourPrice'                         => Element\OfferHourPrice::class,
        'OfferHourPrices'                        => Element\OfferHourPrices::class,
        'OfferPolicy'                            => Element\OfferPolicy::class,
        'OffersCheckinCheckoutPrices'            => Element\OffersCheckinCheckoutPrices::class,
        'Order'                                  => Element\Order::class,
        'OrderService'                           => Element\OrderService::class,
        'OrderServiceAccommodation'              => Element\OrderServiceAccommodation::class,
        'OrdersChangelogRecord'                  => Element\OrdersChangelogRecord::class,
        'PingRequest'                            => Element\PingRequest::class,
        'PingResponse'                           => Element\PingResponse::class,
        'PriceDetails'                           => Element\PriceDetails::class,
        'RemoveOrdersChangelogRecordsRequest'    => Element\RemoveOrdersChangelogRecordsRequest::class,
        'RemoveOrdersChangelogRecordsResponse'   => Element\RemoveOrdersChangelogRecordsResponse::class,
        'SearchAvailabilityHotelOffer'           => Element\SearchAvailabilityHotelOffer::class,
        'SearchHotelAvailabilityRequest'         => Element\SearchHotelAvailabilityRequest::class,
        'SearchHotelAvailabilityResponse'        => Element\SearchHotelAvailabilityResponse::class,
        'SearchHotelOffersRequest'               => Element\SearchHotelOffersRequest::class,
        'SearchHotelOffersResponse'              => Element\SearchHotelOffersResponse::class,
        'SearchOfferCriterion'                   => Element\SearchOfferCriterion::class,
        'SearchOfferCriterionBreakfastIncluded'  => Element\SearchOfferCriterionBreakfastIncluded::class,
        'SearchOfferCriterionHotelCategory'      => Element\SearchOfferCriterionHotelCategory::class,
        'SearchOfferCriterionHotelName'          => Element\SearchOfferCriterionHotelName::class,
        'SearchOfferCriterionNumberOfGuests'     => Element\SearchOfferCriterionNumberOfGuests::class,
        'SearchOfferCriterionOnlyOnline'         => Element\SearchOfferCriterionOnlyOnline::class,
        'SearchOfferCriterionPaymentRecipient'   => Element\SearchOfferCriterionPaymentRecipient::class,
        'SearchOrderCriterion'                   => Element\SearchOrderCriterion::class,
        'SearchOrderCriterionArrivalDate'        => Element\SearchOrderCriterionArrivalDate::class,
        'SearchOrderCriterionCreateDate'         => Element\SearchOrderCriterionCreateDate::class,
        'SearchOrderCriterionDepartureDate'      => Element\SearchOrderCriterionDepartureDate::class,
        'SearchOrderCriterionGuest'              => Element\SearchOrderCriterionGuest::class,
        'SearchOrderCriterionOrderId'            => Element\SearchOrderCriterionOrderId::class,
        'SearchOrderCriterionServiceId'          => Element\SearchOrderCriterionServiceId::class,
        'SearchOrderCriterionServiceReferenceId' => Element\SearchOrderCriterionServiceReferenceId::class,
        'SearchOrdersRequest'                    => Element\SearchOrdersRequest::class,
        'SearchOrdersResponse'                   => Element\SearchOrdersResponse::class,
        'SendServiceMessageRequest'              => Element\SendServiceMessageRequest::class,
        'SendServiceMessageResponse'             => Element\SendServiceMessageResponse::class,
        'Service'                                => Element\Service::class,
        'ServiceAccommodation'                   => Element\ServiceAccommodation::class,
        'ServiceExtraField'                      => Element\ServiceExtraField::class,
        'ServiceIdsForCancellation'              => Element\ServiceIdsForCancellation::class,
        'ServiceMessages'                        => Element\ServiceMessages::class,
        'SkipElements'                           => Element\SkipElements::class,
        'Tax'                                    => Element\Tax::class,
        'UpdateOrderRequest'                     => Element\UpdateOrderRequest::class,
        'UpdateOrderResponse'                    => Element\UpdateOrderResponse::class,
        'UpdateServiceRequest'                   => Element\UpdateServiceRequest::class,
        'UpdateServiceResponse'                  => Element\UpdateServiceResponse::class,
        'WindowViews'                            => Element\WindowViews::class,
    ];
}
