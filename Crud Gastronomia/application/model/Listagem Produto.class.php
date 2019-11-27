<?php
class Produto{
    //include_once("conexao.class.php");
    //declaracao de variaveis publicas e privadas
    public $cod_produto;
    public $codigo_barra;
    public $produto;
 
    // Metodo construtor setamos aqui o que queremos que ele faça ao criar o objeto
    function __construct(){
                //inclue a classe conexao se não estiver incluida
                include_once("conexao.class.php");
        //criamos a nossa conexao com o banco de dados e selecionamos o banco
                    //Criar uma variavel para armazer a instancia(objeto) da classee conexao
                               $oConexao = new Conexao();
                               //Executar o metodo setConectar da classe Conexao
                               $oConexao->setConectar();
        echo "Conectado.<br>";
    }
    function setProduto(){
        //realiza o insert no banco de dados passando os valores do objeto criado
        $insertProdutos = mysql_query("insert into produtos values(NULL ,"$this->codigo_barra","$this->produto")");
        echo "Inserido.<br>";
    }
}

<!--?php
class Produto{
 //include_once(" conexao.class.php");
="" declaracao="" de="" variaveis="" publicas="" e="" privadas
="" public="" $cod_produto;
="" $codigo_barra;
="" $produto;

="" metodo="" construtor="" setamos="" aqui="" o="" que="" queremos="" ele="" faça="" ao="" criar="" objeto
="" function="" __construct(){
="" inclue="" a="" classe="" conexao="" se="" não="" estiver="" incluida
="" include_once("conexao.class.php");
="" criamos="" nossa="" com="" banco="" dados="" selecionamos="" banco
="" uma="" variavel="" para="" armazer="" instancia(objeto)="" da="" classee="" conexao
="" $oconexao="new" conexao();
="" executar="" setconectar="" $oconexao->setconectar();
="" echo="" "conectado.<br>";
="" }
="" setproduto(){
="" realiza="" insert="" no="" passando="" os="" valores="" do="" objeto="" criado
="" $insertprodutos="mysql_query("insert" into="" produtos="" values(null="" ,"$this->codigo_barra","$this->produto")");
="" "inserido.<br>";
="" }
}
?>
"="" v:shapes="_x0000_s1051"-->