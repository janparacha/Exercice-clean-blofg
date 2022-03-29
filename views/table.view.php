
<?php include('views/layout/head.inc.php') ?>

<?php include('views/layout/nav-top.inc.php') ?>

<?php include('views/layout/nav-side.inc.php') ?>
                
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Articles</th>
                                            <th>Auteur</th>
                                            <th>Catégorie</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Articles</th>
                                            <th>Auteur</th>
                                            <th>Catégorie</th>
                
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($data as $onedata){ ?>
                                        <tr>
                                            <td> <?= $onedata['post_title'] ?></td>
                                            <td><?= $onedata['display_name'] ?></td>
                                            <td><?= $onedata['cat_descr'] ?></td>
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
