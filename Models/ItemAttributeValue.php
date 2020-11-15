<?php
/**
 * Orange Management
 *
 * PHP Version 7.4
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
use phpOMS\Localization\ISO3166TwoEnum;
use phpOMS\Localization\ISO639x1Enum;

/**
 * Item attribute value class.
 *
 * The relation with the type/item is defined in the ItemAttribute class.
 *
 * @package Modules\ItemManagement\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
class ItemAttributeValue implements \JsonSerializable, ArrayableInterface
{
    /**
     * Id
     *
     * @var int
     * @since 1.0.0
     */
    protected int $id = 0;

    /**
     * Type of the attribute
     *
     * @var int
     * @since 1.0.0
     */
    protected int $type = 0;

    /**
     * Int value
     *
     * @var null|int
     * @since 1.0.0
     */
    protected ?int $valueInt = null;

    /**
     * String value
     *
     * @var null|string
     * @since 1.0.0
     */
    protected ?string $valueStr = null;

    /**
     * Decimal value
     *
     * @var null|float
     * @since 1.0.0
     */
    protected ?float $valueDec = null;

    /**
     * DateTime value
     *
     * @var null|\DateTimeInterface
     * @since 1.0.0
     */
    protected ?\DateTimeInterface $valueDat = null;

    /**
     * Is a default value which can be selected
     *
     * @var bool
     * @since 1.0.0
     */
    protected bool $isDefault = false;

    /**
     * Language
     *
     * @var string
     * @since 1.0.0
     */
    protected string $language = ISO639x1Enum::_EN;

    /**
     * Country
     *
     * @var string
     * @since 1.0.0
     */
    protected string $country = ISO3166TwoEnum::_USA;

    /**
     * Constructor.
     *
     * @param int    $type     Type
     * @param mixed  $value    Value
     * @param string $language Language
     *
     * @since 1.0.0
     */
    public function __construct(int $type = 0, $value = '', string $language = ISO639x1Enum::_EN)
    {
        $this->type     = $type;
        $this->language = $language;

        $this->setValue($value);
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
     * Set value type
     *
     * @param int $type Type
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setType(int $type) : void
    {
        $this->type = $type;
    }

    /**
     * Set value
     *
     * @param int|string|float $value Value
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setValue($value) : void
    {
        if (\is_string($value)) {
            $this->valueStr = $value;
        } elseif (\is_int($value)) {
            $this->valueInt = $value;
        } elseif (\is_float($value)) {
            $this->valueDec = $value;
        } elseif ($value instanceof \DateTimeInterface) {
            $this->valueDat = $value;
        }
    }

    /**
     * Set value
     *
     * @param int $value Value
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setValueInt(int $value) : void
    {
        $this->valueInt = $value;
    }

    /**
     * Set value
     *
     * @param string $value Value
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setValueString(string $value) : void
    {
        $this->valueString = $value;
    }

    /**
     * Set value
     *
     * @param float $value Value
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setValueDecimal(float $value) : void
    {
        $this->valueDec = $value;
    }

    /**
     * Set value
     *
     * @param \DateTimeInterface $value Value
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setValueDat(\DateTimeInterface $value) : void
    {
        $this->valueDat = $value;
    }

    /**
     * Set default
     *
     * @param bool $isDefault Default
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setDefault(bool $isDefault) : void
    {
        $this->isDefault = $isDefault;
    }

    /**
     * Is default value?
     *
     * @return bool
     *
     * @since 1.0.0
     */
    public function isDefault() : bool
    {
        return $this->isDefault;
    }

    /**
     * Set language
     *
     * @param string $language Language
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setLanguage(string $language) : void
    {
        $this->language = $language;
    }

    /**
     * Set country
     *
     * @param string $country Country
     *
     * @return void
     *
     * @since 1.0.0
     */
    public function setCountry(string $country) : void
    {
        $this->country = $country;
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