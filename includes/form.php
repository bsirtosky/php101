<?php

function form_get_data($form_fields, $request) {
    $return_value = array();
<<<<<<< HEAD
    
=======

>>>>>>> ce8c39d1871dde3e4f18ccbd216eb5d091d95dbf
    foreach ($form_fields as $field_name) {
        $return_value[$field_name] = isset($request[$field_name]) ? $request[$field_name] : '';
    }

    return $return_value;
}

function form_is_valid($form, $required_fields) {
    $valid = true;
<<<<<<< HEAD
=======

>>>>>>> ce8c39d1871dde3e4f18ccbd216eb5d091d95dbf
    foreach ($required_fields as $field_name) {
        if ($form[$field_name] === '') {
            $valid = false;
            break;
<<<<<<< HEAD
        }   
    }
}

?>
=======
        }
    }

    return $valid;
}
>>>>>>> ce8c39d1871dde3e4f18ccbd216eb5d091d95dbf
