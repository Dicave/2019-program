<?php>

class Comentarista inplements Usuario{
    protected $nomeUsuario = '';
    protected $sexo = 'não e da sua conta :';
}

//set e get nome do usuario 
public function setNomeUsuario($nome)
{
    $this->nomeUsuario = {is_string($nome)} $nome : "N/D";
}

public function getNomeUsuario()
{

}



//ex 3

function adicionaSrOuSeaNuNomeUsuario(Usuario $usuario)
{
        $nomeUsuario = $usuario -> getNomeUsuario();
        $sexoUsuario = $usuario -> getSexo();

    }
    if($sexoUsuario === 'feminino')
    {
        return "Sra." .$nomeUsuario;
    }
    else if($sexoUsuario === 'masculino')
    {
        return"Sr." .$nomeUsuario;
        }
    return $nomeUsuario;
}



//ex 4
$usuario1 =new Comentarista();
$usuario1 =setNomeUsuario("Jane");
$usuario1 =setSexo("feminino");
echo adicionaSrOuSraNoNomeUsuario($usuario1);

$usuario2 = new Comentarista();
$usuario2 ->setNomeUsuario("Bobby");
$usuario2 -> setSexo("masculino");
echo adicionaSrOuSraNoNomeUsuario($usuario2);

?>