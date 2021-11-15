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
 * Lesson page without answers/ groupactivity
 *
 * @package mod_groupactivity
 * @copyright  2021 Brain Station 23 LTD.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 **/

defined('MOODLE_INTERNAL') || die();

/**
 * Include formslib if it has not already been included
 */

require_once($CFG->libdir.'/formslib.php');

/**
 * view form
 *
 * @copyright  2009 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 **/
class groupactivity_view_form extends moodleform {

    public function definition() {
        global $CFG;

        $mform = $this->_form; // Don't forget the underscore!

        $availabletypes = get_module_types_names();
        foreach ($availabletypes as $module => $name) {
            if (plugin_supports('mod', $module, FEATURE_NO_VIEW_LINK, false)) {
                unset($availabletypes[$module]);
            }
        }
        $select = $mform->addElement('select', 'gact', get_string('activityselector', 'groupactivity'), groupactivity_list());
        $select->setMultiple(true);

        $this->standard_coursemodule_elements();

        $this->add_action_buttons();
    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}