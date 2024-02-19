<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jokes extends CI_Controller {

    public function index() {
        // Load jokes from the database
        $data['jokes'] = $this->db->get('jokes')->result_array();
        $this->load->view('jokes/index', $data);
    }

    public function new_joke() {
        $this->load->view('jokes/new_joke');
    }

    public function add_joke() {
        // Handle form submission and add joke to the database
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('jokes', $data);

        // Redirect to the new joke's page
        redirect('jokes/' . $this->db->insert_id());
    }

    public function joke($id) {
        // Load joke details
        $data['joke'] = $this->db->get_where('jokes', array('id' => $id))->row_array();
        $this->load->view('jokes/joke', $data);
    }

    public function delete_joke($id) {
        // Delete joke from the database
        $this->db->delete('jokes', array('id' => $id));

        // Redirect to the next joke or home if no more jokes
        redirect('jokes');
    }
}
    