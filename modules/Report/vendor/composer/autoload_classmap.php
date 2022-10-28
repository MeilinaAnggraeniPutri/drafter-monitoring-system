<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Modules\\Report\\app\\Enums\\StatusEnum' => $baseDir . '/app/Enums/StatusEnum.php',
    'Modules\\Report\\app\\Http\\Controllers\\ReportController' => $baseDir . '/app/Http/Controllers/ReportController.php',
    'Modules\\Report\\app\\Http\\Requests\\ReportRequest' => $baseDir . '/app/Http/Requests/ReportRequest.php',
    'Modules\\Report\\app\\Http\\Requests\\ReportStoreRequest' => $baseDir . '/app/Http/Requests/ReportStoreRequest.php',
    'Modules\\Report\\app\\Interfaces\\ReportInterface' => $baseDir . '/app/Interfaces/ReportInterface.php',
    'Modules\\Report\\app\\Models\\Report' => $baseDir . '/app/Models/Report.php',
    'Modules\\Report\\app\\Providers\\ReportServiceProvider' => $baseDir . '/app/Providers/ReportServiceProvider.php',
    'Modules\\Report\\app\\Providers\\RouteServiceProvider' => $baseDir . '/app/Providers/RouteServiceProvider.php',
    'Modules\\Report\\app\\Repositories\\ReportRepository' => $baseDir . '/app/Repositories/ReportRepository.php',
    'Modules\\Report\\database\\factories\\Report\\ReportFactory' => $baseDir . '/database/factories/Report/ReportFactory.php',
    'Modules\\Report\\database\\seeders\\ReportDatabaseSeeder' => $baseDir . '/database/seeders/ReportDatabaseSeeder.php',
    'Modules\\Report\\database\\seeders\\Report\\ReportSeederTableSeeder' => $baseDir . '/database/seeders/Report/ReportSeederTableSeeder.php',
);