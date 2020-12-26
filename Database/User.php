<?php
class User extends CI_Model{
    function Daftar (){
        $data=array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password')
        );
        $this->db->insert('user',$data);
    }
    function check(){
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password')
        );
        $check=$this->db->get_where('user',$data);
        if($check->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    function get_one(){
        $data=array(
            'username'=>$this->input->post('username')
        );
        return $this->db->get_where('user',$data);
    }
    function EditPassword(){
        $data=array(
            'password'=>$this->input->post('newpassword')
        );
        $this->db->where('id', $this->session->userdata('iduser'));
        $this->db->update('user', $data);
    }

    function Uploadfoto($filename){
        $data=array(
            'foto'=>$filename
        );
        $this->db->where('id', $this->session->userdata('iduser'));
        $this->db->update('user', $data);
    }
    function SimpanPost(){
        $data=array(
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('artikel'),
            'tag'=>$this->input->post('tag'),
            'tanggal'=>date('Y-m-d H:i:s'),
            'id_user'=>$this->session->userdata('iduser')
        );
        $this->db->insert('post',$data);
    }
    function AmbilAllPost(){
        $this->db->join('user', 'user.id = post.id_user', 'left');
        return $this->db->get('post');
    }
    function MyPost(){
        $this->db->join('user', 'user.id = post.id_user', 'left');
        $this->db->where('id_user',$this->session->userdata('iduser'));
        return $this->db->get('post');
    }
}

?>