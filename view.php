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
 * Group activity module
 *
 * @package mod_groupactivity
 * @copyright  2021 Brain Station 23 LTD.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once("../../config.php");
require_once('lib.php');
//require_once($CFG->dirroot.'/mod/groupactivity/lib.php');
//
//$id      = required_param('id', PARAM_INT);             // Course Module ID
//$pageid  = optional_param('pageid', null, PARAM_INT);   // groupactivity Page ID
//$edit    = optional_param('edit', -1, PARAM_BOOL);
//$userpassword = optional_param('userpassword','',PARAM_RAW);
//$backtocourse = optional_param('backtocourse', false, PARAM_RAW);
//
//$cm = get_coursemodule_from_id('groupactivity', $id, 0, false, MUST_EXIST);
//$course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
//$groupactivity = new groupactivity($DB->get_record('groupactivity', array('id' => $cm->instance), '*', MUST_EXIST), $cm, $course);

//require_login($course, false, $cm);

//if ($backtocourse) {
//    redirect(new moodle_url('/course/view.php', array('id'=>$course->id)));
//}

// Apply overrides.
//$groupactivity->update_effective_access($USER->id);

//$url = new moodle_url('/mod/groupactivity/view.php', array('id'=>$id));
//if ($pageid !== null) {
//    $url->param('pageid', $pageid);
//}
//$PAGE->set_url($url);
//$PAGE->force_settings_menu();
//
//$context = $groupactivity->context;
//$canmanage = $groupactivity->can_manage();

//$groupactivityoutput = $PAGE->get_renderer('mod_groupactivity');
//
//$reviewmode = $groupactivity->is_in_review_mode();
//
//if ($groupactivity->usepassword && !empty($userpassword)) {
//    require_sesskey();
//}

//$id = optional_param('id',0,PARAM_INT);    // Course Module ID, or
//$l = optional_param('l',0,PARAM_INT);     // Groupactivity ID
//
//if ($id) {
//    $PAGE->set_url('/mod/groupactivity/index.php', array('id'=>$id));
//    if (! $cm = get_coursemodule_from_id('groupactivity', $id, 0, true)) {
//        print_error('invalidcoursemodule');
//    }
//
//    if (! $course = $DB->get_record("course", array("id"=>$cm->course))) {
//        print_error('coursemisconf');
//    }
//
//    if (! $groupactivity = $DB->get_record("groupactivity", array("id"=>$cm->instance))) {
//        print_error('invalidcoursemodule');
//    }
//
//} else {
//    $PAGE->set_url('/mod/groupactivity/index.php', array('l'=>$l));
//    if (! $groupactivity = $DB->get_record("groupactivity", array("id"=>$l))) {
//        print_error('invalidcoursemodule');
//    }
//    if (! $course = $DB->get_record("course", array("id"=>$groupactivity->course)) ){
//        print_error('coursemisconf');
//    }
//    if (! $cm = get_coursemodule_from_instance("groupactivity", $groupactivity->id, $course->id, true)) {
//        print_error('invalidcoursemodule');
//    }
//}
//
//require_login($course, true, $cm);
//
//$url = course_get_url($course, $cm->sectionnum, []);
//$url->set_anchor('module-' . $id);
//redirect($url);
//$id = optional_param('id', 0, PARAM_INT); // Course Module ID, or ...
//$g = optional_param('g',  0, PARAM_INT);  // Quiz ID.
//
//if ($id) {
//    if (!$cm = get_coursemodule_from_id('quiz', $id)) {
//        print_error('invalidcoursemodule');
//    }
//    if (!$course = $DB->get_record('course', array('id' => $cm->course))) {
//        print_error('coursemisconf');
//    }
//} else {
//    if (!$quiz = $DB->get_record('quiz', array('id' => $q))) {
//        print_error('invalidquizid', 'quiz');
//    }
//    if (!$course = $DB->get_record('course', array('id' => $quiz->course))) {
//        print_error('invalidcourseid');
//    }
//    if (!$cm = get_coursemodule_from_instance("quiz", $quiz->id, $course->id)) {
//        print_error('invalidcoursemodule');
//    }
//}
//$id = required_param('id', PARAM_INT);    // Course Module ID
//
//if (!$cm = get_coursemodule_from_id('groupactivity', $id)) {
//    print_error('Course Module ID was incorrect'); // NOTE this is invalid use of print_error, must be a lang string id
//}
//if (!$course = $DB->get_record('course', array('id'=> $cm->course))) {
//    print_error('course is misconfigured');  // NOTE As above
//}
//if (!$certificate = $DB->get_record('groupactivity', array('id'=> $cm->instance))) {
//    print_error('course module is incorrect'); // NOTE As above
//}

//list ($course, $cm) = get_course_and_cm_from_cmid($id, 'groupactivity');
//$groupactivity = $DB->get_record('groupactivity', array('id'=> $cm->instance), '*', MUST_EXIST);


//$result = $DB->get_records("modules", array('visible'=> 1));
//foreach($result as $record){
//
//    echo $record->name;
//    echo '<br>';
//
//}



echo $OUTPUT->header();

echo $OUTPUT->footer();


