# forumscript-carolinexavier
 Dica de PHP no Forum Script

 ## Forum Script
 Meu perfil do forum scrip [Alyson Ronnan](https://forum.scriptbrasil.com.br/profile/94500-alyson-ronnan-martins/)

 ### Duvida no forum:
 Bom, o meu professor passou um exercício complicado, porém só tenho a primeira parte dele pois estou travada no resto dele, poderiam me ajudar?

**EXERCÍCIO:**

Objetivo da atividade: fazer um programa para receber dados de uma pesquisa (ativ_formulario.php) exibir ao final os dados da pesquisa conforme passos abaixo:

1. Fazer um formulário (ativ_formulario.php) contendo os campos:

- [x] nome (input do tipo text). :tada:
- [x] idade (input do tipo number). :tada:
- [x] sexo (dois inputs do tipo radio com as opções masculino, feminino). :tada:
- [x] computador (input do tipo checkbox ). :tada:
- [x] notebook (input do tipo checkbox). :tada:
- [x] smartphone (input do tipo checkbox). :tada:
- [x] experiência programação (select com as opções "Não possui", "Iniciante", "Intermediário", "Avançado"). :tada:

2. Enviar os dados do formulário (ativ_formulario.php passo 1) para o script (ativ_formulario2.php) de deverá:

- [x] criar um formulário. :tada:
- [x] exibir os valores recebidos (em forma de texto). :tada:
- [x] criar campos segundo os critérios: :tada:
- [ ] se o checkbox computador tiver sido marcado, exibir um textarea para digitar a configuração do         computador.
- [ ] se o checkbox notebook tiver sido marcado, exibir um textarea para digitar a configuração do notebook.
- [ ] se o checkbox smarphone tiver sido marcado, exibir um textarea para digitar a configuração do smartphone.
- [ ] se informou que possui experiência (Iniciante, Intermediário, avançado) o um campo para selecionar uma linguagem de programação (opções: C, C++, Java, PHP, Python, Perl, Ruby, outra).
- [ ] um botão para enviar os dados (o action do formulário deve enviar para ativ_resultado.php).

3. Enviar os dados do formulário do script ativ_formulario2.php para o script ativ_resultado.php

- [x] exibir todas as informações coletadas (apenas as preenchidas). :tada:

**PARTE DO CÓDIGO QUE TENHO**

```
<form method = "get" action="Trabalho4.2.php">
  <fieldset>
    <legend>Informações</legend>
      <label>Nome:</label>
          <input type="text" name="nome" size="40" maxlength="30" required/>
          <?php echo '</br>'?>
      Idade:
          <input type="number" name="idade" />
          <?php echo '</br>'?>
      Sexo:
          <?php echo '</br>'?>
          <input type="radio" name="sexo" value="masculino">Masculino
          <input type="radio" name="sexo" value="feminino" >Feminino
          <?php echo '</br>'?>
      Tem computador?
          <?php echo '</br>'?>
          <input type="checkbox" name="computador" value="sim">Sim
          <input type="checkbox" name="computador" value="não">Não
          <?php echo '</br>'?>
      Tem notebook?
          <?php echo '</br>'?>
          <input type="checkbox" name="notebook" value="sim">Sim
          <input type="checkbox" name="notebook" value="não">Não
          <?php echo '</br>'?>
      Tem smartphone?
          <?php echo '</br>'?>
          <input type="checkbox" name="smartphone" value="sim">Sim
          <input type="checkbox" name="smartphone" value="não">Não
          <?php echo '</br>'?>
      Experiência com programação:
          <select name="experiencia">
              <option value="naopossui">Não Possui</option>
              <option value="iniciante">Iniciante</option>
              <option value="intermediario">Intermediario</option>
              <option value="avançado">Avançado</option>
          </select>
          <?php echo '</br>'?>
          <input type="submit" value="Cadastrar" />
</form>
```
