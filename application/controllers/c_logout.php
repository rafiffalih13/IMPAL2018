
    <?php 


        
        function logout(){
            $this->session->session_destroy();
            redirect('Welcome/index');
        }    
    ?>