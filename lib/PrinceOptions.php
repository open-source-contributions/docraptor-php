<?php
/**
 * PrinceOptions
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  DocRaptor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DocRaptor
 *
 * A native client library for the DocRaptor HTML to PDF/XLS service.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocRaptor;

use \ArrayAccess;
use \DocRaptor\ObjectSerializer;

/**
 * PrinceOptions Class Doc Comment
 *
 * @category Class
 * @package  DocRaptor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrinceOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrinceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'baseurl' => 'string',
        'no_xinclude' => 'bool',
        'no_network' => 'bool',
        'no_parallel_downloads' => 'bool',
        'http_user' => 'string',
        'http_password' => 'string',
        'http_proxy' => 'string',
        'http_timeout' => 'int',
        'insecure' => 'bool',
        'media' => 'string',
        'no_author_style' => 'bool',
        'no_default_style' => 'bool',
        'no_embed_fonts' => 'bool',
        'no_subset_fonts' => 'bool',
        'no_compress' => 'bool',
        'encrypt' => 'bool',
        'key_bits' => 'int',
        'user_password' => 'string',
        'owner_password' => 'string',
        'disallow_print' => 'bool',
        'disallow_copy' => 'bool',
        'disallow_annotate' => 'bool',
        'disallow_modify' => 'bool',
        'debug' => 'bool',
        'input' => 'string',
        'version' => 'string',
        'javascript' => 'bool',
        'css_dpi' => 'int',
        'profile' => 'string',
        'pdf_title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'baseurl' => null,
        'no_xinclude' => null,
        'no_network' => null,
        'no_parallel_downloads' => null,
        'http_user' => null,
        'http_password' => null,
        'http_proxy' => null,
        'http_timeout' => null,
        'insecure' => null,
        'media' => null,
        'no_author_style' => null,
        'no_default_style' => null,
        'no_embed_fonts' => null,
        'no_subset_fonts' => null,
        'no_compress' => null,
        'encrypt' => null,
        'key_bits' => null,
        'user_password' => null,
        'owner_password' => null,
        'disallow_print' => null,
        'disallow_copy' => null,
        'disallow_annotate' => null,
        'disallow_modify' => null,
        'debug' => null,
        'input' => null,
        'version' => null,
        'javascript' => null,
        'css_dpi' => null,
        'profile' => null,
        'pdf_title' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'baseurl' => 'baseurl',
        'no_xinclude' => 'no_xinclude',
        'no_network' => 'no_network',
        'no_parallel_downloads' => 'no_parallel_downloads',
        'http_user' => 'http_user',
        'http_password' => 'http_password',
        'http_proxy' => 'http_proxy',
        'http_timeout' => 'http_timeout',
        'insecure' => 'insecure',
        'media' => 'media',
        'no_author_style' => 'no_author_style',
        'no_default_style' => 'no_default_style',
        'no_embed_fonts' => 'no_embed_fonts',
        'no_subset_fonts' => 'no_subset_fonts',
        'no_compress' => 'no_compress',
        'encrypt' => 'encrypt',
        'key_bits' => 'key_bits',
        'user_password' => 'user_password',
        'owner_password' => 'owner_password',
        'disallow_print' => 'disallow_print',
        'disallow_copy' => 'disallow_copy',
        'disallow_annotate' => 'disallow_annotate',
        'disallow_modify' => 'disallow_modify',
        'debug' => 'debug',
        'input' => 'input',
        'version' => 'version',
        'javascript' => 'javascript',
        'css_dpi' => 'css_dpi',
        'profile' => 'profile',
        'pdf_title' => 'pdf_title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baseurl' => 'setBaseurl',
        'no_xinclude' => 'setNoXinclude',
        'no_network' => 'setNoNetwork',
        'no_parallel_downloads' => 'setNoParallelDownloads',
        'http_user' => 'setHttpUser',
        'http_password' => 'setHttpPassword',
        'http_proxy' => 'setHttpProxy',
        'http_timeout' => 'setHttpTimeout',
        'insecure' => 'setInsecure',
        'media' => 'setMedia',
        'no_author_style' => 'setNoAuthorStyle',
        'no_default_style' => 'setNoDefaultStyle',
        'no_embed_fonts' => 'setNoEmbedFonts',
        'no_subset_fonts' => 'setNoSubsetFonts',
        'no_compress' => 'setNoCompress',
        'encrypt' => 'setEncrypt',
        'key_bits' => 'setKeyBits',
        'user_password' => 'setUserPassword',
        'owner_password' => 'setOwnerPassword',
        'disallow_print' => 'setDisallowPrint',
        'disallow_copy' => 'setDisallowCopy',
        'disallow_annotate' => 'setDisallowAnnotate',
        'disallow_modify' => 'setDisallowModify',
        'debug' => 'setDebug',
        'input' => 'setInput',
        'version' => 'setVersion',
        'javascript' => 'setJavascript',
        'css_dpi' => 'setCssDpi',
        'profile' => 'setProfile',
        'pdf_title' => 'setPdfTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baseurl' => 'getBaseurl',
        'no_xinclude' => 'getNoXinclude',
        'no_network' => 'getNoNetwork',
        'no_parallel_downloads' => 'getNoParallelDownloads',
        'http_user' => 'getHttpUser',
        'http_password' => 'getHttpPassword',
        'http_proxy' => 'getHttpProxy',
        'http_timeout' => 'getHttpTimeout',
        'insecure' => 'getInsecure',
        'media' => 'getMedia',
        'no_author_style' => 'getNoAuthorStyle',
        'no_default_style' => 'getNoDefaultStyle',
        'no_embed_fonts' => 'getNoEmbedFonts',
        'no_subset_fonts' => 'getNoSubsetFonts',
        'no_compress' => 'getNoCompress',
        'encrypt' => 'getEncrypt',
        'key_bits' => 'getKeyBits',
        'user_password' => 'getUserPassword',
        'owner_password' => 'getOwnerPassword',
        'disallow_print' => 'getDisallowPrint',
        'disallow_copy' => 'getDisallowCopy',
        'disallow_annotate' => 'getDisallowAnnotate',
        'disallow_modify' => 'getDisallowModify',
        'debug' => 'getDebug',
        'input' => 'getInput',
        'version' => 'getVersion',
        'javascript' => 'getJavascript',
        'css_dpi' => 'getCssDpi',
        'profile' => 'getProfile',
        'pdf_title' => 'getPdfTitle'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const INPUT_HTML = 'html';
    const INPUT_XML = 'xml';
    const INPUT_AUTO = 'auto';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInputAllowableValues()
    {
        return [
            self::INPUT_HTML,
            self::INPUT_XML,
            self::INPUT_AUTO,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['baseurl'] = $data['baseurl'] ?? null;
        $this->container['no_xinclude'] = $data['no_xinclude'] ?? null;
        $this->container['no_network'] = $data['no_network'] ?? null;
        $this->container['no_parallel_downloads'] = $data['no_parallel_downloads'] ?? null;
        $this->container['http_user'] = $data['http_user'] ?? null;
        $this->container['http_password'] = $data['http_password'] ?? null;
        $this->container['http_proxy'] = $data['http_proxy'] ?? null;
        $this->container['http_timeout'] = $data['http_timeout'] ?? null;
        $this->container['insecure'] = $data['insecure'] ?? null;
        $this->container['media'] = $data['media'] ?? 'print';
        $this->container['no_author_style'] = $data['no_author_style'] ?? null;
        $this->container['no_default_style'] = $data['no_default_style'] ?? null;
        $this->container['no_embed_fonts'] = $data['no_embed_fonts'] ?? null;
        $this->container['no_subset_fonts'] = $data['no_subset_fonts'] ?? null;
        $this->container['no_compress'] = $data['no_compress'] ?? null;
        $this->container['encrypt'] = $data['encrypt'] ?? null;
        $this->container['key_bits'] = $data['key_bits'] ?? null;
        $this->container['user_password'] = $data['user_password'] ?? null;
        $this->container['owner_password'] = $data['owner_password'] ?? null;
        $this->container['disallow_print'] = $data['disallow_print'] ?? null;
        $this->container['disallow_copy'] = $data['disallow_copy'] ?? null;
        $this->container['disallow_annotate'] = $data['disallow_annotate'] ?? null;
        $this->container['disallow_modify'] = $data['disallow_modify'] ?? null;
        $this->container['debug'] = $data['debug'] ?? null;
        $this->container['input'] = $data['input'] ?? 'html';
        $this->container['version'] = $data['version'] ?? null;
        $this->container['javascript'] = $data['javascript'] ?? null;
        $this->container['css_dpi'] = $data['css_dpi'] ?? null;
        $this->container['profile'] = $data['profile'] ?? null;
        $this->container['pdf_title'] = $data['pdf_title'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInputAllowableValues();
        if (!is_null($this->container['input']) && !in_array($this->container['input'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'input', must be one of '%s'",
                $this->container['input'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets baseurl
     *
     * @return string|null
     */
    public function getBaseurl()
    {
        return $this->container['baseurl'];
    }

    /**
     * Sets baseurl
     *
     * @param string|null $baseurl Set the baseurl for assets.
     *
     * @return self
     */
    public function setBaseurl($baseurl)
    {
        $this->container['baseurl'] = $baseurl;

        return $this;
    }

    /**
     * Gets no_xinclude
     *
     * @return bool|null
     */
    public function getNoXinclude()
    {
        return $this->container['no_xinclude'];
    }

    /**
     * Sets no_xinclude
     *
     * @param bool|null $no_xinclude Disable XML inclusion.
     *
     * @return self
     */
    public function setNoXinclude($no_xinclude)
    {
        $this->container['no_xinclude'] = $no_xinclude;

        return $this;
    }

    /**
     * Gets no_network
     *
     * @return bool|null
     */
    public function getNoNetwork()
    {
        return $this->container['no_network'];
    }

    /**
     * Sets no_network
     *
     * @param bool|null $no_network Disable network access.
     *
     * @return self
     */
    public function setNoNetwork($no_network)
    {
        $this->container['no_network'] = $no_network;

        return $this;
    }

    /**
     * Gets no_parallel_downloads
     *
     * @return bool|null
     */
    public function getNoParallelDownloads()
    {
        return $this->container['no_parallel_downloads'];
    }

    /**
     * Sets no_parallel_downloads
     *
     * @param bool|null $no_parallel_downloads Disables parallel fetching of assets during PDF creation. Useful if your asset host has strict rate limiting.
     *
     * @return self
     */
    public function setNoParallelDownloads($no_parallel_downloads)
    {
        $this->container['no_parallel_downloads'] = $no_parallel_downloads;

        return $this;
    }

    /**
     * Gets http_user
     *
     * @return string|null
     */
    public function getHttpUser()
    {
        return $this->container['http_user'];
    }

    /**
     * Sets http_user
     *
     * @param string|null $http_user Set the user for HTTP authentication.
     *
     * @return self
     */
    public function setHttpUser($http_user)
    {
        $this->container['http_user'] = $http_user;

        return $this;
    }

    /**
     * Gets http_password
     *
     * @return string|null
     */
    public function getHttpPassword()
    {
        return $this->container['http_password'];
    }

    /**
     * Sets http_password
     *
     * @param string|null $http_password Set the password for HTTP authentication.
     *
     * @return self
     */
    public function setHttpPassword($http_password)
    {
        $this->container['http_password'] = $http_password;

        return $this;
    }

    /**
     * Gets http_proxy
     *
     * @return string|null
     */
    public function getHttpProxy()
    {
        return $this->container['http_proxy'];
    }

    /**
     * Sets http_proxy
     *
     * @param string|null $http_proxy Set the HTTP proxy server.
     *
     * @return self
     */
    public function setHttpProxy($http_proxy)
    {
        $this->container['http_proxy'] = $http_proxy;

        return $this;
    }

    /**
     * Gets http_timeout
     *
     * @return int|null
     */
    public function getHttpTimeout()
    {
        return $this->container['http_timeout'];
    }

    /**
     * Sets http_timeout
     *
     * @param int|null $http_timeout Set the HTTP request timeout.
     *
     * @return self
     */
    public function setHttpTimeout($http_timeout)
    {
        $this->container['http_timeout'] = $http_timeout;

        return $this;
    }

    /**
     * Gets insecure
     *
     * @return bool|null
     */
    public function getInsecure()
    {
        return $this->container['insecure'];
    }

    /**
     * Sets insecure
     *
     * @param bool|null $insecure Disable SSL verification.
     *
     * @return self
     */
    public function setInsecure($insecure)
    {
        $this->container['insecure'] = $insecure;

        return $this;
    }

    /**
     * Gets media
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param string|null $media Specify the CSS media type. Defaults to \"print\" but you may want to use \"screen\" for web styles.
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets no_author_style
     *
     * @return bool|null
     */
    public function getNoAuthorStyle()
    {
        return $this->container['no_author_style'];
    }

    /**
     * Sets no_author_style
     *
     * @param bool|null $no_author_style Ignore author stylesheets.
     *
     * @return self
     */
    public function setNoAuthorStyle($no_author_style)
    {
        $this->container['no_author_style'] = $no_author_style;

        return $this;
    }

    /**
     * Gets no_default_style
     *
     * @return bool|null
     */
    public function getNoDefaultStyle()
    {
        return $this->container['no_default_style'];
    }

    /**
     * Sets no_default_style
     *
     * @param bool|null $no_default_style Ignore default stylesheets.
     *
     * @return self
     */
    public function setNoDefaultStyle($no_default_style)
    {
        $this->container['no_default_style'] = $no_default_style;

        return $this;
    }

    /**
     * Gets no_embed_fonts
     *
     * @return bool|null
     */
    public function getNoEmbedFonts()
    {
        return $this->container['no_embed_fonts'];
    }

    /**
     * Sets no_embed_fonts
     *
     * @param bool|null $no_embed_fonts Disable font embedding in PDFs.
     *
     * @return self
     */
    public function setNoEmbedFonts($no_embed_fonts)
    {
        $this->container['no_embed_fonts'] = $no_embed_fonts;

        return $this;
    }

    /**
     * Gets no_subset_fonts
     *
     * @return bool|null
     */
    public function getNoSubsetFonts()
    {
        return $this->container['no_subset_fonts'];
    }

    /**
     * Sets no_subset_fonts
     *
     * @param bool|null $no_subset_fonts Disable font subsetting in PDFs.
     *
     * @return self
     */
    public function setNoSubsetFonts($no_subset_fonts)
    {
        $this->container['no_subset_fonts'] = $no_subset_fonts;

        return $this;
    }

    /**
     * Gets no_compress
     *
     * @return bool|null
     */
    public function getNoCompress()
    {
        return $this->container['no_compress'];
    }

    /**
     * Sets no_compress
     *
     * @param bool|null $no_compress Disable PDF compression.
     *
     * @return self
     */
    public function setNoCompress($no_compress)
    {
        $this->container['no_compress'] = $no_compress;

        return $this;
    }

    /**
     * Gets encrypt
     *
     * @return bool|null
     */
    public function getEncrypt()
    {
        return $this->container['encrypt'];
    }

    /**
     * Sets encrypt
     *
     * @param bool|null $encrypt Encrypt PDF output.
     *
     * @return self
     */
    public function setEncrypt($encrypt)
    {
        $this->container['encrypt'] = $encrypt;

        return $this;
    }

    /**
     * Gets key_bits
     *
     * @return int|null
     */
    public function getKeyBits()
    {
        return $this->container['key_bits'];
    }

    /**
     * Sets key_bits
     *
     * @param int|null $key_bits Set encryption key size.
     *
     * @return self
     */
    public function setKeyBits($key_bits)
    {
        $this->container['key_bits'] = $key_bits;

        return $this;
    }

    /**
     * Gets user_password
     *
     * @return string|null
     */
    public function getUserPassword()
    {
        return $this->container['user_password'];
    }

    /**
     * Sets user_password
     *
     * @param string|null $user_password Set the PDF user password.
     *
     * @return self
     */
    public function setUserPassword($user_password)
    {
        $this->container['user_password'] = $user_password;

        return $this;
    }

    /**
     * Gets owner_password
     *
     * @return string|null
     */
    public function getOwnerPassword()
    {
        return $this->container['owner_password'];
    }

    /**
     * Sets owner_password
     *
     * @param string|null $owner_password Set the PDF owner password.
     *
     * @return self
     */
    public function setOwnerPassword($owner_password)
    {
        $this->container['owner_password'] = $owner_password;

        return $this;
    }

    /**
     * Gets disallow_print
     *
     * @return bool|null
     */
    public function getDisallowPrint()
    {
        return $this->container['disallow_print'];
    }

    /**
     * Sets disallow_print
     *
     * @param bool|null $disallow_print Disallow printing of this PDF.
     *
     * @return self
     */
    public function setDisallowPrint($disallow_print)
    {
        $this->container['disallow_print'] = $disallow_print;

        return $this;
    }

    /**
     * Gets disallow_copy
     *
     * @return bool|null
     */
    public function getDisallowCopy()
    {
        return $this->container['disallow_copy'];
    }

    /**
     * Sets disallow_copy
     *
     * @param bool|null $disallow_copy Disallow copying of this PDF.
     *
     * @return self
     */
    public function setDisallowCopy($disallow_copy)
    {
        $this->container['disallow_copy'] = $disallow_copy;

        return $this;
    }

    /**
     * Gets disallow_annotate
     *
     * @return bool|null
     */
    public function getDisallowAnnotate()
    {
        return $this->container['disallow_annotate'];
    }

    /**
     * Sets disallow_annotate
     *
     * @param bool|null $disallow_annotate Disallow annotation of this PDF.
     *
     * @return self
     */
    public function setDisallowAnnotate($disallow_annotate)
    {
        $this->container['disallow_annotate'] = $disallow_annotate;

        return $this;
    }

    /**
     * Gets disallow_modify
     *
     * @return bool|null
     */
    public function getDisallowModify()
    {
        return $this->container['disallow_modify'];
    }

    /**
     * Sets disallow_modify
     *
     * @param bool|null $disallow_modify Disallow modification of this PDF.
     *
     * @return self
     */
    public function setDisallowModify($disallow_modify)
    {
        $this->container['disallow_modify'] = $disallow_modify;

        return $this;
    }

    /**
     * Gets debug
     *
     * @return bool|null
     */
    public function getDebug()
    {
        return $this->container['debug'];
    }

    /**
     * Sets debug
     *
     * @param bool|null $debug Enable Prince debug mode.
     *
     * @return self
     */
    public function setDebug($debug)
    {
        $this->container['debug'] = $debug;

        return $this;
    }

    /**
     * Gets input
     *
     * @return string|null
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param string|null $input Specify the input format.
     *
     * @return self
     */
    public function setInput($input)
    {
        $allowedValues = $this->getInputAllowableValues();
        if (!is_null($input) && !in_array($input, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'input', must be one of '%s'",
                    $input,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Deprecated, use the appropriate `pipeline` version. Specify a specific verison of PrinceXML to use.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets javascript
     *
     * @return bool|null
     */
    public function getJavascript()
    {
        return $this->container['javascript'];
    }

    /**
     * Sets javascript
     *
     * @param bool|null $javascript Enable PrinceXML JavaScript. DocRaptor JavaScript parsing is also available elsewhere.
     *
     * @return self
     */
    public function setJavascript($javascript)
    {
        $this->container['javascript'] = $javascript;

        return $this;
    }

    /**
     * Gets css_dpi
     *
     * @return int|null
     */
    public function getCssDpi()
    {
        return $this->container['css_dpi'];
    }

    /**
     * Sets css_dpi
     *
     * @param int|null $css_dpi Set the DPI when rendering CSS. Defaults to 96 but can be set with Prince 9.0 and up.
     *
     * @return self
     */
    public function setCssDpi($css_dpi)
    {
        $this->container['css_dpi'] = $css_dpi;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string|null $profile In Prince 9.0 and up you can set the PDF profile.
     *
     * @return self
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets pdf_title
     *
     * @return string|null
     */
    public function getPdfTitle()
    {
        return $this->container['pdf_title'];
    }

    /**
     * Sets pdf_title
     *
     * @param string|null $pdf_title Specify the PDF title, part of the document's metadata.
     *
     * @return self
     */
    public function setPdfTitle($pdf_title)
    {
        $this->container['pdf_title'] = $pdf_title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


