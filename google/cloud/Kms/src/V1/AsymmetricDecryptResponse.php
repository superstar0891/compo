<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [KeyManagementService.AsymmetricDecrypt][google.cloud.kms.v1.KeyManagementService.AsymmetricDecrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.AsymmetricDecryptResponse</code>
 */
class AsymmetricDecryptResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The decrypted data originally encrypted with the matching public key.
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     */
    private $plaintext = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plaintext
     *           The decrypted data originally encrypted with the matching public key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The decrypted data originally encrypted with the matching public key.
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     * @return string
     */
    public function getPlaintext()
    {
        return $this->plaintext;
    }

    /**
     * The decrypted data originally encrypted with the matching public key.
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaintext($var)
    {
        GPBUtil::checkString($var, False);
        $this->plaintext = $var;

        return $this;
    }

}

