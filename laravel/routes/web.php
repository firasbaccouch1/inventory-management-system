<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\Business\Processess\add_newProcessess;
use App\Http\Controllers\Backend\Business\Processess\AllDiagramsController;
use App\Http\Controllers\Backend\Business\Processess\ContinualServiceImprovementController;
use App\Http\Controllers\Backend\Business\Processess\OverviewController as ProcessessOverviewController;
use App\Http\Controllers\Backend\Business\Processess\ServiceDesignController;
use App\Http\Controllers\Backend\Business\Processess\ServiceOperationController;
use App\Http\Controllers\Backend\Business\Processess\ServiceStrategyController;
use App\Http\Controllers\Backend\Business\Processess\ServiceTransitionController;
use App\Http\Controllers\Backend\Business\Sites\add_newSites;
use App\Http\Controllers\Backend\Business\Sites\BranchOfficesController;
use App\Http\Controllers\Backend\Business\Sites\CustomerSitesController;
use App\Http\Controllers\Backend\Business\Sites\HeadquatersController;
use App\Http\Controllers\Backend\Business\Sites\MeetingRooms;
use App\Http\Controllers\Backend\Business\Sites\SmallOffice_HomeOfficeController;
use App\Http\Controllers\Backend\Business\Sites\VenuesController;
use App\Http\Controllers\Backend\Hardware\EmployeeHardware\add_newHardwareController;
use App\Http\Controllers\Backend\Hardware\EmployeeHardware\DesktopsController;
use App\Http\Controllers\Backend\Hardware\EmployeeHardware\KeycardController;
use App\Http\Controllers\Backend\Hardware\EmployeeHardware\LaptopsController;
use App\Http\Controllers\Pos\SupplierController;
use App\Http\Controllers\Pos\CustomerController;
use App\Http\Controllers\Pos\UnitController;
use App\Http\Controllers\Pos\CategoryController;
use App\Http\Controllers\Pos\ProductController;
use App\Http\Controllers\Pos\PurchaseController;
use App\Http\Controllers\Pos\DefaultController;
use App\Http\Controllers\Pos\InvoiceController;
use App\Http\Controllers\Pos\StockController;
use App\Http\Controllers\backend\Hardware\EmployeeHardware\OverviewController;
use App\Http\Controllers\Backend\Hardware\EmployeeHardware\PerhiperalsController;
use App\Http\Controllers\Backend\Hardware\EmployeeHardware\TabletsController;
use App\Http\Controllers\Backend\Hardware\Networking\AccessSwitchesController;
use App\Http\Controllers\Backend\Hardware\Networking\add_newNetworking;
use App\Http\Controllers\Backend\Hardware\Networking\DistrobutionSwitchesController;
use App\Http\Controllers\Backend\Hardware\Networking\FirewallsController;
use App\Http\Controllers\Backend\Hardware\Networking\IdsController;
use App\Http\Controllers\Backend\Hardware\Networking\IpsController;
use App\Http\Controllers\Backend\Hardware\Networking\OverviewController as NetworkingOverviewController;
use App\Http\Controllers\Backend\Hardware\Networking\RemoteAccessSystemsControllers;
use App\Http\Controllers\Backend\Hardware\Networking\RoutersController;
use App\Http\Controllers\Backend\Hardware\Networking\TelephonySystemsController;
use App\Http\Controllers\Backend\Hardware\Networking\VpnSystemsController;
use App\Http\Controllers\Backend\Hardware\Networking\WirelessAccessPointsController;
use App\Http\Controllers\Backend\Hardware\PhysicalSecurity\AccessControlController;
use App\Http\Controllers\Backend\Hardware\PhysicalSecurity\add_newPhysicalSecurity;
use App\Http\Controllers\Backend\Hardware\PhysicalSecurity\AlarmSystemsController;
use App\Http\Controllers\Backend\Hardware\PhysicalSecurity\CctvController;
use App\Http\Controllers\Backend\Hardware\PhysicalSecurity\OverviewController as PhysicalSecurityOverviewController;
use App\Http\Controllers\Backend\Hardware\PhysicalSecurity\Racks_ConnsCabinetsController;
use App\Http\Controllers\Backend\Hardware\Systems\AccessControlController as SystemsAccessControlController;
use App\Http\Controllers\Backend\Hardware\Systems\add_newSystemHardware;
use App\Http\Controllers\Backend\Hardware\Systems\BladeChassisController;
use App\Http\Controllers\Backend\Hardware\Systems\BladeModulesController;
use App\Http\Controllers\Backend\Hardware\Systems\EcommerceController;
use App\Http\Controllers\Backend\Hardware\Systems\OverviewController as SystemsOverviewController;
use App\Http\Controllers\Backend\Hardware\Systems\RackServersController;
use App\Http\Controllers\Backend\Hardware\Systems\SanStorageController;
use App\Http\Controllers\Backend\Hardware\Systems\SurveillanceController;
use App\Http\Controllers\Backend\Hardware\Systems\TowerServersController;
use App\Http\Controllers\Backend\Logical\Application\add_newApplication as ApplicationAdd_newApplication;
use App\Http\Controllers\Backend\Logical\Application\ConnectionsController;
use App\Http\Controllers\Backend\Logical\Application\DependanciesController as ApplicationDependanciesController;
use App\Http\Controllers\Backend\Logical\Application\Design;
use App\Http\Controllers\Backend\Software\Applications\CorperateGeneralController;
use App\Http\Controllers\Backend\Software\Applications\CorperateSensitiveController;
use App\Http\Controllers\Backend\Software\Applications\DataStorage;
use App\Http\Controllers\Backend\Software\Applications\EcommerceController as ApplicationsEcommerceController;
use App\Http\Controllers\Backend\Software\Applications\EducationalController;
use App\Http\Controllers\Backend\Software\Applications\FileStorage;
use App\Http\Controllers\Backend\Software\Applications\LicensedSoftwareController;
use App\Http\Controllers\Backend\Software\Services\OverviewController as ServicesOverviewController;
use App\Http\Controllers\Backend\Stock\DibgitalStock\OverviewController as DibgitalStockOverviewController;
use App\Http\Controllers\Backend\Stock\PhysicalStock\OverviewController as PhysicalStockOverviewController;
use App\Http\Controllers\Backend\Software\Applications\OverviewController as ApplicationsOverviewController;
use App\Http\Controllers\Backend\Software\Schedule\OverviewController as ScheduleOverviewController;
use App\Http\Controllers\Backend\Logical\Application\OverviewController as LogicalApplicationOverviewController;
use App\Http\Controllers\Backend\Logical\Network\add_newNetwork;
use App\Http\Controllers\Backend\Logical\Network\ConnectionsController as NetworkConnectionsController;
use App\Http\Controllers\Backend\Logical\Network\OverviewController as LogicalNetworkOverviewController;
use App\Http\Controllers\Backend\Logical\Services\OverviewController as LogicalServicesOverviewController;
use App\Http\Controllers\Backend\Logical\Network\DependanciesControlelr;
use App\Http\Controllers\Backend\Logical\Network\DependanciesController;
use App\Http\Controllers\Backend\Logical\Network\DesignController;
use App\Http\Controllers\Backend\Logical\Services\add_newServices as ServicesAdd_newServices;
use App\Http\Controllers\Backend\Logical\Services\ConnectionsController as ServicesConnectionsController;
use App\Http\Controllers\Backend\Logical\Services\DependanciesController as ServicesDependanciesController;
use App\Http\Controllers\Backend\Logical\Services\DesignController as ServicesDesignController;
use App\Http\Controllers\Backend\Software\Applications\add_newApplication;
use App\Http\Controllers\Backend\Software\Applications\WebController;
use App\Http\Controllers\Backend\Software\Schedule\add_newSchedule;
use App\Http\Controllers\Backend\Software\Schedule\UpcommingJobsController;
use App\Http\Controllers\Backend\Software\Schedule\UpcommingRenewalsController;
use App\Http\Controllers\Backend\Software\Services\add_newServices;
use App\Http\Controllers\Backend\Software\Services\CustomerFacingController;
use App\Http\Controllers\Backend\Software\Services\ExternalServices;
use App\Http\Controllers\Backend\Software\Services\InternalServices;
use App\Http\Controllers\Backend\Stock\DibgitalStock\InventoryController;
use App\Http\Controllers\Backend\Stock\DibgitalStock\LicensesController;
use App\Http\Controllers\Backend\Stock\PhysicalStock\InStockController;
use App\Http\Controllers\Backend\Stock\PhysicalStock\InventoryController as PhysicalStockInventoryController;
use App\Http\Controllers\Backend\Stock\DibgitalStock\OverviewController as DidgitalStockOverviewController;
use App\Http\Controllers\Backend\Stock\PhysicalStock\OutStockController;
use PhpParser\Node\Expr\BinaryOp\SmallerOrEqual;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(DemoController::class)->group(function () {
    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('cotact.page');
});


