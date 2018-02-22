<?php
function sanitizeString($var)
{
    $var= stripslashes($var);
    $var= strip_tags($var);
    $var= htmlentities($var);
    return $var;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

