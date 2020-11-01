<?php

include_once  __DIR__ . "../src/tcmeeting/classb.php";
include_once __DIR__ . "../src/tcmeeting/classa.php";

use tcmeeting\classa;
use tcmeeting\classb;

(new classa())->say();
(new classb())->say();
