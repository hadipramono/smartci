<?php  

namespace App\Libraries;

/**
 * Smartci Class
 *
 * @package        CodeIgniter
 * @subpackage     Libraries
 * @category       Smarty
 * @author         Hadi Pramono
 * @link           https://github.com/hadipramono
 */

require_once( APPPATH.'/ThirdParty/smarty/libs/Autoloader.php' );

use \Smarty_Autoloader;

Smarty_Autoloader::register();

use \Smarty;

class Smartci extends Smarty {

    public function __construct()
    {
        parent::__construct();
       
        parent::setTemplateDir(APPPATH . 'Views/');
        parent::setCompileDir(WRITEPATH . 'smarty/templates_c/')->setCacheDir(WRITEPATH . 'smarty/cache/');
       
    }

    public function view($tpl_name, $data=array()) {
        foreach ($data as $variable=>$value) {
            parent::assign($variable, $value);
        }

        if (substr($tpl_name, -4) != '.htm'){
            $tpl_name.='.htm';
        }

        parent::display($tpl_name);
    }
}