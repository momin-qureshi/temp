<?php
	if (!isset($order['vat_name']) || $order['vat_name'] == '') {
		$order['vat_name'] = l10n('cart_vat');
	}
	if (!isset($order['shipping_vat_name']) || $order['shipping_vat_name'] == '') {
		$order['shipping_vat_name'] = l10n('cart_vat');
	}
	if (!isset($order['payment_vat_name']) || $order['payment_vat_name'] == '') {
		$order['payment_vat_name'] = l10n('cart_vat');
	}

	$products_id = array_column($orderArray['products'], 'product_id');
	$products_data = Configuration::getCart()->getProductsData($products_id);
	$products_with_sku = array();
	if (sizeof($products_data) > 0) {
		$products_with_sku = array_filter($products_data, function ($product) {
			return $product['sku'] !== '';
		});
	}
?>
<h1 class="text-large uppercase border-bottom border-color-1"><span class="no-phone"><?php echo l10n('cart_order_no') ?>: </span><?php echo $order['id'] ?></h1>
<!--_________________________
	
	Status data
	_________________________
-->
<table class="width_50">
	<thead>
		<tr class="page-navbar">
			<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('order_status') ?></span></th>
			<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('cart_order_date') ?></span></th>
			<?php if ($order['status'] === 'evaded'): ?>
				<?php if ($order['evaded_ts'] !== null): ?>
			<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('cart_processed_date') ?></span></th>
				<?php endif; ?>
				<?php if ($order['tracking_code'] !== null && $order['tracking_code'] !== ''): ?>
			<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('tracking_code') ?></span></th>
				<?php endif; ?>
			<?php endif; ?>
		</tr>
	</thead>
	<tbody>
		<tr class="border-bottom border-mute-light">
			<?php 
			switch ($order['status']) {
				case 'evaded':
					$order_status_loc = 'order_status_evaded'; 
					break;
				case 'waiting':
					$order_status_loc = 'order_status_waiting'; 
					break;
				default:
					// default to inbox
					$order_status_loc = 'order_status_inbox'; 
					break;
			}
			?>
			<td class="border-left border-right border-mute-light"><span class="text-big"><?php echo l10n($order_status_loc) ?></span></td>
			<td class="border-right border-mute-light border-right"><span class="text-big"><?php echo date("Y/m/d", strtotime($order['ts'])) ?></span></td>
			<?php if ($order['status'] === 'evaded'): ?>
				<?php if ($order['evaded_ts'] !== null): ?>
				<td class="border-right border-mute-light"><span class="text-big"><?php echo date("Y/m/d", strtotime($order['evaded_ts'])) ?></span></td>
				<?php endif; ?>
				<?php if ($order['tracking_code'] !== null && $order['tracking_code'] !== ''): ?>
				<td class="border-right border-mute-light "><span class="text-big"><?php echo $order['tracking_code'] ?></span></td>
				<?php endif; ?>
			<?php endif; ?>
		</tr>
	</tbody>
</table>

<!--_________________________
	
	Invoice and shipping data
	_________________________
-->
	<table class="div-phone">
		
		<tbody class="div-phone">
		<tr class="div-phone">
			<td class="top no-margin div-phone">
				<table class="framed" style="<?php echo (count($orderArray['shipping']) === 0) ? "width: auto;" : "" ?>">
				<thead>
					<tr>
<?php if (count($orderArray['shipping']) === 0) : ?>
						<th colspan="2" class="border-bottom-2 border-mute fore-color-1"><?php echo l10n('cart_vat_address') . " / " . l10n('cart_shipping_address') ?></th>
<?php else: ?>
						<th colspan="2" class="border-bottom-2 border-mute fore-color-1"><?php echo l10n('cart_vat_address') ?></th>
