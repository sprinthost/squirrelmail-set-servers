<?php

function set_servers_do() {

    if (isset($_POST['imap_server']) && !isset($_SESSION['imap_server'])) {
        $_SESSION['imap_server'] = $_POST['imap_server'];
    }

    $server_imap = $_SESSION['imap_server'];
    $server_smtp = preg_replace('/^(\S*)\.(.*)/U', 'smtp.\\2', $server_imap);

    global $imapServerAddress;
    global $smtpServerAddress;

    $imapServerAddress = $server_imap;
    $smtpServerAddress = $server_smtp;

    return;

}
