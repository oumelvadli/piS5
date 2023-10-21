<form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <input type="hidden" name="action" value="submit_form">
    <label for="name">Nom :</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>
    <input type="submit" value="Envoyer">
</form>
