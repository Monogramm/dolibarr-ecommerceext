* Object invoice with 1 product configurable = 2 items
  * Returned after having created an invoice, but no shipment -> `qty_invoiced` is set on item, `qty_shipped` is 0

```php
array(47) {
  ["store_id"]=>
  string(1) "1"
  ["base_grand_total"]=>
  string(7) "75.0000"
  ["shipping_tax_amount"]=>
  string(6) "0.0000"
  ["tax_amount"]=>
  string(6) "0.0000"
  ["base_tax_amount"]=>
  string(6) "0.0000"
  ["store_to_order_rate"]=>
  string(6) "1.0000"
  ["base_shipping_tax_amount"]=>
  string(6) "0.0000"
  ["base_discount_amount"]=>
  string(6) "0.0000"
  ["base_to_order_rate"]=>
  string(6) "1.0000"
  ["grand_total"]=>
  string(7) "75.0000"
  ["shipping_amount"]=>
  string(6) "5.0000"
  ["subtotal_incl_tax"]=>
  string(7) "70.0000"
  ["base_subtotal_incl_tax"]=>
  string(7) "70.0000"
  ["store_to_base_rate"]=>
  string(6) "1.0000"
  ["base_shipping_amount"]=>
  string(6) "5.0000"
  ["total_qty"]=>
  string(6) "2.0000"
  ["base_to_global_rate"]=>
  string(6) "1.0000"
  ["subtotal"]=>
  string(7) "70.0000"
  ["base_subtotal"]=>
  string(7) "70.0000"
  ["discount_amount"]=>
  string(6) "0.0000"
  ["billing_address_id"]=>
  string(2) "19"
  ["is_used_for_refund"]=>
  NULL
  ["order_id"]=>
  string(2) "10"
  ["email_sent"]=>
  NULL
  ["can_void_flag"]=>
  string(1) "0"
  ["state"]=>
  string(1) "2"
  ["shipping_address_id"]=>
  string(2) "20"
  ["store_currency_code"]=>
  string(3) "EUR"
  ["transaction_id"]=>
  NULL
  ["order_currency_code"]=>
  string(3) "EUR"
  ["base_currency_code"]=>
  string(3) "EUR"
  ["global_currency_code"]=>
  string(3) "EUR"
  ["increment_id"]=>
  string(9) "100000004"
  ["created_at"]=>
  string(19) "2016-07-22 10:05:52"
  ["updated_at"]=>
  string(19) "2016-07-22 10:05:52"
  ["hidden_tax_amount"]=>
  string(6) "0.0000"
  ["base_hidden_tax_amount"]=>
  string(6) "0.0000"
  ["shipping_hidden_tax_amount"]=>
  string(6) "0.0000"
  ["base_shipping_hidden_tax_amnt"]=>
  NULL
  ["shipping_incl_tax"]=>
  string(6) "5.0000"
  ["base_shipping_incl_tax"]=>
  string(6) "5.0000"
  ["base_total_refunded"]=>
  NULL
  ["discount_description"]=>
  NULL
  ["invoice_id"]=>
  string(1) "4"
  ["order_increment_id"]=>
  string(9) "100000010"
  ["items"]=>
  array(2) {
    [0]=>
    array(34) {
      ["parent_id"]=>
      string(1) "4"
      ["base_price"]=>
      string(7) "70.0000"
      ["tax_amount"]=>
      string(6) "0.0000"
      ["base_row_total"]=>
      string(7) "70.0000"
      ["discount_amount"]=>
      NULL
      ["row_total"]=>
      string(7) "70.0000"
      ["base_discount_amount"]=>
      NULL
      ["price_incl_tax"]=>
      string(7) "70.0000"
      ["base_tax_amount"]=>
      string(6) "0.0000"
      ["base_price_incl_tax"]=>
      string(7) "70.0000"
      ["qty"]=>
      string(6) "1.0000"
      ["base_cost"]=>
      NULL
      ["price"]=>
      string(7) "70.0000"
      ["base_row_total_incl_tax"]=>
      string(7) "70.0000"
      ["row_total_incl_tax"]=>
      string(7) "70.0000"
      ["product_id"]=>
      string(1) "6"
      ["order_item_id"]=>
      string(2) "10"
      ["additional_data"]=>
      NULL
      ["description"]=>
      NULL
      ["sku"]=>
      string(27) "Prod configurable Color Ajj"
      ["name"]=>
      string(25) "Prod configurable Color A"
      ["hidden_tax_amount"]=>
      string(6) "0.0000"
      ["base_hidden_tax_amount"]=>
      string(6) "0.0000"
      ["base_weee_tax_applied_amount"]=>
      string(6) "0.0000"
      ["base_weee_tax_applied_row_amnt"]=>
      string(6) "0.0000"
      ["base_weee_tax_applied_row_amount"]=>
      string(6) "0.0000"
      ["weee_tax_applied_amount"]=>
      string(6) "0.0000"
      ["weee_tax_applied_row_amount"]=>
      string(6) "0.0000"
      ["weee_tax_applied"]=>
      string(6) "a:0:{}"
      ["weee_tax_disposition"]=>
      string(6) "0.0000"
      ["weee_tax_row_disposition"]=>
      string(6) "0.0000"
      ["base_weee_tax_disposition"]=>
      string(6) "0.0000"
      ["base_weee_tax_row_disposition"]=>
      string(6) "0.0000"
      ["item_id"]=>
      string(1) "4"
    }
    [1]=>
    array(34) {
      ["parent_id"]=>
      string(1) "4"
      ["base_price"]=>
      string(6) "0.0000"
      ["tax_amount"]=>
      NULL
      ["base_row_total"]=>
      NULL
      ["discount_amount"]=>
      NULL
      ["row_total"]=>
      NULL
      ["base_discount_amount"]=>
      NULL
      ["price_incl_tax"]=>
      NULL
      ["base_tax_amount"]=>
      NULL
      ["base_price_incl_tax"]=>
      NULL
      ["qty"]=>
      string(6) "1.0000"
      ["base_cost"]=>
      NULL
      ["price"]=>
      string(6) "0.0000"
      ["base_row_total_incl_tax"]=>
      NULL
      ["row_total_incl_tax"]=>
      NULL
      ["product_id"]=>
      string(2) "13"
      ["order_item_id"]=>
      string(2) "11"
      ["additional_data"]=>
      NULL
      ["description"]=>
      NULL
      ["sku"]=>
      string(27) "Prod configurable Color Ajj"
      ["name"]=>
      string(29) "Prod configurable Color A-red"
      ["hidden_tax_amount"]=>
      NULL
      ["base_hidden_tax_amount"]=>
      NULL
      ["base_weee_tax_applied_amount"]=>
      string(6) "0.0000"
      ["base_weee_tax_applied_row_amnt"]=>
      NULL
      ["base_weee_tax_applied_row_amount"]=>
      NULL
      ["weee_tax_applied_amount"]=>
      string(6) "0.0000"
      ["weee_tax_applied_row_amount"]=>
      string(6) "0.0000"
      ["weee_tax_applied"]=>
      string(6) "a:0:{}"
      ["weee_tax_disposition"]=>
      string(6) "0.0000"
      ["weee_tax_row_disposition"]=>
      string(6) "0.0000"
      ["base_weee_tax_disposition"]=>
      string(6) "0.0000"
      ["base_weee_tax_row_disposition"]=>
      string(6) "0.0000"
      ["item_id"]=>
      string(1) "5"
    }
  }
  ["comments"]=>
  array(0) {
  }
}
```