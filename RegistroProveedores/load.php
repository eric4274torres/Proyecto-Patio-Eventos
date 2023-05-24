<?php
 include '../ModeloBD/conexion.php';      
 $columns = ['proveedores.ID', 'proveedores.Nit', 'proveedores.Nombre_Proveedor', 'proveedores.Telefono', 'proveedores.Direccion', 'proveedores.Correo_Electronico', 'productos.Nombre_Producto'];
 $campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']): null;
 $where = '';
 if ($campo != null) {
    $where = "WHERE (";
    $cont =count($columns);
    for ($i=0; $i < $cont; $i++) { 
        $where .= $columns[$i] . " LIKE '%". $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
 }
 $sql=$conexion->query("SELECT " .implode(", ", $columns) . " FROM proveedores INNER JOIN productos ON proveedores.Producto_ID=productos.ID $where ");
 $dato =$sql;
 
 $html = '';
 if($dato -> num_rows >0){
     while($fila=$dato->fetch_assoc()){
     
       $html .= '<tr>';
       $html .= '<td>'.$fila['ID'].'</td>';
       $html .= '<td>'.$fila['Nit'].'</td>';
       $html .= '<td>'.$fila['Nombre_Proveedor'].'</td>';
       $html .= '<td>'.$fila['Telefono'].'</td>';
       $html .= '<td>'.$fila['Direccion'].'</td>';
       $html .= '<td>'.$fila['Correo_Electronico'].'</td>';
       $html .= '<td>'.$fila['Nombre_Producto'].'</td>';
       $html .= '<td class"display"><a class="btn-warning" href="../Editar/editar.php?id='.$fila['ID'].' ">
                        <i class="fa fa-edit"></i> </a>
                    <a class="btn-danger" href="../Controladores/eliminar.php?id='.$fila['ID'].'" onclick="return comfirmar();">
                        <i class="fa fa-trash"></i></a>
                </td>';
    $html .= '</tr>';
    } 
} else {
        
    $html .= ' <tr>';
    $html .=     '<td colspan="16">No existen registros</td>';
    $html .= ' </tr>';
}
echo json_encode($html, JSON_UNESCAPED_UNICODE);