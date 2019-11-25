<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">District</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>

            <?php
            foreach ($data as $items) {
                echo "<tbody>";
                echo "<tr>";


                // echo "<th scope='row'>".$items['Code']."</th>";
                // echo "<td>".$items['Name']."</td>";
                // echo "<td>".$items['HeadOfState']."</td>";
                // echo "<td>".$items['Region']."</td>";
                // echo "<td>".$items['Continent']."</td>";

                echo "<th scope='row'>" . $items['ID'] . "</th>";
                echo "<td>" . $items['Name'] . "</td>";
                echo "<td>" . $items['CountryCode'] . "</td>";
                echo "<td>" . $items['District'] . "</td>";
                echo "<td>
                    <a href=" . base_url() . "updateData/" . $items['ID'] . " data-target='#exampleModal' data-toggle='modal' class = 'btn btn-warning'>
                        <i class='fas fa-pen-alt'></i>
                    </a>
                    <a href='#' class = 'btn btn-danger'>
                        <i class='fas fa-trash'></i>
                    </a>";

                echo "</tr>";
                echo "</tbody>";
            }
            ?>
        </table>
        <a href="FormNewEmploye" class="btn btn-primary btn-lg btn-block">Form</a>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <div class="row">
                    <div class="col-md-4 offset-8 col-sm-12">
                        <?= $paginate->links(); ?>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
</body>