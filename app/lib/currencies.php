<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$this->paypal_currencies = apply_filters(
	'pesapress_paypal_currencies',
	array(
		'AUD' => __( 'AUD - Australian Dollar', 'pesapress' ),
		'BRL' => __( 'BRL - Brazilian Real', 'pesapress' ),
		'CAD' => __( 'CAD - Canadian Dollar', 'pesapress' ),
		'CHF' => __( 'CHF - Swiss Franc', 'pesapress' ),
		'CZK' => __( 'CZK - Czech Koruna', 'pesapress' ),
		'DKK' => __( 'DKK - Danish Krone', 'pesapress' ),
		'EUR' => __( 'EUR - Euro', 'pesapress' ),
		'GBP' => __( 'GBP - Pound Sterling', 'pesapress' ),
		'ILS' => __( 'ILS - Israeli Shekel', 'pesapress' ),
		'INR' => __( 'INR - Indian Rupee*', 'pesapress' ),
		'HKD' => __( 'HKD - Hong Kong Dollar', 'pesapress' ),
		'HUF' => __( 'HUF - Hungarian Forint', 'pesapress' ),
		'JPY' => __( 'JPY - Japanese Yen', 'pesapress' ),
		'MYR' => __( 'MYR - Malaysian Ringgits', 'pesapress' ),
		'MXN' => __( 'MXN - Mexican Peso', 'pesapress' ),
		'NOK' => __( 'NOK - Norwegian Krone', 'pesapress' ),
		'NZD' => __( 'NZD - New Zealand Dollar', 'pesapress' ),
		'PHP' => __( 'PHP - Philippine Pesos', 'pesapress' ),
		'PLN' => __( 'PLN - Polish Zloty', 'pesapress' ),
		'RUB' => __( 'RUB - Russian Rubles', 'pesapress' ),
		'SEK' => __( 'SEK - Swedish Krona', 'pesapress' ),
		'SGD' => __( 'SGD - Singapore Dollar', 'pesapress' ),
		'TWD' => __( 'TWD - Taiwan New Dollars', 'pesapress' ),
		'THB' => __( 'THB - Thai Baht', 'pesapress' ),
		'TRY' => __( 'TRY - Turkish lira', 'pesapress' ),
		'USD' => __( 'USD - U.S. Dollar', 'pesapress' ),
	)
);


