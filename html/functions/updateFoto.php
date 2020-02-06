<?php 

function updateUsuario(PDO $db, $tabla, $id , $name, $apellido, $telefono, $foto, $pass) {
        
    $sql = "UPDATE $tabla SET";
    $condition =   " WHERE id = :id ";

    $name = isset($name) ? " name= :name " : false;
    $apellido = isset($apellido) ? " apellido= :apellido " : false;
    $telefono = isset($telefono) ? " telefono= :telefono " : false;
    $foto = isset($foto) ? " foto= :foto " : false;
    $pass = isset($pass) ? " password= :pass " : false;

    if ($name){

        $sql = $sql . $name;

        if ($apellido){

            $sql = $sql . ", $apellido";
            
            if ($telefono){

                $sql = $sql . ", $telefono";
                
                if ($foto){

                    $sql = $sql . ", $foto";
                    
                    if ($pass){

                        $sql = $sql . ", $pass";
                    }

                } else if ($pass){

                    $sql = $sql . ", $pass";
                }

            } else if ($foto){

                $sql = $sql . ", $foto";
                
                if ($pass){

                    $sql = $sql . ", $pass";
                }

            } else if ($pass){

                $sql = $sql . ", $pass";
            }

        }
    } else if ($apellido){

        $sql = $sql . ", $apellido";
        
        if ($telefono){

            $sql = $sql . ", $telefono";
            
            if ($foto){

                $sql = $sql . ", $foto";
                
                if ($pass){

                    $sql = $sql . ", $pass";
                }

            } else if ($pass){

                $sql = $sql . ", $pass";
            }

        } else if ($foto){

            $sql = $sql . ", $foto";
            
            if ($pass){

                $sql = $sql . ", $pass";
            }

        } else if ($pass){

            $sql = $sql . ", $pass";
        }

    }


    $sql = $sql . $condition;
    
    echo $sql;
    $query = $db->prepare($sql);
    $query->bindValue(":id",$id, PDO::PARAM_INT);
    $query->bindValue(":foto",$foto, PDO::PARAM_STR);
    $query->bindValue(":name",$name, PDO::PARAM_STR);
    $query->bindValue(":apellido",$apellido, PDO::PARAM_STR);
    $query->bindValue(":telefono",$telefono, PDO::PARAM_INT);
    $query->bindValue(":pass",$pass, PDO::PARAM_STR);
    
    try {
        //code...
        $query->execute();

        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    } catch (\Exception $e) {
        //throw $th;
        return $e;
    }
    
}

?>