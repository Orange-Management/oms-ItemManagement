<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\ItemManagement\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\ItemManagement\Models;

use phpOMS\Contract\ArrayableInterface;
use phpOMS\Localization\ISO639x1Enum;

/**
 * Item Attribute Type class.
 *
 * @package Modules\ItemManagement\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
class ItemAttributeType implements \JsonSerializable, ArrayableInterface
{
    /**
     * Id
     *
     * @var int
     * @since 1.0.0
     */
    protected int $id = 0;

    /**
     * Name/string identifier by which it can be found/categorized
     *
     * @var string
     * @since 1.0.0
     */
    public string $name = ''; // @todo: currently not filled, should be used as identifier or if not required removed (at the moment it seems like it is useless?!)

    /**
     * Which field data type is required (string, int, ...) in the value
     *
     * @var int
     * @since 1.0.0
     */
    protected int $fields = 0;

    /**
     * Is a custom value allowed (e.g. custom string)
     *
     * @var bool
     * @since 1.0.0
     */
    protected bool $custom = false;

    public string $validationPattern = '';

    public bool $isRequired = false;

    /**
     * Localization
     *
     * @var ItemAttributeTypeL11n
     */
    protected string |

ItemAttributeTypeL11n $l11n;

    /**
     * Possible default attribute values
     *
     * @var array
     */
    protected array $defaults = [];

    /**
     * Constructor.
     *
     * @param string $name Name/identifier of the attribute type
     *
     * @since 1.0.0
     */
    public function __construct(string $name = '')
    {
        $this->setL11n($name);
    }

    /**
     * Get id
     *
     * @return int
     *
     * @since 1.0.0
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Set l11n
     *
     * @param string|ItemAttributeTypeL11n $l11n Tag article l11n
     * @param string                       $lang Language
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setL11n(string | ItemAttributeTypeL11n $l11n, string $lang = ISO639x1Enum::_EN) : void
    {
        if ($l11n instanceof ItemAttributeTypeL11n) {
            $this->l11n = $l11n;
        } elseif (isset($this->l11n) && $this->l11n instanceof ItemAttributeTypeL11n) {
            $this->l11n->title = $l11n;
        } else {
            $this->l11n        = new ItemAttributeTypeL11n();
            $this->l11n->title = $l11n;
            $this->l11n->setLanguage($lang);
        }
    }

    /**
     * @return string
     *
     * @since 1.0.0
     */
    public function getL11n() : string
    {
        return $this->l11n instanceof ItemAttributeTypeL11n ? $this->l11n->title : $this->l11n;
    }

    /**
     * Set fields
     *
     * @param int $fields Fields
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setFields(int $fields) : void
    {
        $this->fields = $fields;
    }

    /**
     * Set custom
     *
     * @param bool $custom FieldsCustom
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setCustom(bool $custom) : void
    {
        $this->custom = $custom;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray() : array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
