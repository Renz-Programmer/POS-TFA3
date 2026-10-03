
<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Customer</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; margin: 40px; }
        .container { max-width: 500px; margin: auto; background: white; padding: 25px; border-radius: 10px; }
        label { display: block; margin-top: 15px; }
        input { width: 100%; padding: 10px; margin-top: 6px; box-sizing: border-box; }
        button, a { display: inline-block; margin-top: 20px; padding: 10px 15px; border: 0; border-radius: 5px; text-decoration: none; }
        button { background: #2563eb; color: white; cursor: pointer; }
        a { background: #ddd; color: black; }
        .errors { color: #dc2626; }
    </style>
</head>
<body>
<div class="container">
    <h1>New Customer</h1>

    <?php $errors = session()->getFlashdata('errors') ?? []; ?>
    <?php if (!empty($errors)): ?>
        <div class="errors">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('customers/create') ?>" method="post">
        <?= csrf_field() ?>

        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name"
               value="<?= esc(old('full_name')) ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"
               value="<?= esc(old('email')) ?>" required>

        <button type="submit">Save Customer</button>
        <a href="<?= site_url('customers') ?>">Cancel</a>
    </form>
</div>
</body>
</html>