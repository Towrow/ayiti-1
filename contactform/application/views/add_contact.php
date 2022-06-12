<?php

    $this->load->view('partial/header');
    $this->load->view('partial/nav');
?>
    <?php echo form_open() ?>
    <table>
        <tr>
            <td>Name</td><td><?php echo form_input('fname', set_value('fname'), 'placeholder="First Name"') ; ?><?php echo form_error('fname', '<div style="color:red;">', '</div>') ; ?></td>
        </tr>
        <tr>
            <td>Lastname</td><td><?php echo form_input('lname', set_value('lname')) ; ?><?php echo form_error('lname', '<div style="color:red;">', '</div>') ; ?></td>
        </tr>
        <tr>
            <td>Email Address</td><td><?php echo form_input('email', set_value('email')) ; ?><?php echo form_error('email', '<div style="color:red;">', '</div>') ; ?></td>
        </tr>
        <tr>
            <td>Contact Address</td><td><?php echo form_textarea('contact_ad', set_value('contact_ad')) ; ?><?php echo form_error('contact_ad', '<div style="color:red;">', '</div>') ; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td><td><?php echo form_submit('submit', 'Submit') ; ?></td>
        </tr>
    </table>
<?php echo form_close() ; ?>

<?php
    $this->load->view('partial/footer');

