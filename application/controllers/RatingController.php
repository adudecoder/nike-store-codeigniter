<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('RatingModel');
    }

    public function index() {
        $this->load->view('rating_view');
    }

    public function submit_rating() {
        $data = array(
            'user_name' => $this->input->post('user_name'),
            'rating' => $this->input->post('user_rating'),
            'user_comment' => $this->input->post('user_comment')
        );

        $this->RatingModel->insert_rating($data);

        echo json_encode(array('message' => 'Rating submitted successfully.'));
    }

    public function load_ratings() {
        $ratings = $this->RatingModel->get_ratings();
        echo json_encode($ratings);
    }
}
?>
