<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateUploadedCount");
$query->setAction("update");
$query->setPriority("");

${'uploaded_count14_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count14_argument'}->checkFilter('number');
${'uploaded_count14_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count14_argument'}->isValid()) return ${'uploaded_count14_argument'}->getErrorMessage();
if(${'uploaded_count14_argument'} !== null) ${'uploaded_count14_argument'}->setColumnType('number');

${'document_srl15_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl15_argument'}->checkFilter('number');
${'document_srl15_argument'}->checkNotNull();
${'document_srl15_argument'}->createConditionValue();
if(!${'document_srl15_argument'}->isValid()) return ${'document_srl15_argument'}->getErrorMessage();
if(${'document_srl15_argument'} !== null) ${'document_srl15_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`uploaded_count`', ${'uploaded_count14_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl15_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>