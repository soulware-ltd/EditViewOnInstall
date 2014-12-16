<?php
/*
 * EditViewOnInstal projekt, Soulware Zrt.
 * Spendel Péter <spendel.peter@soulware.hu>
 * Soulware Zrt. <www.soulware.hu>
 */

namespace Soulware\EditViewOnInstall;

class viewMergeConfig {
    public $module; 
    public $sourcefile; // string
    public $type; //  
    public $base_class; // string
    public $method_name; // string
    public $method_remove; // boolean
    public $method_visit;
    public $insert_method; // string| prepend,append,replace
    public $original_content;  // if type replace    
    public $content;
    
    
    function __construct($module,$sourcefile,$type,$base_class,$method_name,$insert_method,$content) {
        $this->module=$module;
        $this->sourcefile=$sourcefile;
        $this->type=$type;
        $this->base_class=$base_class;
        $this->method_name=$method_name;
        $this->insert_method=$insert_method;
        $this->content=$content;
    }
}
