<?php

class Solwin_GoogleLangTranslator_Model_System_Config_Source_Layout {

    public function toOptionArray() {
        $layouts = array(
            array('label' => '----------Select a Layout for Dropdown-----------', 'value' => '0'),
            array('label' => 'Simple Layout', 'value' => 'SIMPLE'),
            array('label' => 'Verticle Layout', 'value' => 'VERTICLE'),
            array('label' => 'Horizontal Layout', 'value' => 'HORIZONTAL'),
        );
        return $layouts;
    }

}
