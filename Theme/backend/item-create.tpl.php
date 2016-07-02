<?php
/**
 * Orange Management
 *
 * PHP Version 7.0
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @author     Dennis Eichhorn <d.eichhorn@oms.com>
 * @copyright  2013 Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
/**
 * @var \phpOMS\Views\View $this
 */
echo $this->getData('nav')->render(); ?>

<div class="tabular-2">
    <div class="box">
        <ul class="tab-links">
            <li><label for="c-tab-1"><?= $this->l11n->getText('ItemManagement', 'Master') ?></label>
            <li><label for="c-tab-2"><?= $this->l11n->getText('ItemManagement', 'Properties') ?></label>
            <li><label for="c-tab-4"><?= $this->l11n->getText('ItemManagement', 'Sales') ?></label>
            <li><label for="c-tab-5"><?= $this->l11n->getText('ItemManagement', 'Purchase') ?></label>
            <li><label for="c-tab-6"><?= $this->l11n->getText('ItemManagement', 'Accounting') ?></label>
            <li><label for="c-tab-7"><?= $this->l11n->getText('ItemManagement', 'Production') ?></label>
            <li><label for="c-tab-8"><?= $this->l11n->getText('ItemManagement', 'StockList') ?></label>
            <li><label for="c-tab-9"><?= $this->l11n->getText('ItemManagement', 'QM') ?></label>
            <li><label for="c-tab-10"><?= $this->l11n->getText('ItemManagement', 'Packaging') ?></label>
            <li><label for="c-tab-11"><?= $this->l11n->getText('ItemManagement', 'Media') ?></label>
            <li><label for="c-tab-12"><?= $this->l11n->getText('ItemManagement', 'Stock') ?></label>
            <li><label for="c-tab-13"><?= $this->l11n->getText('ItemManagement', 'Disposal') ?></label>
            <li><label for="c-tab-14"><?= $this->l11n->getText('ItemManagement', 'Files') ?></label>
            <li><label for="c-tab-15"><?= $this->l11n->getText('ItemManagement', 'Logs') ?></label>
        </ul>
    </div>
    <div class="tab-content">
        <input type="radio" id="c-tab-1" name="tabular-2" checked>
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Item') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iSource"><?= $this->l11n->getText(0, 'ID') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iSource" name="source" type="text" placeholder="" required></span>
                            <tr><td><label for="iSegment"><?= $this->l11n->getText('ItemManagement', 'Segment') ?></label>
                            <tr><td><input id="iSegment" name="segment" type="text" placeholder="" required>
                            <tr><td><label for="iProductgroup"><?= $this->l11n->getText('ItemManagement', 'Productgroup') ?></label>
                            <tr><td><input id="iProductgroup" name="productgroup" type="text" placeholder="" required>
                            <tr><td><label for="iGroup"><?= $this->l11n->getText('ItemManagement', 'Group') ?></label>
                            <tr><td><input id="iGroup" name="group" type="text" placeholder="" required>
                            <tr><td><label for="iArticlegroup"><?= $this->l11n->getText('ItemManagement', 'Articlegroup') ?></label>
                            <tr><td><input id="iArticlegroup" name="articlegroup" type="text" placeholder="" required>
                            <tr><td><label for="iSSuccessor"><?= $this->l11n->getText('ItemManagement', 'Successor') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iSource" name="source" type="text" placeholder=""></span>
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Create') ?>">
                        </table>
                    </form>
                </div>
            </section>

            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Language') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iLanguage"><?= $this->l11n->getText('ItemManagement', 'Language') ?></label>
                            <tr><td><select id="iLanguage" name="language">
                                        <option>
                                    </select>
                            <tr><td><label for="iName"><?= $this->l11n->getText('ItemManagement', 'Name1') ?></label>
                            <tr><td><input id="iName" name="name" type="text" placeholder="">
                            <tr><td><label for="iName"><?= $this->l11n->getText('ItemManagement', 'Name2') ?></label>
                            <tr><td><input id="iName" name="name" type="text" placeholder="">
                            <tr><td><label for="iName"><?= $this->l11n->getText('ItemManagement', 'Name3') ?></label>
                            <tr><td><input id="iName" name="name" type="text" placeholder="">
                            <tr><td><label for="iDescription"><?= $this->l11n->getText('ItemManagement', 'Description') ?></label>
                            <tr><td><textarea id="iDescription" name="description"></textarea>
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-2" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Property') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Name') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iPCustomsId" name="customsid" type="text" placeholder=""></span>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'Unit') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option>
                                    </select>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Value') ?></label>
                            <tr><td><input id="iPCustomsId" name="customsid" type="text" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Language') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'Language') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option>
                                    </select>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Property') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iPCustomsId" name="customsid" type="text" placeholder=""></span>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Translation') ?></label>
                            <tr><td><input id="iPCustomsId" name="customsid" type="text" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Language') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'Language') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option>
                                    </select>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Value') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iPCustomsId" name="customsid" type="text" placeholder=""></span>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Translation') ?></label>
                            <tr><td><input id="iPCustomsId" name="customsid" type="text" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>

            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Attribute') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Name') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iPCustomsId" name="customsid" type="text" placeholder=""></span>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'Unit') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option>
                                    </select>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Value') ?></label>
                            <tr><td><input id="iPCustomsId" name="customsid" type="text" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Language') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'Language') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option>
                                    </select>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Attribute') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iPCustomsId" name="customsid" type="text" placeholder=""></span>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Translation') ?></label>
                            <tr><td><input id="iPCustomsId" name="customsid" type="text" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Language') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'Language') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option>
                                    </select>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Value') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iPCustomsId" name="customsid" type="text" placeholder=""></span>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'Translation') ?></label>
                            <tr><td><input id="iPCustomsId" name="customsid" type="text" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-4" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Sales') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPType"><?= $this->l11n->getText('ItemManagement', 'Status') ?></label>
                            <tr><td><select id="iPType" name="ptye">
                                        <option>
                                    </select>
                            <tr><td><label for="iPrice">GTIN</label>
                            <tr><td><input id="iPrice" name="price" type="text" placeholder="">
                            <tr><td colspan="2"><label for="iPPriceUnit"><?= $this->l11n->getText('ItemManagement', 'PriceUnit') ?></label>
                            <tr><td><select id="iPPriceUnit" name="ppriceunit">
                                        <option value="0">
                                    </select><td>
                            <tr><td colspan="2"><label for="iPQuantityUnit"><?= $this->l11n->getText('ItemManagement', 'QuantityUnit') ?></label>
                            <tr><td><select id="iPQuantityUnit" name="pquantityunit">
                                        <option value="0">
                                    </select><td>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'TradingUnit') ?></label>
                            <tr><td><input id="iPTradingUnit" name="tradingunit" type="number" min="0" step="any" placeholder="">
                            <tr><td><label for="iPTracking"><?= $this->l11n->getText('ItemManagement', 'Tracking') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option><?= $this->l11n->getText('ItemManagement', 'None') ?>
                                        <option><?= $this->l11n->getText('ItemManagement', 'Lot') ?>
                                        <option><?= $this->l11n->getText('ItemManagement', 'SN') ?>
                                        <option><?= $this->l11n->getText('ItemManagement', 'Purchase') ?>
                                    </select>
                            <tr><td><label for="iPVariation"><?= $this->l11n->getText('ItemManagement', 'Commission') ?></label>
                            <tr><td><select id="iPVariation" name="pvariation">
                                        <option value="0">
                                    </select>
                            <tr><td><label for="iPCustomsId"><?= $this->l11n->getText('ItemManagement', 'CustomsID') ?></label>
                            <tr><td><input id="iPCustomsId" name="customsid" type="text" placeholder="">
                            <tr><td><label for="iSInfo"><?= $this->l11n->getText('ItemManagement', 'Info') ?></label>
                            <tr><td><textarea id="iSInfo" name="sinfo"></textarea>
                        </table>
                    </form>
                </div>
            </section>

            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Price') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td colspan="2"><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'Name') ?></label>
                            <tr><td><input id="iPName" name="pname" type="text" placeholder=""><td>
                            <tr><td colspan="2"><label for="iPrice"><?= $this->l11n->getText('ItemManagement', 'Start') ?></label>
                            <tr><td><input id="iPrice" name="price" type="datetime-local"><td>
                            <tr><td colspan="2"><label for="iPrice"><?= $this->l11n->getText('ItemManagement', 'End') ?></label>
                            <tr><td><input id="iPrice" name="price" type="datetime-local"><td>
                            <tr><td colspan="2"><label for="iPType"><?= $this->l11n->getText('ItemManagement', 'Country') ?></label>
                            <tr><td><select id="iPType" name="ptye">
                                        <option>
                                    </select><td>
                            <tr><td colspan="2"><label for="iPQuantity"><?= $this->l11n->getText('ItemManagement', 'Quantity') ?></label>
                            <tr><td><input id="iPQuantity" name="quantity" type="text" placeholder=""><td>
                            <tr><td colspan="2"><label for="iPrice"><?= $this->l11n->getText('ItemManagement', 'Price') ?></label>
                            <tr><td><input id="iPrice" name="price" type="number" step="any" min="0" placeholder=""><td>
                            <tr><td colspan="2"><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Discount') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder=""><td>
                            <tr><td colspan="2"><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'DiscountP') ?></label>
                            <tr><td><input id="iDiscountP" name="discountp" type="number" step="any" min="0" placeholder=""><td>
                            <tr><td colspan="2"><label for="iBonus"><?= $this->l11n->getText('ItemManagement', 'Bonus') ?></label>
                            <tr><td><input id="iBonus" name="bonus" type="number" step="any" min="0" placeholder=""><td>
                            <tr><td colspan="2"><label for="iGroup"><?= $this->l11n->getText('ItemManagement', 'ClientGroup') ?></label>
                            <tr><td><input id="iGroup" name="price" type="text" placeholder=""><td><button><?= $this->l11n->getText(0, 'Add') ?></button>
                            <tr><td colspan="2"><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-5" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Purchase') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iSupplierId"><?= $this->l11n->getText('ItemManagement', 'Supplier') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iSupplierId" name="supplierid" type="text" placeholder="" required></span>
                            <tr><td><label for="iPrice">GTIN</label>
                            <tr><td><input id="iPrice" name="price" type="text" placeholder="">
                            <tr><td><label for="iPPriceUnit"><?= $this->l11n->getText('ItemManagement', 'PriceUnit') ?></label>
                            <tr><td><select id="iPPriceUnit" name="ppriceunit">
                                        <option value="0">
                                    </select><td>
                            <tr><td><label for="iPQuantityUnit"><?= $this->l11n->getText('ItemManagement', 'QuantityUnit') ?></label>
                            <tr><td><select id="iPQuantityUnit" name="pquantityunit">
                                        <option value="0">
                                    </select><td>
                            <tr><td><label for="iPTradingUnit"><?= $this->l11n->getText('ItemManagement', 'TradingUnit') ?></label>
                            <tr><td><input id="iPTradingUnit" name="tradingunit" type="number" min="0" step="any" placeholder="">
                            <tr><td><label for="iPTracking"><?= $this->l11n->getText('ItemManagement', 'Tracking') ?></label>
                            <tr><td><select id="iPTracking" name="tracking">
                                        <option><?= $this->l11n->getText('ItemManagement', 'None') ?>
                                        <option><?= $this->l11n->getText('ItemManagement', 'Lot') ?>
                                        <option><?= $this->l11n->getText('ItemManagement', 'SN') ?>
                                    </select>
                            <tr><td><label for="iPInfo"><?= $this->l11n->getText('ItemManagement', 'Info') ?></label>
                            <tr><td><textarea id="iPInfo" name="pinfo"></textarea>
                        </table>
                    </form>
                </div>
            </section>

            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Price') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'Name') ?></label>
                            <tr><td><input id="iPName" name="pname" type="text" placeholder="">
                            <tr><td><label for="iPQuantity"><?= $this->l11n->getText('ItemManagement', 'Quantity') ?></label>
                            <tr><td><input id="iPQuantity" name="quantity" type="text" placeholder="">
                            <tr><td><label for="iPrice"><?= $this->l11n->getText('ItemManagement', 'Price') ?></label>
                            <tr><td><input id="iPrice" name="price" type="number" step="any" min="0" placeholder=""><td>
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Discount') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'DiscountP') ?></label>
                            <tr><td><input id="iDiscountP" name="discountp" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iBonus"><?= $this->l11n->getText('ItemManagement', 'Bonus') ?></label>
                            <tr><td><input id="iBonus" name="bonus" type="number" step="any" min="0" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>

            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Stock') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPVariation"><?= $this->l11n->getText('ItemManagement', 'Stock') ?></label>
                            <tr><td><select id="iPVariation" name="pvariation">
                                        <option value="0">
                                    </select>
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'ReorderLevel') ?></label>
                            <tr><td><input id="iPName" name="pname" type="text" placeholder="">
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'MinimumLevel') ?></label>
                            <tr><td><input id="iPName" name="pname" type="text" placeholder="">
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'MaximumLevel') ?></label>
                            <tr><td><input id="iPName" name="pname" type="text" placeholder="">
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'Leadtime') ?></label>
                            <tr><td><input id="iPName" name="pname" type="number" min="0" step="1" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Save') ?>">
                        </table>
                    </form>
                </div>
            </section>

            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Supplier') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'Name') ?></label>
                            <tr><td><input id="iPName" name="pname" type="text" placeholder="">
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'Description') ?></label>
                            <tr><td><textarea></textarea>
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-6" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Accounting') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td colspan="2"><label for="iACostIndicator"><?= $this->l11n->getText('ItemManagement', 'CostIndicator') ?></label>
                            <tr><td><input id="iACostIndicator" name="costindicator" type="text" placeholder="">
                            <tr><td colspan="2"><label for="iAEarningIndicator"><?= $this->l11n->getText('ItemManagement', 'EarningIndicator') ?></label>
                            <tr><td><input id="iAEarningIndicator" name="earningindicator" type="text" placeholder="">
                            <tr><td colspan="2"><label for="iACostIndicator"><?= $this->l11n->getText('ItemManagement', 'CostCenter') ?></label>
                            <tr><td><input id="iACostIndicator" name="costindicator" type="text" placeholder="">
                            <tr><td colspan="2"><label for="iAEarningIndicator"><?= $this->l11n->getText('ItemManagement', 'CostObject') ?></label>
                            <tr><td><input id="iAEarningIndicator" name="earningindicator" type="text" placeholder="">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-7" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Production') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPType"><?= $this->l11n->getText('ItemManagement', 'Status') ?></label>
                            <tr><td><select id="iPType" name="ptye">
                                        <option>
                                    </select>
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Makespan') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iPType"><?= $this->l11n->getText('ItemManagement', 'TimeUnit') ?></label>
                            <tr><td><select id="iPType" name="ptye">
                                        <option value="0">ms
                                        <option value="1">s
                                        <option value="2">m
                                        <option value="3">h
                                        <option value="4">d
                                    </select>
                            <tr><td><label for="iPName"><?= $this->l11n->getText('ItemManagement', 'Info') ?></label>
                            <tr><td><textarea></textarea>
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-8" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'StockList') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iSource"><?= $this->l11n->getText(0, 'ID') ?></label>
                            <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input id="iSource" name="source" type="text" placeholder=""></span>
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Quantity') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-9" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'QM') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-10" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Packaging') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPVariation"><?= $this->l11n->getText('ItemManagement', 'Container') ?></label>
                            <tr><td><select id="iPVariation" name="pvariation">
                                        <option value="0">
                                    </select>
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Quantity') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'GrossWeight') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'NetWeight') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Width') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Height') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Length') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Volume') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-11" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Media') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Media') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="file" multiple>
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-12" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Stock') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPVariation"><?= $this->l11n->getText('ItemManagement', 'ShelfLife') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="number" min="0" step="1">
                        </table>
                    </form>
                </div>
            </section>

            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Stock') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iPVariation"><?= $this->l11n->getText('ItemManagement', 'Stock') ?></label>
                            <tr><td><select id="iPVariation" name="pvariation">
                                        <option value="0">
                                    </select>
                            <tr><td><label for="iPVariation"><?= $this->l11n->getText('ItemManagement', 'Warehouse') ?></label>
                            <tr><td><select id="iPVariation" name="pvariation">
                                        <option value="0">
                                    </select>
                            <tr><td><label for="iPVariation"><?= $this->l11n->getText('ItemManagement', 'Location') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="text"><!-- can also be empty if dynamically assigned instead of fixed -->
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-13" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Disposal') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-14" name="tabular-2">
        <div class="tab">
            <section class="box w-33 floatLeft">
                <header><h1><?= $this->l11n->getText('ItemManagement', 'Files') ?></h1></header>
                <div class="inner">
                    <form action="<?= \phpOMS\Uri\UriFactory::build('/{/lang}/api/...'); ?>" method="post">
                        <table class="layout wf-100">
                            <tbody>
                            <tr><td><label for="iDiscount"><?= $this->l11n->getText('ItemManagement', 'Files') ?></label>
                            <tr><td><input id="iDiscount" name="discount" type="file" multiple>
                            <tr><td><input type="submit" value="<?= $this->l11n->getText(0, 'Add') ?>">
                        </table>
                    </form>
                </div>
            </section>
        </div>
        <input type="radio" id="c-tab-15" name="tabular-2">
        <div class="tab">
            <?php
            $footerView = new \Web\Views\Lists\PaginationView($this->app, $this->request, $this->response);
            $footerView->setTemplate('/Web/Templates/Lists/Footer/PaginationBig');
            $footerView->setPages(20);
            $footerView->setPage(1);
            ?>
            <div class="box w-100">
                <table class="table">
                    <caption><?= $this->l11n->getText('ItemManagement', 'Logs') ?></caption>
                    <thead>
                    <tr>
                        <td>IP
                        <td><?= $this->l11n->getText(0, 'ID'); ?>
                        <td><?= $this->l11n->getText('ItemManagement', 'Name'); ?>
                        <td class="wf-100"><?= $this->l11n->getText('ItemManagement', 'Log'); ?>
                        <td><?= $this->l11n->getText('ItemManagement', 'Date'); ?>
                    <tfoot>
                    <tr>
                        <td colspan="6"><?= $footerView->render(); ?>
                    <tbody>
                    <tr>
                        <td><?= $this->request->getOrigin(); ?>
                        <td><?= $this->request->getAccount(); ?>
                        <td><?= $this->request->getAccount(); ?>
                        <td>Creating item
                        <td><?= (new \DateTime('now'))->format('Y-m-d H:i:s') ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!--
@todo:
    maybe put a master variations selection at the beginning so that you need to change it for other variations...
    this way you will however not be able to see all at once only one at a time
    make container in packaging department that can be used by packaging for sales and purchase
    Shelf life (stock???)
    Packaging dimension+weight+units for different types (pallet, case etc.)
    Language for all variations based on variables: e.g. ${size} T-shirt in ${color}

    stock vergleichbar mit filiale
    warehouse lager in einer filiale (sd e.g. werkstatt, impla, safe, etc),
-->
