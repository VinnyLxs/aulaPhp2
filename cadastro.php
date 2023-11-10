<?php 
//classe cadastro
    class cadastro {
        //declarando variaveis
        private int $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;


        public function  __construct($cpf,$nome,$telefone,$endereco,$cidade){
            $this-> setCpf($cpf);
            $this-> setNome($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade($cidade);
        }// fim do construtor

        //nomes modificadores e de consulta
        public function getCpf (){
            return $this->cpf;
        }//fim do metodo

        public function getNome(){
            return $this-> nome;
        }//fim do metodo
        
        public function getTelefone(){
            return $this-> telefone;
        }//fim do metodo

        public function getEndereco(){
            return $this->endereco;
        }//fim do metodo

        public function getCidade(){
            return $this->cidade;
        }//fim do metodo


        public function setCpf($cpf){
            return $this->cpf = $cpf;
        }//fim do metodo

        public function setNome($nome){
            return $this->nome = $nome;
        }//fim do metodo

        public function setTelefone($telefone){
            return $this->telefone = $telefone;
        }//fim do metodo

        public function setEndereco($endereco){
            return $this->endereco = $endereco;
        }//fim do metodo

        public function setCidade($cidade){
            return $this->cidade = $cidade;
        }//fim do metodo

        public function imprimir(){
            $msg = "\n\nCPF:".$this-> getcpf().
            "\nNome: ".$this->getNome().
            "\nTelefone: ".$this->getTelefone().
            "\nEndereço: ".$this->getEndereco().
            "Cidade: ".$this->getCidade();
            return $msg;
        }

        public function excluir(){
            $this-> setCpf(0);
            $this-> setNome("");
            $this-> setTelefone("");
            $this-> setEndereco("");
            $this-> setCidade("");
            return "Dados Excluidos!";
        }//Fim do metodo

        public function menu(){
            $men = "\nEscolha o que deseja atualizar: ".
                    "\n1. Nome".
                    "\n2. Telefone".
                    "\n3. Endereço".
                    "\n4. Cidade";
            return $men;
        }//Fim do metodo
        public function atualizar($opcao, $dado){
            switch($opcao){
                case 1:
                    $this->setNome($dado);
                    break;
                case 2:
                    $this->setTelefone($dado);
                    break;
                case 3:
                    $this->setEndereco($dado);
                    break;
                case 4:
                    $this->setCidade($dado);
                    break;
                default:
                return "Opção escolhida não é valida";
            }
        }//Fim do metodo

    }




?>