<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\PaymentInterface
 */
interface PaymentExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string[]|null
     */
    public function getAgreementIds();

    /**
     * @param string[] $agreementIds
     * @return $this
     */
    public function setAgreementIds($agreementIds);

    /**
     * @return string[]|null
     */
    public function getRokanthemesOpc();

    /**
     * @param string[] $rokanthemesOpc
     * @return $this
     */
    public function setRokanthemesOpc($rokanthemesOpc);
}