<?php endif; ?>
					</tr>
				</thead>
				<tbody class="border-bottom border-mute-light">
				<?php foreach ($orderArray['invoice'] as $line): ?>
					<tr>
						<td class="border-left border-mute-light"><?php echo $line['label'] . ":" ?></td>
						<td class="border-right border-mute-light"><b><?php echo $line['value'] ?></b></td>
					</tr>
				<?php endforeach; ?>
				<?php
					if (count($orderArray['attachments']) > 0) {
						foreach ($orderArray['attachments'] as $line) {
				?>
							<td class="border-left border-mute-light"><?php echo l10n('cart_field_attachment') . ":" ?></b></td>
							<td class="border-right border-mute-light"><b><a href="cart-order.php?id=<?php echo $order['id'] ?>&amp;download-attachment=<?php echo $line['id'] ?>" class="text-underline" target="_blank"><?php echo $line['original_file_name'] ?></a></b></td>
				<?php
						}
					}
				?>
				</tbody>
				</table>
			</td>
			<?php if (count($orderArray['shipping']) > 0): ?>
			<td class="top no-margin div-phone">
				<table>
				<thead>
					<tr>
						<th colspan="2" class="border-bottom-2 border-mute fore-color-1"><?php echo l10n('cart_shipping_address') ?></th>
					</tr>
				</thead>
				<tbody class="border-bottom border-mute-light">
				<?php foreach ($orderArray['shipping'] as $line): ?>
					<tr>
						<td class="border-left border-mute-light"><?php echo $line['label'] . ":" ?></td>
						<td class="border-right border-mute-light"><b><?php echo $line['value'] ?></b></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
				</table>
			</td>
			<?php endif; // End shipping table ?>
		</tr>
		</tbody>
	</table>
<!--_________________________
	
	Products data
	_________________________
-->
	<table class="no-phone framed">
		<thead>
			<tr class="page-navbar">
				<th class="border-bottom-2 border-mute fore-color-1"></th>
				<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('cart_product_list') ?></span></th>
				<?php if (count($products_with_sku) > 0) : ?>
				<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('cart_sku') ?></span></th>
				<?php endif ?>
				<th class="border-bottom-2 border-mute fore-color-1"><?php echo l10n('cart_descr') ?></th>
				<th class="border-bottom-2 border-mute fore-color-1"><?php echo l10n('cart_price') ?></th>
				<th class="border-bottom-2 border-mute fore-color-1"><?php echo l10n('cart_qty') ?></th>
				<?php if ($order['vat_type'] != "none"): ?>
				<th class="border-bottom-2 border-mute fore-color-1 print-text-right"><?php echo $order['vat_type'] == "excluded" ? $order['vat_name'] : str_replace('[NAME]', $order['vat_name'], l10n('cart_vat_included')) ?></th>
				<?php endif; ?>
				<th class="border-bottom-2 border-mute fore-color-1 print-text-right"><?php echo l10n('cart_subtot') ?></th>
			</tr>
		</thead>
		<tbody>
<?php $p = 0; foreach ($orderArray['products'] as $product): ?>
			<tr class="border-bottom border-mute-light <?php echo $p % 2 != 0 ? 'background-blue-light' : '' ?> ">
				<td class="border-left border-mute-light">
					<?php if ($product['digital']): ?>
					<i class="fore-mute-dark fa icon-large fa-cloud-download" title="Download"></i>
					<?php elseif ($product['physical']): ?>
					<i class="fore-mute-dark fa icon-large fa-truck"></i>
					<?php endif; ?>
				</td>
				<td><?php echo $product['name'] ?></td>
				<?php if (count($products_with_sku) > 0) : ?>
					<?php if (isset($products_with_sku[$product['product_id']])) : ?>
				<td><?php echo $products_with_sku[$product['product_id']]['sku'] ?></td>
					<?php else : ?>
				<td></td>
					<?php endif ?>
				<?php endif ?>
				<td><?php echo ($product['option'] != "" ? " - " . $product['option'] . ($product['suboption'] != "" ? " - " . $product['suboption'] : "") : "") ?></td>
				<td class="text-left"><?php echo Configuration::getCart()->toCurrency(($order['vat_type'] == "excluded" ? $product['price'] : $product['price_plus_vat']) / $product['quantity'], ' ' . $order['currency']) ?></td>
				<td class="text-left"><?php echo $product['quantity'] ?></td>
				<?php if ($order['vat_type'] != "none"): ?>
				<td class="text-left print-text-right"><?php echo Configuration::getCart()->toCurrency($product['vat'], ' ' . $order['currency']) ?></td>
				<?php endif; ?>
				<td class="border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat_type'] == "excluded" ? $product['price'] : $product['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
