
<?php include('views/layout/head.inc.php') ?>

<?php include('views/layout/nav-top.inc.php') ?>

<?php include('views/layout/nav-side.inc.php') ?>
       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Contact
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Message</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($data as $onedata){ ?>
                                        <tr>
                                            <td><?= $onedata['contact_name'] ?></td>
                                            <td><?= $onedata['contact_email'] ?></td>
                                            <td><?= $onedata['contact_phone'] ?></td>
                                            <td><?= $onedata['contact_message'] ?></td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
              
<?php include ('views/layout/footer.inc.php')   ?> 


        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
