<?php

require_once 'Database';
require_once 'SQliteHandler';

$db = new Database;

$db->handel(new SQliteHandler());