Route::middleware('auth')->group(function () {



    // Admin All Route
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');

        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });


    // Supplier All Route
    Route::controller(SupplierController::class)->group(function () {
        Route::get('/supplier/all', 'SupplierAll')->name('supplier.all');
        Route::get('/supplier/add', 'SupplierAdd')->name('supplier.add');
        Route::post('/supplier/store', 'SupplierStore')->name('supplier.store');
        Route::get('/supplier/edit/{id}', 'SupplierEdit')->name('supplier.edit');
        Route::post('/supplier/update', 'SupplierUpdate')->name('supplier.update');
        Route::get('/supplier/delete/{id}', 'SupplierDelete')->name('supplier.delete');
    });


    // Customer All Route
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/customer/all', 'CustomerAll')->name('customer.all');
        Route::get('/customer/add', 'CustomerAdd')->name('customer.add');
        Route::post('/customer/store', 'CustomerStore')->name('customer.store');
        Route::get('/customer/edit/{id}', 'CustomerEdit')->name('customer.edit');
        Route::post('/customer/update', 'CustomerUpdate')->name('customer.update');
        Route::get('/customer/delete/{id}', 'CustomerDelete')->name('customer.delete');

        Route::get('/credit/customer', 'CreditCustomer')->name('credit.customer');
        Route::get('/credit/customer/print/pdf', 'CreditCustomerPrintPdf')->name('credit.customer.print.pdf');

        Route::get('/customer/edit/invoice/{invoice_id}', 'CustomerEditInvoice')->name('customer.edit.invoice');
        Route::post('/customer/update/invoice/{invoice_id}', 'CustomerUpdateInvoice')->name('customer.update.invoice');

        Route::get('/customer/invoice/details/{invoice_id}', 'CustomerInvoiceDetails')->name('customer.invoice.details.pdf');

        Route::get('/paid/customer', 'PaidCustomer')->name('paid.customer');
        Route::get('/paid/customer/print/pdf', 'PaidCustomerPrintPdf')->name('paid.customer.print.pdf');

        Route::get('/customer/wise/report', 'CustomerWiseReport')->name('customer.wise.report');
        Route::get('/customer/wise/credit/report', 'CustomerWiseCreditReport')->name('customer.wise.credit.report');
        Route::get('/customer/wise/paid/report', 'CustomerWisePaidReport')->name('customer.wise.paid.report');
    });


    // Unit All Route
    Route::controller(UnitController::class)->group(function () {
        Route::get('/unit/all', 'UnitAll')->name('unit.all');
        Route::get('/unit/add', 'UnitAdd')->name('unit.add');
        Route::post('/unit/store', 'UnitStore')->name('unit.store');
        Route::get('/unit/edit/{id}', 'UnitEdit')->name('unit.edit');
        Route::post('/unit/update', 'UnitUpdate')->name('unit.update');
        Route::get('/unit/delete/{id}', 'UnitDelete')->name('unit.delete');
    });


    // Category All Route
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/all', 'CategoryAll')->name('category.all');
        Route::get('/category/add', 'CategoryAdd')->name('category.add');
        Route::post('/category/store', 'CategoryStore')->name('category.store');
        Route::get('/category/edit/{id}', 'CategoryEdit')->name('category.edit');
        Route::post('/category/update', 'CategoryUpdate')->name('category.update');
        Route::get('/category/delete/{id}', 'CategoryDelete')->name('category.delete');
    });


    // Product All Route
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product/all', 'ProductAll')->name('product.all');
        Route::get('/product/add', 'ProductAdd')->name('product.add');
        Route::post('/product/store', 'ProductStore')->name('product.store');
        Route::get('/product/edit/{id}', 'ProductEdit')->name('product.edit');
        Route::post('/product/update', 'ProductUpdate')->name('product.update');
        Route::get('/product/delete/{id}', 'ProductDelete')->name('product.delete');
    });



    // Purchase All Route
    Route::controller(PurchaseController::class)->group(function () {
        Route::get('/purchase/all', 'PurchaseAll')->name('purchase.all');
        Route::get('/purchase/add', 'PurchaseAdd')->name('purchase.add');
        Route::post('/purchase/store', 'PurchaseStore')->name('purchase.store');
        Route::get('/purchase/delete/{id}', 'PurchaseDelete')->name('purchase.delete');
        Route::get('/purchase/pending', 'PurchasePending')->name('purchase.pending');
        Route::get('/purchase/approve/{id}', 'PurchaseApprove')->name('purchase.approve');

        Route::get('/daily/purchase/report', 'DailyPurchaseReport')->name('daily.purchase.report');
        Route::get('/daily/purchase/pdf', 'DailyPurchasePdf')->name('daily.purchase.pdf');
    });


    // Invoice All Route
    Route::controller(InvoiceController::class)->group(function () {
        Route::get('/invoice/all', 'InvoiceAll')->name('invoice.all');
        Route::get('/invoice/add', 'invoiceAdd')->name('invoice.add');
        Route::post('/invoice/store', 'InvoiceStore')->name('invoice.store');

        Route::get('/invoice/pending/list', 'PendingList')->name('invoice.pending.list');
        Route::get('/invoice/delete/{id}', 'InvoiceDelete')->name('invoice.delete');
        Route::get('/invoice/approve/{id}', 'InvoiceApprove')->name('invoice.approve');

        Route::post('/approval/store/{id}', 'ApprovalStore')->name('approval.store');
        Route::get('/print/invoice/list', 'PrintInvoiceList')->name('print.invoice.list');
        Route::get('/print/invoice/{id}', 'PrintInvoice')->name('print.invoice');

        Route::get('/daily/invoice/report', 'DailyInvoiceReport')->name('daily.invoice.report');
        Route::get('/daily/invoice/pdf', 'DailyInvoicePdf')->name('daily.invoice.pdf');
    });





    // Stock All Route
    Route::controller(StockController::class)->group(function () {
        Route::get('/stock/report', 'StockReport')->name('stock.report');
        Route::get('/stock/report/pdf', 'StockReportPdf')->name('stock.report.pdf');

        Route::get('/stock/supplier/wise', 'StockSupplierWise')->name('stock.supplier.wise');
        Route::get('/supplier/wise/pdf', 'SupplierWisePdf')->name('supplier.wise.pdf');
        Route::get('/product/wise/pdf', 'ProductWisePdf')->name('product.wise.pdf');
    });
    //Hardware
    //--------EmployeeHardware
    Route::get('Hardware/Employee/Overview', [OverviewController::class, 'index'])->name('Hardware.Employee.Overview');
    Route::get('Hardware/Employee/Desktops', [DesktopsController::class, 'index'])->name('Hardware.Employee.Desktops');
    Route::get('Hardware/Employee/Laptops', [LaptopsController::class, 'index'])->name('Hardware.Employee.Laptops');
    Route::get('Hardware/Employee/Tablets', [TabletsController::class, 'index'])->name('Hardware.Employee.Tablets');
    Route::get('Hardware/Employee/Keycard', [KeycardController::class, 'index'])->name('Hardware.Employee.Keycard');
    Route::get('Hardware/Employee/Perhipeals', [PerhiperalsController::class, 'index'])->name('Hardware.Employee.Perhipeals');
    //--------Systems Hardware
    Route::get('Hardware/Systems/Overview', [SystemsOverviewController::class, 'index'])->name('Hardware.Systems.Overview');
    Route::get('Hardware/Systems/RackServers', [RackServersController::class, 'index'])->name('Hardware.Systems.RackServers');
    Route::get('Hardware/Systems/TowerServers', [TowerServersController::class, 'index'])->name('Hardware.Systems.TowerServers');
    Route::get('Hardware/Systems/BladeChassis', [BladeChassisController::class, 'index'])->name('Hardware.Systems.BladeChassis');
    Route::get('Hardware/Systems/BladeModules', [BladeModulesController::class, 'index'])->name('Hardware.Systems.BladeModules');
    Route::get('Hardware/Systems/SAN_Storage', [SanStorageController::class, 'index'])->name('Hardware.Systems.SAN_Storage');
    Route::get('Hardware/Systems/AccessControl', [SystemsAccessControlController::class, 'index'])->name('Hardware.Systems.AccessControl');
    Route::get('Hardware/Systems/Ecommerce', [EcommerceController::class, 'index'])->name('Hardware.Systems.Ecommerce');
    Route::get('Hardware/Systems/Surveillance', [SurveillanceController::class, 'index'])->name('Hardware.Systems.Surveillance');

    //--------Networking Hardware
    Route::get('Hardware/Networking/Overview', [NetworkingOverviewController::class, 'index'])->name('Hardware.Networking.Overview');
    Route::get('Hardware/Networking/Routers', [RoutersController::class, 'index'])->name('Hardware.Networking.Routers');
    Route::get('Hardware/Networking/DistrobutionSwitches', [DistrobutionSwitchesController::class, 'index'])->name('Hardware.Networking.DistrobutionSwitches');
    Route::get('Hardware/Networking/AccessSwitches', [AccessSwitchesController::class, 'index'])->name('Hardware.Networking.AccessSwitches');
    Route::get('Hardware/Networking/WirelessAccessPoints', [WirelessAccessPointsController::class, 'index'])->name('Hardware.Networking.WirelessAccessPoints');
    Route::get('Hardware/Networking/Firewalls', [FirewallsController::class, 'index'])->name('Hardware.Networking.Firewalls');
    Route::get('Hardware/Networking/IPS', [IpsController::class, 'index'])->name('Hardware.Networking.IPS');
    Route::get('Hardware/Networking/IDS', [IdsController::class, 'index'])->name('Hardware.Networking.IDS');
    Route::get('Hardware/Networking/RemoteAccessSystems', [RemoteAccessSystemsControllers::class, 'index'])->name('Hardware.Networking.RemoteAccessSystems');
    Route::get('Hardware/Networking/VPN_Systems', [VpnSystemsController::class, 'index'])->name('Hardware.Networking.VPN_Systems');
    Route::get('Hardware/Networking/TelephonySystems', [TelephonySystemsController::class, 'index'])->name('Hardware.Networking.TelephonySystems');

    //--------Physical Security Hardware
    Route::get('Hardware/PhysicalSecurity/Overview', [PhysicalSecurityOverviewController::class, 'index'])->name('Hardware.PhysicalSecurity.Overview');
    Route::get('Hardware/PhysicalSecurity/AccessControl', [AccessControlController::class, 'index'])->name('Hardware.PhysicalSecurity.AccessControl');
    Route::get('Hardware/PhysicalSecurity/CCTV', [CctvController::class, 'index'])->name('Hardware.PhysicalSecurity.CCTV');
    Route::get('Hardware/PhysicalSecurity/AlarmSystems', [AlarmSystemsController::class, 'index'])->name('Hardware.PhysicalSecurity.AlarmSystems');
    Route::get('Hardware/PhysicalSecurity/Racks_CommsCabinets', [Racks_ConnsCabinetsController::class, 'index'])->name('Hardware.PhysicalSecurity.Racks_CommsCabinets');
    //Software
    //--------Applications
    Route::get('Software/Applications/Overview', [ApplicationsOverviewController::class, 'index'])->name('Software.Applications.Overview');
    Route::get('Software/Applications/Web', [WebController::class, 'index'])->name('Software.Applications.Web');
    Route::get('Software/Applications/DataStorage', [DataStorage::class, 'index'])->name('Software.Applications.DataStorage');
    Route::get('Software/Applications/FileStorage', [FileStorage::class, 'index'])->name('Software.Applications.FileStorage');
    Route::get('Software/Applications/E-Commerce', [ApplicationsEcommerceController::class, 'index'])->name('Software.Applications.E-Commerce');
    Route::get('Software/Applications/CorperateGeneral', [CorperateGeneralController::class, 'index'])->name('Software.Applications.CorperateGeneral');
    Route::get('Software/Applications/CorperateSensitive', [CorperateSensitiveController::class, 'index'])->name('Software.Applications.CorperateSensitive');
    Route::get('Software/Applications/Educational', [EducationalController::class, 'index'])->name('Software.Applications.Educational');
    Route::get('Software/Applications/LicensedSoftware', [LicensedSoftwareController::class, 'index'])->name('Software.Applications.LicensedSoftware');
    //--------Services
    Route::get('Software/Services/Overview', [ServicesOverviewController::class, 'index'])->name('Software.Services.Overview');
    Route::get('Software/Services/InternalServices', [InternalServices::class, 'index'])->name('Software.Services.InternalServices');
    Route::get('Software/Services/ExternalServices', [ExternalServices::class, 'index'])->name('Software.Services.ExternalServices');
    Route::get('Software/Services/CustomerFacing', [CustomerFacingController::class, 'index'])->name('Software.Services.CustomerFacing');

    //--------Schedule
    Route::get('Software/Schedule/Overview', [ScheduleOverviewController::class, 'index'])->name('Software.Schedule.Overview');
    Route::get('Software/Schedule/UpcommingRenewals', [UpcommingRenewalsController::class, 'index'])->name('Software.Schedule.UpcommingRenewals');
    Route::get('Software/Schedule/UpcommingJobs', [UpcommingJobsController::class, 'index'])->name('Software.Schedule.UpcommingJobs');
    //Logical
    //--------Application
    Route::get('Logical/Application/Overview', [LogicalApplicationOverviewController::class, 'index'])->name('Logical.Application.Overview');
    Route::get('Logical/Application/Design', [Design::class, 'index'])->name('Logical.Application.Design');
    Route::get('Logical/Application/Connections', [ConnectionsController::class, 'index'])->name('Logical.Application.Connections');
    Route::get('Logical/Application/Dependancies', [ApplicationDependanciesController::class, 'index'])->name('Logical.Application.Dependancies');

    //--------Network
    Route::get('Logical/Network/Overview', [LogicalNetworkOverviewController::class, 'index'])->name('Logical.Network.Overview');
    Route::get('Logical/Network/Design', [DesignController::class, 'index'])->name('Logical.Network.Design');
    Route::get('Logical/Network/Connections', [NetworkConnectionsController::class, 'index'])->name('Logical.Network.Connections');
    Route::get('Logical/Network/Dependancies', [DependanciesController::class, 'index'])->name('Logical.Network.Dependancies');
    //--------Services
    Route::get('Logical/Services/Overview', [LogicalServicesOverviewController::class, 'index'])->name('Logical.Services.Overview');
    Route::get('Logical/Services/Design', [ServicesDesignController::class, 'index'])->name('Logical.Services.Design');
    Route::get('Logical/Services/Connections', [ServicesConnectionsController::class, 'index'])->name('Logical.Services.Connections');
    Route::get('Logical/Services/Dependancies', [ServicesDependanciesController::class, 'index'])->name('Logical.Services.Dependancies');
    //Business
    //-------Sites 
    Route::get('Business/Sites/BranchOffices', [BranchOfficesController::class, 'index'])->name('Business.Sites.BranchOffices');
    Route::get('Business/Sites/CustomerSites', [CustomerSitesController::class, 'index'])->name('Business.Sites.CustomerSites');
    Route::get('Business/Sites/Headquaters', [HeadquatersController::class, 'index'])->name('Business.Sites.Headquaters');
    Route::get('Business/Sites/MeetingRooms', [MeetingRooms::class, 'index'])->name('Business.Sites.MeetingRooms');
    Route::get('Business/Sites/Venues', [VenuesController::class, 'index'])->name('Business.Sites.Venues');
    Route::get('Business/Sites/SmallOffice-HomeOffice', [SmallOffice_HomeOfficeController::class, 'index'])->name('Business.Sites.SmallOffice-HomeOffice');
    //-------Processes
    Route::get('Business/Processes/Overview', [ProcessessOverviewController::class, 'index'])->name('Business.Processes.Overview');
    Route::get('Business/Processes/AllDiagrams', [AllDiagramsController::class, 'index'])->name('Business.Processes.AllDiagrams');
    Route::get('Business/Processes/ServiceStrategy', [ServiceStrategyController::class, 'index'])->name('Business.Processes.ServiceStrategy');
    Route::get('Business/Processes/ServiceDesign', [ServiceDesignController::class, 'index'])->name('Business.Processes.ServiceDesign');
    Route::get('Business/Processes/ServiceTransition', [ServiceTransitionController::class, 'index'])->name('Business.Processes.ServiceTransition');
    Route::get('Business/Processes/ServiceOperation', [ServiceOperationController::class, 'index'])->name('Business.Processes.ServiceOperation');
    Route::get('Business/Processes/ContinualServiceImprovement', [ContinualServiceImprovementController::class, 'index'])->name('Business.Processes.ContinualServiceImprovement');
    //Stock
    //-------PhysicalStock
    Route::get('Stock/PhysicalStock/Overview', [PhysicalStockOverviewController::class, 'index'])->name('Stock.PhysicalStock.Overview');
    Route::get('Stock/PhysicalStock/Inventory', [PhysicalStockInventoryController::class, 'index'])->name('Stock.PhysicalStock.Inventory');
    Route::get('Stock/PhysicalStock/Inventory', [PhysicalStockInventoryController::class, 'index'])->name('Stock.PhysicalStock.Inventory');
    // Route::get('Stock/PhysicalStock/InStock', [InStockController::class, 'index'])->name('Stock.PhysicalStock.InStock');
    // Route::get('Stock/PhysicalStock/OutStock', [OutStockController::class, 'index'])->name('Stock.PhysicalStock.OutStock');
    //-------Didgital Stock
    Route::get('Stock/DidgitalStock/Overview', [DidgitalStockOverviewController::class, 'index'])->name('Stock.DidgitalStock.Overview');
    Route::get('Stock/DidgitalStock/Inventory', [InventoryController::class, 'index'])->name('Stock.DidgitalStock.Inventory');
    // Route::get('Stock/DidgitalStock/Licenses', [LicensesController::class, 'index'])->name('Stock.DidgitalStock.Licenses');

    //-------DidgitalStock
}); // End Group Middleware




// Default All Route
Route::controller(DefaultController::class)->group(function () {
    Route::get('/get-category', 'GetCategory')->name('get-category');
    Route::get('/get-product', 'GetProduct')->name('get-product');
    Route::get('/check-product', 'GetStock')->name('check-product-stock');
});











Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


// Route::get('/contact', function () {
//     return view('contact');
// });
