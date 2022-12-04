 <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <!-- User details -->
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li><a href="{{ url('/dashboard') }}" class="waves-effect"><i class="ri-search-line"></i><span>Everything</span></a></li>

        <hr style="width:100%;text-align:left;margin-left:0">
        <li class="menu-title">Hardware</li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-computer-line"></i><span>Employee Hardware</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('Hardware.Employee.Overview') }}">Overview</a></li>
                <li><a href="{{ route('Hardware.Employee.Desktops') }}">Desktops</a></li>
                <li><a href="{{ route('Hardware.Employee.Laptops') }}">Laptops</a></li>
                <li><a href="{{ route('Hardware.Employee.Tablets') }}">Tablets</a></li>
                <li><a href="{{ route('Hardware.Employee.Keycard') }}">Keycard</a></li>
                <li><a href="{{ route('Hardware.Employee.Perhipeals') }}">Perhiperals</a></li>
                <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-database-line"></i><span>Systems Hardware</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('Hardware.Systems.Overview') }}">Overview</a></li>
                <li><a href="{{   route('Hardware.Systems.RackServers') }}">Rack Servers</a></li>
                <li><a href="{{ route('Hardware.Systems.TowerServers') }}">Tower Servers</a></li>
                <li><a href="{{ route('Hardware.Systems.BladeChassis') }}">Blade Chassis</a></li>
                <li><a href="{{ route('Hardware.Systems.BladeModules') }}">Blade Modules</a></li>
                <li><a href="{{ route('Hardware.Systems.SAN_Storage') }}">SAN Storage</a></li>
                <li><a href="{{ route('Hardware.Systems.AccessControl') }}">Access Control</a></li>
                <li><a href="{{ route('Hardware.Systems.Ecommerce') }}">Ecommerce</a></li>
                <li><a href="{{ route('Hardware.Systems.Surveillance') }}">Surveillance</a></li>
                <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
        </li>
         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-router-fill"></i><span>Networking Hardware</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('Hardware.Networking.Overview') }}">Overview</a></li>
                <li><a href="{{ route('Hardware.Networking.Routers') }}">Routers</a></li>
                <li><a href="{{ route('Hardware.Networking.DistrobutionSwitches') }}">Distrobution Switches</a></li>
                <li><a href="{{ route('Hardware.Networking.AccessSwitches') }}">Access Switches</a></li>
                <li><a href="{{ route('Hardware.Networking.WirelessAccessPoints') }}">Wireless Access Points</a></li>
                <li><a href="{{ route('Hardware.Networking.Firewalls') }}">Firewalls</a></li>
                <li><a href="{{ route('Hardware.Networking.IPS') }}">IPS</a></li>
                <li><a href="{{ route('Hardware.Networking.IDS') }}">IDS</a></li>
                <li><a href="{{ route('Hardware.Networking.RemoteAccessSystems') }}">Remote Access Systems</a></li>
                <li><a href="{{ route('Hardware.Networking.VPN_Systems') }}">VPN Systems</a></li>
                <li><a href="{{ route('Hardware.Networking.TelephonySystems') }}">Telephony Systems</a></li>
                <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-shield-line"></i><span>Physical Security</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('Hardware.PhysicalSecurity.Overview') }}">Overview</a></li>
                <li><a href="{{ route('Hardware.PhysicalSecurity.AccessControl') }}">Access Control</a></li>
                <li><a href="{{ route('Hardware.PhysicalSecurity.CCTV') }}">CCTV</a></li>
                <li><a href="{{ route('Hardware.PhysicalSecurity.AlarmSystems') }}">Alarm Systems</a></li>
                <li><a href="{{ route('Hardware.PhysicalSecurity.Racks_CommsCabinets') }}">Racks & Comms Cabinets</a></li>
                <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
        </li>
        <li class="menu-title">Software</li>
        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-apps-line"></i><span>Applications</span></a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('Software.Applications.Overview') }}">Overview</a></li>
              <li><a href="{{ route('Software.Applications.Web') }}">Web</a></li>
              <li><a href="{{ route('Software.Applications.DataStorage') }}">Data Storage</a></li>
              <li><a href="{{ route('Software.Applications.FileStorage') }}">File Storage</a></li>
              <li><a href="{{ route('Software.Applications.E-Commerce') }}">E-commerce</a></li>
              <li><a href="{{ route('Software.Applications.CorperateGeneral') }}">Corperate General</a></li>
              <li><a href="{{ route('Software.Applications.CorperateSensitive') }}">Corperate Sensitive</a></li>
              <li><a href="{{ route('Software.Applications.Educational') }}">Educational</a></li>
              <li><a href="{{ route('Software.Applications.LicensedSoftware') }}">Licensed Software</a></li>
              <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
          </ul>
      </li>
        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-bubble-chart-line"></i><span>Services</span></a>
          <ul class="sub-menu" aria-expanded="false">
              <li><a href="{{ route('Software.Services.Overview') }}">Overview</a></li>
              <li><a href="{{ route('Software.Services.InternalServices') }}">Internal Services</a></li>
              <li><a href="{{ route('Software.Services.ExternalServices') }}">External Services</a></li>
              <li><a href="{{ route('Software.Services.CustomerFacing') }}">Customer Facing</a></li>
              <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
      </li>
        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-calendar-2-line"></i><span>Schedule</span></a>
          <ul class="sub-menu" aria-expanded="false">
              <li><a href="{{ route('Software.Schedule.Overview') }}">Overview</a></li>
              <li><a href="{{ route('Software.Schedule.UpcommingRenewals') }}">Upcomming Renewals</a></li>
              <li><a href="{{ route('Software.Schedule.UpcommingJobs') }}">Upcomming Jobs</a></li>
              <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
      </li>
      <hr style="width:100%;text-align:left;margin-left:0">
      <li class="menu-title">Logical</li>
      <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-apps-2-line"></i><span>Application</span></a>
          <ul class="sub-menu" aria-expanded="false">
              <li><a href="{{ route('Logical.Application.Overview') }}">Overview</a></li>
              <li><a href="{{ route('Logical.Application.Design') }}">Design</a></li>
              <li><a href="{{ route('Logical.Application.Connections') }}">Connections</a></li>
              <li><a href="{{ route('Logical.Application.Dependancies') }}">Dependancies</a></li>
              <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
      </li>
      <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-qr-scan-2-fill"></i><span>Network</span></a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('Logical.Network.Overview') }}">Overview</a></li>
            <li><a href="{{ route('Logical.Network.Design') }}">Design</a></li>
            <li><a href="{{ route('Logical.Network.Connections') }}">Connections</a></li>
            <li><a href="{{ route('Logical.Network.Dependancies') }}">Dependancies</a></li>
            <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
        </ul>
      </li>
      <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-bubble-chart-line"></i><span>Services</span></a>
        <ul class="sub-menu" aria-expanded="false">
          <li><a href="{{   route('Logical.Services.Overview') }}">Overview</a></li>
          <li><a href="{{ route('Logical.Services.Design') }}">Design</a></li>
          <li><a href="{{ route('Logical.Services.Connections') }}">Connections</a></li>
          <li><a href="{{ route('Logical.Services.Dependancies') }}">Dependancies</a></li>
          <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
        </ul>
    </li>
      <hr style="width:100%;text-align:left;margin-left:0">
        <li class="menu-title">Business</li>
         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-community-line"></i><span>Sites</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('Business.Sites.BranchOffices') }}">Branch Offices</a></li>
                <li><a href="{{ route('Business.Sites.CustomerSites') }}">Customer Sites</a></li>
                <li><a href="{{ route('Business.Sites.Headquaters') }}">Headquaters</a></li>
                <li><a href="{{ route('Business.Sites.MeetingRooms') }}">Meeting Rooms</a></li>
                <li><a href="{{ route('Business.Sites.Venues') }}">Venues</a></li>
                <li><a href="{{ route('Business.Sites.SmallOffice-HomeOffice') }}">Small Office, <br>&nbsp;Home Office</a></li>
                <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
        </li>
        <li>
            <!--Processes 0 -->
            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-file-paper-2-line"></i><span>Processes</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('Business.Processes.Overview') }}">Overview</a></li>
                <li><a href="{{ route('Business.Processes.AllDiagrams') }}">All Diagrams</a></li>
                <li><a href="{{ route('Business.Processes.ServiceStrategy') }}">1. Service Strategy</a></li>
                <li><a href="{{ route('Business.Processes.ServiceDesign') }}">2. Service Design</a></li>
                <li><a href="{{ route('Business.Processes.ServiceTransition') }}">3. Service Transition</a></li>
                <li><a href="{{ route('Business.Processes.ServiceOperation') }}">4. Service Operation</a></li>
                <li><a href="{{ route('Business.Processes.ContinualServiceImprovement') }}">5. Continual Service Improvement</a></li>
                <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
            </ul>
        </li>
    <li class="menu-title">Stock</li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-inbox-archive-line"></i><span>Physical Stock</span></a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('Stock.PhysicalStock.Overview') }}">Overview</a></li>
            <li><a href="{{ route('Stock.PhysicalStock.Inventory') }}">Inventory</a></li>
            <li><a href="{{ route('stock.supplier.wise') }}">In Stock</a></li>
            <li><a href="{{ route('stock.supplier.wise') }}">Out Stock</a></li>
            <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-inbox-unarchive-line"></i><span>Didgital Stock</span></a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('Stock.DidgitalStock.Overview') }}">Overview</a></li>
            <li><a href="{{ route('Stock.DidgitalStock.Inventory') }}">Inventory</a></li>
            <li><a href="{{ route('stock.supplier.wise') }}">Licenses</a></li>
            <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
        </ul>
    </li>
    <hr style="width:100%;text-align:left;margin-left:0">
    <li class="menu-title">Support</li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="ri-profile-line"></i><span>Help Pages</span></a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="pages-starter.html">Hardware</a></li>
                <li><a href="pages-timeline.html">Software</a></li>
                <li><a href="pages-directory.html">Business</a></li>
                <li><a href="pages-invoice.html">Stock</a></li>
                <br><li><a href="{{ route('customer.wise.report') }}">Add New Category</a></li><hr style="width:100%;text-align:left;margin-left:0">
    </ul>
    </li>
    </ul>
    </div>
    <!-- Sidebar -->
    </div>
    </div>
