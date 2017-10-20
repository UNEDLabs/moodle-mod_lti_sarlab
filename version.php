<?php
// This file is part of the Moodle sub-plugin "LTI Sarlab"
//
// LTI Sarlab is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// LTI Sarlab is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.
//
// LTI Sarlab has been developed by:
// - Luis de la Torre: ldelatorre@dia.uned.es
//
// at the Computer Science and Automatic Control, Spanish Open University
// (UNED), Madrid, Spain.

/**
 * Version file for the LTI Sarlab sub-plugin
 *
 * @package    mod_lti_sarlab
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2017102000;    // The current module version (Date: YYYYMMDDXX).
$plugin->requires  = 2016112900;    // Requires this Moodle version.
$plugin->component = 'ltisource_sarlab';     // Full name of the plugin (used for diagnostics).
$plugin->cron      = 0;