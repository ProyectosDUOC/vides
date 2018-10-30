<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComentarioReporte
 *
 * @author benja
 */
class ComentarioReporteDAO {
    public static function lastValue(){
        $cc = DB::getInstancia();
        $stSql = "SELECT * FROM comentario_reporte order by id_comentario desc  limit 1";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetch();
        $nuevo = new ComentarioReporte($ba['id_comentario'],
                            $ba['id_usuario'],
                            $ba['fecha_comentario'],
                            $ba['comentario'], 
                            $ba['activo'],
                            $ba['id_reporte']);
        return $nuevo;        
    }
      
    public static function agregar($nuevo) {
        $cc=DB::getInstancia();
        $stSql = "INSERT INTO comentario_reporte VALUES ";
        $stSql .= "(:id_comentario,:id_usuario,:fecha_comentario,:comentario,:activo,:id_reporte)";
        $rs = $cc->db->prepare($stSql);
        $params = self::getParams($nuevo);
        return $rs->execute($params);
    }


    public static function getParams($nuevo){
        $params = array();
        $params['id_comentario'] = $nuevo->getId_comentario();
        $params['id_usuario'] = $nuevo->getId_usuario();
        $params['fecha_comentario'] = $nuevo->getFecha_comentario();
        $params['comentario'] = $nuevo->getComentario();
        $params['activo'] = $nuevo->getActivo();
        $params['id_reporte'] = $nuevo->getId_reporte();
        return $params;
    }

    public static function readAll() { 
        $cc =DB::getInstancia();
        $stSql = "SELECT * FROM agenda";
        $rs = $cc->db->prepare($stSql);
        $rs->execute();
        $ba = $rs->fetchAll();
        
        $pila = array();
        foreach ($ba as $c) {
               $nuevo = new ComentarioReporte($ba['id_comentario'],
                            $ba['id_usuario'],
                            $ba['fecha_comentario'],
                            $ba['comentario'], 
                            $ba['activo'],
                            $ba['id_reporte']);
        return $nuevo;        
            array_push($pila, $nuevo);
        }
        return $pila;
    }
}
