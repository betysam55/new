<nav class="side-navbar box-scroll sidebar-scroll">
    <!-- Begin Main Navigation -->
    <ul class="list-unstyled">
        <?php if (isset($_SESSION['permission_dashboard'])) {?>
        <li class="active"><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-columns"></i><span>Dashboard</span></a>
            <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                <li><a class="active" href="../dashboard/index.php">Default</a></li>
                <li><a href="../dashboard/contacts.php">Contacts Report</a></li>
                <li><a href="../dashboard/messages.php">Messages report</a></li>
                <li><a href="../dashboard/revenue.php">Revenue report</a></li>
                <li><a href="../dashboard/subscribers.php">Subscribers Report</a></li>
            </ul>
        </li>
        <?php }if (isset($_SESSION['permission_message'])) {?>
        <li><a href="#dropdown-messages" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Messages</span></a>
            <ul id="dropdown-messages" class="collapse list-unstyled pt-0">
                <li><a href="../messages/message.php">Message</a></li>
            </ul>
        </li>
    <?php } ?>
    <?php if (isset($_SESSION['permission_contact'])) {?>
        <li><a href="#dropdown-contacts" aria-expanded="false" data-toggle="collapse"><i class="la la-share-alt"></i><span>Contacts</span></a>
            <ul id="dropdown-contacts" class="collapse list-unstyled pt-0">
                <li><a href="../contacts/contacts.php">Contacts</a></li>
                <li><a href="../contacts/subscribers.php">Subscribers</a></li>
                <li><a href="#">Contact groups</a></li>
                <li><a href="../contacts/blocked.php">Blocked</a></li>
            </ul>
        </li>
    <?php }if (isset($_SESSION['permission_promotion'])) {?>
        <li><a href="#dropdown-promotions" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>promotions</span></a>
            <ul id="dropdown-promotions" class="collapse list-unstyled pt-0">
                <li><a href="#">Promotions</a></li>
                <li><a href="#">Promotion History</a></li>

            </ul>
        </li>
    <?php }if (isset($_SESSION['permission_category'])) {?>
        <li><a href="#dropdown-categories" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Categories</span></a>
            <ul id="dropdown-categories" class="collapse list-unstyled pt-0">
                <li><a href="../categories/categories.php">Categories</a></li>
                <li><a href="../categories/service_numbers.php">Service Numbers</a></li>
            </ul>
        </li>
        <?php }if (isset($_SESSION['permission_revenue'])) {?>
        <li><a href="#dropdown-revenue" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Revenue</span></a>
            <ul id="dropdown-revenue" class="collapse list-unstyled pt-0">
                <li><a href="../revenue/revenue.php">Revenue</a></li>
            </ul>
        </li>
        <?php }if (isset($_SESSION['permission_user'])) {?>
        <li><a href="#dropdown-users" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>users</span></a>
            <ul id="dropdown-users" class="collapse list-unstyled pt-0">
                <li><a href="../users/index.php">Users</a></li>
                <li><a href="../users/roles.php">Roles</a></li>
                <li><a href="../users/permissions.php">Permmisons</a></li>
                <li><a href="../users/index.php">Configurations</a></li>
            </ul>
        </li>
        <?php }if (isset($_SESSION['permission_setting'])) {?>
        <li><a href="#"><i class="la la-spinner"></i><span>Settings</span></a></li>
    <?php }if (isset($_SESSION['permission_clients'])) {?>
        <span class="heading">Clients</span>
      <li><a href="#dropdown-cleints" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Clients</span></a>
          <ul id="dropdown-cleints" class="collapse list-unstyled pt-0">
            <?php if ($_SESSION['is_user_has_client_message_permission']==1) {?>
              <li><a href="../client/client_message.php">Messages </a></li>
          
              <li><a href="../client/revenue.php">Revenue</a></li>
              <li><a href="../client/subscribers.php">Subscribers</a></li>
              <li><a href="../client/information.php">Information</a></li>
              <?php } ?>
          </ul>
      </li>
  <?php }?>
    </ul>
  <!-- End Main Navigation -->
</nav>
