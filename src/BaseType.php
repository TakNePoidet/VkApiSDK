<?php

namespace VkApiSDK;

abstract class BaseType {

    protected static $requiredParams = [];

    protected static $map = [];

    public static function validate($data)
    {	



        
        if (count(array_intersect_key(array_flip(static::$requiredParams), $data)) === count(static::$requiredParams)) {
            return true;
        }
        print_r(static::$requiredParams);
        // throw new Exception();
    }

    public function map($data)
    {

    	$data = (array) $data;
        

        if (!empty(static::$map['allOf'])) {

            $key = 'allOf';
            $item = static::$map['allOf'];
           
            $method = 'set' . self::toCamelCase($key);
            if ($item === true && !is_array($item)) {
                $this->$method($data[$key]);
            } elseif (is_array($item)) {

                $array = array();
                foreach ($data[$key] as $value) {
                    $array[] = $item[0]::fromResponse($data);
                }
                $this->$method($array);
            } else {
                
                $this->$method($item::fromResponse($data));
            }
        }



        foreach (static::$map as $key => $item) {
            if (isset($data[$key]) && (!is_array($data[$key]) || (is_array($data[$key]) && !empty($data[$key]))) || !empty(static::$map['response'])) {
                $method = 'set' . self::toCamelCase($key);
                if ($item === true && !is_array($item)) {


                    if(!empty(static::$map['response'])) {
                        $data_ = $data;
                    } else {
                        $data_ = $data[$key];
                    }
                    
                    $this->$method($data_);


                } elseif (is_array($item)) {
                    $array = array();
                    
                    if(!empty(static::$map['response'])) {
                        $data_ = $data;
                    } else {
                        $data_ = $data[$key];
                    }

                    foreach ($data_ as $value) {
                        $array[] = $item[0]::fromResponse($value);
                    }
                    $this->$method($array);
                } else {
                   
                    if(!empty(static::$map['response'])) {
                        $data_ = $data;
                    } else {
                        $data_ = $data[$key];
                    }
                    if (!is_string($data_) && !is_integer($data_)){
                        $this->$method($item::fromResponse($data_));
                    } else {
                         $this->$method($item::fromResponse(['val_' => $data[$key]]));
                    }
                }
            }
        }

    }

    protected static function toCamelCase($str)
    {
        return str_replace(" ", "", ucwords(str_replace("_", " ", $str)));
    }


    public static function fromResponse($data){
        if ($data === true) {
            return true;
        }


        // self::validate($data);
        $instance = new static();
        $instance->map($data);

        return $instance;
    }
}
