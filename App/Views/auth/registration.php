<?php

use Core\CreateTable;

\Core\View::render('parts/header.php', ['title' => 'Create Post']);

$table = new CreateTable;
$table->createTables();

?>



<div class="container" style="margin-top: 10%">
   

        <div class="row">
        <div class="col-10">
        </div>
        <div class="col-10">


            <form method="post" action="/user/store/">
              
                <div class="form-group">
                    <label for="first_name">Имя</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo !empty($data['first_name']) ? $data['first_name'] : ''; ?>">
                    <?php if (!empty($first_name_error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $first_name_error; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo !empty($data['last_name']) ? $data['last_name'] : ''; ?>">
                    <?php if (!empty($last_name_error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $last_name_error; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="birthday">День рождения</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo !empty($data['birthday']) ? $data['birthday'] : ''; ?>">
                    <?php if (!empty($birthday_error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $birthday_error; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>">
                    <?php if (!empty($email_error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $email_error; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="pass">Пароль</label>
                    <input type="password" class="form-control" id="pass" name="pass" value="<?php echo !empty($data['pass']) ? $data['pass'] : ''; ?>">
                    <?php if (!empty($pass_error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $pass_error; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрировать</button>
            </form>

        </div>
     
    </div>
</div>

<?php
\Core\View::render('parts/footer.php');
