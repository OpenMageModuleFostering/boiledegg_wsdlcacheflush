<?php

class BoiledEgg_WsdlCacheFlush_FlushController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{
		foreach (glob(ini_get('soap.wsdl_cache_dir') . DS . "wsdl-*") as $filename) {
			@unlink($filename);
		}
		Mage::getSingleton('adminhtml/session')->addSuccess('WSDL cache flushed');
		return $this->_redirect('adminhtml/cache/index');
	}
}