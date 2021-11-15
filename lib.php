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
 * Library of functions and constants for module group activity
 *
 * @package mod_groupactivity
 * @copyright  2021 Brain Station 23 LTD.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;


/** GROUPACTIVITY_MAX_NAME_LENGTH = 50 */
define("GROUPACTIVITY_MAX_NAME_LENGTH", 50);

/**
 * @uses GROUPACTIVITY_MAX_NAME_LENGTH
 * @param object $groupactivity
 * @return string
 */
function get_groupactivity_name($groupactivity) {
    $name = strip_tags(format_string($groupactivity->intro,true));
    if (core_text::strlen($name) > GROUPACTIVITY_MAX_NAME_LENGTH) {
        $name = core_text::substr($name, 0, GROUPACTIVITY_MAX_NAME_LENGTH)."...";
    }

    if (empty($name)) {
        // arbitrary name
        $name = get_string('modulename','groupactivity');
    }

    return $name;
}


/**
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will create a new instance and return the id number
 * of the new instance.
 *
 * @global object
 * @param object $groupactivity
 * @return bool|int
 */
function groupactivity_add_instance(object $groupactivity) {
    global $DB;

    $groupactivity->name = get_groupactivity_name($groupactivity);
    $groupactivity->timemodified = time();

    $id = $DB->insert_record("groupactivity", $groupactivity);

    $completiontimeexpected = !empty($groupactivity->completionexpected) ? $groupactivity->completionexpected : null;
    \core_completion\api::update_completion_date_event($groupactivity->coursemodule, 'groupactivity', $id, $completiontimeexpected);

    return $id;
}

/**
 * Given an object containing all the necessary data,
 * (defined by the form in mod_form.php) this function
 * will update an existing instance with new data.
 *
 * @global object
 * @param object $groupactivity
 * @return bool
 */
function groupactivity_update_instance(object $groupactivity) {
//    global $DB;
//
//    $label->name = get_label_name($label);
//    $label->timemodified = time();
//    $label->id = $label->instance;
//
//    $completiontimeexpected = !empty($label->completionexpected) ? $label->completionexpected : null;
//    \core_completion\api::update_completion_date_event($label->coursemodule, 'label', $label->id, $completiontimeexpected);
//
//    return $DB->update_record("label", $label);
}

/**
 * Given an ID of an instance of this module,
 * this function will permanently delete the instance
 * and any data that depends on it.
 *
 * @global object
 * @param int $id
 * @return bool
 */
function groupactivity_delete_instance($id) {
//    global $DB;
//
//    if (! $label = $DB->get_record("label", array("id"=>$id))) {
//        return false;
//    }
//
//    $result = true;
//
//    $cm = get_coursemodule_from_instance('label', $id);
//    \core_completion\api::update_completion_date_event($cm->id, 'label', $label->id, null);
//
//    if (! $DB->delete_records("label", array("id"=>$label->id))) {
//        $result = false;
//    }
//
//    return $result;
}

/**
 * Find the active activity list from moodle mod.
 *
 * @param null
 * @return array
 */
function groupactivity_list() {
    $availabletypes = get_module_types_names();
    foreach ($availabletypes as $module => $name) {
        if (plugin_supports('mod', $module, FEATURE_NO_VIEW_LINK, false)) {
            unset($availabletypes[$module]);
        }
    }
    return $availabletypes;
}



////include groupactivity_view_form.php
//require_once(__DIR__ .'/groupactivity_view_form.php');
//
////Instantiate simplehtml_form
//$mform = new groupactivity_view_form();
//
////Form processing and displaying is done here
//if ($mform->is_cancelled()) {
//    //Handle form cancel operation, if cancel button is present on form
//} else if ($fromform = $mform->get_data()) {
//    //In this case you process validated data. $mform->get_data() returns data posted in form.
//} else {
//    // this branch is executed if the form is submitted but the data doesn't validate and the form should be redisplayed
//    // or on the first display of the form.
//
//    //Set default data (if any)
////    $mform->set_data($toform);
//    //displays the form
//    $mform->display();
//}
//
