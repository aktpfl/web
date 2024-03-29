<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteFiles");
$query->setAction("delete");
$query->setPriority("");

${'upload_target_srl16_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl16_argument'}->checkFilter('number');
${'upload_target_srl16_argument'}->checkNotNull();
${'upload_target_srl16_argument'}->createConditionValue();
if(!${'upload_target_srl16_argument'}->isValid()) return ${'upload_target_srl16_argument'}->getErrorMessage();
if(${'upload_target_srl16_argument'} !== null) ${'upload_target_srl16_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl16_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>