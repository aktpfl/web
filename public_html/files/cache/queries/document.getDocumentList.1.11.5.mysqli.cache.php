<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl7_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl7_argument'}->checkFilter('number');
${'module_srl7_argument'}->createConditionValue();
if(!${'module_srl7_argument'}->isValid()) return ${'module_srl7_argument'}->getErrorMessage();
} else
${'module_srl7_argument'} = NULL;if(${'module_srl7_argument'} !== null) ${'module_srl7_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl8_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl8_argument'}->checkFilter('number');
${'exclude_module_srl8_argument'}->createConditionValue();
if(!${'exclude_module_srl8_argument'}->isValid()) return ${'exclude_module_srl8_argument'}->getErrorMessage();
} else
${'exclude_module_srl8_argument'} = NULL;if(${'exclude_module_srl8_argument'} !== null) ${'exclude_module_srl8_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl9_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl9_argument'}->createConditionValue();
if(!${'category_srl9_argument'}->isValid()) return ${'category_srl9_argument'}->getErrorMessage();
} else
${'category_srl9_argument'} = NULL;if(${'category_srl9_argument'} !== null) ${'category_srl9_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice10_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice10_argument'}->createConditionValue();
if(!${'s_is_notice10_argument'}->isValid()) return ${'s_is_notice10_argument'}->getErrorMessage();
} else
${'s_is_notice10_argument'} = NULL;if(${'s_is_notice10_argument'} !== null) ${'s_is_notice10_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl11_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl11_argument'}->checkFilter('number');
${'member_srl11_argument'}->createConditionValue();
if(!${'member_srl11_argument'}->isValid()) return ${'member_srl11_argument'}->getErrorMessage();
} else
${'member_srl11_argument'} = NULL;if(${'member_srl11_argument'} !== null) ${'member_srl11_argument'}->setColumnType('number');
if(isset($args->member_srls)) {
${'member_srls12_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls12_argument'}->checkFilter('number');
${'member_srls12_argument'}->createConditionValue();
if(!${'member_srls12_argument'}->isValid()) return ${'member_srls12_argument'}->getErrorMessage();
} else
${'member_srls12_argument'} = NULL;if(${'member_srls12_argument'} !== null) ${'member_srls12_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList13_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList13_argument'}->createConditionValue();
if(!${'statusList13_argument'}->isValid()) return ${'statusList13_argument'}->getErrorMessage();
} else
${'statusList13_argument'} = NULL;if(${'statusList13_argument'} !== null) ${'statusList13_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division14_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division14_argument'}->createConditionValue();
if(!${'division14_argument'}->isValid()) return ${'division14_argument'}->getErrorMessage();
} else
${'division14_argument'} = NULL;if(${'division14_argument'} !== null) ${'division14_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division15_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division15_argument'}->createConditionValue();
if(!${'last_division15_argument'}->isValid()) return ${'last_division15_argument'}->getErrorMessage();
} else
${'last_division15_argument'} = NULL;if(${'last_division15_argument'} !== null) ${'last_division15_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title16_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title16_argument'}->createConditionValue();
if(!${'s_title16_argument'}->isValid()) return ${'s_title16_argument'}->getErrorMessage();
} else
${'s_title16_argument'} = NULL;if(${'s_title16_argument'} !== null) ${'s_title16_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content17_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content17_argument'}->createConditionValue();
if(!${'s_content17_argument'}->isValid()) return ${'s_content17_argument'}->getErrorMessage();
} else
${'s_content17_argument'} = NULL;if(${'s_content17_argument'} !== null) ${'s_content17_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name18_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name18_argument'}->createConditionValue();
if(!${'s_user_name18_argument'}->isValid()) return ${'s_user_name18_argument'}->getErrorMessage();
} else
${'s_user_name18_argument'} = NULL;if(${'s_user_name18_argument'} !== null) ${'s_user_name18_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id19_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id19_argument'}->createConditionValue();
if(!${'s_user_id19_argument'}->isValid()) return ${'s_user_id19_argument'}->getErrorMessage();
} else
${'s_user_id19_argument'} = NULL;if(${'s_user_id19_argument'} !== null) ${'s_user_id19_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name20_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name20_argument'}->createConditionValue();
if(!${'s_nick_name20_argument'}->isValid()) return ${'s_nick_name20_argument'}->getErrorMessage();
} else
${'s_nick_name20_argument'} = NULL;if(${'s_nick_name20_argument'} !== null) ${'s_nick_name20_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address21_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address21_argument'}->createConditionValue();
if(!${'s_email_address21_argument'}->isValid()) return ${'s_email_address21_argument'}->getErrorMessage();
} else
${'s_email_address21_argument'} = NULL;if(${'s_email_address21_argument'} !== null) ${'s_email_address21_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage22_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage22_argument'}->createConditionValue();
if(!${'s_homepage22_argument'}->isValid()) return ${'s_homepage22_argument'}->getErrorMessage();
} else
${'s_homepage22_argument'} = NULL;if(${'s_homepage22_argument'} !== null) ${'s_homepage22_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags23_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags23_argument'}->createConditionValue();
if(!${'s_tags23_argument'}->isValid()) return ${'s_tags23_argument'}->getErrorMessage();
} else
${'s_tags23_argument'} = NULL;if(${'s_tags23_argument'} !== null) ${'s_tags23_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl24_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl24_argument'}->createConditionValue();
if(!${'s_member_srl24_argument'}->isValid()) return ${'s_member_srl24_argument'}->getErrorMessage();
} else
${'s_member_srl24_argument'} = NULL;if(${'s_member_srl24_argument'} !== null) ${'s_member_srl24_argument'}->setColumnType('number');
if(isset($args->s_member_srls)) {
${'s_member_srls25_argument'} = new ConditionArgument('s_member_srls', $args->s_member_srls, 'in');
${'s_member_srls25_argument'}->createConditionValue();
if(!${'s_member_srls25_argument'}->isValid()) return ${'s_member_srls25_argument'}->getErrorMessage();
} else
${'s_member_srls25_argument'} = NULL;if(${'s_member_srls25_argument'} !== null) ${'s_member_srls25_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count26_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count26_argument'}->createConditionValue();
if(!${'s_readed_count26_argument'}->isValid()) return ${'s_readed_count26_argument'}->getErrorMessage();
} else
${'s_readed_count26_argument'} = NULL;if(${'s_readed_count26_argument'} !== null) ${'s_readed_count26_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count27_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count27_argument'}->createConditionValue();
if(!${'s_voted_count27_argument'}->isValid()) return ${'s_voted_count27_argument'}->getErrorMessage();
} else
${'s_voted_count27_argument'} = NULL;if(${'s_voted_count27_argument'} !== null) ${'s_voted_count27_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count28_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count28_argument'}->createConditionValue();
if(!${'s_blamed_count28_argument'}->isValid()) return ${'s_blamed_count28_argument'}->getErrorMessage();
} else
${'s_blamed_count28_argument'} = NULL;if(${'s_blamed_count28_argument'} !== null) ${'s_blamed_count28_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count29_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count29_argument'}->createConditionValue();
if(!${'s_comment_count29_argument'}->isValid()) return ${'s_comment_count29_argument'}->getErrorMessage();
} else
${'s_comment_count29_argument'} = NULL;if(${'s_comment_count29_argument'} !== null) ${'s_comment_count29_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count30_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count30_argument'}->createConditionValue();
if(!${'s_trackback_count30_argument'}->isValid()) return ${'s_trackback_count30_argument'}->getErrorMessage();
} else
${'s_trackback_count30_argument'} = NULL;if(${'s_trackback_count30_argument'} !== null) ${'s_trackback_count30_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count31_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count31_argument'}->createConditionValue();
if(!${'s_uploaded_count31_argument'}->isValid()) return ${'s_uploaded_count31_argument'}->getErrorMessage();
} else
${'s_uploaded_count31_argument'} = NULL;if(${'s_uploaded_count31_argument'} !== null) ${'s_uploaded_count31_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate32_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate32_argument'}->createConditionValue();
if(!${'s_regdate32_argument'}->isValid()) return ${'s_regdate32_argument'}->getErrorMessage();
} else
${'s_regdate32_argument'} = NULL;if(${'s_regdate32_argument'} !== null) ${'s_regdate32_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update33_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update33_argument'}->createConditionValue();
if(!${'s_last_update33_argument'}->isValid()) return ${'s_last_update33_argument'}->getErrorMessage();
} else
${'s_last_update33_argument'} = NULL;if(${'s_last_update33_argument'} !== null) ${'s_last_update33_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress34_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress34_argument'}->createConditionValue();
if(!${'s_ipaddress34_argument'}->isValid()) return ${'s_ipaddress34_argument'}->getErrorMessage();
} else
${'s_ipaddress34_argument'} = NULL;if(${'s_ipaddress34_argument'} !== null) ${'s_ipaddress34_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date35_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date35_argument'}->createConditionValue();
if(!${'start_date35_argument'}->isValid()) return ${'start_date35_argument'}->getErrorMessage();
} else
${'start_date35_argument'} = NULL;if(${'start_date35_argument'} !== null) ${'start_date35_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date36_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date36_argument'}->createConditionValue();
if(!${'end_date36_argument'}->isValid()) return ${'end_date36_argument'}->getErrorMessage();
} else
${'end_date36_argument'} = NULL;if(${'end_date36_argument'} !== null) ${'end_date36_argument'}->setColumnType('date');

