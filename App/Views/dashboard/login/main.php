<main class="dashboard">
    <div class="dash-form">
        <form action="<?php echo DIR_PATH; ?>dashboard/login/" method="post">
            <div class="dash-header">
                <div class="dash-logo">
                    <img src="<?php echo DIR_IMG; ?>logo.png" alt="Logo - Lojinha">
                </div>
                <div class="dash-title">
                    <h2>Olá, seja bem-vindo!</h2>
                    <p>Faça login para acessar o painel administrativo.</p>
                </div>
            </div>
            <div class="dash-body">
                <div class="input">
                    <input type="text" name="user_admin" id="user_admin" placeholder="Nome de usuário" required>
                </div>
                <div class="input">
                    <input type="password" name="password_admin" id="password_admin" placeholder="Senha" required>
                </div>
                <div class="button">
                    <button>Entrar</button>
                </div>
            </div>
        </form>
    </div>
</main>
