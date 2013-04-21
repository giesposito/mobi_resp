<?php
require_once('config.php');
$wurflConfig = new WURFL_Configuration_XmlConfig($wurflConfigFile);
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);
$wurflManager = $wurflManagerFactory->create();

$user_agent = (isset($_POST['useragent'])) ? $_POST['useragent'] : $_SERVER['HTTP_USER_AGENT'];
$device = $wurflManager->getDeviceForUserAgent($user_agent);
?>