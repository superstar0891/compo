<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_items.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class DataItems
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Geometry::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Temporal::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextSegment::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af40f0a2c676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f646174615f6974656d732e70726f746f121b676f6f676c652e636c6f75642e6175746f6d6c2e763162657461311a24676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f696f2e70726f746f1a2a676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f74656d706f72616c2e70726f746f1a2e676f6f676c652f636c6f75642f6175746f6d6c2f763162657461312f746578745f7365676d656e742e70726f746f1a19676f6f676c652f70726f746f6275662f616e792e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1c676f6f676c652f70726f746f6275662f7374727563742e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f227f0a05496d61676512150a0b696d6167655f627974657318012001280c480012400a0c696e7075745f636f6e66696718062001280b32282e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e496e707574436f6e666967480012150a0d7468756d626e61696c5f75726918042001280942060a046461746122460a0b54657874536e6970706574120f0a07636f6e74656e7418012001280912110a096d696d655f7479706518022001280912130a0b636f6e74656e745f75726918042001280922ef010a12446f63756d656e7444696d656e73696f6e7312530a04756e697418012001280e32452e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e7444696d656e73696f6e732e446f63756d656e7444696d656e73696f6e556e6974120d0a057769647468180220012802120e0a0668656967687418032001280222650a15446f63756d656e7444696d656e73696f6e556e697412270a23444f43554d454e545f44494d454e53494f4e5f554e49545f554e535045434946494544100012080a04494e43481001120e0a0a43454e54494d45544552100212090a05504f494e54100322f9050a08446f63756d656e7412460a0c696e7075745f636f6e66696718012001280b32302e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e74496e707574436f6e666967123f0a0d646f63756d656e745f7465787418022001280b32282e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e54657874536e6970706574123c0a066c61796f757418032003280b322c2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e742e4c61796f7574124c0a13646f63756d656e745f64696d656e73696f6e7318042001280b322f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e7444696d656e73696f6e7312120a0a706167655f636f756e741805200128051ac3030a064c61796f7574123e0a0c746578745f7365676d656e7418012001280b32282e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e546578745365676d656e7412130a0b706167655f6e756d62657218022001280512400a0d626f756e64696e675f706f6c7918032001280b32292e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e426f756e64696e67506f6c7912570a11746578745f7365676d656e745f7479706518042001280e323c2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e742e4c61796f75742e546578745365676d656e745479706522c8010a0f546578745365676d656e745479706512210a1d544558545f5345474d454e545f545950455f554e535045434946494544100012090a05544f4b454e1001120d0a095041524147524150481002120e0a0a464f524d5f4649454c44100312130a0f464f524d5f4649454c445f4e414d45100412170a13464f524d5f4649454c445f434f4e54454e5453100512090a055441424c45100612100a0c5441424c455f4845414445521007120d0a095441424c455f524f571008120e0a0a5441424c455f43454c4c100922460a03526f7712170a0f636f6c756d6e5f737065635f69647318022003280912260a0676616c75657318032003280b32162e676f6f676c652e70726f746f6275662e56616c756522fe010a0e4578616d706c655061796c6f616412330a05696d61676518012001280b32222e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e496d616765480012400a0c746578745f736e697070657418022001280b32282e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e54657874536e6970706574480012390a08646f63756d656e7418042001280b32252e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e446f63756d656e744800122f0a03726f7718032001280b32202e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e526f77480042090a077061796c6f616442a5010a1f636f6d2e676f6f676c652e636c6f75642e6175746f6d6c2e7631626574613150015a41676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6175746f6d6c2f763162657461313b6175746f6d6cca021b476f6f676c655c436c6f75645c4175746f4d6c5c56316265746131ea021e476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

