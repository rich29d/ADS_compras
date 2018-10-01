<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
	include('header.php');
?>
<body>

	<div class="mold-tela">
    
    <div class="header-menu">
    <div class="item-menu" style="background-color:#16a085">Inicio</div>
    <div class="item-menu">Funcionário</div>
    <div class="item-menu">Histórico de Compras</div>
    <div class="item-menu menu-login">ViniciusMenesesLogado</div>
    
    </div>
    
    <div class="content-telagestor">
    
    <div class="search">
    <Input type="text" id="input-search" placeholder="USE ESSE CAMPO PARA PESQUISAR"/>
    <input type="button" value="Ok" id="btn-search" />
    
    </div>
    
    <div class="content-left">
    <div class="title-header-box">Analisar Solicitação</div>
    <select name="opc-solicitacao" multiple class="select-solicitacao">
    <option value="">texto1</option>
    <option value="">texto2</option>
    </select>
    
    <input type="button" value="Pesquisar" id="btn-solicitacao" />
    
    </div>
    <div class="content-right">
    <div class="title-header-box">Informações da Solicitação</div>
    
    
    <div class="info-solicitacao">Selecione uma Solicitação para Analisar</div>
    
    </div>
    
    
   
  
    
    </div>
  
    
    


</body>
</html>
