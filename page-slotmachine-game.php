    <!--http://localhost/../v1/game-slot-machine/game_1024x768/-->
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../v1/game-slot-machine/game_1024x768/css/reset.css" type="text/css">
        <link rel="stylesheet" href="../v1/game-slot-machine/game_1024x768/css/main.css" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
        <meta name="msapplication-tap-highlight" content="no"/>

        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/createjs-2013.12.12.min.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/ctl_utils.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/sprite_lib.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/settings.js"></script>

        <!--      <?php $this->load->view('page/settings'); ?> -->
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CSlotSettings.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CLang.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CPreloader.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CMain.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CTextButton.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CGfxButton.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CToggle.js"></script>
        <script type="text/javascript" src="../v1/../v1/game-slot-machine/game_1024x768/js/CBetBut.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CMenu.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CGame.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CReelColumn.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CInterface.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CPayTablePanel.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CStaticSymbolCell.js"></script>
        <script type="text/javascript" src="../v1/game-slot-machine/game_1024x768/js/CTweenController.js"></script>

    </head>
    <body ondragstart="return false;" ondrop="return false;" >
    	<div style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%"></div>
      <script>
      $(document).ready(function(){
       var oMain = new CMain({
                                        min_reel_loop:2,          //NUMBER OF REEL LOOPS BEFORE SLOT STOPS  
                                        reel_delay: 6,            //NUMBER OF FRAMES TO DELAY THE REELS THAT START AFTER THE FIRST ONE
                                        time_show_win:2000,       //DURATION IN MILLISECONDS OF THE WINNING COMBO SHOWING
                                        time_show_all_wins: 2000, //DURATION IN MILLISECONDS OF ALL WINNING COMBO
                                        money:100                //STARING CREDIT FOR THE USER
                                    });
       'use strict';
       var socket;
       var protocol_identifier = 'server';
       var myId;
       var nicklist;
       var is_typing_indicator;
       var window_has_focus = true;
       var actual_window_title = document.title;
       var flash_title_timer;
       var connected = false;
       var connection_retry_timer;
       var server_url = 'ws://localhost:8804/';
       var token = "<?php
       if (isset($_COOKIE['token'])) {
        echo $_COOKIE['token'];
    } elseif ($this->session->userdata('token')) {
        echo $this->session->userdata('token');
    }
    ?>";
    $(oMain).on("game_start", function(evt) {
                                // alert("game_start");
                             });

    $(oMain).on("end_bet", function(evt,iMoney,iBetWin) {
                                 //alert("iMoney: "+iMoney + " Win:"+iBetWin);
                             });

    $(oMain).on("restart", function(evt) {
                                 //alert("restart");
                             });
connetserver();
            function connetserver() {
                //muestra el tiempo de espera al servidor revisar la funcion para que cargue si no hay conexion
                // show_timer();
                //abrir la conexion
                open_connection();
            }

            function open_connection() {
                socket = new WebSocket('ws://localhost:8804/', 'server');
                socket.addEventListener("open", connection_established);
            }
            //cuando la conexion se establece
            function connection_established(event) {
                connected = true;
                //hideConnectionLostMessage();
                clearInterval(connection_retry_timer);
               // alert(token);
                introduce(token);
                socket.addEventListener('message', function(event) {
                    message_received(event.data);
                });
                socket.addEventListener('close', function(event) {
                    connected = false;
                    showConnectionLostMessage();
                    //reConnect();
                });
            }

            function introduce(nickname) {
                var intro = {
                    type: 'join',
                    token: nickname
                }

                socket.send(JSON.stringify(intro));
            }
             function is_websocket_supported() {
                if ('WebSocket' in window) {
                    return true;
                }
                return false;
            }

            message_received= function(message) {
                var message;
                message = JSON.parse(message);
                //trae las salas actuales
                if (message.type === 'sales') {
                    myId = message.userId;
                    // $('#chat-container').fadeIn();
                    //$('#loading-message').hide();
                    var newvar = {};
                    newvar = new Object();
                    newvar = message.messagesend;
                    var myObj = newvar;

                    var array = $.map(myObj, function(value, index) {
                        return [value];
                    });
                    //sales(array, message.clients);
                }
                //                si ya esta conectado
                 else if (message.type === 'prueba') {
                    myId = message.userId;
                    // $('#chat-container').fadeIn();
                    //$('#loading-message').hide();
                    
                  var  newvar = message.messagesend;
                

                   s_oGame.pruebacgame(newvar);

                }
                  else if (message.type === 'prueba2') {
                    myId = message.userId;
                    // $('#chat-container').fadeIn();
                    //$('#loading-message').hide();
                    
                  var  newvar = message.messagesend;
                

                   s_oGame.pruebacgame2(newvar);

                }
                else if (message.type === 'readyconect') {


                    $('#user-conect').slideDown();
                    // $('#chat-container').fadeIn();
                    //$('#loading-message').hide();
                    //$('#game').html(message.messagesend);
                }
                //para traer datos del usuarhio
                else if (message.type === 'welcome') {
                    myId = message.userId;
                    // $('#chat-container').fadeIn();
                    //$('#loading-message').hide();
                    console.log(message.messagesend);
                } else if (message.type === 'message' && parseInt(message.sender) !== parseInt(myId)) {
                    //add_new_msg_to_log(message);
                    blink_window_title('~ message poker ~');
                    //showNewMessageDesktopNotification(message.nickname, message.message);
                } else if (message.type === 'nicklist') {
                    var chatter_list_html = '';
                    nicklist = message.nicklist;
                    for (var i in nicklist) {
                        chatter_list_html += '<li>' + nicklist[i] + '</li>';
                    }

                    chatter_list_html = '<ul>' + chatter_list_html + '</ul>';
                    $('#chatter-list').html(chatter_list_html);
                } else if (message.type === 'activity_typing' && parseInt(message.sender) !== parseInt(myId)) {
                    var activity_msg = message.name + ' is typing..';
                    $('#is-typig-status').html(activity_msg).fadeIn();
                    clearTimeout(is_typing_indicator);
                    is_typing_indicator = setTimeout(function() {
                        $('#is-typig-status').fadeOut();
                    }, 2000);
                }

            }
            prueba = function(enviar){
          //public function prueba(){
             enviar.type='prueba';

              //alert(enviar.type);

               socket.send(JSON.stringify(enviar));
    }

    });

          

    </script>
    <canvas id="canvas" class='ani_hack' width="1024" height="768"> </canvas>

    </body>
    </html>