<?php

class Contact extends CI_Model {

    public function get_all_contacts()
    {
        $this->db->select('*');
        $this->db->from('student_details');
        $this->db->where(['status' => 'active']);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
        //$query = $this->db->get_where('student_details', ['status' => 'active']);
        //return $this->db->query('SELECT * from student_details ORDER BY `id` DESC');
    }

    public function insert_entry()
    {
            $data = [
                        'firstname' => $this->input->post('fname'),
                        'lastname' => $this->input->post('lname'),
                        'email_address' => $this->input->post('email'),
                        'date_created' => date('Y-m-d H:i:s')
            ];

            $this->db->insert('student_details', $data);

            $this->session->set_flashdata('message', 'Your record is successfully added!');
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}