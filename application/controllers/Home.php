<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		$this->load->library("cart");
		$this->load->model(array('Phim_model'));
		$this->load->library("pagination");
		$this->load->library('image_lib');
		$this->load->database();
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function dangnhap()
	{
		$username = $this->input->post('username');
       	$password = $this->input->post('password');
        $query = $this->Phim_model->loginnguoidung($username,md5($password));
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
            redirect('Home/trangchu');
        }
        else
	    {
	        echo "<script> alert('Đăng nhập không thành công');</script>";
	        echo "<script> window.location.href='../Home/trangchu';</script>";
	    } 
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function dangxuat()
	{
		$this->session->unset_userdata('username');
    	redirect('Home/trangchu');
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function dangky()
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
		redirect("Home/trangchu");
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function trangchu()
	{
		if($this->session->userdata('username')!='')
		{
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$all['phim']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',12);
			$all['phim2']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',5);
			$all['trailer']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',5);
			$all['phimle']=$this->Phim_model->limit('*','phim',array('LoaiPhim=' => 2),'NgayDang',12);
			$all['phimbo']=$this->Phim_model->limit('*','phim',array('LoaiPhim=' => 1),'NgayDang',12);
			$all['banner']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',15);
			$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/trangchu_view',$all,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$all['phim']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',12);
			$all['phim2']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',5);
			$all['phimle']=$this->Phim_model->limit('*','phim',array('LoaiPhim=' => 2),'NgayDang',12);
			$all['phimbo']=$this->Phim_model->limit('*','phim',array('LoaiPhim=' => 1),'NgayDang',12);
			$all['trailer']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',5);
			$all['banner']=$this->Phim_model->limit('*','phim',array('MaPhim' > 0),'NgayDang',15);
			$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/trangchu_view',$all,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function timkiem()
	{
		if($this->session->userdata('username')!='')
		{
			if($searchname=$this->input->post('timkiem'))
			{
				$data['searchname'] = $searchname;
				$query="select * from phim where TenPhim like '%".$searchname."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiem_view',NULL,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
	           	echo "<script> window.location.href='../Home/trangchu';</script>";
			}			
		}
		else
		{
			if($searchname=$this->input->post('timkiem'))
			{
				$data['searchname'] = $searchname;
				$query="select * from phim where TenPhim like '%".$searchname."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiem_view',NULL,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
	           	echo "<script> window.location.href='../Home/trangchu';</script>";
			}
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function chitiet($id ='')
	{
		if($this->session->userdata('username')!='')
		{
			$query1="SELECT * FROM ( ( phim_quocgia INNER JOIN quocgia ON phim_quocgia.MaQuocGia = quocgia.MaQuocGia ) INNER JOIN phim ON phim_quocgia.MaPhim = phim.MaPhim ) WHERE phim_quocgia.MaPhim = $id";
			$query2="SELECT * FROM ( ( phim_daodien INNER JOIN daodien ON phim_daodien.MaDaoDien = daodien.MaDaoDien ) INNER JOIN phim ON phim_daodien.MaPhim = phim.MaPhim ) WHERE phim_daodien.MaPhim = $id";
			$query3="SELECT * FROM ( ( phim_theloai INNER JOIN theloai ON phim_theloai.MaTheLoai = theloai.MaTheLoai ) INNER JOIN phim ON phim_theloai.MaPhim = phim.MaPhim ) WHERE phim_theloai.MaPhim = $id";
			$query4="SELECT * FROM ( ( phim_dienvien INNER JOIN dienvien ON phim_dienvien.MaDienVien = dienvien.MaDienVien ) INNER JOIN phim ON phim_dienvien.MaPhim = phim.MaPhim ) WHERE phim_dienvien.MaPhim = $id";
			$query5="SELECT * FROM tapphim INNER JOIN phim ON phim.MaPhim = tapphim.MaPhim WHERE tapphim.MaPhim=$id";
			$data['chitiet']=$this->Phim_model->find($query1);
			$data['chitiet2']=$this->Phim_model->find($query2);
			$data['chitiet3']=$this->Phim_model->find($query3);
			$data['chitiet4']=$this->Phim_model->find($query4);
			$data['chitiet5']=$this->Phim_model->find($query5);
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/chitiet_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$query1="SELECT * FROM ( ( phim_quocgia INNER JOIN quocgia ON phim_quocgia.MaQuocGia = quocgia.MaQuocGia ) INNER JOIN phim ON phim_quocgia.MaPhim = phim.MaPhim ) WHERE phim_quocgia.MaPhim = $id";
			$query2="SELECT * FROM ( ( phim_daodien INNER JOIN daodien ON phim_daodien.MaDaoDien = daodien.MaDaoDien ) INNER JOIN phim ON phim_daodien.MaPhim = phim.MaPhim ) WHERE phim_daodien.MaPhim = $id";
			$query3="SELECT * FROM ( ( phim_theloai INNER JOIN theloai ON phim_theloai.MaTheLoai = theloai.MaTheLoai ) INNER JOIN phim ON phim_theloai.MaPhim = phim.MaPhim ) WHERE phim_theloai.MaPhim = $id";
			$query4="SELECT * FROM ( ( phim_dienvien INNER JOIN dienvien ON phim_dienvien.MaDienVien = dienvien.MaDienVien ) INNER JOIN phim ON phim_dienvien.MaPhim = phim.MaPhim ) WHERE phim_dienvien.MaPhim = $id";
			$query5="SELECT * FROM tapphim INNER JOIN phim ON phim.MaPhim = tapphim.MaPhim WHERE tapphim.MaPhim=$id";
			$data['chitiet']=$this->Phim_model->find($query1);
			$data['chitiet2']=$this->Phim_model->find($query2);
			$data['chitiet3']=$this->Phim_model->find($query3);
			$data['chitiet4']=$this->Phim_model->find($query4);
			$data['chitiet5']=$this->Phim_model->find($query5);
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/chitiet_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function xemphim($id1='',$id2='')
	{
		if($this->session->userdata('username')!='')
		{
			$data['id2']=$id2;
			$query="SELECT * FROM tapphim INNER JOIN phim ON phim.MaPhim = tapphim.MaPhim WHERE tapphim.MaPhim=$id1";
			$data['chitiet']=$this->Phim_model->find($query);
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/xemphim_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$data['id2']=$id;
			$query="SELECT * FROM tapphim INNER JOIN phim ON phim.MaPhim = tapphim.MaPhim WHERE tapphim.MaPhim=$id1";
			$data['chitiet']=$this->Phim_model->find($query);
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/xemphim_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/ 
	public function moinhat()
	{
		if($this->session->userdata('username')!='')
		{
			// $query='select * from Phim order by NgayDang Desc';
			$total =  $this->Phim_model->total('phim');
			$perpage	=  7; /* Số books hiển thị trên một page*/
			# Tải bộ thư viện Pagination Class của CodeIgniter
			$config['total_rows']  =  $total;
			$config['per_page']  =  $perpage;
			$config['next_link'] =  'Sau';
			$config['first_link']='Đầu';
			$config['prev_link'] =  'Trước';
			$config['last_link']='Cuối';
			$config['first_tag_open'] = '<button class="btn btn-success text-white">';
			$config['first_tag_close'] = '</button>';
			$config['last_tag_open'] = '<button class="btn btn-success text-white">';
			$config['last_tag_close'] = '</button>';
			$config['next_tag_open'] = '<button class="btn btn-success text-white">';
			$config['next_tag_close'] = '</button>';
			$config['prev_tag_open'] = '<button class="btn btn-success">';
			$config['prev_tag_close'] = '</button>';
			$config['num_tag_open'] =  '<button class="btn btn-success">';
			$config['num_tag_close'] =  '</button>';
			$config['cur_tag_open'] = '<button class="btn btn-success active">';
			$config['cur_tag_close'] = '</button>';
			$config['num_links']	= 3;
			$config['base_url'] =  base_url().'/Home/moinhat';
			$config['uri_segment']	 =  3;
		                # Khởi tạo phân trang
			$this->pagination->initialize($config); 				
		                # Tạo link phân trang
			$pagination =  $this->pagination->create_links();
		                # Lấy offset
			$offset  =  ($this->uri->segment(3)=='') ? 0 : $this->uri->segment(3); 
			$this->load->library('pagination', $config);
				# Đẩy dữ liệu ra view
			$data['phim'] =  $this->Phim_model->getdata($perpage, $offset);
			$data['pagination'] = $pagination;
			// $data['phim']=$this->Phim_model->find($query);
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/moinhat_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			// $query='select * from Phim order by NgayDang Desc';
			$total =  $this->Phim_model->total('phim');
			$perpage	=  7; /* Số books hiển thị trên một page*/
			# Tải bộ thư viện Pagination Class của CodeIgniter
			$this->load->library('pagination');
			$config['total_rows']  =  $total;
			$config['per_page']  =  $perpage;
			$config['next_link'] =  'Sau';
			$config['first_link']='Đầu';
			$config['prev_link'] =  'Trước';
			$config['first_tag_open'] = '<button class="btn btn-success text-white">';
			$config['first_tag_close'] = '</button>';
			$config['last_tag_open'] = '<button class="btn btn-success text-white">';
			$config['last_tag_close'] = '</button>';
			$config['next_tag_open'] = '<button class="btn btn-success text-white">';
			$config['next_tag_close'] = '</button>';
			$config['prev_tag_open'] = '<button class="btn btn-success">';
			$config['prev_tag_close'] = '</button>';
			$config['num_tag_open'] =  '<button class="btn btn-success">';
			$config['num_tag_close'] =  '</button>';
			$config['cur_tag_open'] = '<button class="btn btn-success active">';
			$config['num_links']	=  5;
			$config['base_url'] =  base_url().'/Home/moinhat';
			$config['uri_segment']	 =  3;    
		                # Khởi tạo phân trang
			$this->pagination->initialize($config); 
				
	                # Tạo link phân trang
			$pagination =  $this->pagination->create_links();

		                # Lấy offset
			$offset  =  ($this->uri->segment(3)=='') ? 0 : $this->uri->segment(3); 
				
				# Đẩy dữ liệu ra view
			$data['phim'] =  $this->Phim_model->getdata($perpage, $offset);
			$data['pagination'] = $pagination;
			// $data['phim']=$this->Phim_model->find($query);
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/moinhat_view',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function phimle()
	{
		if($this->session->userdata('username')!='')
		{
			$total =  $this->Phim_model->total('phim');
			$perpage	=  7;
			$config['total_rows']  =  $total;
			$config['per_page']  =  $perpage;
			$config['next_link'] =  'Sau';
			$config['first_link']='Đầu';
			$config['prev_link'] =  'Trước';
			$config['last_link']='Cuối';
			$config['first_tag_open'] = '<button class="btn btn-success text-white">';
			$config['first_tag_close'] = '</button>';
			$config['last_tag_open'] = '<button class="btn btn-success text-white">';
			$config['last_tag_close'] = '</button>';
			$config['next_tag_open'] = '<button class="btn btn-success text-white">';
			$config['next_tag_close'] = '</button>';
			$config['prev_tag_open'] = '<button class="btn btn-success">';
			$config['prev_tag_close'] = '</button>';
			$config['num_tag_open'] =  '<button class="btn btn-success">';
			$config['num_tag_close'] =  '</button>';
			$config['cur_tag_open'] = '<button class="btn btn-success active">';
			$config['cur_tag_close'] = '</button>';
			$config['num_links']	= 3;
			$config['base_url'] =  base_url().'/Home/phimle';
			$config['uri_segment']	 =  3;
		                # Khởi tạo phân trang
			$this->pagination->initialize($config); 				
		                # Tạo link phân trang
			$pagination =  $this->pagination->create_links();
		                # Lấy offset
			$offset  =  ($this->uri->segment(3)=='') ? 0 : $this->uri->segment(3); 
			$this->load->library('pagination', $config);
				# Đẩy dữ liệu ra view
			$data['phim'] =  $this->Phim_model->getdata($perpage, $offset);
			$data['pagination'] = $pagination;
			$total =  $this->Phim_model->total1('phim',array('LoaiPhim =' => 2));
			$all['phimle']=$this->Phim_model->sort('*','phim',array('LoaiPhim =' => 2),'MaPhim');
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/phimle_view',$all,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$total =  $this->Phim_model->total('phim');
			$perpage	=  7;
			$config['total_rows']  =  $total;
			$config['per_page']  =  $perpage;
			$config['next_link'] =  'Sau';
			$config['first_link']='Đầu';
			$config['prev_link'] =  'Trước';
			$config['last_link']='Cuối';
			$config['first_tag_open'] = '<button class="btn btn-success text-white">';
			$config['first_tag_close'] = '</button>';
			$config['last_tag_open'] = '<button class="btn btn-success text-white">';
			$config['last_tag_close'] = '</button>';
			$config['next_tag_open'] = '<button class="btn btn-success text-white">';
			$config['next_tag_close'] = '</button>';
			$config['prev_tag_open'] = '<button class="btn btn-success">';
			$config['prev_tag_close'] = '</button>';
			$config['num_tag_open'] =  '<button class="btn btn-success">';
			$config['num_tag_close'] =  '</button>';
			$config['cur_tag_open'] = '<button class="btn btn-success active">';
			$config['cur_tag_close'] = '</button>';
			$config['num_links']	= 3;
			$config['base_url'] =  base_url().'/Home/phimle';
			$config['uri_segment']	 =  3;
		                # Khởi tạo phân trang
			$this->pagination->initialize($config); 				
		                # Tạo link phân trang
			$pagination =  $this->pagination->create_links();
		                # Lấy offset
			$offset  =  ($this->uri->segment(3)=='') ? 0 : $this->uri->segment(3); 
			$this->load->library('pagination', $config);
				# Đẩy dữ liệu ra view
			$data['phim'] =  $this->Phim_model->getdata($perpage, $offset);
			$data['pagination'] = $pagination;
			$total =  $this->Phim_model->total1('phim',array('LoaiPhim =' => 2));
			$all['phimle']=$this->Phim_model->sort('*','phim',array('LoaiPhim =' => 2),'MaPhim');
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/phimle_view',$all,TRUE);
			$this->load->view('home/master',$giaodien);
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function phimbo()
	{
		if($this->session->userdata('username')!='')
		{
			$total =  $this->Phim_model->total('phim');
			$all['phimbo']=$this->Phim_model->sort('*','phim',array('LoaiPhim =' => 1),'MaPhim');
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/phimbo_view',$all,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			$total =  $this->Phim_model->total('phim');
			$all['phimbo']=$this->Phim_model->sort('*','phim',array('LoaiPhim =' => 1),'MaPhim');
			$data['ds1']=$this->Phim_model->all('quocgia');
			$data['ds2']=$this->Phim_model->all('theloai');
			$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/phimbo_view',$all,TRUE);
			$this->load->view('home/master',$giaodien);
		}

	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function timkiemtheonam()
	{
		if($this->session->userdata('username')!='')
		{
			if($searchyear=$this->input->post('year'))
			{
				
				$data['searchyear'] = $searchyear;
				$query="select * from Phim where NamXuatBan like '%".$searchyear."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiemtheonam_view',$data,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
		        echo "<script> window.location.href='../Home/trangchu';</script>";
			}
		}
		else
		{
			if($searchyear=$this->input->post('year'))
			{
				$data['searchyear'] = $searchyear;
				$query="select * from Phim where NamXuatBan like '%".$searchyear."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiemtheonam_view',$data,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
		        echo "<script> window.location.href='../Home/trangchu';</script>";
			}
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function timkiemtheoquocgia()
	{
		if($this->session->userdata('username')!='')
		{
			if($searchnation=$this->input->post('nation'))
			{
				$data['searchnation'] = $searchnation;
				$query="SELECT * FROM ( ( phim_quocgia INNER JOIN phim ON phim_quocgia.MaPhim = phim.MaPhim ) INNER JOIN quocgia ON phim_quocgia.MaQuocGia = quocgia.MaQuocGia ) WHERE quocgia.TenQuocGia LIKE '%".$searchnation."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiemtheoquocgia_view',$data,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
		        echo "<script> window.location.href='../Home/trangchu';</script>";
			}
		}
		else
		{
			if($searchnation=$this->input->post('nation'))
			{
				$data['searchnation'] = $searchnation;
				$query="SELECT * FROM ( ( phim_quocgia INNER JOIN phim ON phim_quocgia.MaPhim = phim.MaPhim ) INNER JOIN quocgia ON phim_quocgia.MaQuocGia = quocgia.MaQuocGia ) WHERE quocgia.TenQuocGia LIKE '%".$searchnation."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiemtheoquocgia_view',$data,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
		        echo "<script> window.location.href='../Home/trangchu';</script>";
			}
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function timkiemtheotheloai()
	{
		if($this->session->userdata('username')!='')
		{
			if($searchtype=$this->input->post('type'))
			{
				$data['searchtype'] = $searchtype;
				$query="SELECT * FROM ( ( phim_theloai INNER JOIN phim ON phim_theloai.MaPhim = phim.MaPhim ) INNER JOIN theloai ON phim_theloai.MaTheLoai = theloai.MaTheLoai ) WHERE theloai.TenTheLoai LIKE '%".$searchtype."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_2_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiemtheotheloai_view',$data,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
		        echo "<script> window.location.href='../Home/trangchu';</script>";
			}
		}
		else
		{
			if($searchtype=$this->input->post('type'))
			{
				$data['searchtype'] = $searchtype;
				$query="SELECT * FROM ( ( phim_theloai INNER JOIN phim ON phim_theloai.MaPhim = phim.MaPhim ) INNER JOIN theloai ON phim_theloai.MaTheLoai = theloai.MaTheLoai ) WHERE theloai.TenTheLoai LIKE '%".$searchtype."%' ";
				$data['phim']=$this->Phim_model->find($query);
				$data['ds1']=$this->Phim_model->all('quocgia');
				$data['ds2']=$this->Phim_model->all('theloai');
				$giaodien['header'] = $this->load->view('home/header_view',$data,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer_view',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/timkiemtheotheloai_view',$data,TRUE);
				$this->load->view('home/master',$giaodien);
			}
			else
			{
				echo "<script> alert('Không tìm thấy kết quả');</script>";
		        echo "<script> window.location.href='../Home/trangchu';</script>";
			}
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
	public function taive()
	{
		if($this->session->userdata('username')!='')
		{
			echo "<script> alert('Chức năng đang cập nhật');</script>";
		    echo "<script> window.location.href='../Home/trangchu';</script>";
		}
		else
		{
			echo "<script> alert('Chức năng đang cập nhật');</script>";
		    echo "<script> window.location.href='../Home/trangchu';</script>";
		}
	}
/********************************************************************************************************************************************************************************************************************************************************************/
}