<template>
<div class="row justify-content-center">
    name
    sobrenome
    genero
    nasc
    telefone celular
    cpf
    active

    endereço
    cep
    rua
    numero, complemento
    tipo, cidade, estado , bairro
</div>



 <div class="container">
    <div class="py-5 text-center">
        <h1 class="d-block mx-auto mb-4">
            <i class="bi bi-pencil-square"></i>
        </h1>
        <h2>Finalizar cadastro</h2>
        <p class="lead">Dados cadastrais do paciente</p>
    </div>
    <!-- FORM E RESUMO -->
    <div class="row">
        <!-- RESUMO -->
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Resumo</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Nome Completo</h6>
                        <small class="text-muted">nome paciente</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Nascimento</h6>
                        <small class="text-muted">gender</small>
                    </div>
                    <div>
                        <h6 class="my-0">Gênero</h6>
                        <small class="text-muted">gender</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Telefone</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <div>
                        <h6 class="my-0">Celular</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">CPF</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <div>
                        <h6 class="my-0">Ativo</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span class="font-bold">Endereço</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Cep</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <div>
                        <h6 class="my-0">tipo</h6>
                        <small class="text-muted">tipo</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">rua..., numero, complemento</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <small class="text-muted">bairro</small>
                    </div>
                    <div>
                        <small class="text-muted">cidade</small>
                    </div>
                    <div>
                        <small class="text-muted">estado</small>
                    </div>
                </li>
            </ul>
        </div>
        <!-- FORM -->
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Dados Cadastrais</h4>
            <form class="needs-validation" novalidate>            
                <!-- NOME -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Primeiro nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="surname">Sobrenome</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid surname is required.
                        </div>
                    </div>
                </div>
                <!-- NASCIMENTO, CPF, ATIVO -->
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="birthday">Data de Nascimento</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" min="2008/01/01">
                        <div class="invalid-feedback">
                            Please enter a valid date.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf">
                        <div class="invalid-feedback">
                            Please enter a valid cpf.
                        </div>
                    </div>          
                    <div class="col-md-4 custom-control custom-checkbox m-auto">
                        <input type="checkbox" class="custom-control-input" id="activeUser">
                        <label class="custom-control-label ml-2" for="activeUser">Usuário Ativo?</label>
                    </div>
                </div>
                <!-- TELEFONE, CELULAR -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="telephone">Telefone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cellphone">Celular</label>
                        <input type="text" class="form-control" id="cellphone" name="cellphone">
                    </div>
                </div>
                <!-- GENERO -->
                <h4 class="mb-3">Gênero</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="feminino" name="gender" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label ml-2" for="feminino">Feminino</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="masculino" name="gender" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label ml-2" for="masculino">Masculino</label>
                    </div>
                </div>
                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="email">Email // dados do user</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                </div>

                <hr class="mb-4">
                <!-- ENDEREÇO -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="zipcode">Cep</label>
                        <input type="text" class="form-control" id="zipcode" placeholder="00000000" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="street">Endereço</label>
                        <input type="text" class="form-control" id="street">
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="number">Número</label>
                        <input type="text" class="form-control" id="number">
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="complement">Complemento</label>
                        <input type="text" class="form-control" id="complement">
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="district">Bairro</label>
                        <input type="text" class="form-control" id="district">
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" id="city">
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="state">Estado</label>
                        <input type="text" class="form-control" id="state">
                    </div>
                </div>

        
                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" id="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>
            

                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Payment</h4>
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                            Name on card is required
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>
                </div>
                
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
    </div>

</div>


<div class="row justify-content-center">
    <ModalMessage v-if="openModalMsg" :title="titleModal" :text="textModal" @fechar="fecharModalMsg"/>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- <p>Dados do form</p>
        Func: {{ form.employee }} <br>
        Email: {{ form.email }} <br>
        Senha: {{ form.password }} <br>
        Confirma Senha: {{ form.password_confirmation }} <br> -->
    </div>
</div>

</template>

<script setup>
import { onBeforeMount, onMounted, ref } from 'vue';
import { useAuthStore } from '@/libs/store/auth';
import api from '@/libs/axios/index';
import { useRouter, useRoute } from 'vue-router'

const route = useRoute();
const auth = useAuthStore();
const client = ref('');

async function getUser(url = `/api/user/${auth.loggedUser.id}`) {
    await api.get(url)
    .then( ({data}) => {
        console.log('response user', data)
        client.value = data.user;
        
    })
    .catch((e) => {
        console.log('Erro user: ', e);
    })
}

onMounted(async () => {
    console.log('params', route.params.userId);
});

</script>
