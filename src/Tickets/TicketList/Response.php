<?php


namespace MuCTS\Sobot\Tickets\TicketList;

use MuCTS\Sobot\Tickets\TicketList\Response\Items;

/**
 * Class Response
 * @property-read int $page_no
 * @property-read int $page_size
 * @property-read int $page_count
 * @property-read int $total_count
 * @property-read Items[] $items
 * @package MuCTS\Sobot\Tickets\TicketList
 */
class Response extends \MuCTS\Sobot\Contracts\Response
{

}