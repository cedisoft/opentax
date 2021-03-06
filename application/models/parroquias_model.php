<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Estados_model
 *
 * @author johel
 */
class Parroquias_model extends MY_Model {

    //put your code here

    function select_parroquias($municipio_id) {
        if (is_numeric($municipio_id)) {
            $this->db->where('municipio_fkey', $municipio_id);
            $this->db->order_by('parroquia');
            $rst = $this->db->get('parroquias');
            $r = array('' => '');
            if ($rst->num_rows > 0) {
                foreach ($rst->result() as $row) {
                    $r[$row->id] = $row->parroquia;
                }
                return $r;
            }
        }
        return NULL;
    }

}

?>
