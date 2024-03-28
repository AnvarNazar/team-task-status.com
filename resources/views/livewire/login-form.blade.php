<main class="login-page">
    <h1>Login</h1>
    <form class="form" wire:submit="save">
        <div class="form-group">
            <label for="email">Email</label>
            <i class="fa-duotone fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="user@company.com" autofocus wire:model="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <i class="fa-duotone fa-lock"></i>
            <input type="password" id="password" name="password" placeholder="Sup3rSecrEtPazSW0rd$"
                   wire:model="password">
        </div>
        <button type="submit" class="button-primary">
            <i class="fa-duotone fa-right-to-bracket"></i>
            Login
        </button>
    </form>
</main>
