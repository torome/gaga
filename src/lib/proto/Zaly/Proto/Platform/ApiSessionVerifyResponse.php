<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_session_verify.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.ApiSessionVerifyResponse</code>
 */
class ApiSessionVerifyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * = rsa(randomBytesKey, siteIdPem)
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     */
    private $key = '';
    /**
     * = aes(randomBytesKey, LoginUserProfile->toBytes());
     *
     * Generated from protobuf field <code>bytes encryptedProfile = 2;</code>
     */
    private $encryptedProfile = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           = rsa(randomBytesKey, siteIdPem)
     *     @type string $encryptedProfile
     *           = aes(randomBytesKey, LoginUserProfile->toBytes());
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\ApiSessionVerify::initOnce();
        parent::__construct($data);
    }

    /**
     * = rsa(randomBytesKey, siteIdPem)
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * = rsa(randomBytesKey, siteIdPem)
     *
     * Generated from protobuf field <code>bytes key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

    /**
     * = aes(randomBytesKey, LoginUserProfile->toBytes());
     *
     * Generated from protobuf field <code>bytes encryptedProfile = 2;</code>
     * @return string
     */
    public function getEncryptedProfile()
    {
        return $this->encryptedProfile;
    }

    /**
     * = aes(randomBytesKey, LoginUserProfile->toBytes());
     *
     * Generated from protobuf field <code>bytes encryptedProfile = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptedProfile($var)
    {
        GPBUtil::checkString($var, False);
        $this->encryptedProfile = $var;

        return $this;
    }

}
