<?php include_once "src/partials/_head.php" ?>

<?php include_once "src/partials/_header.php" ?>

        <div class="row">
            <aside class="col-md-3">
                <h1>Options</h1>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="crud_option" id="gridRadios1" value="create" checked>
                    <label class="form-check-label" for="gridRadios1">Create</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="crud_option" id="gridRadios1" value="read">
                    <label class="form-check-label" for="gridRadios1">Read</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="crud_option" id="gridRadios1" value="update">
                    <label class="form-check-label" for="gridRadios1">Update</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="crud_option" id="gridRadios1" value="delete">
                    <label class="form-check-label" for="gridRadios1">Delete</label>
                </div>
            </aside>
            <section class="col-md-9">
                        
            <form method="GET" action="create.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John">
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Doe">
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth date</label>
                    <input type="number" class="form-control" id="birth_date" name="birth_date" placeholder="11/03/1960">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" id="cpf" name="cpf" placeholder="155.047.837-04">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="+55(35)991523974">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="siebel3d@outlook.com">
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Continue</button>
                    </div>
                </div>
            </form>
            </section>
        </div>
        
        <?php include_once "src/partials/_footer.php" ?>   