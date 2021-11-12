<?php

    function splitName($name)
    {
        $name = trim($name);
        $name_Arr = explode(" ", $name);
        $first_name = $name_Arr[0];
        $last_name = $name_Arr[1];

        return array($first_name, $last_name);

    }
