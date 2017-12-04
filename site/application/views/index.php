<html>
    <head>
        <?php $this->load->view('head')?>
    </head>
    <body>
        <div class="menu">
        <?php $this->load->view('menu');
  
        ?>
        </div>
        <div class="conteudo"></div>
        <div class="rodape">
            <?php $this->load->view('footer')?>
        </div>
            <?php $this->load->view('scripts')?>
         
    </body>
</html>