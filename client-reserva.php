<?php
  $title="reserva";
  $page="reserva";
  include_once ("public-navbar.php");

  ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/redmond/jquery-ui.min.css" integrity="sha512-e7RyjvIuobYKTFb/Gxh8kyJobBZI9HMDYaExXkxFl8m9x6E/+z46nx/38qVFL302i5yBXcSn1CpcELb9UV1hRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/booking.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="/js/booking.js"></script>
    <script src="/js/lib/moment/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            $("#datepicker").datepicker({
                dateFormat: "dd/mm/yy",
                minDate: 0,
                orientation: top
            })
            $("#datepicker").on("change", reserva);
        });
    </script>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
           <div class="col col-10 mt-4 bg-light p-4 rounded">
                <div class="row mb-3">
                    <div class="col">
                        <h3 class="bg-blue text-light p-1 fs-4 rounded" >Reserves</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4 class="h4-sections border-bottom fs-5">Les meves reserves</h4>
                        <div class="row">
                            <div class="col col-4">
                                <div>
                                    {% if meves_reserves == [] %}
                                    <p class="mt-2">No tens cap reserva vigent.<p>
                                    {% else %}
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr class="table-headers">
                                                <th class="text-center p-2 border-bottom">Data</th>
                                                <th class="text-center p-2 border-bottom">Hora</th>
                                                <th class="text-center p-2 border-bottom">Màquina</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for item in meves_reserves %}
                                            <tr>
                                                <td class="text-center p-2">{{(item.data_in.split(' '))[0]}}</td>
                                                <td class="text-center p-2">{{(item.data_in.split(' '))[1]}} - {{(item.data_out.split(' '))[1]}}</td>
                                                <td class="text-center p-2">{{item.nom_maquina}}</td>
                                            </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                    {% endif %}
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4 class="h4-sections border-bottom fs-5">Estat a TechLab</h4>
                        <div class="mt-3">
                            <p><span class="fw-bold fs-6">Temps disponible: &nbsp;</span><span id="temps_disp">-</span></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4 class="h4-sections border-bottom fs-5">Formulari de reserva</h4>
                        <form id="form" action="" method="POST">
                            <div class="row mt-3 mb-5 justify-content-center">
                                <div class="col col-2">
                                    <label class="form-label fw-bold" for="maquines">Laboratori</label>
                                    <select class="form-control" name="labs" required>
                                    
                                        <?php    
                                        include("conexion.php");
                                        $getLabs1 = "select * from labs order by nom_lab";
                                        $getLabs2 = mysql_query($getLabs1);
                                            
                                        while($row = mysql_fetch_array($getLabs2))
                                        {
                                            $nom_lab= $row['nom_lab'];
                                            $descripcio = $row['descripcio'];
                                            ?>
                                            <option value="<?php echo $nom_lab; ?>"><?php echo $nom_lab; ?></option>
                                            <?php
                                        }
                                        ?>
                                    
                                    </select>
                
                                    <label class="form-label fw-bold" for="datepicker">Data</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="data" id="datepicker" value="{{current_date}}" required>
                                        <label for="datepicker" class="label-date input-group-text"><span class="bi-calendar-fill"></span></label>
                                    </div>
                
                                    <label for="reservar"></label>
                                    <input class="form-submit text-light fw-bold w-100" type="submit" name="reservar" id="reservar" value="Reservar">
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col col-8" id="disp">
                                    <p class="text-center">No hi ha cap reserva disponible.</p>
                                </div>
                            </div>        
                        </form>  
                    </div>
                </div>
           </div>
        </div>
        <!--ESPAI A SOTA DEL CONTENIDOR-->
        <div class="row">
            <div class="col mt-3">
                <p></p>
            </div>
        </div>
    </div>
{% endblock %}