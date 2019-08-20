<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'spamfilter_log_srl2_argument'} = new Argument('spamfilter_log_srl', $args->{'spamfilter_log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'spamfilter_log_srl2_argument'}->ensureDefaultValue($sequence);
if(!${'spamfilter_log_srl2_argument'}->isValid()) return ${'spamfilter_log_srl2_argument'}->getErrorMessage();
if(${'spamfilter_log_srl2_argument'} !== null) ${'spamfilter_log_srl2_argument'}->setColumnType('number');

${'ipaddress3_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress3_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

${'regdate4_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate4_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate4_argument'}->isValid()) return ${'regdate4_argument'}->getErrorMessage();
if(${'regdate4_argument'} !== null) ${'regdate4_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`spamfilter_log_srl`', ${'spamfilter_log_srl2_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress3_argument'})
,new InsertExpression('`regdate`', ${'regdate4_argument'})
));
$query->setTables(array(
new Table('`xe_spamfilter_log`', '`spamfilter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>