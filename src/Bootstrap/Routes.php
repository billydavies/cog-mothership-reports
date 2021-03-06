<?php

namespace Message\Mothership\Report\Bootstrap;

use Message\Cog\Bootstrap\RoutesInterface;

class Routes implements RoutesInterface
{
	public function registerRoutes($router)
	{
		$router['ms.report']->setParent('ms.cp')->setPrefix('/reports');

		$router['ms.report']->add('ms.report.dashboard', '', 'Message:Mothership:Report::Controller:DashboardController#index');
		$router['ms.report']->add('ms.report.view', 'view/{reportName}', 'Message:Mothership:Report::Controller:ReportController#showReport');

		$router['ms.report']->add('ms.report.download', 'view/{reportName}/download', 'Message:Mothership:Report::Controller:ReportController#download');
	}
}