<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sanju";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Boonary - Dashboard</title>
    <link rel="icon" href="output.png" type="image/x-icon">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="margin-bottom:5px;" />

            <li class="nav-item">
                <a class="nav-link" href="../logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->




                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">





                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user'] ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>

                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Donation List</h1>
                    <br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Amount</th>
                                            <th>Order Id</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>DOB</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Address</th>
                                            <th>Pincode</th>
                                            <th>Pan No.</th>
                                            <th>Eligibilty</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php 
                                    $sql = "SELECT * FROM donate";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
    
                                      ?>
                                        <tr>
                                            <td><?php echo $row["id"];?></td>
                                            <td><?php echo $row["full_name"];?></td>
                                            <td><?php echo $row["amount"];?></td>
                                            <td><?php echo $row["o_id"];?></td>
                                            <td><?php echo $row["email"];?></td>
                                            <td><?php echo $row["phone"];?></td>
                                            <td><?php echo $row["dob"];?></td>
                                            <td><?php echo $row["country"];?></td>
                                            <td><?php echo $row["state"];?></td>
                                            <td><?php echo $row["city"];?></td>
                                            <td><?php echo $row["address"];?></td>
                                            <td><?php echo $row["pincode"];?></td>
                                            <td><?php echo $row["pan"];?></td>
                                            <td><?php echo $row["eligibilty"];?></td>
                                            <td><?php echo $row["Status"];?></td>
                                        </tr>

                                        <?php
                                        }
                                        } else {
                                        echo "ERROR in showing results";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=" sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Boonary Foundation 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>

<?php } 
else {

    header("Location: ../index.php");
    exit();
}?>