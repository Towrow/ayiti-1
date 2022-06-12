<?php

    $this->load->view('partial/header');
    $this->load->view('partial/nav');

    if ($this->session->has_userdata('message')) {
        echo '<div style="color: green;">' . $this->session->message .'</div>';
    }

    //echo '<img src="' . base_url('assets/images/my.jpeg') . '">';
    //echo '<img src="' . site_url('assets/images/my.jpeg') . '">';

    echo '<table border="1">';
    //Header information
    echo '<tr bgcolor="yellow">';
        echo '<td><strong>First Name</strong></td>';
        echo '<td><strong>Lastname</strong></td>';
        echo '<td><strong>Email Address</strong></td>';
        echo '<td><strong>Date Created</strong></td>';
        echo '<td><strong>Action</strong></td>';
    echo '</tr>';

    foreach ($query as $row){
        echo '<tr>';
            echo '<td>' . $row->firstname.'</td>';
            echo '<td>' . $row->lastname.'</td>';
            echo '<td>' . $row->email_address.'</td>';
            echo '<td>' . $row->date_created.'</td>';
            echo '<td><a href="' . site_url('update/' . $row->id)  . '">Update</a> | Delete</td>';
        echo '</tr>';
    }

    echo '</table>';


    $this->load->view('partial/footer');

