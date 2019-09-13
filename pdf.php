<?php

use Mpdf\Mpdf; 

require_once __DIR__ . '/vendor/autoload.php'; //Include AutoLoad of Class Mpdf
require_once 'validator.class.php'; 

$validator = new ValidatorFields(); // Instanciate Class Normalize Returns 

$html = '
        <div class="container">
            <div class"matricula">' . $_POST["matricula"] . '</div>
            <div class"nome">'. $_POST["nome"] . '</div>
            <div class"nascimento">' . $_POST["nascimento"] . '</div>
            <div class"sexo">' . $validator->getGender($_POST["sexo"]) . '</div>
            <div class"estado-civil">'  . $validator->getMaritalStatus($_POST["estado-civil"]) . '</div>
            <div class"cpf">' . $_POST["cpf"] . '</div>
            <div class"rg">' . $_POST["rg"] . '</div>
            <div class"rg-orgao">' . $_POST["rg-orgao"] . '</div>
            <div class"rg-data-emissao">' . $_POST["rg-data-emissao"] . '</div>
            <div class"rg-uf-emissao">' . $_POST["rg-uf-emissao"] . '</div>
            <div class"nacionalidade">' . $_POST["nacionalidade"] . '</div>
            <div class"grau-instrucao">' . $validator->getSchooling($_POST["grau-instrucao"]) . '</div>
            <div class"nome-pai">' . $_POST["nome-pai"] . '</div>
            <div class"nome-mae">' . $_POST["nome-mae"] . '</div>
            <div class"endereco">' . $_POST["endereco"] . '</div>
            <div class"endereco-numero">' . $_POST["endereco-numero"] . '</div>
            <div class"endereco-complemento">' . $_POST["endereco-complemento"] . '</div>
            <div class"endereco-cep">' . $_POST["endereco-cep"] . '</div>
            <div class"endereco-bairro">' . $_POST["endereco-bairro"] . '</div>
            <div class"endereco-cidade">' . $_POST["endereco-cidade"] . '</div>
            <div class"telefone-residencial">' . $_POST["telefone-residencial"] . '</div>
            <div class"telefone-comercial">' . $_POST["telefone-comercial"] . '</div>
            <div class"telefone-celular">' . $_POST["telefone-celular"] . '</div>
            <div class"email-pessoal">' . $_POST["email-pessoal"] . '</div>
            <div class"email-profissional">' . $_POST["email-profissional"] . '</div>
        </div>
';


$mpdf = new Mpdf(); // Initiate Class Mpdf
$mpdf->WriteHTML($html); //Build Structure
$mpdf->Output(); // Render PDF