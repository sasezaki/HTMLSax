<?php
/**
 * StartingState searches for the start of any Diggin tag
 * @package Diggin_HTMLSax
 * @access protected
 */

namespace Diggin\HTMLSax;

class StartingState  {
    /**
     * @param Diggin_HTMLSax_StateParser subclass
     * @return StateInterface::STATE_TAG
     * @access protected
     */
    function parse($context) {
        $data = $context->scanUntilString('<');
        if ($data != '') {
            $context->handler_object_data->
            {$context->handler_method_data}($context->htmlsax, $data);
        }
        $context->IgnoreCharacter();
        return StateInterface::STATE_TAG;
    }
}