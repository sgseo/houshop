<?php
$baseUrl = 'http';
if ($_SERVER["HTTPS"] == "on")
{
    $baseUrl .= "s";
}
$baseUrl .= "://" . $_SERVER["SERVER_NAME"].'/';
$config = array();
$config['mall_site_url']        = $baseUrl.'mall';
$config['reads_site_url']       = $baseUrl.'reads';
$config['shareshow_site_url']   = $baseUrl.'shareshow';
$config['circle_site_url']      = $baseUrl.'circle';
$config['admin_site_url']       = $baseUrl.'admin';
$config['mobile_site_url']      = $baseUrl.'mo_bile';
$config['wap_site_url']         = $baseUrl.'wap';
$config['chat_site_url']        = $baseUrl.'chat';
$config['node_site_url']        = $baseUrl.':8090';
$config['delivery_site_url']    = $baseUrl.'delivery';
$config['chain_site_url']       = $baseUrl.'chain';
$config['member_site_url']      = $baseUrl.'member';
$config['upload_site_url']      = $baseUrl.'data/upload';
$config['resource_site_url']    = $baseUrl.'data/resource';
$config['reads_modules_url']    = $baseUrl.'admin/modules/reads';
$config['shareshow_modules_url'] = $baseUrl.'admin/modules/shareshow';
$config['circle_modules_url']    = $baseUrl.'admin/modules/circle';
$config['admin_modules_url']    = $baseUrl.'admin/modules/mall';
$config['mobile_modules_url']   = $baseUrl.'admin/modules/mobile';
$config['version']              = '20170306011_1.2.2';
$config['setup_date']           = '2017-11-10 15:27:08';
$config['gip']                  = 0;
$config['dbdriver']             = 'mysql';
$config['tablepre']             = 'feiwa_';
$config['db']['1']['dbhost']       = '106.14.133.40';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'b2b2c';
$config['db']['1']['dbpwd']        = 'Zm72YLYjZMe8ZMMc';
$config['db']['1']['dbname']       = 'b2b2c';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']             = $config['db']['master'];
$config['session_expire']   = 3600;
$config['lang_type']        = 'zh_cn';
$config['cookie_pre']       = '6AAE_';
$config['cache_open'] = false;
//$config['redis']['prefix']        = 'feiwa_';
//$config['redis']['master']['port']        = 6379;
//$config['redis']['master']['host']        = '127.0.0.1';
//$config['redis']['master']['pconnect']    = 0;
//$config['redis']['slave']             = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = 'feiwa';
$config['debug']            = false;
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdk4report.eucp.b2m.cn:8080/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
//$config['oss']['open'] = false;
//$config['oss']['img_url'] = '';
//$config['oss']['api_url'] = '';
//$config['oss']['bucket'] = '';
//$config['oss']['access_id'] = '';
//$config['oss']['access_key'] = '';
$config['https'] = false;
$config['site_status'] = 0;
$config['closed_reason'] = 0;
return $config;