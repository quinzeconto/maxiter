<?php include __DIR__ . "/../_header/header.php"; ?>

<!-- Page Title -->
<?php PagesTitleModel::title("Maxiter - Home Page"); ?>
<link rel="stylesheet" href="./resources/views/pages/list-example/css/list-example.css">

<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    <!-- NAVBAR -->
    <?php include __DIR__ . "/../_navbar/navbar.php"; ?>
    <!-- NAVBAR -->

    <!-- SIDEBAR -->
    <?php include __DIR__ . "/../_sidenav/sidenav.php"; ?>
    <!-- SIDEBAR -->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <!-- CARDS -->
            <?php include __DIR__ . "/../_cards/cards.php"; ?>
            <!-- CARDS -->

            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?= EnvModel::env("APP_NAME") ?> - List Example
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div style="text-align:justify;" class="col-xl-12 col-lg-8">
                                    <!-- CODE HERE HERE -->
                                    <table class="professional-table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody-table">
                                            <tr>
                                                <td>John Doe</td>
                                                <td>Project Manager overseeing the development team.</td>
                                                <td>2024-01-15</td>
                                            </tr>
                                            <tr>
                                                <td>Jane Smith</td>
                                                <td>Lead Designer responsible for UI/UX design.</td>
                                                <td>2024-02-20</td>
                                            </tr>
                                            <tr>
                                                <td>Mike Johnson</td>
                                                <td>Software Engineer working on backend systems.</td>
                                                <td>2024-03-10</td>
                                            </tr>
                                            <tr>
                                                <td>Emily Davis</td>
                                                <td>Quality Assurance Specialist ensuring product quality.</td>
                                                <td>2024-04-05</td>
                                            </tr>
                                            <tr>
                                                <td>Chris Lee</td>
                                                <td>Data Analyst analyzing user data for insights.</td>
                                                <td>2024-05-18</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<script src="./resources/views/pages/list-example/js/list-example.js"></script>
<?php include __DIR__ . "/../_footer/footer.php"; ?>