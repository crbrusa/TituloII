<?php
class update extends CI_Model {
	public function __construct()
        {
            $this->load->database();
        }


        //Modifica estado de vehiculo por patente.
        public function modifica_estado($idveh=FALSE,$estado=FALSE,$tabla)
        {
            
            $sql="update ". $tabla ." set estado='". $estado ."' where patente='". $idveh ."'";
            $this->db->query($sql);
        }
        public function modificar($tabla,$where,$varwhere,$data)
        {
            
            
         /*   $data = array(
               'title' => $title,
               'name' => $name,
               'date' => $date
            );

$this->db->where('id', $id);
$this->db->update('mytable', $data); 
*/
// Produces:
// UPDATE mytable 
// SET title = '{$title}', name = '{$name}', date = '{$date}'
// WHERE id = $id

            $this->db->where($where, $varwhere);
            $this->db->update($tabla, $data); 

        }


//tabla,id,column,set
       // $this->update->modificar('usuario',$data['usuario'][0]['id'],,$cadena);
}