<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/imgs/icons/icon-logo.svg" type="image/x-icon">

        <title>Pagamento</title>

        <!-- Fonts Google -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- Styles -->

        <link rel="stylesheet" href="/css/check-out.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- JavaScript -->

        <script src="/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4ClPipBUdRQ+yhWlf0nMKU9ZXmrWQ+VwGvGZl5sG4giQnDqf5aMJbB/+6" crossorigin="anonymous"></script>

    </head>
    <body>

    <a href="/" class="fixed-top pull-left m-2"><button type="button" class="btn" id="btn-back">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"></path>
        </svg>
    </button></a>  
    <div class="container">
    <main>
        <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/imgs/logo.png" alt="" width="90" height="57">
        <h2 class="fw-bold text-body-emphasis">Pagamento</h2>
        <p class="lead">Escolha a forma de pagamento para continuar</p>
        </div>

        <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text">Seu carrinho</span>
            <span class="badge rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                <h6 class="my-0">Curso 1</h6>
                <small class="text-body-secondary">descrição</small>
                </div>
                <span class="text-body-secondary">$00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                <div class="text-success">
                <h6 class="my-0">Cupom</h6>
                <small>EXEMPLOCUPOM</small>
                </div>
                <span class="text-success">−R$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>R$20</strong>
            </li>
            </ul>

            <form class="card p-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cupom">
                <button type="submit" class="btn">Aplicar</button>
            </div>
            </form>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Endereço de cobrança</h4>
            <form class="needs-validation" novalidate="">
            <div class="row g-3">
                <div class="col-sm-6">
                <label for="firstName" class="form-label">Primeiro nome</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                </div>

                <div class="col-sm-6">
                <label for="lastName" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                </div>

                <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-body-secondary">(Opcional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com">
                <div class="invalid-feedback">
                    Email inválido!
                </div>
                </div>

                <div class="col-12">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="address" placeholder="Rua Fulano da Silva" required="">
                </div>

                <div class="col-12">
                <label for="address2" class="form-label">Endereço 2<span class="text-body-secondary">(Opcional)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="Apartamento, casa e etc.">
                </div>

                <div class="col-md-5">
                <label for="country" class="form-label">Pais</label>
                <select class="form-select" id="country" required="">
                    <option value="">Selecione</option>
                    <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                    Selecione o seu país.
                </div>
                </div>

                <div class="col-md-4">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" id="state" required="">
                    <option value="">Selecione</option>
                    <option>São Paulo</option>
                </select>
                <div class="invalid-feedback">
                    Selecione seu estado.
                </div>
                </div>

                <div class="col-md-3">
                <label for="zip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                    CEP inválido.
                </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="form-check">
            <input type="checkbox" class="custom-checkbox-input" id="save-info">
            <label class="custom-checkbox-label form-check-label" for="save-info">Salve essas informações para a próxima vez</label>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Pagamento</h4>

            <div class="my-3">
            <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="custom-radio-input" checked required>
            <label class="custom-radio-label form-check-label" for="credit">Cartão de crédito</label>
        </div>
        <div class="form-check">
            <input id="debit" name="paymentMethod" type="radio" class="custom-radio-input" required>
            <label class="custom-radio-label form-check-label" for="debit">Cartão de débito</label>
        </div>
        <div class="form-check">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-radio-input" required>
            <label class="custom-radio-label form-check-label" for="paypal">Pix</label>
        </div>
            </div>

            <div class="row gy-3">
                <div class="col-md-6">
                <label for="cc-name" class="form-label">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-body-secondary">Nome que aparece no cartão</small>
                <div class="invalid-feedback">
                    Nome inválido.
                </div>
                </div>

                <div class="col-md-6">
                <label for="cc-number" class="form-label">Número do cartão</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                    Número de cartão inválido.
                </div>
                </div>

                <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Validade</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                    Data inválida.
                </div>
                </div>

                <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                    Código de segurança inválido
                </div>
                </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continuar</button>
            </form>
        </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1">© 2024 Banco Santander (Brasil) S.A. </br> CNPJ: 90.400.888/0001-42
        Av. Presidente Juscelino Kubitscheck 2041/2235 – Vila Olímpia – São Paulo/SP.</p>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="checkout.js"></script>

</body>
</html>