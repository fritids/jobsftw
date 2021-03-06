<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Api;

/**
 * Formats manager
 */
class FormatManager
{
    private static $_instance = null;

    /**
     * Instances of formatter objects
     *
     * @var array $_format_objects
     */
    private $_format_objects =  array();

    /**
     * Available mime types. Each key in array is mime type name, value - format name
     *
     * @var array $_available_mime_types
     */
    private $_available_mime_types = array();

    public static function instance()
    {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Initiste static instance of class
     *
     * @param  array         $formats Formats will be used
     * @return FormatManager
     */
    public static function initiate($formats)
    {
        $manager = self::instance();
        $manager->loadFormatters($formats);

        return $manager;
    }

    /**
     * Initiate FormatsManager by creating format objets
     *
     * @return FormatManager
     */
    private function __construct() {}

    /**
     * Loads format obejcts and fill available mime types
     *
     * @param  array $formats Formats will be used
     * @return void
     */
    public function loadFormatters($formats)
    {
        foreach ($formats as $format_name) {
            $class_name = $this->_getFormatterClassName($format_name);

            if (class_exists($class_name)) {
                $this->_format_objects[$format_name] = new $class_name;

                $mime_types = $this->_format_objects[$format_name]->getMimetypes();

                if (is_array($mime_types)) {
                    foreach ($mime_types as $mime_type) {
                        $this->_available_mime_types[$mime_type] = $format_name;
                    }
                } else {
                    $this->_available_mime_types[$mime_types] = $format_name;
                }
            }
        }
    }

    private function _getFormatterClassName($format_name)
    {
        return 'Tygh\\Api\\Formats\\' . ucfirst($format_name);
    }

    /**
     * Encodes $data in the format described by $mime_type
     *
     * @param  array       $data      Data to encode
     * @param  string      $mime_type HTTP mime type
     * @return string|bool Encoded data on success, false otherwise
     */
    public function encode($data, $mime_type)
    {
        if ($this->isMimeTypeSupported($mime_type)) {
            $format_name = $this->_available_mime_types[$mime_type];

            return $this->_format_objects[$format_name]->encode($data);
        }

        return false;
    }

    /**
     * Decodes $data from the format described by $mime_type
     *
     * @param  string     $data      Data to decode
     * @param  string     $mime_type HTTP mime type
     * @return array|bool Decoded data on success, false otherwise
     */
    public function decode($data, $mime_type)
    {
        if ($this->isMimeTypeSupported($mime_type)) {
            $format_name = $this->_available_mime_types[$mime_type];

            return $this->_format_objects[$format_name]->decode($data);
        }

        return false;
    }

    public function isMimeTypeSupported($mime_type)
    {
        return isset($this->_available_mime_types[$mime_type]);
    }
}
