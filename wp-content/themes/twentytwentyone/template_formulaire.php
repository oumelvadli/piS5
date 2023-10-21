<form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <!-- Autres champs du formulaire -->
    <button type="submit" class="btn btn-primary">Envoyer</button>
    <input type="hidden" name="action" value="submit_form">
    <?php wp_nonce_field( 'submit_form_nonce', 'submit_form_nonce' ); ?>
</form>