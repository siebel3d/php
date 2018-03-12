<?php include_once "src/partials/_head.php" ?>

<?php include_once "src/partials/_header.php" ?>

<?php require_once "src/create_to_file.php"; ?>

<div class="row">
    <aside class="col-md-3">
        <h1>Options</h1>
    </aside>
    <section class="col-md-9">                        
    <?php
        $name = $_GET['name'];
        $last_name = $_GET['last_name'];
        $birth_date = $_GET['birth_date'];
        $cpf = $_GET['cpf'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];

        $test = CreateToFile::file($name, $last_name, $birth_date, $cpf, $phone, $email);
    ?>
    <form method="GET" action="index.php" class="return_main_page">
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Return to main page</button>
            </div>
        </div>
     </form>
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary"><a href="src/output/s3d_customers.txt" target="_blank">Open output file</a></button>
        </div>
    </div>
    </section>
</div>

<?php include_once "src/partials/_footer.php" ?>   