<?php $p++; endforeach; ?>
<?php if ($order['shipping_name'] != "" || $order['shipping_price'] != 0): ?>
<!--_________________________
	
	Shipping data
	_________________________
-->
<tr class="page-navbar">
				<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('cart_shipping') ?></span></th>
				<th class="border-bottom-2 border-mute fore-color-1" colspan="4"></th>
				<?php if ($order['vat_type'] != "none"): ?>
				<th class="border-bottom-2 border-mute fore-color-1 print-text-right"><?php echo $order['vat_type'] == "excluded" ? $order['shipping_vat_name'] : str_replace('[NAME]', $order['shipping_vat_name'], l10n('cart_vat_included')) ?></th>
				<?php endif; ?>
				<th class="border-bottom-2 border-mute fore-color-1 print-text-right"><?php echo l10n('cart_price') ?></th>
			</tr>
			<tr>
				<td class="border-left border-bottom border-mute-light" colspan="5"><?php echo $order['shipping_name'] ?></td>
				<?php if ($order['vat_type'] != "none"): ?>
				<td class="border-bottom border-mute-light text-left print-text-right"><?php echo Configuration::getCart()->toCurrency($order['shipping_vat'], ' ' . $order['currency']) ?></td>
				<?php endif; ?>
				<td class="border-right border-bottom border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat_type'] == "excluded" ? $order['shipping_price'] : $order['shipping_price_plus_vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
<?php endif; ?>
<?php if ($order['payment_name'] != "" || $order['payment_price'] != 0): ?>
<!--_________________________
	
	Payment data
	_________________________
-->
<tr class="page-navbar">
				<th class="border-bottom-2 border-mute fore-color-1"><span class="text-big"><?php echo l10n('cart_payment') ?></span></th>
				<th class="border-bottom-2 border-mute fore-color-1" colspan="4"></th>
				<?php if ($order['vat_type'] != "none"): ?>
				<th class="border-bottom-2 border-mute fore-color-1 print-text-right"><?php echo $order['vat_type'] == "excluded" ? $order['payment_vat_name'] : str_replace('[NAME]', $order['payment_vat_name'], l10n('cart_vat_included')) ?></th>
				<?php endif; ?>
				<th class="border-bottom-2 border-mute fore-color-1 print-text-right"><?php echo l10n('cart_price') ?></th>
			</tr>
			<tr>
				<td class="border-left border-bottom border-mute-light " colspan="5"><?php echo $order['payment_name'] ?></td>
				<?php if ($order['vat_type'] != "none"): ?>
				<td class="border-bottom border-mute-light text-left print-text-right"><?php echo Configuration::getCart()->toCurrency($order['payment_vat'], ' ' . $order['currency']) ?></td>
				<?php endif; ?>
				<td class="border-right border-bottom border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat_type'] == "excluded" ? $order['payment_price'] : $order['payment_price_plus_vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
<?php endif; ?>
<!-- Total Amounts -->
			<tr>
				<td colspan="<?php echo ($order['vat_type'] != 'none') ? '5' : '4' ?>"></td>
				<th colspan="2" class="border-bottom-2 border-mute fore-color-1 page-navbar"><?php echo l10n('cart_total', 'Total') ?></th>
			</tr>
