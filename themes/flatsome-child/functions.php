<?php
// Add custom Theme Functions here

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields',99 );
function custom_override_checkout_fields( $fields ) {
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_first_name']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_state']);
  unset($fields['billing']['billing_address_2']);

 $fields['billing']['billing_last_name'] = array(
	'label' => __('Họ và tên', 'devvn'),
	'placeholder' => _x('Nhập đầy đủ họ và tên của bạn', 'placeholder', 'devvn'),
	'required' => true,
	'class' => array('form-row-wide'),
	'clear' => true
  );

  $fields['billing']['billing_phone'] = array(
	'label' => __('Số điện thoại', 'devvn'),
	'placeholder' => _x('Số điện thoại', 'placeholder', 'devvn'),
	'required' => true,
	'class' => array('form-row-wide'),
	'clear' => true
  );

  $fields['billing']['billing_address_1'] = array(
	'label' => __('Địa chỉ giao sản phẩm', 'devvn'),
	'placeholder' => _x('Địa chỉ', 'placeholder', 'devvn'),
	'required' => true,
	'class' => array('form-row-wide'),
	'clear' => true
  ); 

  return $fields;
}