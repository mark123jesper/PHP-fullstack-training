<?php

/*
 * EQUAL TO = ==
 * DATA TYPE AND VALUE IDENTICAL = ===
 * NOT EQUAL TO = != / <> /  !==
 * GREATER THAN = >
 * LESS THAN = <
 * GREATER THAN OR EQUAL TO = >=
 * LESS THAN OR EQUAL TO = <=
 *
 */

    //Sample 1
    //Use EQUAL TO (==) operator to check PHP version
    $php_version = 7.3;
    $php_system_version = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION;
    echo ($php_version == $php_system_version) ? "Version Matched" : "Version Does not Matched!";