$this->general_currencies = apply_filters(
	'pesapress_general_currencies',
	array(
		'AED' => __( 'AED - United Arab Emirates Dirham', 'pesapress' ),
		'AFN' => __( 'AFN - Afghan Afghani*', 'pesapress' ),
		'ALL' => __( 'ALL - Albanian Lek', 'pesapress' ),
		'AMD' => __( 'AMD - Armenian Dram', 'pesapress' ),
		'ANG' => __( 'ANG - Netherlands Antillean Gulden', 'pesapress' ),
		'AOA' => __( 'AOA - Angolan Kwanza*', 'pesapress' ),
		'ARS' => __( 'ARS - Argentine Peso*', 'pesapress' ),
		'AUD' => __( 'AUD - Australian Dollar*', 'pesapress' ),
		'AWG' => __( 'AWG - Aruban Florin', 'pesapress' ),
		'AZN' => __( 'AZN - Azerbaijani Manat', 'pesapress' ),
		'BAM' => __( 'BAM - Bosnia & Herzegovina Convertible Mark', 'pesapress' ),
		'BBD' => __( 'BBD - Barbadian Dollar', 'pesapress' ),
		'BDT' => __( 'BDT - Bangladeshi Taka', 'pesapress' ),
		'BGN' => __( 'BGN - Bulgarian Lev', 'pesapress' ),
		'BIF' => __( 'BIF - Burundian Franc', 'pesapress' ),
		'BMD' => __( 'BMD - Bermudian Dollar', 'pesapress' ),
		'BND' => __( 'BND - Brunei Dollar', 'pesapress' ),
		'BOB' => __( 'BOB - Bolivian Boliviano*', 'pesapress' ),
		'BRL' => __( 'BRL - Brazilian Real*', 'pesapress' ),
		'BSD' => __( 'BSD - Bahamian Dollar', 'pesapress' ),
		'BWP' => __( 'BWP - Botswana Pula', 'pesapress' ),
		'BZD' => __( 'BZD - Belize Dollar', 'pesapress' ),
		'CAD' => __( 'CAD - Canadian Dollar*', 'pesapress' ),
		'CDF' => __( 'CDF - Congolese Franc', 'pesapress' ),
		'CHF' => __( 'CHF - Swiss Franc', 'pesapress' ),
		'CLP' => __( 'CLP - Chilean Peso*', 'pesapress' ),
		'CNY' => __( 'CNY - Chinese Renminbi Yuan', 'pesapress' ),
		'COP' => __( 'COP - Colombian Peso*', 'pesapress' ),
		'CRC' => __( 'CRC - Costa Rican Colón*', 'pesapress' ),
		'CVE' => __( 'CVE - Cape Verdean Escudo*', 'pesapress' ),
		'CZK' => __( 'CZK - Czech Koruna*', 'pesapress' ),
		'DJF' => __( 'DJF - Djiboutian Franc*', 'pesapress' ),
		'DKK' => __( 'DKK - Danish Krone', 'pesapress' ),
		'DOP' => __( 'DOP - Dominican Peso', 'pesapress' ),
		'DZD' => __( 'DZD - Algerian Dinar', 'pesapress' ),
		'EEK' => __( 'EEK - Estonian Kroon*', 'pesapress' ),
		'EGP' => __( 'EGP - Egyptian Pound', 'pesapress' ),
		'ETB' => __( 'ETB - Ethiopian Birr', 'pesapress' ),
		'EUR' => __( 'EUR - Euro', 'pesapress' ),
		'FJD' => __( 'FJD - Fijian Dollar', 'pesapress' ),
		'FKP' => __( 'FKP - Falkland Islands Pound*', 'pesapress' ),
		'GBP' => __( 'GBP - British Pound', 'pesapress' ),
		'GEL' => __( 'GEL - Georgian Lari', 'pesapress' ),
		'GIP' => __( 'GIP - Gibraltar Pound', 'pesapress' ),
		'GMD' => __( 'GMD - Gambian Dalasi', 'pesapress' ),
		'GNF' => __( 'GNF - Guinean Franc*', 'pesapress' ),
		'GTQ' => __( 'GTQ - Guatemalan Quetzal*', 'pesapress' ),
		'GYD' => __( 'GYD - Guyanese Dollar', 'pesapress' ),
		'HKD' => __( 'HKD - Hong Kong Dollar', 'pesapress' ),
		'HNL' => __( 'HNL - Honduran Lempira*', 'pesapress' ),
		'HRK' => __( 'HRK - Croatian Kuna', 'pesapress' ),
		'HTG' => __( 'HTG - Haitian Gourde', 'pesapress' ),
		'HUF' => __( 'HUF - Hungarian Forint', 'pesapress' ),
		'IDR' => __( 'IDR - Indonesian Rupiah', 'pesapress' ),
		'ILS' => __( 'ILS - Israeli New Sheqel', 'pesapress' ),
		'INR' => __( 'INR - Indian Rupee*', 'pesapress' ),
		'ISK' => __( 'ISK - Icelandic Króna', 'pesapress' ),
		'JMD' => __( 'JMD - Jamaican Dollar', 'pesapress' ),
		'JPY' => __( 'JPY - Japanese Yen', 'pesapress' ),
		'KES' => __( 'KES - Kenyan Shilling', 'pesapress' ),
		'KGS' => __( 'KGS - Kyrgyzstani Som', 'pesapress' ),
		'KHR' => __( 'KHR - Cambodian Riel', 'pesapress' ),
		'KMF' => __( 'KMF - Comorian Franc', 'pesapress' ),
		'KRW' => __( 'KRW - South Korean Won', 'pesapress' ),
		'KYD' => __( 'KYD - Cayman Islands Dollar', 'pesapress' ),
		'KZT' => __( 'KZT - Kazakhstani Tenge', 'pesapress' ),
		'LAK' => __( 'LAK - Lao Kip*', 'pesapress' ),
		'LBP' => __( 'LBP - Lebanese Pound', 'pesapress' ),
		'LKR' => __( 'LKR - Sri Lankan Rupee', 'pesapress' ),
		'LRD' => __( 'LRD - Liberian Dollar', 'pesapress' ),
		'LSL' => __( 'LSL - Lesotho Loti', 'pesapress' ),
		'LTL' => __( 'LTL - Lithuanian Litas', 'pesapress' ),
		'LVL' => __( 'LVL - Latvian Lats', 'pesapress' ),
		'MAD' => __( 'MAD - Moroccan Dirham', 'pesapress' ),
		'MDL' => __( 'MDL - Moldovan Leu', 'pesapress' ),
		'MGA' => __( 'MGA - Malagasy Ariary', 'pesapress' ),
		'MKD' => __( 'MKD - Macedonian Denar', 'pesapress' ),
		'MNT' => __( 'MNT - Mongolian Tögrög', 'pesapress' ),
		'MOP' => __( 'MOP - Macanese Pataca', 'pesapress' ),
		'MRO' => __( 'MRO - Mauritanian Ouguiya', 'pesapress' ),
		'MUR' => __( 'MUR - Mauritian Rupee*', 'pesapress' ),
		'MVR' => __( 'MVR - Maldivian Rufiyaa', 'pesapress' ),
		'MWK' => __( 'MWK - Malawian Kwacha', 'pesapress' ),
		'MXN' => __( 'MXN - Mexican Peso*', 'pesapress' ),
		'MYR' => __( 'MYR - Malaysian Ringgit', 'pesapress' ),
		'MZN' => __( 'MZN - Mozambican Metical', 'pesapress' ),
		'NAD' => __( 'NAD - Namibian Dollar', 'pesapress' ),
		'NGN' => __( 'NGN - Nigerian Naira', 'pesapress' ),
		'NIO' => __( 'NIO - Nicaraguan Córdoba*', 'pesapress' ),
		'NOK' => __( 'NOK - Norwegian Krone', 'pesapress' ),
		'NPR' => __( 'NPR - Nepalese Rupee', 'pesapress' ),
		'NZD' => __( 'NZD - New Zealand Dollar', 'pesapress' ),
		'PAB' => __( 'PAB - Panamanian Balboa*', 'pesapress' ),
		'PEN' => __( 'PEN - Peruvian Nuevo Sol*', 'pesapress' ),
		'PGK' => __( 'PGK - Papua New Guinean Kina', 'pesapress' ),
		'PHP' => __( 'PHP - Philippine Peso', 'pesapress' ),
		'PKR' => __( 'PKR - Pakistani Rupee', 'pesapress' ),
		'PLN' => __( 'PLN - Polish Złoty', 'pesapress' ),
		'PYG' => __( 'PYG - Paraguayan Guaraní*', 'pesapress' ),
		'QAR' => __( 'QAR - Qatari Riyal', 'pesapress' ),
		'RON' => __( 'RON - Romanian Leu', 'pesapress' ),
		'RSD' => __( 'RSD - Serbian Dinar', 'pesapress' ),
		'RUB' => __( 'RUB - Russian Ruble', 'pesapress' ),
		'RWF' => __( 'RWF - Rwandan Franc', 'pesapress' ),
		'SAR' => __( 'SAR - Saudi Riyal', 'pesapress' ),
		'SBD' => __( 'SBD - Solomon Islands Dollar', 'pesapress' ),
		'SCR' => __( 'SCR - Seychellois Rupee', 'pesapress' ),
		'SEK' => __( 'SEK - Swedish Krona', 'pesapress' ),
		'SGD' => __( 'SGD - Singapore Dollar', 'pesapress' ),
		'SHP' => __( 'SHP - Saint Helenian Pound*', 'pesapress' ),
		'SLL' => __( 'SLL - Sierra Leonean Leone', 'pesapress' ),
		'SOS' => __( 'SOS - Somali Shilling', 'pesapress' ),
		'SRD' => __( 'SRD - Surinamese Dollar*', 'pesapress' ),
		'STD' => __( 'STD - São Tomé and Príncipe Dobra', 'pesapress' ),
		'SVC' => __( 'SVC - Salvadoran Colón*', 'pesapress' ),
		'SZL' => __( 'SZL - Swazi Lilangeni', 'pesapress' ),
		'THB' => __( 'THB - Thai Baht', 'pesapress' ),
		'TJS' => __( 'TJS - Tajikistani Somoni', 'pesapress' ),
		'TOP' => __( 'TOP - Tongan Paʻanga', 'pesapress' ),
		'TRY' => __( 'TRY - Turkish Lira', 'pesapress' ),
		'TTD' => __( 'TTD - Trinidad and Tobago Dollar', 'pesapress' ),
		'TWD' => __( 'TWD - New Taiwan Dollar', 'pesapress' ),
		'TZS' => __( 'TZS - Tanzanian Shilling', 'pesapress' ),
		'UAH' => __( 'UAH - Ukrainian Hryvnia', 'pesapress' ),
		'UGX' => __( 'UGX - Ugandan Shilling', 'pesapress' ),
		'USD' => __( 'USD - United States Dollar', 'pesapress' ),
		'UYI' => __( 'UYI - Uruguayan Peso*', 'pesapress' ),
		'UZS' => __( 'UZS - Uzbekistani Som', 'pesapress' ),
		'VEF' => __( 'VEF - Venezuelan Bolívar*', 'pesapress' ),
		'VND' => __( 'VND - Vietnamese Đồng', 'pesapress' ),
		'VUV' => __( 'VUV - Vanuatu Vatu', 'pesapress' ),
		'WST' => __( 'WST - Samoan Tala', 'pesapress' ),
		'XAF' => __( 'XAF - Central African Cfa Franc', 'pesapress' ),
		'XCD' => __( 'XCD - East Caribbean Dollar', 'pesapress' ),
		'XOF' => __( 'XOF - West African Cfa Franc*', 'pesapress' ),
		'XPF' => __( 'XPF - Cfp Franc*', 'pesapress' ),
		'YER' => __( 'YER - Yemeni Rial', 'pesapress' ),
		'ZAR' => __( 'ZAR - South African Rand', 'pesapress' ),
		'ZMW' => __( 'ZMW - Zambian Kwacha', 'pesapress' ),
	)
);

