<?php


namespace Ccwawamiya\Sobot\Tickets\TicketList;

use Ccwawamiya\Sobot\Tickets\TicketList\Response\Items;

/**
 * Class Response
 * @property-read int $page_no
 * @property-read int $page_size
 * @property-read int $page_count
 * @property-read int $total_count
 * @property-read Items[] $items
 * @package Ccwawamiya\Sobot\Tickets\TicketList
 */
class Response extends \Ccwawamiya\Sobot\Contracts\Response
{

}