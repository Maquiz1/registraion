<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRUGS INVENTORY SYSTEM</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <link type="text/css" rel="stylesheet" href="css/style.css"> -->
    <script type="text/javascript" src="reg.js"></script>
</head>

<body>

    <!-- REGISTER FORM START HERE  -->
    <div class="container">
        <div class="card mx-auto" style="width: 80rem;">
            <div class="card-header text-center text-info">
                FORM YA USAJILI
            </div>
            <div class="card-body bg-light">
                <small id="msg" class="form-text text-muted">.</small>
                <form id="register_form" onsubmit="return false" autocomplete="off">
                    <h4 class="text-center text-info card-title">MSHIRIKI</h4>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first_name"><i></i>&nbsp;First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="emailHelp" placeholder="Enter Username" required>
                                <small id="f_error" class="form-text text-muted">.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="middle_name"><i></i>&nbsp;Midle Name</label>
                                <input type="text" class="form-control" name="middle_name" id="middle_name" aria-describedby="emailHelp" required>
                                <small id="m_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="last_name"><i></i>&nbsp;Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="emailHelp" required>
                                <small id="l_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group md-form md-outline input-with-post-icon datepicker">
                                <label for="date"><i class="fas fa-calendar input-prefix" tabindex="0"></i>&nbsp;Tarehe Ya Kuzaliwa</label>
                                <input type="date" class="form-control" name="date" id="date" aria-describedby="emailHelp" required>
                                <small id="date_error" class="form-text text-muted">.</small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center text-info card-title">MWENYE KITI</h4>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="chair_first_name"><i></i>&nbsp;First Name</label>
                                <input type="text" class="form-control" name="chair_first_name" id="chair_first_name" aria-describedby="emailHelp" required>
                                <small id="cf_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="chair_last_name"><i></i>&nbsp;Last Name</label>
                                <input type="text" class="form-control" name="chair_last_name" id="chair_last_name" aria-describedby="emailHelp" required>
                                <small id="cl_error" class="form-text text-muted">.</small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group input-small">
                            <label for="meeting"><i></i>&nbsp;MPO TAYARI KUJA KWENE KIKAO</label>
                            <select id="meeting" name="meeting" class="form-control" required>
                                <option value="">Chagua Jibu</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="HAKUNA JIBU">HAKUNA JIBU</option>
                            </select>
                            <small id="me_error" class="form-text text-muted">.</small>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="malaria"><i></i>&nbsp;MLISHASHIRIKI KWENYE TAFITI YA CHANJO YA MALARIA</label>
                                <select name="malaria" id="malaria" name="malaria" class="form-control" required>
                                    <option value="">Chagua Jibu</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="HAKUNA JIBU">HAKUNA JIBU</option>
                                </select>
                                <small id="ma_error" class="form-text text-muted">.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="phone"><i></i>&nbsp;NAMBA YA SIMU</label>
                                <input type="text" pattern="\d*" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" minlength="10" maxlength="10" required>
                                <small id="p_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center text-info card-title">MJAZAJI</h4>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="mjazaji1"><i></i>&nbsp;JINA LA KWANZA</label>
                                <input type="text" class="form-control" name="mjazaji1" id="mjazaji1" aria-describedby="emailHelp" required>
                                <small id="mzf_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="mjazaji2"><i></i>&nbsp;JINA LA PILI</label>
                                <input type="text" class="form-control" name="mjazaji2" id="mjazaji2" aria-describedby="emailHelp" required>
                                <small id="mzf_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="mjazaji3"><i></i>&nbsp;JINA LA TATU</label>
                                <input type="text" class="form-control" name="mjazaji3" id="mjazaji3" aria-describedby="emailHelp" required>
                                <small id="mzf_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group md-form md-outline input-with-post-icon datepicker">
                                <label for="mjazaji_date"><i class="fas fa-calendar input-prefix" tabindex="0"></i>&nbsp;Tarehe</label>
                                <input type="date" class="form-control" name="mjazaji_date" id="mjazaji_date" aria-describedby="emailHelp" required>
                                <small id="mzd_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center text-info card-title">MKAGUZI</h4>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="mkaguzi1"><i></i>&nbsp;JINA LA KWANZA</label>
                                <select name="mkaguzi1" id="mkaguzi1" name="mkaguzi1" class="form-control" required>
                                    <option value="">Chagua Jibu</option>
                                    <option value="BAKARI">BAKARI</option>
                                    <option value="HAKUNA JIBU">HAKUNA JIBU</option>
                                </select>
                                <small id="mkf_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="mkaguzi2"><i></i>&nbsp;JINA LA PILI</label>
                                <select name="mkaguzi2" id="mkaguzi2" name="mkaguzi2" class="form-control" required>
                                    <option value="">Chagua Jibu</option>
                                    <option value="M">M</option>
                                    <option value="HAKUNA JIBU">HAKUNA JIBU</option>
                                </select>
                                <small id="mkf_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="mkaguzi3"><i></i>&nbsp;JINA LA TATU</label>
                                <select name="mkaguzi3" id="mkaguzi3" name="mkaguzi3" class="form-control" required>
                                    <option value="">Chagua Jibu</option>
                                    <option value="BAKARI">BAKARI</option>
                                    <option value="HAKUNA JIBU">HAKUNA JIBU</option>
                                </select>
                                <small id="mkf_error" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group md-form md-outline input-with-post-icon datepicker">
                                <label for="mkaguzi_date"><i class="fas fa-calendar input-prefix" tabindex="0"></i>&nbsp;Tarehe</label>
                                <input type="date" class="form-control" name="mkaguzi_date" id="mkaguzi_date" aria-describedby="emailHelp">
                                <small id="mkd_error" class="form-text text-muted">.</small>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="register_btn" id="register_btn" class="btn btn-primary"><i class="fa fa-lock"></i>&nbsp;Register</button>
                    <span><a href="index.php">back</a></span>
                </form>
            </div>
        </div>

    </div>

    <!-- REGISTER FORM ENDS HERE  -->

</body>

</html>


<script>
    $(document).ready(function() {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });

    });
</script>