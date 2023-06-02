# Real Cursos

Projeto desenvolvido para o Trainee/Estágio da [Real Grana](https://realgrana.com.br/).

Consiste em uma Landing Page (LP) e uma Plataforma de Cursos com ambiente Administrativo.

- Desenvolvimento:
  - Front-end: HTML, CSS e JavaScript
  - Back-end: PHP e SQL


## Integrantes:

#### Desenvolvedores:

- [Leonardo Campos](https://github.com/fcamposleonardo)
- [Leonardo Nogueira](https://github.com/Leosharkdev)


#### Scrum Master:

- [Vinicius](https://www.linkedin.com/in/vinicius-carlos/)



## Tutorial de uso do git neste repositório:




### Primeira utilização

#### Baixar o projeto (dando clone):

- Abra o GitBash ou CMD/Terminal
  - A forma mais fácil é abrir o terminal ou VsCode (terminal integrado) na pasta que vai ficar o projeto
- Entre na pasta onde irá guardar o projeto: `cd /caminho/para/a/pasta`
- Clone o repositório: `git clone https://github.com/bullseyebr/real-courses`
- Entre na pasta criada pelo comando clone: `cd real-courses`


#### Criar a branch para a funcionalidade que você vai desenvolver:

- Utilize o comando `git pull` para atualizar/baixar o que tiver de modificação do repositório remoto no GitHub para o seu local
- Você provavelmente estará na branch `main`, verifique utilizando o comando `git status`
- Troque para a branch develop pelo comando: `git checkout develop`
  - Obs: sempre criar uma branch nova a partir da branch `develop`
- Crie a branch que você utilizará para desenvolver a sua funcionalidade
  - Sempre crie a branch usando `feature/` + nome da feature que irá desenvolver
  - Para criar uma branch nova você usar `git checkout` com a opção `-b`, ficando `git checkout -b nome-branch`
  - Até aqui a branch foi criada apenas no seu computador, ou seja, no repositório local
  - Precisamos enviar a branch que foi criada localmente para o servidor remoto, usando `git push -u origin nome-branch`
- Exemplo de criação de branch de uma view do painel administrativo
  - Crie a branch da funcionalidade a ser implementada: `git checkout -b feature/view-painel-adm`
  - Envie a sua branch para o repositório remoto do github: `git push -u origin feature/view-painel-adm`
  - Nas próximas vezes que der um push para subir modificações para o repositório remoto, use apenas `git push`


---

### Rotina

- Use sempre `git pull` para trazer as modificações do servidor remoto para o seu local
- Cheque em qual branch está e quais alterações foram adicionadas: `git status`
  - Certifique-se de estar na branch correta
  - Se não estiver na sua branch, vole para ela: `git checkout suabranch`
- Adicione todas as alterações feitas na sua branch
  - Para adicionar todas as modificações: `git add .`
  - Para adicionar apenas um arquivo ou pasta: `git add caminho-arquivo-ou-pasta-especifico`
- Dê um commit (verbo no infinitivo) com uma mensagem especificando as alterações: `git commit -m "cria view do painel do administrativo"`
  - Em inglês (de preferência): : `git commit -m "create view of the administrative panel"`
- Envie o commit feito para sua branch remota no GitHub: `git push` ou `git push origin nome-branch`
---

### Ao terminar a funcionalidade, avise o SCRUM que irá fazer um review e irá autorizar fazer o *merge*

- Depois de solicitado pelo Scrum Master, faça o merge entre sua branch e a `develop`
* Volte para a develop: `git checkout develop`
* Atualize a develop: `git pull`
* Volte para a sua branch: `git checkout nomedabranch`
* Mescle a develop com a sua branch: `git merge develop`
* Corrija os possíveis conflitos
* Confirme o merge dando push para o respositório remoto: `git push` ou `git push origin suabranch`
* Peça o SCRUM para fazer um review do repositório e espere a confirmação dele
* Volte para a develop: `git checkout develop`
* Faça o merge -> Mescle a develop com as alterações enviadas para sua branch: `git merge suabranch`
* Dê push para o respositório remoto: `git push origin develop`
---


### Comandos Básicos

* Listar todas as branchs: `git branch -a`
* Listar todos os commits da branch: `git log`
* Ver informações da branch: `git status`
* Visualizar modificações da branch atual: `git diff`
* Atualizar a branch: `git pull`
* Atualizar alguma branch específica: `git pull origin branch`
* Criar uma nova branch: `git checkout -b nova-branch`
* Trocar de branch: `git checkout branch_desejada`
* Adicionar todas as alterações feitas: `git add .`
* Adicionar alteração específica de um arquivo ou pasta: `git add caminho-pasta-arquivo-especifico`
* Para mesclar sua branch com outra-branch (estando dentro da sua branch): `git merge outra-branch`
* Remover branch no repositório local: `git branch -d branch-a-remover`
* Remover branch no repositório remoto: `git push -d origin branch-a-remover`
---

### Detalhamento completo com mais comandos do git

- https://www.notion.so/realgrana/Github-f8d31903dce9417e844e7c8e57f0c2a2?pvs=4
