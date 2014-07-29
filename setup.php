<?php

function squirrelmail_plugin_init_set_servers() {

   global $squirrelmail_plugin_hooks;

   $squirrelmail_plugin_hooks['prefs_backend']['set_servers'] = 'set_servers';

}

function set_servers() {

    include_once(SM_PATH . 'plugins/set_servers/functions.php');
    return set_servers_do();

}
