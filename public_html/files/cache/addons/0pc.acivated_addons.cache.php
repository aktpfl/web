<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/autolink/autolink.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "autolink";
$addon_time_log->called_extension = "autolink";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'Book' => 1,
);
$addon_file = './addons/layerpopup/layerpopup.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MjI6e3M6MTU6InhlX3ZhbGlkYXRvcl9pZCI7czozMToibW9kdWxlcy9hZGRvbi90cGwvc2V0dXBfYWRkb24vMSI7czoxMToibG9hZF9qcXVlcnkiO3M6Mjoibm8iO3M6MTQ6ImxvYWRfanF1ZXJ5X3VpIjtzOjI6Im5vIjtzOjk6InBvcHVwX2NvbiI7czozOiJpbWciO3M6ODoiaW1nX3BhdGgiO3M6Mzk6Imh0dHA6Ly9zYWxldGhlYm9va3MuaXZ5cm8ubmV0L3BvcHVwLmpwZyI7czo4OiJpbWdfaHJlZiI7czozMDoiaHR0cHM6Ly93d3cubXlldGhlcndhbGxldC5jb20vIjtzOjg6ImltZ19vcGVuIjtzOjY6Il9ibGFuayI7czo5OiJwb3B1cF9wb3MiO3M6NDoidHJ1ZSI7czoxMzoibm9wb3B1cF9jb2xvciI7czoxMToidHJhbnNwYXJlbnQiO3M6MTA6ImltYWdlX3NpemUiO3M6NDoidHJ1ZSI7czo1OiJ3aWR0aCI7czozOiI2NDAiO3M6NjoiaGVpZ2h0IjtzOjM6IjQ4MCI7czoxMDoib3BlbmVmZmVjdCI7czo0OiJmYWRlIjtzOjExOiJjbG9zZWVmZmVjdCI7czo0OiJmYWRlIjtzOjg6InRvcHJhdGlvIjtzOjQ6IjAuOTUiO3M6OToibGVmdHJhdGlvIjtzOjQ6IjAuMDUiO3M6Nzoibm9wb3B1cCI7czoyOiItMSI7czoxMDoicG9wdXBfZHJhZyI7czoyOiJubyI7czoxMDoicG9wdXBfdGltZSI7czoyOiJubyI7czoxNDoic3RhcnR0aW1lX2F1dG8iO3M6MzoieWVzIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6NDoiQm9vayI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6MjI6e3M6MTU6InhlX3ZhbGlkYXRvcl9pZCI7czozMToibW9kdWxlcy9hZGRvbi90cGwvc2V0dXBfYWRkb24vMSI7czoxMToibG9hZF9qcXVlcnkiO3M6Mjoibm8iO3M6MTQ6ImxvYWRfanF1ZXJ5X3VpIjtzOjI6Im5vIjtzOjk6InBvcHVwX2NvbiI7czozOiJpbWciO3M6ODoiaW1nX3BhdGgiO3M6Mzk6Imh0dHA6Ly9zYWxldGhlYm9va3MuaXZ5cm8ubmV0L3BvcHVwLmpwZyI7czo4OiJpbWdfaHJlZiI7czozMDoiaHR0cHM6Ly93d3cubXlldGhlcndhbGxldC5jb20vIjtzOjg6ImltZ19vcGVuIjtzOjY6Il9ibGFuayI7czo5OiJwb3B1cF9wb3MiO3M6NDoidHJ1ZSI7czoxMzoibm9wb3B1cF9jb2xvciI7czoxMToidHJhbnNwYXJlbnQiO3M6MTA6ImltYWdlX3NpemUiO3M6NDoidHJ1ZSI7czo1OiJ3aWR0aCI7czozOiI2NDAiO3M6NjoiaGVpZ2h0IjtzOjM6IjQ4MCI7czoxMDoib3BlbmVmZmVjdCI7czo0OiJmYWRlIjtzOjExOiJjbG9zZWVmZmVjdCI7czo0OiJmYWRlIjtzOjg6InRvcHJhdGlvIjtzOjQ6IjAuOTUiO3M6OToibGVmdHJhdGlvIjtzOjQ6IjAuMDUiO3M6Nzoibm9wb3B1cCI7czoyOiItMSI7czoxMDoicG9wdXBfZHJhZyI7czoyOiJubyI7czoxMDoicG9wdXBfdGltZSI7czoyOiJubyI7czoxNDoic3RhcnR0aW1lX2F1dG8iO3M6MzoieWVzIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6NDoiQm9vayI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "layerpopup";
$addon_time_log->called_extension = "layerpopup";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_communication/member_communication.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_communication";
$addon_time_log->called_extension = "member_communication";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_extra_info/member_extra_info.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_extra_info";
$addon_time_log->called_extension = "member_extra_info";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'Book' => 1,
);
$addon_file = './addons/resize_image/resize_image.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6NDoiQm9vayI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mzp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6NDoiQm9vayI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "resize_image";
$addon_time_log->called_extension = "resize_image";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);