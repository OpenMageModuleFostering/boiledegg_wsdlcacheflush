<?php
class BoiledEgg_WsdlCacheFlush_Block_Flush extends Mage_Adminhtml_Block_Template
{
	public function getFlushWsdlCacheUrl()
	{
		return Mage::helper('adminhtml')->getUrl('wsdlcache/flush/index');
	}
}