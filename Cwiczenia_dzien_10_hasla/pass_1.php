<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-10-02
 * Time: 09:48
 */

$password = "Czekamnakoniec";
$options = [ 'cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM), ];
$hassesdPass = password_hash($password, PASSWORD_BCRYPT, $options);

echo $hassesdPass;
