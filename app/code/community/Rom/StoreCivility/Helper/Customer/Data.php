<?php
class Rom_StoreCivility_Helper_Customer_Data extends Mage_Customer_Helper_Data
{
    /**
     * Retrieve name prefix dropdown options
     * 
     * Overwritten - mod andre
     * Allow to setup customer prefix in store scope too
     *
     * @return array|bool
     */
    public function getNamePrefixOptions($store = null)
    {
        return $this->_prepareNamePrefixSuffixOptions(
            Mage::getStoreConfig('customer/address/prefix_options_store', $store)
        );
    }
}
