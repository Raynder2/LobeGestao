
  <link rel="icon" href="<?=DIST?>img/logo-cfop.png">
  <link href="<?=DIST?>css/cfop.css" rel="stylesheet">

  <header>
    <div class="container">
      <div class="col-sm-4">
        <img src="<?=DIST?>img/logo-cfop.png" alt="LOBE CFOP - pesquisa CFOP">
      </div>

      <div class="col-sm-8">
        <h2 style="margin-top:25px;">
          Veja a descrição completa da operação e o codigo da operação fiscal<br>

        </h2>
      </div>
    </div>
  </header>



  <div class="container">
    <div class="col-sm-12">

    </div>
  </div>





  <form name="form1" action="" method="post" id="form1">



    <div class="barra-azul">
      <div class="container">
        <div class="col-sm-12 pesquisa">
          <p>Pesquisar</p>
        </div>

        <div class="col-sm-9 barra-pesquisa">
          <input name="pesquisa" type="text" placeholder="Digite aqui" value="" size="200">
        </div>
        <div class="col-sm-3 barra-pesquisa">

          <input type="button" onclick="pesquisar()" name="botao" value="Pesquisar">
        </div>
      </div>
    </div>



  </form>

  <div class="container" style="height: auto !important;">



    <div class="container">
      <div class="col-sm-12 table-responsive">

        <table class="table">

          <tbody>
            <tr>
              <td><strong>CFOP</strong></td>
              <td><strong>descrição</strong></td>
              <td><strong>
                  <center>Detalhes</center>
                </strong></td>
            </tr>



            <tr>
              <td>
                <font color="#000000"><a href=""><span style="color:#000;">1101</span></a></font>
              </td>
              <td>
                <font color="#000000"><a href=""><span style="color:#000;">1101 nome teste</span></a></font>
              </td>
              <td>
                <font color="#000000"><a href="">
                    <center><span style="color:#000;">+ Detalhes</span></center>
                  </a></font>
              </td>

            </tr>





          </tbody>
        </table>

      </div>
    </div>


  </div>

</html>