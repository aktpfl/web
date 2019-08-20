<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getConfigByModuleSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`.*')
));
$query->setTables(array(
new Table('`xe_newposts_config`', '`config`')
,new Table('`xe_newposts_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`modules`.`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithoutArgument('`config`.`config_srl`','`modules`.`config_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>