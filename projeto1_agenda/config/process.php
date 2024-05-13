<?php
    session_start();
    include_once("conection.php");
    include_once("url.php");

    $data = $_POST;

    if(!empty($data)){
        //criar contatos

        if($data["type"] === "create"){

            //variaveis
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            //criando
            $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observations)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            

            try {
                $stmt->execute();
                $_SESSION['msg'] = "Contato criado com sucesso!";
                
            } catch (PDOException $e) {
                //error conexao
                $error = $e->getMessage();
                echo "Error: $error";
            }
        }else if($data["type"] === "edit"){
            //variaveis
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];
            $id = $data["id"];

            //att
            $query = "UPDATE contacts SET name = :name, phone = :phone, observation = :observations WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION['msg'] = "Contato atualizado com sucesso!";
                
            } catch (PDOException $e) {
                //error conexao
                $error = $e->getMessage();
                echo "Error: $error";
            }
        }else if($data["type"] === "delete"){
            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION['msg'] = "Contato removido com sucesso!";
                
            } catch (PDOException $e) {
                //error conexao
                $error = $e->getMessage();
                echo "Error: $error";
            }
        }


        //redirecionar para home 
        header("Location:" . $BASE_URL . "../index.php");

    }else{
        //Retorna o dado de um contato
        $id;
        if(!empty($_GET)){
            $id = $_GET["id"];
        }

        if(!empty($id)){
            $query = "SELECT * FROM contacts WHERE id=:id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $contact = $stmt->fetch();

        }else{
            //retorna todos os contatos
            $contacts = [];
            $query = "SELECT * FROM contacts";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            
            $contacts = $stmt->fetchAll();
        }
    }


    //fechar conexao
    $conn = null;
    



    