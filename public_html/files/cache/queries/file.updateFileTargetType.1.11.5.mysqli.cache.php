<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileTargetType");
$query->setAction("update");
$query->setPriority("");
if(isset($args->upload_target_type)) {
${'upload_target_type1_argument'} = new Argument('upload_target_type', $args->{'upload_target_type'});
if(!${'upload_target_type1_argument'}->isValid()) return ${'upload_target_type1_argument'}->getErrorMessage();
} else
${'upload_target_type1_argument'} = NULL;if(${'upload_target_type1_argument'} !== null) ${'upload_target_type1_argument'}->setColumnType('char');

${'file_srl2_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl2_argument'}->checkFilter('number');
${'file_srl2_argument'}->checkNotNull();
${'file_srl2_argument'}->createConditionValue();
if(!${'file_srl2_argument'}->isValid()) return ${'file_srl2_argument'}->getErrorMessage();
if(${'file_srl2_argument'} !== null) ${'file_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`upload_target_type`', ${'upload_target_type1_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>