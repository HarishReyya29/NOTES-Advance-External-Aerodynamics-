<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>Pédagogie3: Authentication choice</title>
    <link rel="shortcut icon" href="https://pedagogie3.ec-lyon.fr/theme/image.php/boost/theme/1632463063/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Pédagogie3: Authentication choice" />
<link rel="stylesheet" type="text/css" href="https://pedagogie3.ec-lyon.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://pedagogie3.ec-lyon.fr/theme/styles.php/boost/1632463063_1567699204/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/pedagogie3.ec-lyon.fr","sesskey":"DkGavbvOHh","themerev":"1632463063","slasharguments":1,"theme":"boost","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1632463063","admin":"admin","svgicons":true,"usertimezone":"Europe\/Paris","contextid":1};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/pedagogie3.ec-lyon.fr\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/pedagogie3.ec-lyon.fr\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/pedagogie3.ec-lyon.fr\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/pedagogie3.ec-lyon.fr\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/pedagogie3.ec-lyon.fr\/theme\/yui_combo.php?m\/1632463063\/","combine":true,"comboBase":"https:\/\/pedagogie3.ec-lyon.fr\/theme\/yui_combo.php?","ext":false,"root":"m\/1632463063\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_bigbluebuttonbn-modform":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-imports":{"requires":["base","node"]},"moodle-mod_bigbluebuttonbn-broker":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-rooms":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_bigbluebuttonbn-recordings":{"requires":["base","node","datasource-get","datasource-jsonschema","datasource-polling","moodle-core-notification"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_offlinequiz-modform":{"requires":["base","node","event"]},"moodle-mod_offlinequiz-offlinequizbase":{"requires":["base","node"]},"moodle-mod_offlinequiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_offlinequiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_offlinequiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-base","moodle-mod_offlinequiz-util-page","moodle-mod_offlinequiz-util-slot","moodle-course-util"]},"moodle-mod_offlinequiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_offlinequiz-util","querystring-parse"]},"moodle-mod_offlinequiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-util":{"requires":["node"],"use":["moodle-mod_offlinequiz-util-base"],"submodules":{"moodle-mod_offlinequiz-util-base":{},"moodle-mod_offlinequiz-util-slot":{"requires":["node","moodle-mod_offlinequiz-util-base"]},"moodle-mod_offlinequiz-util-page":{"requires":["node","moodle-mod_offlinequiz-util-base"]}}},"moodle-mod_offlinequiz-offlinequizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/pedagogie3.ec-lyon.fr\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/pedagogie3.ec-lyon.fr\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1632463063\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/pedagogie3.ec-lyon.fr\/lib\/javascript.php\/1632463063\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/pedagogie3.ec-lyon.fr\/lib\/javascript.php\/1632463063\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-login-index" class="format-site  path-login safari dir-ltr lang-en yui-skin-sam yui3-skin-sam pedagogie3-ec-lyon-fr pagelayout-login course-1 context-1 notloggedin ">

<div id="page-wrapper">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script type="text/javascript" src="https://pedagogie3.ec-lyon.fr/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://pedagogie3.ec-lyon.fr/lib/javascript.php/1632463063/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>
text= "javascript=maincontent"
section=


    <div id="page" class="container-fluid mt-0">
        <div id="page-content" class="row">
            <div id="region-main-box" class="col-12">
                <section id="region-main" class="col-12">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span><div class="loginbox clearfix">
<div class="loginpanel">
<div>
<a href="https://pedagogie3.ec-lyon.fr/login/index.php?authCAS=CAS">CAS users</a>
</div>
<br/>
<div>
<a href="https://pedagogie3.ec-lyon.fr/login/index.php?authCAS=NOCAS">other users</a>
</div>
</div>
</div>
</div>
                    
                </section>
            </div>
        </div>
    </div>
</div>
<footer id="page-footer" class="py-3 bg-dark text-light">
    <div class="container">
        <div id="course-footer"></div>


        <div class="logininfo">You are not logged in.</div>
        <div class="homelink"><a href="https://pedagogie3.ec-lyon.fr/">Home</a></div>
        <div class="tool_dataprivacy"><a href="https://pedagogie3.ec-lyon.fr/admin/tool/dataprivacy/summary.php">Data retention summary</a></div>
        <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://pedagogie3.ec-lyon.fr/lib/requirejs.php/1632463063/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://pedagogie3.ec-lyon.fr/lib/javascript.php/1632463063/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://pedagogie3.ec-lyon.fr/lib/javascript.php/1632463063/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://pedagogie3.ec-lyon.fr/lib/javascript.php/1632463063/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://pedagogie3.ec-lyon.fr/lib/javascript.php/1632463063/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://pedagogie3.ec-lyon.fr/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("en",{
 "Audio Player": "Audio Player",
 "Video Player": "Video Player",
 "Play": "Play",
 "Pause": "Pause",
 "Replay": "Replay",
 "Current Time": "Current Time",
 "Duration Time": "Duration Time",
 "Remaining Time": "Remaining Time",
 "Stream Type": "Stream Type",
 "LIVE": "LIVE",
 "Loaded": "Loaded",
 "Progress": "Progress",
 "Progress Bar": "Progress Bar",
 "progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
 "Fullscreen": "Fullscreen",
 "Non-Fullscreen": "Non-Fullscreen",
 "Mute": "Mute",
 "Unmute": "Unmute",
 "Playback Rate": "Playback Rate",
 "Subtitles": "Subtitles",
 "subtitles off": "subtitles off",
 "Captions": "Captions",
 "captions off": "captions off",
 "Chapters": "Chapters",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions off",
 "Audio Track": "Audio Track",
 "Volume Level": "Volume Level",
 "You aborted the media playback": "You aborted the media playback",
 "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
 "No compatible source was found for this media.": "No compatible source was found for this media.",
 "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
 "Play Video": "Play Video",
 "Close": "Close",
 "Close Modal Dialog": "Close Modal Dialog",
 "Modal Window": "Modal Window",
 "This is a modal window": "This is a modal window",
 "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
 ", opens captions settings dialog": ", opens captions settings dialog",
 ", opens subtitles settings dialog": ", opens subtitles settings dialog",
 ", opens descriptions settings dialog": ", opens descriptions settings dialog",
 ", selected": ", selected",
 "captions settings": "captions settings",
 "subtitles settings": "subititles settings",
 "descriptions settings": "descriptions settings",
 "Text": "Text",
 "White": "White",
 "Black": "Black",
 "Red": "Red",
 "Green": "Green",
 "Blue": "Blue",
 "Yellow": "Yellow",
 "Magenta": "Magenta",
 "Cyan": "Cyan",
 "Background": "Background",
 "Window": "Window",
 "Transparent": "Transparent",
 "Semi-Transparent": "Semi-Transparent",
 "Opaque": "Opaque",
 "Font Size": "Font Size",
 "Text Edge Style": "Text Edge Style",
 "None": "None",
 "Raised": "Raised",
 "Depressed": "Depressed",
 "Uniform": "Uniform",
 "Dropshadow": "Dropshadow",
 "Font Family": "Font Family",
 "Proportional Sans-Serif": "Proportional Sans-Serif",
 "Monospace Sans-Serif": "Monospace Sans-Serif",
 "Proportional Serif": "Proportional Serif",
 "Monospace Serif": "Monospace Serif",
 "Casual": "Casual",
 "Script": "Script",
 "Small Caps": "Small Caps",
 "Reset": "Reset",
 "restore all settings to the default values": "restore all settings to the default values",
 "Done": "Done",
 "Caption Settings Dialog": "Caption Settings Dialog",
 "Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
 "End of dialog window.": "End of dialog window."
});

    });
});;

require(['theme_boost/loader']);
;
videojs.addLanguage("en")'Mono Sefic'(amd.session_commit) 
level.msg_get_que (modified.script)
require(["core/notification"], function(amd) { amd.init(1, []); });;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} alias\/shortcut files that use this file as their source","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random6157df8559b5d2'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random6157df8559b5d2'); });
})();
//]]>
</script>

    </div>
</footer>

</body>
</html>