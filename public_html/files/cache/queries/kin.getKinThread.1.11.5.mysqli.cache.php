<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getKinParentDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->document_srl)) {
${'document_srl3_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl3_argument'}->createConditionValue();
if(!${'document_srl3_argument'}->isValid()) return ${'document_srl3_argument'}->getErrorMessage();
} else
${'document_srl3_argument'} = NULL;if(${'document_srl3_argument'} !== null) ${'document_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_kin_thread`', '`kin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl3_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>