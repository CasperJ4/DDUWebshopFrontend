
<?php include 'header.php'; ?>

<body>
    <div class="container mt-4 text-center">
        <h1>Welcome to Our Modern Website</h1>
        
     <?php include 'navbar.php'; ?>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Kategori 1</a>
                    <a href="#" class="list-group-item list-group-item-action">Kategori 2</a>
                    <a href="#" class="list-group-item list-group-item-action">Kategori 3</a>
                    <a href="#" class="list-group-item list-group-item-action">Kategori 4</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Produkt 1</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">50 kr <small class="text-muted">/ stk</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Produkt detalje 1</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Køb nu</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Produkt 2</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">75 kr <small class="text-muted">/ stk</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Produkt detalje 1</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Køb nu</button>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php include 'footer.php'; ?>
</body>

</html>