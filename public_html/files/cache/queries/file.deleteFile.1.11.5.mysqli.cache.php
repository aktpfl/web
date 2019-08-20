<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteFile");
$query->setAction("delete");
$query->setPriority("");

${'file_srl13_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl13_argument'}->checkFilter('number');
${'file_srl13_argument'}->checkNotNull();
${'file_srl13_argument'}->createConditionValue();
if(!${'file_srl13_argument'}->isValid()) return ${'file_srl13_argument'}->getErrorMessage();
if(${'file_srl13_argument'} !== null) ${'file_srl13_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl13_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>