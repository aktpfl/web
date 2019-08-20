<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginCountHistoryByMemberSrl");
$query->setAction("insert");
$query->setPriority("");

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'content3_argument'} = new Argument('content', $args->{'content'});
${'content3_argument'}->checkNotNull();
if(!${'content3_argument'}->isValid()) return ${'content3_argument'}->getErrorMessage();
if(${'content3_argument'} !== null) ${'content3_argument'}->setColumnType('bigtext');

${'last_update4_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update4_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update4_argument'}->isValid()) return ${'last_update4_argument'}->getErrorMessage();
if(${'last_update4_argument'} !== null) ${'last_update4_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`content`', ${'content3_argument'})
,new InsertExpression('`last_update`', ${'last_update4_argument'})
));
$query->setTables(array(
new Table('`xe_member_count_history`', '`member_count_history`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>