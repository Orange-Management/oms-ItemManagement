<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\ItemManagement
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

use Modules\Media\Models\NullMedia;
use phpOMS\Localization\ISO639Enum;
use phpOMS\Localization\Money;
use phpOMS\Localization\NullLocalization;
use phpOMS\Uri\UriFactory;

/** @var \Modules\ItemManagement\Models\Item $item */
$item = $this->getData('item');

/** @var \Modules\ItemManagement\Models\ItemL11n $itemL11n */
$itemL11n = $this->getData('itemL11n');

/** @var \Modules\ItemManagement\Models\ItemAttribute $itemAttribute */
$itemAttribute = $this->getData('itemAttribute');

$notes = $item->getNotes();
$files = $item->getFiles();

$newestInvoices    = $this->getData('newestInvoices') ?? [];
$allInvoices       = $this->getData('allInvoices') ?? [];
$topCustomers      = $this->getData('topCustomers') ?? [];
$regionSales       = $this->getData('regionSales') ?? [];
$countrySales      = $this->getData('countrySales') ?? [];
$monthlySalesCosts = $this->getData('monthlySalesCosts') ?? [];

$languages = ISO639Enum::getConstants();

/** @var \phpOMS\Localization\Localization $l11n */
$l11n = $this->getData('defaultlocalization') ?? new NullLocalization();

echo $this->getData('nav')->render();
?>

