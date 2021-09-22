<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a data source parameter with validation rules, so that
 * parameters can be rendered in the UI. These parameters are given to us by
 * supported data sources, and include all needed information for rendering
 * and validation.
 * Thus, whoever uses this api can decide to generate either generic ui,
 * or custom data source specific forms.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.DataSourceParameter</code>
 */
class DataSourceParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Parameter identifier.
     *
     * Generated from protobuf field <code>string param_id = 1;</code>
     */
    private $param_id = '';
    /**
     * Parameter display name in the user interface.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Parameter description.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Parameter type.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.DataSourceParameter.Type type = 4;</code>
     */
    private $type = 0;
    /**
     * Is parameter required.
     *
     * Generated from protobuf field <code>bool required = 5;</code>
     */
    private $required = false;
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>bool repeated = 6;</code>
     */
    private $repeated = false;
    /**
     * Regular expression which can be used for parameter validation.
     *
     * Generated from protobuf field <code>string validation_regex = 7;</code>
     */
    private $validation_regex = '';
    /**
     * All possible values for the parameter.
     *
     * Generated from protobuf field <code>repeated string allowed_values = 8;</code>
     */
    private $allowed_values;
    /**
     * For integer and double values specifies minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue min_value = 9;</code>
     */
    private $min_value = null;
    /**
     * For integer and double values specifies maxminum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_value = 10;</code>
     */
    private $max_value = null;
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.DataSourceParameter fields = 11;</code>
     */
    private $fields;
    /**
     * Description of the requirements for this field, in case the user input does
     * not fulfill the regex pattern or min/max values.
     *
     * Generated from protobuf field <code>string validation_description = 12;</code>
     */
    private $validation_description = '';
    /**
     * URL to a help document to further explain the naming requirements.
     *
     * Generated from protobuf field <code>string validation_help_url = 13;</code>
     */
    private $validation_help_url = '';
    /**
     * Cannot be changed after initial creation.
     *
     * Generated from protobuf field <code>bool immutable = 14;</code>
     */
    private $immutable = false;
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>bool recurse = 15;</code>
     */
    private $recurse = false;
    /**
     * If true, it should not be used in new transfers, and it should not be
     * visible to users.
     *
     * Generated from protobuf field <code>bool deprecated = 20;</code>
     */
    private $deprecated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $param_id
     *           Parameter identifier.
     *     @type string $display_name
     *           Parameter display name in the user interface.
     *     @type string $description
     *           Parameter description.
     *     @type int $type
     *           Parameter type.
     *     @type bool $required
     *           Is parameter required.
     *     @type bool $repeated
     *           Deprecated. This field has no effect.
     *     @type string $validation_regex
     *           Regular expression which can be used for parameter validation.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_values
     *           All possible values for the parameter.
     *     @type \Google\Protobuf\DoubleValue $min_value
     *           For integer and double values specifies minimum allowed value.
     *     @type \Google\Protobuf\DoubleValue $max_value
     *           For integer and double values specifies maxminum allowed value.
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceParameter[]|\Google\Protobuf\Internal\RepeatedField $fields
     *           Deprecated. This field has no effect.
     *     @type string $validation_description
     *           Description of the requirements for this field, in case the user input does
     *           not fulfill the regex pattern or min/max values.
     *     @type string $validation_help_url
     *           URL to a help document to further explain the naming requirements.
     *     @type bool $immutable
     *           Cannot be changed after initial creation.
     *     @type bool $recurse
     *           Deprecated. This field has no effect.
     *     @type bool $deprecated
     *           If true, it should not be used in new transfers, and it should not be
     *           visible to users.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Parameter identifier.
     *
     * Generated from protobuf field <code>string param_id = 1;</code>
     * @return string
     */
    public function getParamId()
    {
        return $this->param_id;
    }

    /**
     * Parameter identifier.
     *
     * Generated from protobuf field <code>string param_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->param_id = $var;

        return $this;
    }

    /**
     * Parameter display name in the user interface.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Parameter display name in the user interface.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Parameter description.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Parameter description.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Parameter type.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.DataSourceParameter.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Parameter type.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.datatransfer.v1.DataSourceParameter.Type type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceParameter_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Is parameter required.
     *
     * Generated from protobuf field <code>bool required = 5;</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Is parameter required.
     *
     * Generated from protobuf field <code>bool required = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>bool repeated = 6;</code>
     * @return bool
     */
    public function getRepeated()
    {
        return $this->repeated;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>bool repeated = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRepeated($var)
    {
        GPBUtil::checkBool($var);
        $this->repeated = $var;

        return $this;
    }

    /**
     * Regular expression which can be used for parameter validation.
     *
     * Generated from protobuf field <code>string validation_regex = 7;</code>
     * @return string
     */
    public function getValidationRegex()
    {
        return $this->validation_regex;
    }

    /**
     * Regular expression which can be used for parameter validation.
     *
     * Generated from protobuf field <code>string validation_regex = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setValidationRegex($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation_regex = $var;

        return $this;
    }

    /**
     * All possible values for the parameter.
     *
     * Generated from protobuf field <code>repeated string allowed_values = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedValues()
    {
        return $this->allowed_values;
    }

    /**
     * All possible values for the parameter.
     *
     * Generated from protobuf field <code>repeated string allowed_values = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_values = $arr;

        return $this;
    }

    /**
     * For integer and double values specifies minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue min_value = 9;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getMinValue()
    {
        return $this->min_value;
    }

    /**
     * Returns the unboxed value from <code>getMinValue()</code>

     * For integer and double values specifies minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue min_value = 9;</code>
     * @return float|null
     */
    public function getMinValueValue()
    {
        return $this->readWrapperValue("min_value");
    }

    /**
     * For integer and double values specifies minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue min_value = 9;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setMinValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->min_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * For integer and double values specifies minimum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue min_value = 9;</code>
     * @param float|null $var
     * @return $this
     */
    public function setMinValueValue($var)
    {
        $this->writeWrapperValue("min_value", $var);
        return $this;}

    /**
     * For integer and double values specifies maxminum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_value = 10;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getMaxValue()
    {
        return $this->max_value;
    }

    /**
     * Returns the unboxed value from <code>getMaxValue()</code>

     * For integer and double values specifies maxminum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_value = 10;</code>
     * @return float|null
     */
    public function getMaxValueValue()
    {
        return $this->readWrapperValue("max_value");
    }

    /**
     * For integer and double values specifies maxminum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_value = 10;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setMaxValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->max_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * For integer and double values specifies maxminum allowed value.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue max_value = 10;</code>
     * @param float|null $var
     * @return $this
     */
    public function setMaxValueValue($var)
    {
        $this->writeWrapperValue("max_value", $var);
        return $this;}

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.DataSourceParameter fields = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.DataSourceParameter fields = 11;</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceParameter::class);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Description of the requirements for this field, in case the user input does
     * not fulfill the regex pattern or min/max values.
     *
     * Generated from protobuf field <code>string validation_description = 12;</code>
     * @return string
     */
    public function getValidationDescription()
    {
        return $this->validation_description;
    }

    /**
     * Description of the requirements for this field, in case the user input does
     * not fulfill the regex pattern or min/max values.
     *
     * Generated from protobuf field <code>string validation_description = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setValidationDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation_description = $var;

        return $this;
    }

    /**
     * URL to a help document to further explain the naming requirements.
     *
     * Generated from protobuf field <code>string validation_help_url = 13;</code>
     * @return string
     */
    public function getValidationHelpUrl()
    {
        return $this->validation_help_url;
    }

    /**
     * URL to a help document to further explain the naming requirements.
     *
     * Generated from protobuf field <code>string validation_help_url = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setValidationHelpUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->validation_help_url = $var;

        return $this;
    }

    /**
     * Cannot be changed after initial creation.
     *
     * Generated from protobuf field <code>bool immutable = 14;</code>
     * @return bool
     */
    public function getImmutable()
    {
        return $this->immutable;
    }

    /**
     * Cannot be changed after initial creation.
     *
     * Generated from protobuf field <code>bool immutable = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setImmutable($var)
    {
        GPBUtil::checkBool($var);
        $this->immutable = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>bool recurse = 15;</code>
     * @return bool
     */
    public function getRecurse()
    {
        return $this->recurse;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>bool recurse = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecurse($var)
    {
        GPBUtil::checkBool($var);
        $this->recurse = $var;

        return $this;
    }

    /**
     * If true, it should not be used in new transfers, and it should not be
     * visible to users.
     *
     * Generated from protobuf field <code>bool deprecated = 20;</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * If true, it should not be used in new transfers, and it should not be
     * visible to users.
     *
     * Generated from protobuf field <code>bool deprecated = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;

        return $this;
    }

}

