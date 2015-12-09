<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * calendar.php
 *
 * @package    ilios
 * @copyright  &copy; 2014 The Regents of the University of California
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Carson Tam (carson.tam@ucsf.edu), UC San Francisco
 *
 */

require_once('../../config.php');

$moodle_header = strtolower(optional_param('moodle_header', 'false', PARAM_TEXT));

if ($moodle_header == 'true' or $moodle_header == 'yes') {
    $strcalendar = get_string('ilioscalendartitle', 'block_ilios');
    $urlcalendar = new moodle_url("/blocks/ilios/". basename(__FILE__));

    $context = context_system::instance();

    $PAGE->set_context($context);
    $PAGE->set_url($urlcalendar);
    $PAGE->set_pagelayout('base');
    $PAGE->navbar->add($strcalendar);
    $PAGE->set_title($SITE->fullname.": ". $strcalendar);
    $PAGE->set_heading($SITE->fullname);

    echo $OUTPUT->header();
} else {
?><!doctype html>
<html>
<head>
    <base href="/" />
<?php } ?>
<meta name="ilios-embeded/config/environment" content="%7B%22modulePrefix%22%3A%22ilios-embeded%22%2C%22environment%22%3A%22staging%22%2C%22baseURL%22%3A%22/%22%2C%22locationType%22%3A%22none%22%2C%22contentSecurityPolicy%22%3A%7B%22default-src%22%3A%22%27none%27%22%2C%22script-src%22%3A%22%27self%27%20%27unsafe-eval%27%22%2C%22font-src%22%3A%22%27self%27%22%2C%22connect-src%22%3A%22%27self%27%20*.ucsf.edu%22%2C%22img-src%22%3A%22%27self%27%20data%3A%22%2C%22style-src%22%3A%22%27self%27%20%27unsafe-inline%27%22%2C%22media-src%22%3A%22%27self%27%22%2C%22frame-src%22%3A%22*.ucsf.edu%22%7D%2C%22EmberENV%22%3A%7B%22FEATURES%22%3A%7B%7D%7D%2C%22APP%22%3A%7B%22name%22%3A%22ilios-embeded%22%2C%22version%22%3A%220.5.0+d1247846%22%7D%2C%22contentSecurityPolicyHeader%22%3A%22Content-Security-Policy-Report-Only%22%2C%22something%22%3A%22test%22%2C%22ember-cli-mirage%22%3A%7B%22usingProxy%22%3Afalse%7D%2C%22exportApplicationGlobal%22%3Atrue%7D" />
​<link rel="stylesheet" href="https://d2nbojx0v8u7e9.cloudfront.net/assets/vendor-e593389fd90b5a6139629fcf29f1e431.css">
<link rel="stylesheet" href="https://d2nbojx0v8u7e9.cloudfront.net/assets/ilios-embeded-d41d8cd98f00b204e9800998ecf8427e.css">
​<?php if ($moodle_header != 'true' and !$moodle_header != 'yes') { ?>
</head>
<body>
<?php } ?>
<div id='ilios-embedded-calendar-app'></div>
<script src="https://d2nbojx0v8u7e9.cloudfront.net/assets/vendor-c1acfc0316b033be446435e6dce28c4c.js"></script>
<script src="https://d2nbojx0v8u7e9.cloudfront.net/assets/ilios-embeded-76413dcc18917f3320bdea9be7c7187a.js"></script>
<?php
if ($moodle_header == 'true' or $moodle_header == 'yes') {
    echo $OUTPUT->footer();
} else {
?>
</body>
</html>
<?php }
