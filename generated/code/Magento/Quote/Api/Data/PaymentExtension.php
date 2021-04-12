<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\PaymentInterface
 */
class PaymentExtension extends \Magento\Framework\Api\AbstractSimpleObject implements PaymentExtensionInterface
{
    /**
     * @return string[]|null
     */
    public function getAgreementIds()
    {
        return $this->_get('agreement_ids');
    }

    /**
     * @param string[] $agreementIds
     * @return $this
     */
    public function setAgreementIds($agreementIds)
    {
        $this->setData('agreement_ids', $agreementIds);
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getRokanthemesOpc()
    {
        return $this->_get('rokanthemes_opc');
    }

    /**
     * @param string[] $rokanthemesOpc
     * @return $this
     */
    public function setRokanthemesOpc($rokanthemesOpc)
    {
        $this->setData('rokanthemes_opc', $rokanthemesOpc);
        return $this;
    }
}
