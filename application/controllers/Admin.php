<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		$this->load->library("cart");
		$this->load->model(array('Phim_model'));
		$this->load->library('image_lib');
		$this->load->database();
		$this->load->helper('string');
	}
	public function dangnhap()
	{
		$username = $this->input->post('username');
       	$password = $this->input->post('password');
        $query = $this->Phim_model->loginadmin($username,md5($password));
        if($query)
        {
            foreach($query as $row)
            {
                $newdata = array
                (
                	'username' => $username,
                	'password' => $password
                );
                $this->session->set_userdata($newdata);                 
            }
            redirect('Admin/trangchu');
        }
        else
	    {
	        echo "<script> alert('Đăng nhập không thành công');</script>";
	        echo "<script> window.location.href='../Admin/login';</script>";
	    } 
	}
	public function dangxuat()
	{
		$this->session->unset_userdata('username');
    	redirect('Admin/login');
	}
	public function login()
	{
		$this->load->view('Admin/Page/login_admin');
	}
	public function trangchu()
	{
		if($this->session->userdata('username')!='')
		{
			$data['subview']=$this->load->view('Admin/Page/trangchu_admin_view','',TRUE);
			$this->load->view('Admin/Home/Master_admin_view');
		}
		else
		{
			redirect('Admin/login');
		}
	}
