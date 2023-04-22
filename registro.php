<!doctypehtml>
    <html lang=pt-br>
    <meta charset=UTF-8>
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <link href=styles.css rel=stylesheet>
    <link href=login.html rel=stylesheet>
    <link href=header.html rel=stylesheet>
    <title>Login</title>
    <header>
        <div class=headerlogin>
            <div class=img><img alt=Logo src=img/senai.png></div>
            <div class=hamblogin>
                <div class=button-borders><a href=header.html><button class=primary-button>Sair</button></a></div><svg
                    height=20 viewBox="0 0 100 80" width=20>
                    <rect height=20 width=100></rect>
                    <rect height=20 width=100 y=30></rect>
                    <rect height=20 width=100 y=60></rect>
                </svg>
            </div>
        </div>
    </header>
    <main id=zedamanga>
        <section id=form>
            <div id=form-texto>
                <h1>Registrar-se</h1>
            </div>
            <div id=form-formulario>
                <form action="">
                    <div class=form-formulario-nome><label for=nome>Nome</label> <input id=nome name=nome
                            placeholder="Nome completo" required></div>
                    <div class=form-formulario-email><label for=email>E-mail</label> <input id=email name=email
                            placeholder=E-mail required type=email></div>
                    <div class=form-formulario-usuario><label for=usuario>Nome de usuário</label> <input id=usuario
                            name=usuario placeholder="Nome de usuário" required maxlength=10></div>
                    <div class=form-formulario-senha><label for=senha>Senha</label> <input id=senha name=senha
                            placeholder="Criar senha" required maxlength=8 minlength=4 type=password></div>
                    <div class=form-formulario-confirmar><label for=confirmar-senha>Confirmar senha</label> <input
                            id=confirmar-senha name=confirmar-senha placeholder="Confirmar senha" required maxlength=8
                            minlength=4 type=password></div>
                    <div class=form-formulario-registrar-se><button type=submit>Registrar-se</button></div><br>
                    <div class=form-formulario-possuo-cadastro><a href=login.html>Possuo cadastro</a></div>
                </form>
            </div>
        </section>
    </main>