<?php switch($order['vat_type']) {
case "included": ?>
			<tr>
				<td colspan="5"></td>
				<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo str_replace('[NAME]', $order['vat_name'], l10n('cart_total_vat')) ?></td>
				<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
			<tr>
				<td colspan="5"></td>
				<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo str_replace('[NAME]', $order['vat_name'], l10n('cart_vat_included')) ?></td>
				<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
<?php
break;
case "excluded": ?>
			<tr>
				<td colspan="5"></td>
				<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo l10n('cart_total') ?></td>
				<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price'], ' ' . $order['currency']) ?></b></td>
			</tr>
			<tr>
				<td colspan="5"></td>
				<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo $order['vat_name'] ?></td>
				<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
			<tr>
				<td colspan="5"></td>
				<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo str_replace('[NAME]', $order['vat_name'], l10n('cart_total_vat')) ?></td>
				<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
<?php
break;
case "none":?>
			<tr>
				<td colspan="4"></td>
				<td class="border-bottom border-left border-mute-light fore-color-1 head"><?php echo l10n('cart_total') ?></td>
				<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
			</tr>
<? break; ?>
<?php } ?>
<!-- Coupon Code and grandtotal -->
<?php if (isset($order['coupon']) && $order['coupon'] != "" && $order['coupon_value'] > 0): ?>
	<tr>
		<td colspan="<?php echo $order['vat_type'] != 'none' ? '5' : '4' ?>"></td>
		<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo l10n('cart_coupon_code', "Coupon Code") ?></td>
		<td class="border-bottom border-right border-mute-light text-left print-text-right"><b>-<?php echo Configuration::getCart()->toCurrency($order['coupon_value'], ' ' . $order['currency']) . ' (' . $order['coupon'] . ')' ?></b></td>
	</tr>
	<tr>
		<td colspan="<?php echo $order['vat_type'] != 'none' ? '5' : '4' ?>"></td>
		<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo l10n('cart_grand_total', "Grand total") ?></td>
		<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'] - $order['coupon_value'], ' ' . $order['currency']) ?></b></td>
	</tr>
<?php elseif (isset($order['coupon']) && $order['coupon'] != ""): ?>
	<tr>
		<td colspan="4"></td>
		<td class="border-bottom border-left border-mute-light fore-color-1 text-left"><?php echo l10n('cart_coupon_code', "Coupon Code") ?></td>
		<td class="border-bottom border-right border-mute-light text-left print-text-right"><b><?php echo $order['coupon'] ?></b></td>
	</tr>
<?php endif; ?>
		</tbody>
	</table>
	<!--_________________________
	
		Phone summary
		_________________________
	-->
	<table class="noprint no-tablet no-desktop">
		<tr>
			<th colspan="3" class="border-bottom-2 border-mute-light fore-color-1 text-center"><?php echo l10n('cart_product_list') ?></th>
		</tr>
<?php $p = 0; foreach ($orderArray['products'] as $product): ?>
		<tr class="<?php echo $p % 2 != 0 ? 'background-blue-light' : '' ?>">
			<td class="border-bottom border-left border-mute-light"><?php echo $product['name'] . ($product['option'] != "" ? " - " . $product['option'] . ($product['suboption'] != "" ? " - " . $product['suboption'] : "") : "") ?></td>
			<td class="border-bottom border-mute-light text-left"><?php echo $product['quantity'] ?></td>
			<td class="border-bottom border-right border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat_type'] == "excluded" ? $product['price'] : $product['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
<?php $p++; endforeach; ?>
		<tr>
			<td colspan="3" class="border-bottom-2 border-mute-light fore-color-1 text-center"><?php echo l10n('cart_shipping') ?></td>
		</tr>
		<tr>
			<td class="border-left border-bottom border-mute-light" colspan="2"><?php echo $order['shipping_name'] ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat_type'] == "excluded" ? $order['shipping_price'] : $order['shipping_price_plus_vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
		<tr>
			<td colspan="3" class="border-bottom-2 border-mute-light fore-color-1 text-center"><?php echo l10n('cart_payment') ?></td>
		</tr>
		<tr>
			<td class="border-left border-bottom border-mute-light" colspan="2"><?php echo $order['payment_name'] ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat_type'] == "excluded" ? $order['payment_price'] : $order['payment_price_plus_vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
<!-- Total Amounts -->
		<tr>
			<td colspan="3" class="fore-color-1 border-bottom-2 border-mute-light"><?php echo l10n('cart_total', 'Total') ?></td>
		</tr>
