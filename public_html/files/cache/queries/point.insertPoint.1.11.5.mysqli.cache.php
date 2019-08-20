<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl4_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl4_argument'}->checkFilter('number');
${'member_srl4_argument'}->checkNotNull();
if(!${'member_srl4_argument'}->isValid()) return ${'member_srl4_argument'}->getErrorMessage();
if(${'member_srl4_argument'} !== null) ${'member_srl4_argument'}->setColumnType('number');

${'point5_argument'} = new Argument('point', $args->{'point'});
${'point5_argument'}->checkFilter('number');
${'point5_argument'}->ensureDefaultValue('0');
${'point5_argument'}->checkNotNull();
if(!${'point5_argument'}->isValid()) return ${'point5_argument'}->getErrorMessage();
if(${'point5_argument'} !== null) ${'point5_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl4_argument'})
,new InsertExpression('`point`', ${'point5_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>