<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace GPBMetadata\Google\Cloud\Oslogin\V1;

class Oslogin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Oslogin\Common\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9b160a25676f6f676c652f636c6f75642f6f736c6f67696e2f76312f6f736c6f67696e2e70726f746f1217676f6f676c652e636c6f75642e6f736c6f67696e2e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a28676f6f676c652f636c6f75642f6f736c6f67696e2f636f6d6d6f6e2f636f6d6d6f6e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f2298020a0c4c6f67696e50726f66696c6512110a046e616d651801200128094203e0410212410a0e706f7369785f6163636f756e747318022003280b32292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e506f7369784163636f756e7412510a0f7373685f7075626c69635f6b65797318032003280b32382e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e4c6f67696e50726f66696c652e5373685075626c69634b657973456e7472791a5f0a125373685075626c69634b657973456e747279120b0a036b657918012001280912380a0576616c756518022001280b32292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b65793a02380122560a1944656c657465506f7369784163636f756e745265717565737412390a046e616d65180120012809422be04102fa41250a236f736c6f67696e2e676f6f676c65617069732e636f6d2f506f7369784163636f756e7422560a1944656c6574655373685075626c69634b65795265717565737412390a046e616d65180120012809422be04102fa41250a236f736c6f67696e2e676f6f676c65617069732e636f6d2f5373685075626c69634b6579227a0a164765744c6f67696e50726f66696c655265717565737412390a046e616d65180120012809422be04102fa412512236f736c6f67696e2e676f6f676c65617069732e636f6d2f506f7369784163636f756e7412120a0a70726f6a6563745f696418022001280912110a0973797374656d5f696418032001280922530a164765745373685075626c69634b65795265717565737412390a046e616d65180120012809422be04102fa41250a236f736c6f67696e2e676f6f676c65617069732e636f6d2f5373685075626c69634b657922b4010a19496d706f72745373685075626c69634b657952657175657374123b0a06706172656e74180120012809422be04102fa412512236f736c6f67696e2e676f6f676c65617069732e636f6d2f5373685075626c69634b657912460a0e7373685f7075626c69635f6b657918022001280b32292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b65794203e0410112120a0a70726f6a6563745f6964180320012809225a0a1a496d706f72745373685075626c69634b6579526573706f6e7365123c0a0d6c6f67696e5f70726f66696c6518012001280b32252e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e4c6f67696e50726f66696c6522cf010a195570646174655373685075626c69634b65795265717565737412390a046e616d65180120012809422be04102fa41250a236f736c6f67696e2e676f6f676c65617069732e636f6d2f5373685075626c69634b657912460a0e7373685f7075626c69635f6b657918022001280b32292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b65794203e04102122f0a0b7570646174655f6d61736b18032001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b32d0090a0e4f734c6f67696e53657276696365128e010a1244656c657465506f7369784163636f756e7412322e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e44656c657465506f7369784163636f756e74526571756573741a162e676f6f676c652e70726f746f6275662e456d707479222c82d3e493021f2a1d2f76312f7b6e616d653d75736572732f2a2f70726f6a656374732f2a7dda41046e616d651293010a1244656c6574655373685075626c69634b657912322e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e44656c6574655373685075626c69634b6579526571756573741a162e676f6f676c652e70726f746f6275662e456d707479223182d3e49302242a222f76312f7b6e616d653d75736572732f2a2f7373685075626c69634b6579732f2a7dda41046e616d651299010a0f4765744c6f67696e50726f66696c65122f2e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e4765744c6f67696e50726f66696c65526571756573741a252e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e4c6f67696e50726f66696c65222e82d3e4930221121f2f76312f7b6e616d653d75736572732f2a7d2f6c6f67696e50726f66696c65da41046e616d6512a0010a0f4765745373685075626c69634b6579122f2e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e4765745373685075626c69634b6579526571756573741a292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b6579223182d3e493022412222f76312f7b6e616d653d75736572732f2a2f7373685075626c69634b6579732f2a7dda41046e616d6512f9010a12496d706f72745373685075626c69634b657912322e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e496d706f72745373685075626c69634b6579526571756573741a332e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e496d706f72745373685075626c69634b6579526573706f6e7365227a82d3e493023922272f76312f7b706172656e743d75736572732f2a7d3a696d706f72745373685075626c69634b65793a0e7373685f7075626c69635f6b6579da4115706172656e742c7373685f7075626c69635f6b6579da4120706172656e742c7373685f7075626c69635f6b65792c70726f6a6563745f696412e7010a125570646174655373685075626c69634b657912322e676f6f676c652e636c6f75642e6f736c6f67696e2e76312e5570646174655373685075626c69634b6579526571756573741a292e676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b6579227282d3e493023432222f76312f7b6e616d653d75736572732f2a2f7373685075626c69634b6579732f2a7d3a0e7373685f7075626c69635f6b6579da41136e616d652c7373685f7075626c69635f6b6579da411f6e616d652c7373685f7075626c69635f6b65792c7570646174655f6d61736b1a72ca41166f736c6f67696e2e676f6f676c65617069732e636f6dd2415668747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636f6d7075746542be010a1b636f6d2e676f6f676c652e636c6f75642e6f736c6f67696e2e7631420c4f734c6f67696e50726f746f50015a3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6f736c6f67696e2f76313b6f736c6f67696eaa0217476f6f676c652e436c6f75642e4f734c6f67696e2e5631ca0217476f6f676c655c436c6f75645c4f734c6f67696e5c5631ea021a476f6f676c653a3a436c6f75643a3a4f734c6f67696e3a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