/**********************************************************************************************************************************/
	public function quantri()
	{
		if($this->session->userdata('username')!='')
		{
			$data['quantri']='active';
			$data['ds']=$this->Phim_model->all('admin');
			$data['subview']=$this->load->view('Admin/Page/quantri_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themquantri()
	{
		$data=array
		(
			'TenAdmin'=>$this->input->post('tenquantri'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		);
		$this->Phim_model->insert('admin',$data);
	    redirect(base_url('Admin/quantri'));
	}
	public function xoaquantri($id='')
	{
		$this->Phim_model->delete('admin',array('MaAdmin' => $id));
		redirect(base_url('admin/quantri'));
	}
	public function capnhatquantri($id='')
	{
		$data=array
		(
			'TenAdmin'=>$this->input->post('tenquantri'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		);
		$this->db->set($data);
		$this->Phim_model->update(array('MaAdmin' => $id),'admin');
		redirect(base_url('admin/quantri'));
	}
/**********************************************************************************************************************************/
	public function nguoidung()
	{
		if($this->session->userdata('username')!='')
		{
			$data['nguoidung']='active';
			$data['ds']=$this->Phim_model->all('nguoidung');
			$data['subview']=$this->load->view('Admin/Page/nguoidung_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themnguoidung()
	{
		$data=array
		(
			'HoNguoiDung'=>$this->input->post('honguoidung'),
			'TenNguoiDung'=>$this->input->post('tennguoidung'),
			'email'=>$this->input->post('email'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		);
		$this->Phim_model->insert('nguoidung',$data);
		redirect("Admin/nguoidung");
	}
	public function xoanguoidung($id)
	{
		$this->Phim_model->delete('nguoidung',array('MaNguoiDung' => $id));
		redirect(base_url('admin/nguoidung'));
	}
	public function capnhatnguoidung($id='')
	{
		$data=array
		(
			'HoNguoiDung'=>$this->input->post('honguoidung'),
			'TenNguoiDung'=>$this->input->post('tennguoidung'),
			'email'=>$this->input->post('email'),
			'username'=>$this->input->post('username'),
		);
		$this->db->set($data);
		$this->Phim_model->update(array('MaNguoiDung' => $id),'nguoidung');
		redirect(base_url('admin/nguoidung'));
	}
/**********************************************************************************************************************************/
	public function phim()
	{
		if($this->session->userdata('username')!='')
		{
			$data['phim']='active';
			$query1="SELECT * FROM ( ( phim_quocgia INNER JOIN quocgia ON phim_quocgia.MaQuocGia = quocgia.MaQuocGia ) INNER JOIN phim ON phim_quocgia.MaPhim = phim.MaPhim )";
			$query2="SELECT * FROM ( ( phim_daodien INNER JOIN daodien ON phim_daodien.MaDaoDien = daodien.MaDaoDien ) INNER JOIN phim ON phim_daodien.MaPhim = phim.MaPhim )";
			$query3="SELECT * FROM ( ( phim_theloai INNER JOIN theloai ON phim_theloai.MaTheLoai = theloai.MaTheLoai ) INNER JOIN phim ON phim_theloai.MaPhim = phim.MaPhim )";
			$query4="SELECT * FROM ( ( phim_dienvien INNER JOIN dienvien ON phim_dienvien.MaDienVien = dienvien.MaDienVien ) INNER JOIN phim ON phim_dienvien.MaPhim = phim.MaPhim )";
			$query5="SELECT * FROM tapphim INNER JOIN phim ON phim.MaPhim = tapphim.MaPhim";
			$data['chitiet']=$this->Phim_model->find($query1);
			$data['chitiet2']=$this->Phim_model->find($query2);
			$data['chitiet3']=$this->Phim_model->find($query3);
			$data['chitiet4']=$this->Phim_model->find($query4);
			$data['chitiet5']=$this->Phim_model->find($query5);
			$data['ds']=$this->Phim_model->all('phim');
			$data['ds3']=$this->Phim_model->all('loaiphim');
			$data['subview']=$this->load->view('Admin/Page/phim_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	 public function themphim() 
	 {
	 	$data=array
	 	(	
	 		'TenPhim'=>$this->input->post('tenphim'),
	 		'Trailer'=>$this->input->post('trailer'),
	 		'NhaXuatBan'=>$this->input->post('nhaxuatban'),
	 		'NamXuatBan'=>$this->input->post('namxuatban'),
	 		'TomTat'=>$this->input->post('tomtat'),
	 		'ThoiLuong'=>$this->input->post('thoiluong'),
	 		'TrangThai'=>$this->input->post('trangthai'),
	 		'LoaiPhim'=>$this->input->post('phanloai'),
	 	);
	 	if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './asset/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["HinhAnh"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["HinhAnh"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["HinhAnh"] = 'unknow.jpg';
	    }
	 	$this->Phim_model->insert('phim',$data);
		redirect(base_url('admin/phim'));
	 }
	public function suaphim() 
	 {
	 	$data=array
	 	(	
	 		'TenPhim'=>$this->input->post('tenphim'),
	 		'Trailer'=>$this->input->post('trailer'),
	 		'NhaXuatBan'=>$this->input->post('nhaxuatban'),
	 		'NamXuatBan'=>$this->input->post('namxuatban'),
	 		'TomTat'=>$this->input->post('tomtat'),
	 		'ThoiLuong'=>$this->input->post('thoiluong'),
	 		'TrangThai'=>$this->input->post('trangthai'),
	 		'LoaiPhim'=>$this->input->post('phanloai'),
	 	);
	 	if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './asset/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["HinhAnh"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["HinhAnh"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["HinhAnh"] = 'unknow.jpg';
	    }
	 	$this->db->set($data);
		$this->Phim_model->update(array('MaPhim' => $id),'phim');
		redirect(base_url('admin/phim'));
	 }
    public function xoaphim($id)
    {
    	$this->Phim_model->delete('phim',array('MaPhim' => $id));
		redirect(base_url('admin/phim'));
    }

/**********************************************************************************************************************************/  
	public function tapphim()
	{
		if($this->session->userdata('username')!='')
		{
			$data['tapphim']='active';
			$query="SELECT * FROM tapphim INNER JOIN phim ON phim.MaPhim = tapphim.MaPhim";
			$data['ds']=$this->Phim_model->find($query);
			$data['ds2']=$this->Phim_model->all('phim');
			$data['subview']=$this->load->view('Admin/Page/tapphim_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themtapphim()
	{
		$data=array
		(
			'MaPhim'=>$this->input->post('phim'),
			'TenTap'=>$this->input->post('tentap'),
			'SoTap'=>$this->input->post('sotap')
		);
	    if (!empty($_FILES['video']['name']))
		{

	        $config['upload_path'] = 'asset/video';
	        $config['allowed_types'] = 'mp4';
	        $config['file_name'] = $_FILES['video']['name'];
	    	$config['overwrite'] = FALSE;
	    	$configVideo['remove_spaces'] = TRUE;
	    	$video_name = random_string('numeric', 5);
			$configVideo['file_name'] = $video_name;
	    	$config['max_size']		= '5000000000000';
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('video'))
	        {
         		$uploadData = $this->upload->data();
          		$data["video"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["video"] = 'NULL';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["video"] = 'NULL';
	    }
	 	$this->db->set($data);
		$this->Phim_model->insert('tapphim',$data);
		redirect(base_url('admin/tapphim'));
	}
	public function suatapphim()
	{
		$data=array
		(
			'MaPhim'=>$this->input->post('phim'),
			'TenTap'=>$this->input->post('tentap'),
			'SoTap'=>$this->input->post('sotap')
		);
		$this->db->set($data);
		redirect(base_url('admin/tapphim'));
	}
	public function xoatapphim($id='')
	{
		$this->Phim_model->delete('tapphim',array('MaTap' => $id));
		redirect(base_url('admin/tapphim'));
	}
/**********************************************************************************************************************************/
	public function theloai()
	{
		if($this->session->userdata('username')!='')
		{
			$data['theloai']='active';
			$data['ds']=$this->Phim_model->all('theloai');
			$data['subview']=$this->load->view('Admin/Page/theloai_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themtheloai()
	{
		$data=array
		(
			'TenTheLoai'=>$this->input->post('tentheloai'),
			'MoTa'=>$this->input->post('mota')
		);
		$this->Phim_model->insert('theloai',$data);
	    redirect(base_url('Admin/theloai'));
	}
	public function xoatheloai($id)
	{
		$this->Phim_model->delete('theloai',array('MaTheLoai' => $id));
		redirect(base_url('admin/theloai'));
	}
	public function capnhattheloai($id='')
	{
		$data=array
		(
			'TenTheLoai'=>$this->input->post('tentheloai'),
			'MoTa'=>$this->input->post('mota')
		);
		$this->db->set($data);
		$this->Phim_model->update(array('MaTheLoai' => $id),'theloai');
		redirect(base_url('admin/theloai'));
	}
/**********************************************************************************************************************************/
	public function quocgia()
	{
		if($this->session->userdata('username')!='')
		{
			$data['quocgia']='active';
			$data['ds']=$this->Phim_model->all('quocgia');
			$data['subview']=$this->load->view('Admin/Page/quocgia_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themquocgia()
	{
		$data=array
		(
			'TenQuocGia'=>$this->input->post('tenquocgia'),
		);
		$this->Phim_model->insert('quocgia',$data);
		redirect("Admin/quocgia");
	}
	public function xoaquocgia($id)
	{
		$this->Phim_model->delete('quocgia',array('MaQuocGia' => $id));
		redirect(base_url('admin/quocgia'));
	}
	public function capnhatquocgia($id='')
	{
		$data=array
		(
			'TenQuocGia'=>$this->input->post('tenquocgia')
		);
		$this->db->set($data);
		$this->Phim_model->update(array('MaQuocGia' => $id),'quocgia');
		redirect(base_url('admin/quocgia'));
	}
/**********************************************************************************************************************************/
	public function loaiphim()
	{
		if($this->session->userdata('username')!='')
		{
			$data['loaiphim']='active';
			$data['ds']=$this->Phim_model->all('loaiphim');
			$data['subview']=$this->load->view('Admin/Page/loaiphim_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themloaiphim()
	{
		$data=array
		(
			'TenLoaiPhim'=>$this->input->post('tenloaiphim'),
		);
		$this->Phim_model->insert('loaiphim',$data);
		redirect("Admin/loaiphim");
	}
	public function xoaloaiphim($id)
	{
		$this->Phim_model->delete('loaiphim',array('MaLoaiPhim' => $id));
		redirect(base_url('admin/loaiphim'));
	}
	public function capnhatloaiphim($id='')
	{
		$data=array
		(
			'TenLoaiPhim'=>$this->input->post('tenloaiphim'),
		);
		$this->db->set($data);
		$this->Phim_model->update(array('MaLoaiPhim' => $id),'loaiphim');
		redirect(base_url('admin/loaiphim'));
	}
/**********************************************************************************************************************************/
	public function daodien()
	{
		if($this->session->userdata('username')!='')
		{
			$data['daodien']='active';
			$data['ds']=$this->Phim_model->all('daodien');
			$data['subview']=$this->load->view('Admin/Page/daodien_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themdaodien()
	{
		$data=array
		(
			'TenDaoDien'=>$this->input->post('tendaodien')
		);
		 
	    $this->Phim_model->insert('daodien',$data);
	    redirect(base_url('admin/daodien'));
	}
	public function xoadaodien($id)
	{
		$this->Phim_model->delete('daodien',array('MaDaoDien' => $id));
		redirect(base_url('admin/daodien'));
	}
	public function capnhatdaodien($id='')
	{
		$data=array
		(
			'TenDaoDien'=>$this->input->post('tendaodien'),
		);
		if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './asset/image/director/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["hinhanh_daodien"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["hinhanh_daodien"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["hinhanh_daodien"] = 'unknow.jpg';
	    }
		$this->db->set($data);
		$this->Phim_model->update(array('MaDaoDien' => $id),'daodien');
		redirect(base_url('admin/daodien'));
	}

/**********************************************************************************************************************************/
	public function dienvien()
	{
		if($this->session->userdata('username')!='')
		{
			$data['dienvien']='active';
			$data['ds']=$this->Phim_model->all('dienvien');
			$data['subview']=$this->load->view('Admin/Page/dienvien_admin_view',$data,TRUE);
			$this->load->view('Admin/Home/Master_admin_view',$data);
		}
		else
		{
			redirect('Admin/login');
		}
	}
	public function themdienvien()
	{
		$data=array
		(
			'TenDienVien'=>$this->input->post('tendienvien')
		);
		if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './asset/image/actor/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["hinhanh_dienvien"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["hinhanh_dienvien"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["hinhanh_dienvien"] = 'unknow.jpg';
	    }
	    $this->Phim_model->insert('dienvien',$data);
	    redirect(base_url('Admin/dienvien'));
	}
	public function xoadienvien($id)
	{
		$this->Phim_model->delete('dienvien',array('MaDienVien' => $id));
		redirect(base_url('admin/dienvien'));
	}
	public function capnhatdienvien($id='')
	{
		$data=array
		(
			'TenDienVien'=>$this->input->post('tendienvien'),
		);
		if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './asset/image/director/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["hinhanh_daodien"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["hinhanh_daodien"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["hinhanh_daodien"] = 'unknow.jpg';
	    }
		$this->db->set($data);
		$this->Phim_model->update(array('MaDienVien' => $id),'dienvien');
		redirect(base_url('admin/dienvien'));
	}

/**********************************************************************************************************************************/
	public function phim_daodien()
	{
		$query="SELECT * FROM ( ( phim_daodien INNER JOIN daodien ON phim_daodien.MaDaoDien = daodien.MaDaoDien ) INNER JOIN phim ON phim_daodien.MaPhim = phim.MaPhim )";
		$data['phim_daodien']='active';
		$data['ds']=$this->Phim_model->find($query);
		$data['ds2']=$this->Phim_model->all('phim');
		$data['ds3']=$this->Phim_model->all('daodien');
		$data['subview']=$this->load->view('Admin/Page/phim_daodien_admin_view',$data,TRUE);
		$this->load->view('Admin/Home/Master_admin_view',$data);
	}
	public function themphim_daodien()
	{
		$data=array
		(
			'MaPhim'=>$this->input->post('phim'),
			'MaDaoDien'=>$this->input->post('daodien'),
		);
		$this->Phim_model->insert('phim_daodien',$data);
		redirect(base_url('admin/phim_daodien'));
	}
	public function xoaphim_daodien($id1,$id2)
	{
		$this->Phim_model->delete('phim_daodien',array('MaPhim' => $id1),array('MaDaoDien' => $id2));
		redirect(base_url('admin/phim_daodien'));
	}
/**********************************************************************************************************************************/
	public function phim_dienvien()
	{
		$query="SELECT * FROM ( ( phim_dienvien INNER JOIN dienvien ON phim_dienvien.MaDienVien = dienvien.MaDienVien ) INNER JOIN phim ON phim_dienvien.MaPhim = phim.MaPhim )";
		$data['phim_dienvien']='active';
		$data['ds']=$this->Phim_model->find($query);
		$data['ds2']=$this->Phim_model->all('phim');
		$data['ds3']=$this->Phim_model->all('dienvien');
		$data['subview']=$this->load->view('Admin/Page/phim_dienvien_admin_view',$data,TRUE);
		$this->load->view('Admin/Home/Master_admin_view',$data);
	}
	public function themphim_dienvien()
	{
		$data=array
		(
			'MaPhim'=>$this->input->post('phim'),
			'MaDienVien'=>$this->input->post('dienvien'),
			'ThuVai'=>$this->input->post('thuvai')
		);
		$this->Phim_model->insert('phim_dienvien',$data);
		redirect(base_url('admin/phim_dienvien'));
	}
	public function xoaphim_dienvien($id1,$id2)
	{
		$this->Phim_model->delete('phim_dienvien',array('MaPhim' => $id1),array('MaDienVien' => $id2));
		redirect(base_url('admin/phim_dienvien'));
	}
/**********************************************************************************************************************************/
	public function phim_quocgia()
	{
		$query="SELECT * FROM ( ( phim_quocgia INNER JOIN quocgia ON phim_quocgia.MaQuocGia = quocgia.MaQuocGia ) INNER JOIN phim ON phim_quocgia.MaPhim = phim.MaPhim )";
		$data['phim_quocgia']='active';
		$data['ds']=$this->Phim_model->find($query);
		$data['ds2']=$this->Phim_model->all('phim');
		$data['ds3']=$this->Phim_model->all('quocgia');
		$data['subview']=$this->load->view('Admin/Page/phim_quocgia_admin_view',$data,TRUE);
		$this->load->view('Admin/Home/Master_admin_view',$data);
	}
	public function themphim_quocgia()
	{
		$data=array
		(
			'MaPhim'=>$this->input->post('phim'),
			'MaQuocGia'=>$this->input->post('quocgia'),
		);
		$this->Phim_model->insert('phim_quocgia',$data);
		redirect(base_url('admin/phim_quocgia'));
	}
	public function xoaphim_quocgia($id1,$id2)
	{
		$this->Phim_model->delete('phim_quocgia',array('MaPhim' => $id1),array('MaQuocGia' => $id2));
		redirect(base_url('admin/phim_quocgia'));
	}
/**********************************************************************************************************************************/
	public function phim_theloai()
	{
		$query="SELECT * FROM ( ( phim_theloai INNER JOIN theloai ON phim_theloai.MaTheLoai = theloai.MaTheLoai ) INNER JOIN phim ON phim_theloai.MaPhim = phim.MaPhim )";
		$data['phim_theloai']='active';
		$data['ds']=$this->Phim_model->find($query);
		$data['ds2']=$this->Phim_model->all('phim');
		$data['ds3']=$this->Phim_model->all('theloai');
		$data['subview']=$this->load->view('Admin/Page/phim_theloai_admin_view',$data,TRUE);
		$this->load->view('Admin/Home/Master_admin_view',$data);
	}
	public function themphim_theloai()
	{
		$data=array
		(
			'MaPhim'=>$this->input->post('phim'),
			'MaTheLoai'=>$this->input->post('theloai'),
		);
		$this->Phim_model->insert('phim_theloai',$data);
		redirect(base_url('admin/phim_theloai'));
	}
	public function xoaphim_theloai($id1,$id2)
	{
		$this->Phim_model->delete('phim_theloai',array('MaPhim' => $id1),array('MaTheLoai' => $id2));
		redirect(base_url('admin/phim_theloai'));
	}


/**********************************************************************************************************************************/
}
