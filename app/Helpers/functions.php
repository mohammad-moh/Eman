<?php

    function splitName($name)
    {
        $name = trim($name);
        $name_Arr = explode(" ", $name);
        $first_name = $name_Arr[0];
        $middle_name = $name_Arr[1];
        $last_name = $name_Arr[2];

        return array($first_name,  $middle_name, $last_name);

    }
