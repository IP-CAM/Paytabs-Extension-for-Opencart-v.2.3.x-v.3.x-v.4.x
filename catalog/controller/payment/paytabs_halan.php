<?php

namespace Opencart\Catalog\Controller\Extension\Paytabs\Payment;

require_once DIR_EXTENSION . 'paytabs/system/library/paytabs_api.php';

use Opencart\System\Library\PaytabsCatalogController;

class PaytabsHalan extends PaytabsCatalogController
{
	public $_code = 'halan';
}
