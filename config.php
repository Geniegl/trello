<?php
// See also README.md

// Where to store backups
$path = 'C:\backuptest\';

// Key from https://trello.com/1/appKey/generate
$key = 'fd62c255e0f1483d813ec07612f088b0';

// Your Trello username
$username = 'mala3';

// Your Application Token (set $key and $username only, then run the trello-backup.php to obtain your application_token to set below
$application_token = '5e8fec2cf217c00e44297b6a473cf221526adef937b20a2591032c0c5b7ef0cb';

// By default we don't backup closed boards (less clutter)
$backup_closed_boards = false;

// Backup all Trello Boards from the organizations that the user has read access to
$backup_all_organization_boards = false;

// HTTP proxy, if one is required, in the format 'host:port', e.g. 'proxy.example.com:80' or '192.168.1.254:8080'
$proxy= '';

