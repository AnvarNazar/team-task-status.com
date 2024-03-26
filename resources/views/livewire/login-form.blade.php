<div class="login">
    @slot("extra_assets")
        @vite(['resources/css/login.css', 'resources/css/form.css', 'resources/css/button.css'])
    @endslot
    <h1>Login</h1>
    <form class="form" wire:submit="save">
        <div class="form-row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="user@company.com" autofocus wire:model="email">
        </div>
        <div class="form-row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Sup3rSecrEtPazSW0rd$" wire:model="password">
        </div>
        <div class="form-row">
            <button type="submit" class="button-primary">Login</button>
        </div>
    </form>
</div>
