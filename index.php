<?php
include "findAll.php";
include "html.php";
?>

    <title>Masareef</title>
<?php
include "header.php";
?>
        <h1>Masareef {{}}</h1>
    </div>
    <div class="row">

        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Categorie</th>
                    <th>Sous categorie</th>
                    <th>Montant</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php


                $i = 1;
                while ($row = $stmt->fetchObject()) {

                    $date = new DateTime($row->date);
                    $date = $date->format("d/m/Y");
                    ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row->category ?></td>
                        <td><?= $row->subCategory ?></td>
                        <td><?= $row->amount ?></td>
                        <td><?= $date ?></td>
                        <td>
                            <button type="button" class="btn btn-lg btn-info" style="margin-right: 5px;">Modify</button>
                            <button type="button" class="btn btn-lg btn-warning">Delete</button>
                        </td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>

                </tbody>
            </table>
        </div>
    </div><!--- /row---->

<?php

include "footer.php";
?>




