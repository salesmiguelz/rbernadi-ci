<?php $this->load->view('header'); ?>

    <div class="row">
        <div class="col-md-5">
            <div class="Mapa">
                <h4> <b> Localização </b> </h4>
                <img width="330px;" height="250px;" src="<?=base_url('assets/Imgs/mapa.jpg')?>" alt=""><br>
                Rua machado de Assis,121 </br>
                Raim Manhoca
                Pscicaliandia - UF
                </br> </br>
            </div>
            <div class="Contatos">
                <h4> <b> Contato Direto </b> </h4>
                Fone:(71) 9999-9999 <br>
                Email: contato@bernardi.com <br>
                Skype: login.skype <br>
            </div>
        </div>
        <div class="col-md-7">
            <h4> <b> Envie uma mensagem </b> </h4><br>

            
            <div class="Formulário">
                <?php
                    if($formerror){
                        echo '<h1>'.$formerror.'</h1>';                      
                    }

                    if(isset($formsucess)){
                        echo '<h2>'.$formsuccess.'</h2>';
                    }

                    
                    echo form_open('pagina/contato').'<br>';
                    echo form_label('Seu nome: ', 'nome').'<br>';
                    echo form_input('nome', set_value('nome')).'<br>';
                    echo form_label('Seu email: ').'<br>';
                    echo form_input('email', set_value('nome')).'<br>';
                    echo form_label('Assunto: ').'<br>';
                    echo form_input('assunto', set_value('nome')).'<br>';
                    echo form_label('Mensagem: ', 'mensagem').'<br>';
                    echo form_textarea('mensagem', set_value('mensagem')).'<br>';
                    echo form_submit('enviar', 'Enviar mensagem', array('class' => 'btn btn-info')).'<br>';
                    echo form_close();
                ?>
                
            </div>
        </div>
    </div>

    <div class="row" style="Margin-top: 5%;">
        <div class="col-md-5">
            <h4> <b> Método alternativo de contato </b> </h4><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <br>
            &emsp; 1.Labore et dolore magna aliqua. <br>
            &emsp; 2.Lorem ipsum dolor sit amet.<br><br>
            Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        <?php $this->load->view('noticias'); ?>
    </div>

<?php $this->load->view('footer'); ?>

