<?php

namespace detrading\SchwabAPI\Factories;


use detrading\SchwabAPI\Schemas\Instrument;
use detrading\SchwabAPI\Schemas\OrderRequest;

class CreateBuyEquityOrderRequest {


    public function __construct() {

    }


    public static function create( string $symbol, float $quantity, Instrument $instrument ): OrderRequest {


        return new OrderRequest( 'NORMAL',
                                 'DAY',
                                 'MARKET',
                                 NULL,
                                 NULL,
                                 $quantity,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL,
                                 NULL
        );
    }


}