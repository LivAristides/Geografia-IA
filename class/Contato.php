<?php
include_once 'Conectar.php';
class Contato{
	//firebase
    private $firebaseURL = 'https://teste-9ff8c-default-rtdb.firebaseio.com/';
    private $dadosJson;
private $id;
private $nome;
private $email;
private $mensagem;
private $con;

	public function getId() {
		return $this->id;
	}
	
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	
	public function getNome() {
		return $this->nome;
	}
	
	
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}

    public function getEmail() {
		return $this->email;
	}
	
	
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
	
	
	public function getMensagem() {
		return $this->mensagem;
	}
	
	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
		return $this;
	}

	public function salvar(){
		try{

		$this->con = new Conectar();
		$sql = "INSERT INTO contato  VALUES (null, ?, ?, ?);";
		$executar = $this->con->prepare($sql);
		$executar->bindValue(1, $this->nome);
        $executar->bindValue(2, $this->email);
		$executar->bindValue(3, $this->mensagem);
		return $executar->execute() == 1 ? true:false;
		}catch (PDOException $e){
			echo "Erro de bd" . $e->getMessage();
		}
	}

	public function salvarFirebase()
    {
      $tabela = curl_init($this->firebaseURL . 'contato.json');
      curl_setopt($tabela, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($tabela, CURLOPT_POSTFIELDS, $this->dadosJson);
      curl_setopt($tabela, CURLOPT_RETURNTRANSFER, true);
      $resposta = curl_exec($tabela);
      curl_close($tabela);
      return $resposta;
    }

	public function listarFirebase()
    {
      $tabela = curl_init($this->firebaseURL . 'contato.json'); //qual é a tabela
      curl_setopt($tabela, CURLOPT_RETURNTRANSFER, true);
      $resposta = curl_exec($tabela);
      curl_close($tabela);
      return $dados = json_decode($resposta, true);
    } 
	public function listar(){
		try{

		$this->con = new Conectar();
		$sql = " SELECT * FROM contato";
		$executar = $this->con->prepare($sql);
		return $executar->execute() == 1 ? $executar->fetchAll() : false;
		}catch (PDOException $e){
			echo "Erro de bd" . $e->getMessage();
		}
	}

	    /**
     * @return mixed
     */
    public function getDadosJson()
    {
        return $this->dadosJson;
    }

    /**
     * @param mixed $dadosJson 
     * @return self
     */
    public function setDadosJson($dadosJson): self
    {
        $this->dadosJson = $dadosJson;
        return $this;
    }

	public function excluir($key) {
        // Inicializa a sessão cURL e monta url completa
        $node = 'contato/' . $key;
        $ch = curl_init($this->firebaseURL . $node . '.json');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Executa a requisição e obtém a resposta
        $resposta = curl_exec($ch);
        curl_close($ch);
        // Decodifica os dados JSON da resposta para um array associativo
        return $resposta;
    }
}
