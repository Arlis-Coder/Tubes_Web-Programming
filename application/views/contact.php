<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <link rel="stylesheet" href="/assets/css/contact.css">
    <link rel="stylesheet" href="/assets/css/home.css">
</head>

<body>
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container">
        <h2>Contact Us</h2>
        <p>Hubungi kami melalui form berikut</p>
        <form action="" method="post" style="max-width: 600px;">
            <div>
                <label for="name">Name*</label>
                <input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?>"
                    placeholder="your name" value="<?= set_value('name') ?>" />
                <div class="invalid-feedback"><?= form_error('name') ?></div>
            </div>
            <div>
                <label for="email">Email*</label>
                <input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>"
                    placeholder="your email address" value="<?= set_value('email') ?>" />
                <div class="invalid-feedback"><?= form_error('email') ?></div>
            </div>
            <div>
                <label for="message">Message*</label><br>
                <textarea name="message" cols="30" class="<?= form_error('message') ? 'invalid' : '' ?>" rows="5"
                    placeholder="write your message"><?= set_value('message') ?></textarea>
                <div class="invalid-feedback"><?= form_error('message') ?></div>
            </div>

            <div style="display: flex; gap: 1rem">
                <input type="submit" class="button button-primary" value="Kirim">
                <input type="reset" class="button" value="Reset">
            </div>
        </form>
    </div>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>