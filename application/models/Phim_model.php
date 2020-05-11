<?php
class Phim_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function all($table)
	{
		$result=$this->db->get($table);
		return $result->result_array();
	}
	public function find($string)
	{
		$result=$this->db->query($string);
		return $result->result_array();
	}
	public function detail($select,$table,$where)
	{
		$result = $this->db->select($select)->from($table)->where($where)->get();
		return $result->result_array();
	}
	public function limit($select,$table,$where,$order,$limit)
	{
		$result = $this->db->select($select)->from($table)->where($where)->order_by($order,'desc')->limit($limit)->get();
		return $result->result_array();
	}
	public function sort($select,$table,$where,$order)
	{
		$result = $this->db->select($select)->from($table)->where($where)->order_by($order,'desc')->get();
		return $result->result_array();
	}
	public function insert($table,$data)
	{
		$id=$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	public function update($id,$table=array())
	{
		$this->db->where($id);
		$this->db->update($table);
	}
	public function update2($id1,$id2,$table=array())
	{
		$this->db->where($id1);
		$this->db->where($id2);
		$this->db->update($table);
	}
	public function delete($table,$id)
	{
		$this->db->delete($table,$id);
	}
	public function delete2($table,$id1,$id2)
	{
		$this->db->delete($table,$id1,$id2);
	}
	public function count($query)
	{
		$query = $this->db->query($query);
       return $query->row();
	}
	public function join($select,$table,$table1,$id,$id1)
	{
		$result=$this->db->select($select)->from($table)->join($table1)->on($id=$id1)->join($table2)->on($id=$id2)->get();
		return $result->result_array();
	}
   	public function loginadmin($username,$password) 
    {
        $this->db->select('username, password');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password',$password);
        $this->db->limit(1);
        $query = $this->db->get();           
        if($query->num_rows()==1)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
   	}
   		public function loginnguoidung($username,$password) 
    {
        $this->db->select('username, password');
        $this->db->from('nguoidung');
        $this->db->where('username', $username);
        $this->db->where('password',$password);
        $this->db->limit(1);
        $query = $this->db->get();           
        if($query->num_rows()==1)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
   	}
    function getdata( $perpage, $offset )
    {
    	$result	= $this->db->select('*')->from('phim')->limit($perpage, $offset)->order_by('NgayDang', 'desc')->get()->result_array();
    	return $result;
    }
    function getdata1( $perpage, $offset )
    {
    	$result	= $this->db->select('*')->from('phim')->where('MaLoai'==1)->limit($perpage, $offset)->order_by('NgayDang', 'desc')->get()->result_array();
    	return $result;
    }
    function getdata2( $perpage, $offset )
    {
    	$result	= $this->db->select('*')->from('phim')->where('MaLoai'==2)->limit($perpage, $offset)->order_by('NgayDang', 'desc')->get()->result_array();
    	return $result;
    }
    public function total($table)
    {
    	$result=$this->db->select('*')->from($table)->get()->num_rows();
    	return $result;
    }
    public function total1($table,$where)
    {
    	$result=$this->db->select('*')->from($table)->where($where)->get()->num_rows();
    	return $result;
    }
    public function total2($string)
    {
    	$result=$this->db->query($string)->get()->num_rows();
    	return $result;
    }
}