<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNotiConfigByModuleSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl39_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl39_argument'}->createConditionValue();
if(!${'module_srl39_argument'}->isValid()) return ${'module_srl39_argument'}->getErrorMessage();
} else
${'module_srl39_argument'} = NULL;if(${'module_srl39_argument'} !== null) ${'module_srl39_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`noticom`.*')
));
$query->setTables(array(
new Table('`xe_notification_comment`', '`noticom`')
,new Table('`xe_notification_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`module_srl`',$module_srl39_argument,"equal")
,new ConditionWithoutArgument('`noticom`.`notification_srl`','`modules`.`notification_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>