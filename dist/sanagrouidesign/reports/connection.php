<?php 


    function abrirBanco(){
        $conexao = new mysqli("localhost", "root", "", "sanagro");
        return $conexao;
    }


    function selectColheita(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select distinct b.name, production, a.metric, ar_name, dateend
                from harvest a, crop b, area02 c, farm d
                where a.id_crop = b.id_crop and b.id_area = c.id_area and c.id_farm='$id_farm' and a.id='$id'
                order by a.created_at desc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectArea(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select ar_name, size, metric, ar_status
                from area02
                where id='$id' and id_farm='$id_farm'
                order by created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectSafra(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select DISTINCT a.name, cultive, dtini, ar_name, cro_status
                from crop a, area02 b, farm c
                where a.id_area=b.id_area and b.id_farm='$id_farm' and a.id='$id'
                order by a.created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectProdutos(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select description, brand, format(unit_value,2,'de_DE'), format(value,2,'de_DE'), quantity, metric
                from product
                where id_farm='$id_farm' and id='$id'
                order by created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectPatrimonios(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select name, type, format(value,2,'de_DE')
                from patrimony
                where id_farm='$id_farm' and id='$id'
                order by created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectClientes(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select name, contact, address, city, uf
                from customers
                where id_farm='$id_farm' and id='$id'
                order by created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }
    
    function selectFornecedores(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select pro_name, contact, address, city, uf
                from providers
                where id_farm='$id_farm' and id='$id'
                order by created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }
    function selectContaPagar(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select DISTINCT description, format(value,2,'de_DE'), installments, format(installment_value,2,'de_DE'), status, expiration, pro_name
                from contaapagar a, providers b, farm c
                where a.id_providers=b.id_providers and b.id_farm='$id_farm' and a.id='$id'
                order by a.created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }
    
    function selectContaReceber(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select DISTINCT description, format(value,2,'de_DE'), installments, format(installment_value,2,'de_DE'), status, expiration, b.name
                from contaareceber a, customers b, farm c
                where a.id_customer=b.id_customer and b.id_farm='$id_farm' and a.id='$id'
                order by a.created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectFuncionarios(){
        $banco = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select name, office, contact, address, city, uf
                from employees
                where id_farm-'$id_farm' and id='$id'
                order by created_at asc";
        $resultado = $banco->query($sql);
        $banco->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function farmName(){
        $conn = abrirBanco();
        $id_farm = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);        
        $id = $_SESSION['id'];
        $sql = "select name from farm where id_farm='$id_farm'";
        $resultado = $conn->query($sql);
        $conn->close();
        while ($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }
    
    function voltarIndex(){
        header("Location:../home.php");
    }
    function formatoData($data){
                $array = explode("-", $data);
                // $data = 2016-04-14
                // $array[0]= 2016, $array[1] = 04 e $array[2]= 14;
                $novaData = $array[2]."/".$array["1"]."/".$array[0];
                return $novaData;
            }

?>