<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginCountByIp");
$query->setAction("insert");
$query->setPriority("");

${'ipaddress5_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress5_argument'}->checkNotNull();
if(!${'ipaddress5_argument'}->isValid()) return ${'ipaddress5_argument'}->getErrorMessage();
if(${'ipaddress5_argument'} !== null) ${'ipaddress5_argument'}->setColumnType('varchar');

${'count6_argument'} = new Argument('count', $args->{'count'});
${'count6_argument'}->checkNotNull();
if(!${'count6_argument'}->isValid()) return ${'count6_argument'}->getErrorMessage();
if(${'count6_argument'} !== null) ${'count6_argument'}->setColumnType('number');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

${'last_update8_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update8_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update8_argument'}->isValid()) return ${'last_update8_argument'}->getErrorMessage();
if(${'last_update8_argument'} !== null) ${'last_update8_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`ipaddress`', ${'ipaddress5_argument'})
,new InsertExpression('`count`', ${'count6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
,new InsertExpression('`last_update`', ${'last_update8_argument'})
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>