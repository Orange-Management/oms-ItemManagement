<?php
/**
 * Orange Management
 *
 * PHP Version 7.2
 *
 * @package    TBD
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://website.orange-management.de
 */
declare(strict_types=1);

namespace Modules\ItemManagement\Models;

use Modules\Media\Models\MediaMapper;
use Modules\Profile\Models\ContactElement;
use Modules\Profile\Models\ContactElementMapper;
use Modules\Profile\Models\ContactMapper;
use phpOMS\DataStorage\Database\DataMapperAbstract;
use phpOMS\DataStorage\Database\Query\Builder;
use phpOMS\DataStorage\Database\Query\Column;
use phpOMS\DataStorage\Database\RelationType;

class ItemMapper extends DataMapperAbstract
{
    /**
     * Columns.
     *
     * @var array
     * @since 1.0.0
     */
    protected static $columns = [
        'itemmgmt_item_id'         => ['name' => 'itemmgmt_item_id', 'type' => 'int', 'internal' => 'id'],
        'itemmgmt_item_no'     => ['name' => 'itemmgmt_item_no', 'type' => 'int', 'internal' => 'number'],
        'itemmgmt_item_segment'    => ['name' => 'itemmgmt_item_segment', 'type' => 'int', 'internal' => 'segment'],
        'itemmgmt_item_productgroup'    => ['name' => 'itemmgmt_item_productgroup', 'type' => 'int', 'internal' => 'productGroup'],
        'itemmgmt_item_salesgroup'      => ['name' => 'itemmgmt_item_salesgroup', 'type' => 'int', 'internal' => 'salesGroup'],
        'itemmgmt_item_articlegroup'      => ['name' => 'itemmgmt_item_articlegroup', 'type' => 'int', 'internal' => 'articleGroup'],
        'itemmgmt_item_successor' => ['name' => 'itemmgmt_item_successor', 'type' => 'int', 'internal' => 'successor'],
        'itemmgmt_item_info' => ['name' => 'itemmgmt_item_info', 'type' => 'string', 'internal' => 'info'],
    ];

    /**
     * Primary table.
     *
     * @var string
     * @since 1.0.0
     */
    protected static $table = 'itemmgmt_item';

    /**
     * Primary field name.
     *
     * @var string
     * @since 1.0.0
     */
    protected static $primaryField = 'itemmgmt_item_id';

    protected static $hasMany = [
        'media' => [
            'mapper'         => MediaMapper::class, /* mapper of the related object */
            'table'          => 'itemmgmt_item_media', /* table of the related object, null if no relation table is used (many->1) */
            'dst'            => 'itemmgmt_item_media_dst',
            'src'            => 'itemmgmt_item_media_src',
        ],
    ];
}