${'page39_argument'} = new Argument('page', $args->{'page'});
${'page39_argument'}->ensureDefaultValue('1');
if(!${'page39_argument'}->isValid()) return ${'page39_argument'}->getErrorMessage();

${'page_count40_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count40_argument'}->ensureDefaultValue('10');
if(!${'page_count40_argument'}->isValid()) return ${'page_count40_argument'}->getErrorMessage();

${'list_count41_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count41_argument'}->ensureDefaultValue('20');
if(!${'list_count41_argument'}->isValid()) return ${'list_count41_argument'}->getErrorMessage();

${'sort_index37_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index37_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index37_argument'}->isValid()) return ${'sort_index37_argument'}->getErrorMessage();

${'order_type38_argument'} = new SortArgument('order_type38', $args->order_type);
${'order_type38_argument'}->ensureDefaultValue('asc');
if(!${'order_type38_argument'}->isValid()) return ${'order_type38_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl7_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl8_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl9_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice10_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl11_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls12_argument,"in", 'and')
,new ConditionWithArgument('`status`',$statusList13_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division14_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division15_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title16_argument,"like")
,new ConditionWithArgument('`content`',$s_content17_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name18_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id19_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name20_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address21_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage22_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags23_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl24_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srls25_argument,"in", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count26_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count27_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count28_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count29_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count30_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count31_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate32_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update33_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress34_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date35_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date36_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index37_argument'}, $order_type38_argument)
));
$query->setLimit(new Limit(${'list_count41_argument'}, ${'page39_argument'}, ${'page_count40_argument'}));
return $query; ?>