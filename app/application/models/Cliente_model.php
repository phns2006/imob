<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_cliente by clientes_id
     */
    function get_tb_cliente($clientes_id)
    {
        return $this->db->get_where('tb_clientes',array('clientes_id'=>$clientes_id))->row_array();
    }
    
    /*
     * Get all tb_clientes
     */
    function get_all_tb_clientes()
    {
        return $this->db->get('tb_clientes')->result_array();
    }
    
    /*
     * function to add new tb_cliente
     */
    function add_tb_cliente($params)
    {
        $this->db->insert('tb_clientes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_cliente
     */
    function update_tb_cliente($clientes_id,$params)
    {
        $this->db->where('clientes_id',$clientes_id);
        $response = $this->db->update('tb_clientes',$params);
        if($response)
        {
            return "tb_cliente updated successfully";
        }
        else
        {
            return "Error occuring while updating tb_cliente";
        }
    }
    
    /*
     * function to delete tb_cliente
     */
    function delete_tb_cliente($clientes_id)
    {
        $response = $this->db->delete('tb_clientes',array('clientes_id'=>$clientes_id));
        if($response)
        {
            return "tb_cliente deleted successfully";
        }
        else
        {
            return "Error occuring while deleting tb_cliente";
        }
    }
}
