<?php
    // This is the email separator line
    $separator = "<tr><td colspan=\"2\" style=\"margin: 10px 0; height: 10px; font-size: 0.1px; border-bottom: 1px solid [email:emailBackground];\">&nbsp;</td></tr>";
    // If true, it means that there are both the invoice and the shipping addresses
    $doubleUData = isset($orderData['userShippingData']) && is_array($orderData['userShippingData']);
    $doubleUData = $doubleUData && isset($orderData['userShippingData']) && is_array($orderData['userShippingData']);
?>
<table border="0" width="100%" style="[email:contentStyle]">
    <tr>
        <td colspan="2" style="[email:contentFontFamily] text-align: center; font-weight: bold;font-size: 1.11em">
            <?php echo $l10n->get('cart_order_no') . ": " . $orderData['orderNo'] ?>
        </td>
    </tr>
    <!-- Opening Message -->
    <?php if ($showCustomerMessages): ?>
    <tr><td colspan="2" style="[email:contentFontFamily]"><?php echo $settings['email_opening'] ?></td></tr>
    <?php endif; ?>
    <!-- Invoice & Shipping Data -->
    <tr style="vertical-align: top" valign="top">
        <!-- Data header -->
        <?php if ($doubleUData): ?>
        <td style="[email:contentFontFamily] width: 50%; padding: 20px 0;">
            <h3 style="font-size: 1.11em"><?php echo $l10n->get('cart_vat_address') ?></h3>
        <?php else: ?>
        <td colspan="2" style="[email:contentFontFamily] padding: 20px 0 0 0;">
            <h3 style="font-size: 1.11em"><?php echo $l10n->get('cart_vat_address') . "/" . $l10n->get('cart_shipping_address') ?></h3>
        <?php endif; ?>
            <!-- Invoice Data -->
            <?php if (isset($orderData['userInvoiceData']) && is_array($orderData['userInvoiceData'])): ?>
            <table width="100%" style="[email:contentStyle]">
            <?php $i = 0; foreach ($orderData['userInvoiceData'] as $key => $value): ?>
                <?php if (trim($value['value']) != ""): ?>
                <tr <?php echo ($i%2 ? " bgcolor=\"[email:bodyBackgroundOdd]\"" : "") ?>>
                    <?php if (preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])' . '(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', $value['value'])): ?>
                    <!-- Email -->
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><b><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $value['label']) ?>:</b></td>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><a href="mailto: <?php echo $value['value'] ?>"><?php echo $value['value'] ?></a></td>
                    <?php elseif (preg_match('/^http[s]?:\/\/[a-zA-Z0-9\.\-]{2,}\.[a-zA-Z]{2,}/', $value['value'])): ?>
                    <!-- URL -->
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><b><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $value['label']) ?>:</b></td>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><a href="<?php echo $value['value'] ?>"><?php $value['value'] ?></a></td>
                    <?php else: ?>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><b><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $value['label']) ?>:</b></td>
                    <?php
                        // Attachment file: strip its name removing the timestamp prefix
                        if ($value['id'] == 'Attachment') {
                            $splitedFileName = explode("_", $value['value'], 2);
                            $fieldValue = $splitedFileName[1];
                        }
                        else
                            $fieldValue = $value['value'];  
                    ?>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $fieldValue) ?></td>
                    <?php endif; ?>
                </tr>
                    <?php $i++; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </td>
        <!-- Columns separations -->
        <?php if ($doubleUData): ?>
        <td style="[email:contentFontFamily] width: 50%; padding: 20px 0;">
            <h3 style="font-size: 1.11em"><?php echo $l10n->get('cart_shipping_address') ?></h3>
            <!-- Shipping Data -->
            <table width="100%" style="[email:contentStyle]">
            <?php $i = 0; foreach ($orderData['userShippingData'] as $key => $value): ?>
                <?php if (trim($value['value']) != ""): ?>
                <tr <?php echo ($i%2 ? " bgcolor=\"[email:bodyBackgroundOdd]\"" : "") ?>>
                    <?php if (preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])' . '(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', $value['value'])): ?>
                    <!-- Email -->
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><b><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $value['label']) ?>:</b></td>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><a href="mailto: <?php echo $value['value'] ?>"><?php echo $value['value'] ?></a></td>
                    <?php elseif (preg_match('/^http[s]?:\/\/[a-zA-Z0-9\.\-]{2,}\.[a-zA-Z]{2,}/', $value['value'])): ?>
                    <!-- URL -->
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><b><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $value['label']) ?>:</b></td>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><a href="<?php echo $value['value'] ?>"><?php $value['value'] ?></a></td>
                    <?php else: ?>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><b><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $value['label']) ?>:</b></td>
                    <td style="[email:contentFontFamily]<?php echo ($i%2 ? " color: [email:bodyTextColorOdd]" : "") ?>"><?php echo str_replace(array("\\'", '\\"'), array("'", '"'), $value['value']) ?></td>
                    <?php endif; ?>
                </tr>
                    <?php $i++; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </table>
        </td>
        <?php endif; ?>
    </tr>
    <?php echo $separator ?>
    <!-- Order Data -->
    <tr>
        <td colspan="2" style="[email:contentFontFamily] padding: 5px 0 0 0;">
            <h3 style="font-size: 1.11em"><?php echo $l10n->get('cart_product_list') ?></h3>
            <?php
            if (isset($orderData['products']) && is_array($orderData['products'])):
                $i = 0;
                $opt = false;
                foreach ($orderData['products'] as $key => $value) {
                    if (isset($value["option"]) && $value["option"] != "null" && strlen($value["option"])) {
                        $opt = true;
                    }
                    $vat = ($settings['vat_type'] != "none");
                    $colspan = 3 + ($opt ? 1 : 0) + ($vat ? 1 : 0);
                }
            ?>
            <table cellpadding="5" width="100%" style="[email:contentStyle] border-collapse: collapse;">
                <tr bgcolor="[email:bodyBackgroundOdd]">
                    <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; color: [email:bodyTextColorOdd]">
                        <b><?php echo $l10n->get("cart_name") ?></b>
                    </td>
                    <?php if ($opt) : ?>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; min-width: 80px; color: [email:bodyTextColorOdd]">
                            <b><?php echo $l10n->get("product_option") ?></b>
                        </td>
                    <?php endif; ?>
                    <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; color: [email:bodyTextColorOdd]">
                        <b><?php echo $l10n->get("cart_qty") ?></b>
                    </td>
                    <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; min-width: 70px; color: [email:bodyTextColorOdd]">
                        <b><?php echo $l10n->get("cart_price") ?></b>
                    </td>
                    <?php if ($vat): ?>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; min-width: 70px; color: [email:bodyTextColorOdd]">
                            <b><?php echo ($settings['vat_type'] == "included" ? str_replace('[NAME]', $orderData['vatName'], $l10n->get("cart_vat_included")) : $orderData['vatName']) ?></b>
                        </td>
                    <?php endif; ?>
                    <td  style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; color: [email:bodyTextColorOdd]">
                        <b><?php echo $l10n->get("cart_subtot") ?></b>
                    </td>
                </tr>
                <?php foreach ($orderData['products'] as $key => $value): ?>
                    <tr valign="top" style="[email:contentFontFamily] vertical-align: top"<?php ($i%2 ? " bgcolor=\"#EEEEEE\"" : "") ?>>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder];"><?php echo $value["name"] ?><br /><?php echo $value["description"] ?></td>
                        <?php if ($opt): ?>
                        <td style="border: 1px solid [email:bodyBackgroundBorder];">
                            <?php if ($value["option"] != "null"): ?>
                                <?php echo $value["option"] ?>
                                <?php if ($value["suboption"] != "null"): ?>
                                    <?php echo $value["suboption"]  ?>
                                <?php endif; ?>
                            <?php endif; ?>
                           </td>
                           <?php endif; ?>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $value["quantity"] ?></td>
                        <?php if ($settings['vat_type'] == "excluded"): ?>
                            <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo ($value["singlePrice"] == $value['singleFullPrice'] ? $value['singlePrice'] : $value['singlePrice'] . ' <span style="text-decoration: line-through;">' . $value['singleFullPrice'] . "</span>") ?></td>
                        <?php else: ?>
                            <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo ($value["singlePricePlusVat"] == $value['singleFullPricePlusVat'] ? $value['singlePricePlusVat'] : $value['singlePricePlusVat'] . ' <span style="text-decoration: line-through;">' . $value['singleFullPricePlusVat'] . "</span>") ?></td>
                        <?php endif; ?>
                        <?php if ($vat): ?>
                            <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $value["vat"] ?></td>
                        <?php endif; ?>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo ($settings['vat_type'] == "excluded" ? $value["price"] : $value['pricePlusVat']) ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
                <!-- Shipping data -->
                <?php if (isset($orderData['shipping']) && is_array($orderData['shipping'])): ?>
                <tr>
                    <?php if ($settings['vat_type'] != "none"): ?>
                        <td colspan="<?php echo ($colspan - 1) ?>"  style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $l10n->get('cart_shipping') ?>: <?php echo $orderData['shipping']['name'] ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['shipping']['vat'] ?></td>
                    <?php else: ?>
                        <td colspan="<?php echo $colspan ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $l10n->get('cart_shipping') ?>: <?php echo $orderData['shipping']['name'] ?></td>
                    <?php endif; ?>
                    <td  style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo ($settings['vat_type'] == "excluded" ? $orderData['shipping']['price'] : $orderData['shipping']['pricePlusVat']) ?></td>
                </tr>
                <?php endif; ?>
                <!-- Payment Data -->
                <?php if (isset($orderData['payment']) && is_array($orderData['payment'])): ?>
                <tr>
                    <?php if ($settings['vat_type'] != "none"): ?>
                        <td colspan="<?php echo ($colspan - 1) ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $l10n->get('cart_payment') ?>: <?php echo $orderData['payment']['name'] ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['payment']['vat'] ?></td>
                    <?php else: ?>
                        <td colspan="<?php echo $colspan ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $l10n->get('cart_payment') ?>: <?php echo $orderData['payment']['name'] ?></td>
                    <?php endif; ?>
                    <td  style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo ($settings['vat_type'] == "excluded" ? $orderData['payment']['price'] : $orderData['payment']['pricePlusVat']) ?></td>
                </tr>
                <?php endif; ?>
                <!-- Total Amount -->
                <?php
                    switch ($settings['vat_type']) {
                        case "excluded":?>
                    <tr>
                        <td colspan="<?php echo $colspan; ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo $l10n->get('cart_total') ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['totalPrice'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="<?php echo $colspan; ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo $orderData['vatName'] ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['totalVat'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="<?php echo $colspan; ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo str_replace('[NAME]', $orderData['vatName'], $l10n->get('cart_total_vat')) ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['totalPricePlusVat'] ?></td>
                    </tr>
                        <?php break;
                        case "included": ?>
                    <tr>
                        <td colspan="<?php echo $colspan; ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo str_replace('[NAME]', $orderData['vatName'], $l10n->get('cart_total_vat')) ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['totalPricePlusVat'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="<?php echo $colspan; ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo str_replace('[NAME]', $orderData['vatName'], $l10n->get("cart_vat_included")) ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['totalVat'] ?></td>
                    </tr>
                        <?php break;
                        case "none": ?>
                    <tr>
                        <td colspan="<?php echo $colspan; ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo $l10n->get('cart_total_price') ?></td>
                        <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['totalPricePlusVat'] ?></td>
                    </tr>
                        <?php break;
                    }
                    // Coupon code and grandtotal
                    if (isset($orderData['coupon']) && $orderData['coupon'] !== "" && $orderData['rawCouponDiscount'] > 0): ?>
                        <tr>
                            <td colspan="<?php echo $colspan ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo $l10n->get('cart_coupon_code', "Coupon Code") . " (" . $orderData['coupon'] . ")" ?></td>
                            <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;">-<?php echo $orderData['couponDiscount'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="<?php echo $colspan ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo $l10n->get('cart_grand_total', "Grand total") ?></td>
                            <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['totalToPay'] ?></td>
                        </tr>
                    <?php elseif (isset($orderData['coupon']) && $orderData['coupon'] !== ""): ?>
                        <tr>
                            <td colspan="<?php echo $colspan ?>" style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right; font-weight: bold;"><?php echo $l10n->get('cart_coupon_code', "Coupon Code") ?></td>
                            <td style="[email:contentFontFamily] border: 1px solid [email:bodyBackgroundBorder]; text-align: right;"><?php echo $orderData['coupon'] ?></td>
                        </tr>
                    <?php endif; ?>
            </table>
            <?php endif; ?>
        </td>
    </tr>
    <!-- Payment Text -->
    <?php if (isset($orderData['payment']) && is_array($orderData['payment']) && !isset($orderData['payment']['hidePaymentTxtAndButton'])): ?>
    <?php echo $separator ?>
    <tr>
        <td colspan="2" style="[email:contentFontFamily] padding: 5px 0 0 0;">
            <h3 style="font-size: 1.11em"><?php echo $l10n->get('cart_payment') ?></h3>
            <?php echo nl2br($orderData['payment']['name']) ?>
            <?php if ($showCustomerMessages): ?>
            <div></div>
            <?php endif; ?>
        </td>
    </tr>
    <?php endif; ?>
    <!-- Shipping Text -->
    <?php if (isset($orderData['shipping']) && is_array($orderData['shipping'])): ?>
    <?php echo $separator ?>
    <tr>
        <td colspan="2" style="[email:contentFontFamily] padding: 5px 0 0 0;">
            <h3 style="font-size: 1.11em"><?php echo $l10n->get('cart_shipping') ?></h3>
            <?php echo nl2br($orderData['shipping']['name']) ?>
            <?php if ($showCustomerMessages): ?>
            <div><?php echo nl2br($orderData['shipping']['email_text']) ?></div>
            <?php endif; ?>
        </td>
    </tr>
    <?php endif; ?>
    <!-- Closing message -->
    <?php if ($showCustomerMessages): ?>
    <?php echo $separator ?>
    <tr><td colspan="2" style="[email:contentFontFamily] padding: 5px 0 0 0;"><?php echo $settings['email_closing'] ?></td></tr>
    <?php endif; ?>
</table>

