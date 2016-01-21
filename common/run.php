<?php

/**
 * Include the autoloader.
 */
require __DIR__ . '/autoload.php';

/**
 * @brief Initialize by creating Context object
 * Set all Request Argument/Environment variables
 **/
$oContext = Context::getInstance();
$oContext->init();

/**
 * @brief If default_url is set and it is different from the current url, attempt to redirect for SSO authentication and then process the module
 **/
if($oContext->checkSSO())
{
	$oModuleHandler = new ModuleHandler();

	try
	{
		if($oModuleHandler->init())
		{
			$oModuleHandler->displayContent($oModuleHandler->procModule());
		}
	}
	catch(Exception $e)
	{
		htmlHeader();
		echo Context::getLang($e->getMessage());
		htmlFooter();
	}
}

$oContext->close();