// Use https://www.branah.com/unicode-converter (UTF-8 (Example: \x61 \xe4\xb8\xad \xd0\xaf))

$this->currencies = apply_filters(
	'pesapress_currencies',
	array(
		'ALL' => array( 'Albania, Leke', '4c, 65, 6b' ),
		'AFN' => array( 'Afghanistan, Afghanis', '60b' ),
		'ARS' => array( 'Argentina, Pesos', '24' ),
		'AWG' => array( 'Aruba, Guilders (also called Florins)', '192' ),
		'AUD' => array( 'Australia, Dollars', '24' ),
		'AZN' => array( 'Azerbaijan, New Manats', '43c, 430, 43d' ),
		'BHD' => array( 'Bahrain, Dinars', '2e, 62f, 2e, 628' ),
		'BSD' => array( 'Bahamas, Dollars', '24' ),
		'BBD' => array( 'Barbados, Dollars', '24' ),
		'BYR' => array( 'Belarus, Rubles', '70, 2e' ),
		'BZD' => array( 'Belize, Dollars', '42, 5a, 24' ),
		'BMD' => array( 'Bermuda, Dollars', '24' ),
		'BOB' => array( 'Bolivia, Bolivianos', '24, 62' ),
		'BAM' => array( 'Bosnia and Herzegovina, Convertible Marka', '4b, 4d' ),
		'BWP' => array( 'Botswana, Pulas', '50' ),
		'BGN' => array( 'Bulgaria, Leva', '43b, 432' ),
		'BRL' => array( 'Brazil, Reais', '52, 24' ),
		'BND' => array( 'Brunei Darussalam, Dollars', '24' ),
		'KHR' => array( 'Cambodia, Riels', '17db' ),
		'CAD' => array( 'Canada, Dollars', '24' ),
		'KYD' => array( 'Cayman Islands, Dollars', '24' ),
		'CLP' => array( 'Chile, Pesos', '24' ),
		'CNY' => array( 'China, Yuan Renminbi', 'a5' ),
		'COP' => array( 'Colombia, Pesos', '24' ),
		'CRC' => array( 'Costa Rica, Colon', '20a1' ),
		'HRK' => array( 'Croatia, Kuna', '6b, 6e' ),
		'CUP' => array( 'Cuba, Pesos', '20b1' ),
		'CZK' => array( 'Czech Republic, Koruny', '4b, 10d' ),
		'DKK' => array( 'Denmark, Kroner', '6b, 72' ),
		'DOP' => array( 'Dominican Republic, Pesos', '52, 44, 24' ),
		'XCD' => array( 'East Caribbean, Dollars', '24' ),
		'EGP' => array( 'Egypt, Pounds', '45, 47, 50' ),
		'SVC' => array( 'El Salvador, Colones', '24' ),
		'EEK' => array( 'Estonia, Krooni', '6b, 72' ),
		'EUR' => array( 'Euro', '20ac' ),
		'FKP' => array( 'Falkland Islands, Pounds', 'a3' ),
		'FJD' => array( 'Fiji, Dollars', '24' ),
		'GEL' => array( 'Georgia, Lari', '6c, 61, 72, 69' ),
		'GHC' => array( 'Ghana, Cedis', 'a2' ),
		'GIP' => array( 'Gibraltar, Pounds', 'a3' ),
		'GTQ' => array( 'Guatemala, Quetzales', '51' ),
		'GGP' => array( 'Guernsey, Pounds', 'a3' ),
		'GYD' => array( 'Guyana, Dollars', '24' ),
		'HNL' => array( 'Honduras, Lempiras', '4c' ),
		'HKD' => array( 'Hong Kong, Dollars', '24' ),
		'HUF' => array( 'Hungary, Forint', '46, 74' ),
		'ISK' => array( 'Iceland, Kronur', '6b, 72' ),
		'INR' => array( 'India, Rupees', '20a8' ),
		'IDR' => array( 'Indonesia, Rupiahs', '52, 70' ),
		'IRR' => array( 'Iran, Rials', 'fdfc' ),
		'IMP' => array( 'Isle of Man, Pounds', 'a3' ),
		'ILS' => array( 'Israel, New Shekels', '20aa' ),
		'JMD' => array( 'Jamaica, Dollars', '4a, 24' ),
		'JPY' => array( 'Japan, Yen', 'a5' ),
		'JEP' => array( 'Jersey, Pounds', 'a3' ),
		'KZT' => array( 'Kazakhstan, Tenge', '43b, 432' ),
		'KES' => array( 'Kenyan Shilling', '4B, 73, 68, 73' ),
		'KWD' => array( 'Kuwait, Dinar', '4B, 2E, 44, 2E' ),
		'KGS' => array( 'Kyrgyzstan, Soms', '43b, 432' ),
		'LAK' => array( 'Laos, Kips', '20ad' ),
		'LVL' => array( 'Latvia, Lati', '4c, 73' ),
		'LBP' => array( 'Lebanon, Pounds', 'a3' ),
		'LRD' => array( 'Liberia, Dollars', '24' ),
		'LTL' => array( 'Lithuania, Litai', '4c, 74' ),
		'MKD' => array( 'Macedonia, Denars', '434, 435, 43d' ),
		'MYR' => array( 'Malaysia, Ringgits', '52, 4d' ),
		'MUR' => array( 'Mauritius, Rupees', '20a8' ),
		'MXN' => array( 'Mexico, Pesos', '24' ),
		'MNT' => array( 'Mongolia, Tugriks', '20ae' ),
		'MAD' => array( 'Morocco, Dirhams', '64, 68' ),
		'MZN' => array( 'Mozambique, Meticais', '4d, 54' ),
		'NAD' => array( 'Namibia, Dollars', '24' ),
		'NPR' => array( 'Nepal, Rupees', '20a8' ),
		'ANG' => array( 'Netherlands Antilles, Guilders (also called Florins)', '192' ),
		'NZD' => array( 'New Zealand, Dollars', '24' ),
		'NIO' => array( 'Nicaragua, Cordobas', '43, 24' ),
		'NGN' => array( 'Nigeria, Nairas', '20a6' ),
		'KPW' => array( 'North Korea, Won', '20a9' ),
		'NOK' => array( 'Norway, Krone', '6b, 72' ),
		'OMR' => array( 'Oman, Rials', 'fdfc' ),
		'PKR' => array( 'Pakistan, Rupees', '20a8' ),
		'PAB' => array( 'Panama, Balboa', '42, 2f, 2e' ),
		'PYG' => array( 'Paraguay, Guarani', '47, 73' ),
		'PEN' => array( 'Peru, Nuevos Soles', '53, 2f, 2e' ),
		'PHP' => array( 'Philippines, Pesos', '50, 68, 70' ),
		'PLN' => array( 'Poland, Zlotych', '7a, 142' ),
		'QAR' => array( 'Qatar, Rials', 'fdfc' ),
		'RON' => array( 'Romania, New Lei', '6c, 65, 69' ),
		'RUB' => array( 'Russia, Rubles', '440, 443, 431' ),
		'SHP' => array( 'Saint Helena, Pounds', 'a3' ),
		'SAR' => array( 'Saudi Arabia, Riyals', 'fdfc' ),
		'RSD' => array( 'Serbia, Dinars', '414, 438, 43d, 2e' ),
		'SCR' => array( 'Seychelles, Rupees', '20a8' ),
		'SGD' => array( 'Singapore, Dollars', '24' ),
		'SBD' => array( 'Solomon Islands, Dollars', '24' ),
		'SOS' => array( 'Somalia, Shillings', '53' ),
		'ZAR' => array( 'South Africa, Rand', '52' ),
		'KRW' => array( 'South Korea, Won', '20a9' ),
		'LKR' => array( 'Sri Lanka, Rupees', '20a8' ),
		'SEK' => array( 'Sweden, Kronor', '6b, 72' ),
		'CHF' => array( 'Switzerland, Francs', '43, 48, 46' ),
		'SRD' => array( 'Suriname, Dollars', '24' ),
		'SYP' => array( 'Syria, Pounds', 'a3' ),
		'TWD' => array( 'Taiwan, New Dollars', '4e, 54, 24' ),
		'TZS' => array( 'Tanzanian Shilling', '54, 73, 68, 73' ),
		'THB' => array( 'Thailand, Baht', 'e3f' ),
		'TTD' => array( 'Trinidad and Tobago, Dollars', '54, 54, 24' ),
		'TRY' => array( 'Turkey, Liras', '20a4' ),
		'TVD' => array( 'Tuvalu, Dollars', '24' ),
		'UGX' => array( 'Ugandan Shilling', '55, 47, 58' ),
		'UAH' => array( 'Ukraine, Hryvnia', '20b4' ),
		'AED' => array( 'United Arab Emirates, Dirhams', '64, 68' ),
		'GBP' => array( 'United Kingdom, Pounds', 'a3' ),
		'USD' => array( 'United States of America, Dollars', '24' ),
		'UYU' => array( 'Uruguay, Pesos', '24, 55' ),
		'UZS' => array( 'Uzbekistan, Sums', '43b, 432' ),
		'VEF' => array( 'Venezuela, Bolivares Fuertes', '42, 73' ),
		'VND' => array( 'Vietnam, Dong', '20ab' ),
		'XAF' => array( 'BEAC, CFA Francs', '46, 43, 46, 41' ),
		'XOF' => array( 'BCEAO, CFA Francs', '46, 43, 46, 41' ),
		'YER' => array( 'Yemen, Rials', 'fdfc' ),
		'ZWD' => array( 'Zimbabwe, Zimbabwe Dollars', '5a, 24' ),
	)
);