<?php switch($order['vat_type']) {
case "included": ?>
		<tr>
			<td class="border-left border-bottom border-mute-light text-left" colspan="2"><?php echo str_replace('[NAME]', $order['vat_name'], l10n('cart_total_vat')) ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
		<tr>
			<td class="border-left border-bottom border-mute-light text-left" colspan="2"><?php echo str_replace('[NAME]', $order['vat_name'], l10n('cart_vat_included')) ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
<?php
break;
case "excluded": ?>
		<tr>
			<td class="border-left border-bottom border-mute-light text-left" colspan="2"><?php echo l10n('cart_total') ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price'], ' ' . $order['currency']) ?></b></td>
		</tr>
		<tr>
			<td class="border-left border-bottom border-mute-light text-left" colspan="2"><?php echo $order['vat_name'] ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
		<tr>
			<td class="border-left border-bottom border-mute-light text-left" colspan="2"><?php echo str_replace('[NAME]', $order['vat_name'], l10n('cart_total_vat')) ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
<?php
break;
case "none":?>
		<tr>
			<td class="border-left border-bottom border-mute-light" colspan="2"><?php echo l10n('cart_total') ?></td>
			<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'], ' ' . $order['currency']) ?></b></td>
		</tr>
<? break; ?>
<?php } ?>
<!-- Coupon Code and grandtotal -->
<?php if (isset($order['coupon']) && $order['coupon'] != "" && $order['coupon_value'] > 0): ?>
	<tr>
		<td class="border-left border-bottom border-mute-light" colspan="2"><?php echo l10n('cart_coupon_code', "Coupon Code") ?></td>
		<td class="border-right border-bottom border-mute-light text-right print-text-right"><b>-<?php echo Configuration::getCart()->toCurrency($order['coupon_value'], ' ' . $order['currency']) . ' (' . $order['coupon'] . ')' ?></b></td>
	</tr>
	<tr>
		<td class="border-left border-bottom border-mute-light" colspan="2"><?php echo l10n('cart_grand_total', "Grand total") ?></td>
		<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo Configuration::getCart()->toCurrency($order['price_plus_vat'] - $order['coupon_value'], ' ' . $order['currency']) ?></b></td>
	</tr>
<?php elseif (isset($order['coupon']) && $order['coupon'] != ""): ?>
	<tr>
		<td class="border-left border-bottom border-mute-light" colspan="2"><?php echo l10n('cart_coupon_code', "Coupon Code") ?></td>
		<td class="border-right border-bottom border-mute-light text-right print-text-right"><b><?php echo $order['coupon'] ?></b></td>
	</tr>
<?php endif; ?>
	</table>
	<div class="clearfix margin-top-2"></div>
	<a class="noprint button background-color-1 fore-white" href="cart-orders.php?status=<?php echo $order['status'] ?>"><?php echo l10n('cart_goback', "Back") ?></a>
	<div class="noprint text-center float-right ">
		<a class="button background-color-1 fore-white no-phone no-tablet" href="#" onclick="window.print(); return false;"><?php echo l10n('cart_print', "Print") ?></a>
		<?php if ($order['status'] == 'inbox'): ?>
			<a class="button background-color-1 fore-white" onclick="return orders.evadeOrder(this);" data-enable-tracking="<?php echo (isset($orderArray['shipping_data']['enable_tracking']) && $orderArray['shipping_data']['enable_tracking'] == true) ? 'true' : 'false' ?>" href="cart-order.php?id=<?php echo $order['id'] ?>&amp;evade=true"><?php echo l10n('cart_evade', "Evade") ?></a>
		<?php endif; ?>
		<?php if (!Configuration::getControlPanel()->isWsx5Manager()): ?>
		<a class="button background-color-1 fore-white" href="cart-order.php?id=<?php echo $order['id'] ?>&amp;exportcsv=true"><?php echo l10n('cart_export', "Export") ?></a>
		<?php endif; ?>
	</div>
	<div class="clearfix"></div>
