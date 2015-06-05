<div class="thirteen columns content-area">
    <?= $this->Form->create($user, ['class' => 'offset-by-six sign-in']) ?>
    <?= $this->Form->input('email', ['type' => 'email']) ?>
    <?= $this->Form->input('password', ['type' => 'password']) ?>
    <?= $this->Form->input('confirm_password', ['type' => 'password']) ?>
    <?= $this->Form->button('Sign Up') ?> or <a href='#'>Sign in</a>
    <?= $this->Form->end() ?>
</div>