<div class="tabview tab-2">
    <div class="box wf-100 col-xs-12">
        <ul class="tab-links">
            <li><label for="c-tab-1"><?= $this->getHtml('Profile'); ?></label></li>
            <li><label for="c-tab-2"><?= $this->getHtml('Address'); ?></label></li>
            <li><label for="c-tab-3"><?= $this->getHtml('Localization'); ?></label></li>
            <li><label for="c-tab-4"><?= $this->getHtml('Attributes'); ?></label></li>
            <li><label for="c-tab-5"><?= $this->getHtml('Sales'); ?></label></li>
            <li><label for="c-tab-6"><?= $this->getHtml('Purchasing'); ?></label></li>
            <li><label for="c-tab-7"><?= $this->getHtml('Production'); ?></label></li>
            <li><label for="c-tab-8"><?= $this->getHtml('QA'); ?></label></li>
            <li><label for="c-tab-9"><?= $this->getHtml('Packaging'); ?></label></li>
            <li><label for="c-tab-10"><?= $this->getHtml('Accounting'); ?></label></li>
            <li><label for="c-tab-11"><?= $this->getHtml('Stock'); ?></label></li>
            <li><label for="c-tab-12"><?= $this->getHtml('Disposal'); ?></label></li>
            <li><label for="c-tab-13"><?= $this->getHtml('Media'); ?></label></li>
            <li><label for="c-tab-14"><?= $this->getHtml('Bills'); ?></label></li>
            <li><label for="c-tab-15"><?= $this->getHtml('Logs'); ?></label></li>
        </ul>
    </div>
    <div class="tab-content">
        <input type="radio" id="c-tab-1" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-1' ? ' checked' : ''; ?>>
        <div class="tab">
        <div class="row">
                <div class="col-xs-12 col-lg-3 last-lg">
                    <section class="portlet">
                        <form>
                            <div class="portlet-body">
                                <table class="layout wf-100">
                                    <tr><td><label for="iId"><?= $this->getHtml('ID', '0', '0'); ?></label>
                                    <tr><td><span class="input"><button type="button" formaction=""><i class="fa fa-book"></i></button><input type="number" id="iId" min="1" name="id" value="<?= $this->printHtml($item->number); ?>" disabled></span>
                                    <tr><td><label for="iName1"><?= $this->getHtml('Name1'); ?></label>
                                    <tr><td><input type="text" id="iName1" name="name1" value="<?= $this->printHtml($item->getL11n('name1')->description); ?>" spellcheck="false" required>
                                    <tr><td><label for="iName2"><?= $this->getHtml('Name2'); ?></label>
                                    <tr><td><input type="text" id="iName2" name="name2" value="<?= $this->printHtml($item->getL11n('name2')->description); ?>" spellcheck="false">
                                    <tr><td><label for="iName3"><?= $this->getHtml('Name3'); ?></label>
                                    <tr><td><input type="text" id="iName3" name="name3" value="<?= $this->printHtml($item->getL11n('name3')->description); ?>" spellcheck="false">
                                </table>
                            </div>
                            <div class="portlet-foot">
                                <input type="submit" value="<?= $this->getHtml('Save', '0', '0'); ?>"> <input type="submit" value="<?= $this->getHtml('Delete', '0', '0'); ?>">
                            </div>
                        </form>
                    </section>

                    <?php $image = $item->getFileByType('backend_image');
                        if (!($image instanceof NullMedia)) : ?>
                    <section class="portlet">
                        <div class="portlet-body">
                            <img width="100%" loading="lazy" class="item-image"
                                src="<?= UriFactory::build('{/prefix}' . $image->getPath()); ?>">
                        </div>
                    </section>
                    <?php endif; ?>

                    <section class="portlet highlight-4">
                        <div class="portlet-body">
                            <textarea class="undecorated"></textarea>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-lg-9 plain-grid">
                    <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <section class="portlet highlight-1">
                                <div class="portlet-body">
                                    <table class="wf-100">
                                        <tr><td><?= $this->getHtml('YTDSales'); ?>:
                                            <td><?= $this->getData('ytd')->getCurrency(); ?>
                                        <tr><td><?= $this->getHtml('MTDSales'); ?>:
                                            <td><?= $this->getData('mtd')->getCurrency(); ?>
                                        <tr><td><?= $this->getHtml('ILV'); ?>:
                                            <td>
                                        <tr><td><?= $this->getHtml('MRR'); ?>:
                                            <td>
                                    </table>
                                </div>
                            </section>
                        </div>

                        <div class="col-xs-12 col-lg-4">
                            <section class="portlet highlight-2">
                                <div class="portlet-body">
                                    <table class="wf-100">
                                        <tr><td><?= $this->getHtml('LastOrder'); ?>:
                                            <td><?= $this->getData('lastOrder') !== null ? $this->getData('lastOrder')->format('Y-m-d H:i') : ''; ?>
                                        <tr><td><?= $this->getHtml('PriceChange'); ?>:
                                            <td>
                                        <tr><td><?= $this->getHtml('Created'); ?>:
                                            <td><?= $item->createdAt->format('Y-m-d H:i'); ?>
                                        <tr><td><?= $this->getHtml('Modified'); ?>:
                                            <td>
                                    </table>
                                </div>
                            </section>
                        </div>

                        <div class="col-xs-12 col-lg-4">
                            <section class="portlet highlight-3">
                                <div class="portlet-body">
                                    <table class="wf-100">
                                        <tr><td><?= $this->getHtml('SalesPrice'); ?>:
                                            <td><?= $item->salesPrice->getCurrency(); ?>
                                        <tr><td><?= $this->getHtml('PurchasePrice'); ?>:
                                            <td><?= $item->purchasePrice->getCurrency(); ?>
                                        <tr><td><?= $this->getHtml('Margin'); ?>:
                                            <td><?= \round(($item->salesPrice->getInt() - $item->purchasePrice->getInt()) / $item->salesPrice->getInt() * 100, 2); ?> %
                                        <tr><td><?= $this->getHtml('AvgPrice'); ?>:
                                            <td><?= $this->getData('avg')->getCurrency(); ?>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <section class="portlet">
                                <div class="portlet-head"><?= $this->getHtml('Notes'); ?></div>
                                <table id="iNotesItemList" class="default">
                                    <thead>
                                    <tr>
                                        <td class="wf-100"><?= $this->getHtml('Title'); ?>
                                        <td><?= $this->getHtml('CreatedAt'); ?>
                                    <tbody>
                                    <?php foreach ($notes as $note) :
                                        $url = UriFactory::build('{/prefix}editor/single?{?}&id=' . $note->getId());
                                        ?>
                                    <tr data-href="<?= $url; ?>">
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($note->title); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($note->createdAt->format('Y-m-d')); ?></a>
                                    <?php endforeach; ?>
                                </table>
                            </section>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <section class="portlet">
                                <div class="portlet-head"><?= $this->getHtml('Documents'); ?></div>
                                <table id="iFilesItemList" class="default">
                                    <thead>
                                    <tr>
                                        <td class="wf-100"><?= $this->getHtml('Title'); ?>
                                        <td>
                                        <td><?= $this->getHtml('CreatedAt'); ?>
                                    <tbody>
                                    <?php foreach ($files as $file) :
                                        $url = UriFactory::build('{/prefix}media/single?{?}&id=' . $file->getId());
                                        ?>
                                    <tr data-href="<?= $url; ?>">
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($file->name); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($file->extension); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($file->createdAt->format('Y-m-d')); ?></a>
                                    <?php endforeach; ?>
                                </table>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <section class="portlet">
                                <div class="portlet-head"><?= $this->getHtml('RecentInvoices'); ?></div>
                                <table id="iSalesItemList" class="default">
                                    <thead>
                                    <tr>
                                        <td><?= $this->getHtml('Number'); ?>
                                        <td><?= $this->getHtml('Type'); ?>
                                        <td class="wf-100"><?= $this->getHtml('Name'); ?>
                                        <td><?= $this->getHtml('Net'); ?>
                                        <td><?= $this->getHtml('Date'); ?>
                                    <tbody>
                                    <?php foreach ($newestInvoices as $invoice) :
                                        $url = UriFactory::build('{/prefix}sales/bill?{?}&id=' . $invoice->getId());
                                        ?>
                                    <tr data-href="<?= $url; ?>">
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($invoice->getNumber()); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($invoice->type->getL11n()); ?></a>
                                        <td><a class="content" href="<?= UriFactory::build('{/prefix}sales/client/profile?{?}&id=' . $invoice->client->getId()); ?>"><?= $this->printHtml($invoice->billTo); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($invoice->net->getCurrency()); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($invoice->createdAt->format('Y-m-d')); ?></a>
                                    <?php endforeach; ?>
                                </table>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <section class="portlet">
                                <div class="portlet-head">Top Customers</div>
                                <table id="iSalesItemList" class="default">
                                    <thead>
                                    <tr>
                                        <td><?= $this->getHtml('Number'); ?>
                                        <td class="wf-100"><?= $this->getHtml('Name'); ?>
                                        <td><?= $this->getHtml('Country'); ?>
                                        <td><?= $this->getHtml('Net'); ?>
                                    <tbody>
                                    <?php $i = -1; foreach ($topCustomers[0] as $client) : ++$i;
                                        $url = UriFactory::build('{/prefix}sales/client/profile?id=' . $client->getId());
                                    ?>
                                    <tr data-href="<?= $url; ?>">
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($client->number); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($client->profile->account->name1); ?> <?= $this->printHtml($client->profile->account->name2); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($client->mainAddress->getCountry()); ?></a>
                                        <td><a href="<?= $url; ?>"><?= (new Money((int) $topCustomers[1][$i]['net_sales']))->getCurrency(); ?></a>
                                    <?php endforeach; ?>
                                </table>
                            </section>
                        </div>

                        <div class="col-xs-12 col-lg-6">
                            <section class="portlet">
                                <div class="portlet-head"><?= $this->getHtml('Sales'); ?></div>
                                <div class="portlet-body">
                                    <canvas id="sales-region" data-chart='{
                                            "type": "bar",
                                            "data": {
                                                "labels": [
                                                    <?php
                                                        $temp = [];
                                                        foreach ($monthlySalesCosts as $monthly) {
                                                            $temp[] = $monthly['month'] . '/' . \substr((string) $monthly['year'], -2);
                                                        }
                                                    ?>
                                                    <?= '"' . \implode('", "', $temp) . '"'; ?>
                                                ],
                                                "datasets": [
                                                    {
                                                        "label": "<?= $this->getHtml('Margin'); ?>",
                                                        "type": "line",
                                                        "data": [
                                                            <?php
                                                                $temp = [];
                                                                foreach ($monthlySalesCosts as $monthly) {
                                                                    $temp[] = \round(((((int) $monthly['net_sales']) - ((int) $monthly['net_costs'])) / ((int) $monthly['net_sales'])) * 100, 2);
                                                                }
                                                            ?>
                                                            <?= \implode(',', $temp); ?>
                                                        ],
                                                        "yAxisID": "axis-2",
                                                        "fill": false,
                                                        "borderColor": "rgb(255, 99, 132)",
                                                        "backgroundColor": "rgb(255, 99, 132)"
                                                    },
                                                    {
                                                        "label": "<?= $this->getHtml('Sales'); ?>",
                                                        "type": "bar",
                                                        "data": [
                                                            <?php
                                                                $temp = [];
                                                                foreach ($monthlySalesCosts as $monthly) {
                                                                    $temp[] = ((int) $monthly['net_sales']) / 1000;
                                                                }
                                                            ?>
                                                            <?= \implode(',', $temp); ?>
                                                        ],
                                                        "yAxisID": "axis-1",
                                                        "backgroundColor": "rgb(54, 162, 235)"
                                                    }
                                                ]
                                            },
                                            "options": {
                                                "scales": {
                                                    "yAxes": [
                                                        {
                                                            "id": "axis-1",
                                                            "display": true,
                                                            "position": "left"
                                                        },
                                                        {
                                                            "id": "axis-2",
                                                            "display": true,
                                                            "position": "right",
                                                            "scaleLabel": {
                                                                "display": true,
                                                                "labelString": "<?= $this->getHtml('Margin'); ?> %"
                                                            },
                                                            "gridLines": {
                                                                "display": false
                                                            },
                                                            "beginAtZero": true,
                                                            "ticks": {
                                                                "min": 0,
                                                                "max": 100,
                                                                "stepSize": 10
                                                            }
                                                        }
                                                    ]
                                                }
                                            }
                                    }'></canvas>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <section class="portlet">
                                <div class="portlet-head">Regions</div>
                                <div class="portlet-body">
                                    <canvas id="sales-region" data-chart='{
                                        "type": "pie",
                                        "data": {
                                            "labels": [
                                                    "Europe", "America", "Asia", "Africa", "CIS", "Other"
                                                ],
                                            "datasets": [{
                                                "data": [
                                                    <?= (int) ($regionSales['Europe'] ?? 0) / 1000; ?>,
                                                    <?= (int) ($regionSales['America'] ?? 0) / 1000; ?>,
                                                    <?= (int) ($regionSales['Asia'] ?? 0) / 1000; ?>,
                                                    <?= (int) ($regionSales['Africa'] ?? 0) / 1000; ?>,
                                                    <?= (int) ($regionSales['CIS'] ?? 0) / 1000; ?>,
                                                    <?= (int) ($regionSales['Other'] ?? 0) / 1000; ?>
                                                ],
                                                "backgroundColor": [
                                                    "rgb(255, 99, 132)",
                                                    "rgb(255, 159, 64)",
                                                    "rgb(255, 205, 86)",
                                                    "rgb(75, 192, 192)",
                                                    "rgb(54, 162, 235)",
                                                    "rgb(153, 102, 255)"
                                                ]
                                            }]
                                        }
                                }'></canvas>
                                </div>
                            </section>
                        </div>

                        <div class="col-xs-12 col-lg-6">
                            <section class="portlet">
                                <div class="portlet-head"><?= $this->getHtml('Countries'); ?></div>
                                <div class="portlet-body">
                                    <canvas id="sales-region" data-chart='{
                                        "type": "bar",
                                        "data": {
                                            "labels": [
                                                    <?= '"' . \implode('", "', \array_keys($countrySales)) . '"'; ?>
                                                ],
                                            "datasets": [{
                                                "label": "YTD",
                                                "type": "bar",
                                                "data": [
                                                    <?php
                                                        $temp = [];
                                                        foreach ($countrySales as $country) {
                                                            $temp[] = ((int) $country) / 1000;
                                                        }
                                                    ?>
                                                    <?= \implode(',', $temp); ?>
                                                ],
                                                "backgroundColor": "rgb(54, 162, 235)"
                                            }]
                                        }
                                }'></canvas>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="radio" id="c-tab-2" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <section class="portlet">
                        <form id="item-edit" action="<?= UriFactory::build('{/api}itemmgmt/item'); ?>" method="post">
                            <div class="portlet-head"><?= $this->getHtml('Description'); ?></div>
                            <div class="portlet-body">
                                <table class="layout wf-100">
                                    <tbody>
                                        <tr>
                                            <td><label for="iLanguages"><?= $this->getHtml('Language'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iLanguages" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iLanguages"><?= $this->getHtml('Type'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iLanguages" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iText1"><?= $this->getHtml('Text'); ?></label>
                                        <tr>
                                            <td><textarea id="iText1" name="text1"></textarea>
                                </table>
                            </div>
                            <div class="portlet-foot"><input type="submit" value="<?= $this->getHtml('Add', '0', '0'); ?>"></div>
                        </form>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="portlet">
                        <div class="portlet-head"><?= $this->getHtml('Localizations'); ?><i class="fa fa-download floatRight download btn"></i></div>
                        <table id="groupTable" class="default">
                            <thead>
                                <tr>
                                    <td>
                                    <td><?= $this->getHtml('ID', '0', '0'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                    <td><?= $this->getHtml('Name'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                    <td class="wf-100"><?= $this->getHtml('Localization'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                            <tbody>
                                <?php $c = 0;
                                foreach ($itemL11n as $key => $value) : ++$c;
                                    $url = UriFactory::build('{/prefix}admin/group/settings?{?}&id=' . $value->getId()); ?>
                                    <tr data-href="<?= $url; ?>">
                                        <td><a href="#"><i class="fa fa-times"></i></a>
                                        <td><a href="<?= $url; ?>"><?= $value->getId(); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($value->type->title); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($value->description); ?></a>
                                        <?php endforeach; ?>
                                        <?php if ($c === 0) : ?>
                                    <tr>
                                        <td colspan="5" class="empty"><?= $this->getHtml('Empty', '0', '0'); ?>
                                        <?php endif; ?>
                        </table>
                    </section>
                </div>
            </div>
        </div>
        <input type="radio" id="c-tab-3" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <section class="portlet">
                        <div class="portlet-head"><?= $this->getHtml('Attribute'); ?></div class="portlet-head">
                        <div class="portlet-body">
                            <form id="item-edit" action="<?= UriFactory::build('{/api}itemmgmt/item'); ?>" method="post">
                                <table class="layout wf-100">
                                    <tbody>
                                        <tr>
                                            <td><label for="iLanguages"><?= $this->getHtml('Language'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iLanguages" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iLanguages"><?= $this->getHtml('Type'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iLanguages" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iLanguages"><?= $this->getHtml('Unit'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iLanguages" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iText1"><?= $this->getHtml('Value'); ?></label>
                                        <tr>
                                            <td><input id="iName5" name="name5" type="text" value="<?= $this->printHtml($item->getL11n('name1')->description); ?>">
                                        <tr>
                                            <td><input type="submit" value="<?= $this->getHtml('Add', '0', '0'); ?>">
                                </table>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="portlet">
                        <div class="portlet-head"><?= $this->getHtml('Groups'); ?><i class="fa fa-download floatRight download btn"></i></div>
                        <table id="groupTable" class="default">
                            <thead>
                                <tr>
                                    <td>
                                    <td><?= $this->getHtml('ID', '0', '0'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                    <td><?= $this->getHtml('Name'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                    <td class="wf-100"><?= $this->getHtml('Name'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                            <tbody>
                                <?php $c = 0;
                                foreach ($itemAttribute as $key => $value) : ++$c;
                                    $url = UriFactory::build('{/prefix}admin/group/settings?{?}&id=' . $value->getId()); ?>
                                    <tr data-href="<?= $url; ?>">
                                        <td><a href="#"><i class="fa fa-times"></i></a>
                                        <td><a href="<?= $url; ?>"><?= $value->getId(); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($value->type->getL11n()); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $value->value->getValue() instanceof \DateTime ? $value->value->getValue()->format('Y-m-d') : $this->printHtml((string) $value->value->getValue()); ?></a>
                                        <?php endforeach; ?>
                                        <?php if ($c === 0) : ?>
                                    <tr>
                                        <td colspan="5" class="empty"><?= $this->getHtml('Empty', '0', '0'); ?>
                                        <?php endif; ?>
                        </table>
                    </section>
                </div>
            </div>
        </div>
        <input type="radio" id="c-tab-4" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <section class="box wf-100">
                        <header>
                            <h1><?= $this->getHtml('Pricing'); ?></h1>
                        </header>
                        <div class="inner">
                            <form id="item-edit" action="<?= UriFactory::build('{/api}itemmgmt/item'); ?>" method="post">
                                <table class="layout wf-100">
                                    <tbody>
                                        <tr>
                                            <td><label for="iCustomerGroup"><?= $this->getHtml('CustomerGroup'); ?></label>
                                        <tr>
                                            <td><input id="iCustomerGroup" name="customergroup" type="text" value="<?= $this->printHtml(''); ?>">
                                        <tr>
                                            <td><label for="iGeneralPriceStart"><?= $this->getHtml('Start'); ?></label>
                                        <tr>
                                            <td><input id="iGeneralPriceStart" name="generalpricestart" type="datetime-local" value="<?= $this->printHtml(''); ?>">
                                        <tr>
                                            <td><label for="iGeneralPriceEnd"><?= $this->getHtml('End'); ?></label>
                                        <tr>
                                            <td><input id="iGeneralPriceEnd" name="generalpriceend" type="datetime-local" value="<?= $this->printHtml(''); ?>">
                                        <tr>
                                            <td><label for="iPQuantity"><?= $this->getHtml('Quantity'); ?></label>
                                        <tr>
                                            <td><input id="iPQuantity" name="quantity" type="text" placeholder="">
                                        <tr>
                                            <td><label for="iGeneralPrice"><?= $this->getHtml('Price'); ?></label>
                                        <tr>
                                            <td><input id="iGeneralPrice" name="generalprice" type="number" step="0.0001" value="<?= $this->printHtml('0.00'); ?>">
                                                <!-- todo: maybe add promotion key/password here for online shop to provide special prices for certain customer groups -->
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('Discount'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('DiscountP'); ?></label>
                                        <tr>
                                            <td><input id="iDiscountP" name="discountp" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iBonus"><?= $this->getHtml('Bonus'); ?></label>
                                        <tr>
                                            <td><input id="iBonus" name="bonus" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><input type="submit" value="<?= $this->getHtml('Add', '0', '0'); ?>">
                                </table>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="portlet">
                        <div class="portlet-head"><?= $this->getHtml('Prices'); ?><i class="fa fa-download floatRight download btn"></i></div>
                        <table id="iSalesItemList" class="default">
                            <thead>
                                <tr>
                                    <td>
                                    <td><?= $this->getHtml('ID', '0', '0'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                    <td class="wf-100"><?= $this->getHtml('Name'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                            <tbody>
                                <?php $c = 0;
                                $l11ns   = [];
                                foreach ($l11ns as $key => $value) : ++$c;
                                    $url = UriFactory::build('{/prefix}admin/group/settings?{?}&id=' . $value->getId()); ?>
                                    <tr data-href="<?= $url; ?>">
                                        <td><a href="#"><i class="fa fa-times"></i></a>
                                        <td><a href="<?= $url; ?>"><?= $value->getId(); ?></a>
                                        <td><a href="<?= $url; ?>"><?= $this->printHtml($value->name); ?></a>
                                        <?php endforeach; ?>
                                        <?php if ($c === 0) : ?>
                                    <tr>
                                        <td colspan="5" class="empty"><?= $this->getHtml('Empty', '0', '0'); ?>
                                        <?php endif; ?>
                        </table>
                    </section>
                </div>
            </div>
        </div>
        <input type="radio" id="c-tab-5" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <section class="box wf-100">
                        <header>
                            <h1><?= $this->getHtml('Purchase'); ?></h1>
                        </header>
                        <div class="inner">
                            <form action="<?= UriFactory::build('{/api}...'); ?>" method="post">
                                <table class="layout wf-100">
                                    <tbody>
                                        <tr>
                                            <td><label for="iPVariation"><?= $this->getHtml('Stock'); ?></label>
                                        <tr>
                                            <td><select id="iPVariation" name="pvariation">
                                                    <option value="0">
                                                </select>
                                        <tr>
                                            <td><label for="iPName"><?= $this->getHtml('ReorderLevel'); ?></label>
                                        <tr>
                                            <td><input id="iPName" name="pname" type="text" placeholder="">
                                        <tr>
                                            <td><label for="iPName"><?= $this->getHtml('MinimumLevel'); ?></label>
                                        <tr>
                                            <td><input id="iPName" name="pname" type="text" placeholder="">
                                        <tr>
                                            <td><label for="iPName"><?= $this->getHtml('MaximumLevel'); ?></label>
                                        <tr>
                                            <td><input id="iPName" name="pname" type="text" placeholder="">
                                        <tr>
                                            <td><label for="iPName"><?= $this->getHtml('Leadtime'); ?></label>
                                        <tr>
                                            <td><input id="iPName" name="pname" type="number" min="0" step="1" placeholder="">
                                        <tr>
                                            <td><input type="submit" value="<?= $this->getHtml('Save', '0', '0'); ?>">
                                </table>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-4">
                    <section class="box wf-100">
                        <header>
                            <h1><?= $this->getHtml('Supplier'); ?></h1>
                        </header>
                        <div class="inner">
                            <form id="item-edit" action="<?= UriFactory::build('{/api}itemmgmt/item'); ?>" method="post">
                                <table class="layout wf-100">
                                    <tbody>
                                        <tr>
                                            <td><label for="iSupplierGroup"><?= $this->getHtml('ID'); ?></label>
                                        <tr>
                                            <td><input id="iSupplierGroup" name="Suppliergroup" type="text" value="<?= $this->printHtml(''); ?>">
                                        <tr>
                                            <td><label for="iGeneralPriceStart"><?= $this->getHtml('Start'); ?></label>
                                        <tr>
                                            <td><input id="iGeneralPriceStart" name="generalpricestart" type="datetime-local" value="<?= $this->printHtml(''); ?>">
                                        <tr>
                                            <td><label for="iGeneralPriceEnd"><?= $this->getHtml('End'); ?></label>
                                        <tr>
                                            <td><input id="iGeneralPriceEnd" name="generalpriceend" type="datetime-local" value="<?= $this->printHtml(''); ?>">
                                        <tr>
                                            <td><label for="iPQuantity"><?= $this->getHtml('Quantity'); ?></label>
                                        <tr>
                                            <td><input id="iPQuantity" name="quantity" type="text" placeholder="">
                                        <tr>
                                            <td><label for="iGeneralPrice"><?= $this->getHtml('Price'); ?></label>
                                        <tr>
                                            <td><input id="iGeneralPrice" name="generalprice" type="number" step="0.0001" value="<?= $this->printHtml('0.00'); ?>">
                                                <!-- todo: maybe add promotion key/password here for online shop to provide special prices for certain customer groups -->
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('Discount'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('DiscountP'); ?></label>
                                        <tr>
                                            <td><input id="iDiscountP" name="discountp" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iBonus"><?= $this->getHtml('Bonus'); ?></label>
                                        <tr>
                                            <td><input id="iBonus" name="bonus" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iPPriceUnit"><?= $this->getHtml('PriceUnit'); ?></label>
                                        <tr>
                                            <td><select id="iPPriceUnit" name="ppriceunit">
                                                    <option value="0">
                                                </select>
                                        <tr>
                                            <td><label for="iPQuantityUnit"><?= $this->getHtml('QuantityUnit'); ?></label>
                                        <tr>
                                            <td><select id="iPQuantityUnit" name="pquantityunit">
                                                    <option value="0">
                                                </select>
                                        <tr>
                                            <td><input type="submit" value="<?= $this->getHtml('Add', '0', '0'); ?>">
                                </table>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-4">
                    <table id="groupTable" class="box table default">
                        <caption><?= $this->getHtml('Prices'); ?><i class="fa fa-download floatRight download btn"></i></caption>
                        <thead>
                            <tr>
                                <td>
                                <td><?= $this->getHtml('ID', '0', '0'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                                <td class="wf-100"><?= $this->getHtml('Name'); ?><i class="sort-asc fa fa-chevron-up"></i><i class="sort-desc fa fa-chevron-down"></i>
                        <tbody>
                            <?php $c = 0;
                            $l11ns   = [];
                            foreach ($l11ns as $key => $value) : ++$c;
                                $url = UriFactory::build('{/prefix}admin/group/settings?{?}&id=' . $value->getId()); ?>
                                <tr data-href="<?= $url; ?>">
                                    <td><a href="#"><i class="fa fa-times"></i></a>
                                    <td><a href="<?= $url; ?>"><?= $value->getId(); ?></a>
                                    <td><a href="<?= $url; ?>"><?= $this->printHtml($value->name); ?></a>
                                    <?php endforeach; ?>
                                    <?php if ($c === 0) : ?>
                                <tr>
                                    <td colspan="5" class="empty"><?= $this->getHtml('Empty', '0', '0'); ?>
                                    <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
        <input type="radio" id="c-tab-6" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
            </div>
        </div>
        <input type="radio" id="c-tab-7" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
            </div>
        </div>
        <input type="radio" id="c-tab-8" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <section class="box wf-100">
                        <header>
                            <h1><?= $this->getHtml('General'); ?></h1>
                        </header>
                        <div class="inner">
                            <form action="<?= UriFactory::build('{/api}...'); ?>" method="post">
                                <table class="layout wf-100">
                                    <tbody>
                                        <tr>
                                            <td><label for="iPVariation"><?= $this->getHtml('Container'); ?></label>
                                        <tr>
                                            <td><select id="iPVariation" name="pvariation">
                                                    <option value="0">
                                                </select>
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('Quantity'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('GrossWeight'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('NetWeight'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('Width'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('Height'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('Length'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><label for="iDiscount"><?= $this->getHtml('Volume'); ?></label>
                                        <tr>
                                            <td><input id="iDiscount" name="discount" type="number" step="any" min="0" placeholder="">
                                        <tr>
                                            <td><input type="submit" value="<?= $this->getHtml('Add', '0', '0'); ?>">
                                </table>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <input type="radio" id="c-tab-9" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <section class="box wf-100">
                        <header>
                            <h1><?= $this->getHtml('General'); ?></h1>
                        </header>
                        <div class="inner">
                            <form id="item-edit" action="<?= UriFactory::build('{/api}itemmgmt/item'); ?>" method="post">
                                <table class="layout wf-100">
                                    <tbody>
                                        <tr>
                                            <td><label for="iEarningIndicator"><?= $this->getHtml('EarningIndicator'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iEarningIndicator" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iCostIndicator"><?= $this->getHtml('CostIndicator'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iCostIndicator" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iCostCenter"><?= $this->getHtml('CostCenter'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iCostCenter" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                        <tr>
                                            <td><label for="iCostObject"><?= $this->getHtml('CostObject'); ?></label>
                                        <tr>
                                            <td>
                                                <select id="iCostObject" name="settings_1000000020">
                                                    <?php foreach ($languages as $code => $language) : ?>
                                                        <option value="<?= $this->printHtml($code); ?>" <?= $this->printHtml(\strtolower($code) === $l11n->getLanguage() ? ' selected' : ''); ?>><?= $this->printHtml($language); ?>
                                                        <?php endforeach; ?>
                                                </select>
                                </table>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <input type="radio" id="c-tab-10" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
            </div>
        </div>

        <input type="radio" id="c-tab-11" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
            </div>
        </div>

        <input type="radio" id="c-tab-12" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
            </div>
        </div>

        <input type="radio" id="c-tab-13" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12">
                    <section class="portlet">
                        <div class="portlet-head"><?= $this->getHtml('RecentInvoices'); ?></div>
                        <table id="iSalesItemList" class="default">
                            <thead>
                            <tr>
                                <td><?= $this->getHtml('Number'); ?>
                                <td><?= $this->getHtml('Type'); ?>
                                <td class="wf-100"><?= $this->getHtml('Name'); ?>
                                <td><?= $this->getHtml('Net'); ?>
                                <td><?= $this->getHtml('Date'); ?>
                            <tbody>
                            <?php foreach ($allInvoices as $invoice) :
                                $url = UriFactory::build('{/prefix}sales/bill?{?}&id=' . $invoice->getId());
                                ?>
                            <tr data-href="<?= $url; ?>">
                                <td><a href="<?= $url; ?>"><?= $invoice->getNumber(); ?></a>
                                <td><a href="<?= $url; ?>"><?= $invoice->type->getL11n(); ?></a>
                                <td><a href="<?= $url; ?>"><?= $invoice->billTo; ?></a>
                                <td><a href="<?= $url; ?>"><?= $invoice->net->getCurrency(); ?></a>
                                <td><a href="<?= $url; ?>"><?= $invoice->createdAt->format('Y-m-d'); ?></a>
                            <?php endforeach; ?>
                        </table>
                    </section>
                </div>
            </div>
        </div>

        <input type="radio" id="c-tab-14" name="tabular-2" checked>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12">
                    <table class="default">
                        <caption><?= $this->getHtml('Logs'); ?><i class="fa fa-download floatRight download btn"></i></caption>
                        <thead>
                            <tr>
                                <td>IP
                                <td><?= $this->getHtml('ID', '0', '0'); ?>
                                <td><?= $this->getHtml('Name'); ?>
                                <td class="wf-100"><?= $this->getHtml('Log'); ?>
                                <td><?= $this->getHtml('Date'); ?>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <tbody>
                                        <tr>
                                            <td><?= $this->printHtml($this->request->getOrigin()); ?>
                                            <td><?= $this->printHtml((string) $this->request->header->account); ?>
                                            <td><?= $this->printHtml((string) $this->request->header->account); ?>
                                            <td>Creating item
                                            <td><?= $this->printHtml((new \DateTime('now'))->format('Y-m-d H:i:s')); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>