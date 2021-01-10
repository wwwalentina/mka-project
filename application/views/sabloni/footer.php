</div>
<footer>
    <div id="one" class="spanLeft">
        <address>
            Contact information: <br>
            <i class="fa fa-phone"></i> 060/570-5720 <br>
            <i class="fa fa-envelope"></i><a href="mailto:zorana.vladisavljevic@gmail.com"> zorana.vladisavljevic@gmail.com</a><br>
        </address>
    </div>
    <div id="two" class="spanLeft">
        <span>
            <a href="https://www.facebook.com/Mala-klavirska-akademija-104037441480599" target="_blank"><i class="footerFaFa fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/zorana.vladisavljevic/?hl=en" target="_blank"><i class="footerFaFa fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/user/MrZoranica" target="_blank"><i class="footerFaFa fa fa-youtube"></i></a>
        </span>
    </div>
    <div id="three" class="spanLeft">
        <span>Zorana Vladisavljević © 2019 - All Rights Reserved
        </span>
    </div>
</footer>
<script>

    function openNav() {
        document.getElementById("mySidenav").style.width = "220px";
        document.getElementById("buttonClef").style.visibility = "hidden";

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("buttonClef").style.visibility = "visible";
    }

    function openLeftMenu() {
        document.getElementById("leftMenu").style.display = "block";
    }

    function closeLeftMenu() {
        document.getElementById("leftMenu").style.display = "none";
    }


    $(document).ready(function () {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        if (mm == 13) {
            mm = 1;
        }
        var nextMonth = mm + 1;
        var yyyy = today.getFullYear();
        var nextYear = yyyy + 1;
        var numberOfDays = new Date(yyyy, mm, 0).getDate();
//        var select = document.getElementById("year");
//        var select1 = document.getElementById("months");
//        var select2 = document.getElementById("days");
//        var select3 = document.getElementById("hours");
//        var hours = ["10h", "11h", "12h", "17h", "18h", "19h", "20h", "21h"];
        console.log(mm);
        console.log(yyyy);
        console.log(nextYear);
//        var year = new Option(yyyy, yyyy);
//        select.options.add(year);
//        for (i = mm; i <= nextMonth; i++) {
//            var month = new Option(i, i);
//            select1.options.add(month);
//            if (mm == 12) {
//                nextMonth = 1;
//                var month = new Option(nextMonth, nextMonth);
//                select1.options.add(month);
//            }
//        }
//        for (i = dd + 1; i <= numberOfDays; i++) {
//            var day = new Option(i, i);
//            select2.options.add(day);
//        }
//        for (i = 0; i < hours.length; i++) {
//            var hour = new Option(hours[i], hours[i]);
//            select3.options.add(hour);
//        }

        /* CALENDAR */
        var today = new Date();
        var todayDay = today.getDate();
        console.log('TODAY: ' + todayDay);
        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        var tomorrowDay = tomorrow.getUTCDate();
        console.log('tomorrowDay: ' + tomorrowDay);
        var endDate = new Date();
        endDate.setDate(endDate.getDate() + 30);
        console.log(endDate);
        var endDay = endDate.getUTCDate();
        var endMonth = endDate.getUTCMonth() + 1;
        console.log("endMONTH " + endMonth);


        if (mm < 10 && tomorrowDay == 1) {
            mm = endMonth;
            var minDay = yyyy + '-' + "0" + mm + '-' + "0" + tomorrowDay;
            document.getElementById("date").min = minDay;
            console.log("AAA");
        } else if (mm == 12 && tomorrowDay == 1) {
            mm = endMonth;
            var minDay = nextYear + '-' + "0" + mm + '-' + "0" + tomorrowDay;
            document.getElementById("date").min = minDay;
            console.log("AAAvA");
        }else if (tomorrowDay == 1) {
            mm = endMonth;
            var minDay = yyyy + '-' + mm + '-' + "0" + tomorrowDay;
            document.getElementById("date").min = minDay;
            console.log("AAAv");
        } else if (mm < 10 && tomorrowDay < 10) {
            var minDay = yyyy + '-' + "0" + mm + '-' + "0" + tomorrowDay;
            document.getElementById("date").min = minDay;
            console.log('mm < 10 && tomorrowDay < 10' + 'minday: ' + minDay);
        } else if (mm < 10) {
            var minDay = yyyy + '-' + "0" + mm + '-' + tomorrowDay;
            document.getElementById("date").min = minDay;
            console.log('mm < 10');
        } else if (tomorrowDay < 10) {
            var minDay = yyyy + '-' + mm + '-' + "0" + tomorrowDay;
            document.getElementById("date").min = minDay;
            console.log('tomorrowDay < 10');
        } else {
            var minDay = yyyy + '-' + mm + '-' + tomorrowDay;
            document.getElementById("date").min = minDay;
            console.log('else...');
        }

        if (mm == 12 && endMonth == 1 && endDay < 10) {
            var maxDay = nextYear + '-' + "0" + endMonth + '-' + "0" + endDay;
            document.getElementById("date").max = maxDay;
        } else if (mm == 12 && endMonth == 1) {
            var maxDay = nextYear + '-' + "0" + endMonth + '-' + endDay;
            document.getElementById("date").max = maxDay;
        } else if (endMonth < 10 && endDay < 10) {
            var maxDay = yyyy + '-' + "0" + endMonth + '-' + "0" + endDay;
            document.getElementById("date").max = maxDay;
        } else if (endMonth < 10) {
            var maxDay = yyyy + '-' + "0" + endMonth + '-' + endDay;
            document.getElementById("date").max = maxDay;
        } else if (endDay < 10) {
            var maxDay = yyyy + '-' + endMonth + '-' + "0" + endDay;
            document.getElementById("date").max = maxDay;
        } else if (endMonth == 1 && endDay < 10) {
            var maxDay = nextYear + '-' + "0" + endMonth + '-' + "0" + endDay;
            document.getElementById("date").max = maxDay;
        } else if (endMonth == 1) {
            var maxDay = nextYear + '-' + "0" + endMonth + '-' + endDay;
            document.getElementById("date").max = maxDay;
        } else {
            var maxDay = yyyy + '-' + endMonth + '-' + tomorrowDay;
            document.getElementById("date").max = maxDay;
        }

    });
    // CALENDAR AND TIME

    $(document).ready(function () {
        var hours = ["10h", "11h", "12h", "17h", "18h", "19h", "20h", "21h"];
        var sel = document.getElementById("hours");
        for (i = 0; i < hours.length; i++) {
            var hour = new Option(hours[i], hours[i]);
            sel.options.add(hour);
        }
        $("#date").change(function () {
            $('#hours').empty();
            var date = $(this).val();


            $.ajax({
                type: "post",
                url: "<?php echo site_url(); ?>/Korisnik/availability",
                dataType: 'json',
                data: {selectedDate: date},
                success: function (result) {
//                    var resultArray = JSON.parse(result);

                    console.log(typeof (result));
                    console.log(result.length);
//                    console.log(result[0]['vremeOdrzavanjaCasa']);
                    for (var i = 0; i < hours.length; i++) {
                        console.log(hours.length);
//                        console.log(result);
//                        var hour2 = new Option(result[i]['vremeOdrzavanjaCasa'], result[i]['vremeOdrzavanjaCasa'], true, true);
//                        sel.options.add(hour2);
                        /*var $dropdown = $("#dropdown");
                         $.each(result, function() {
                         $dropdown.append($("<option />").val(this.ImageFolderID).text(this.Name));
                         });*/
//                        $('#hours').append('<option value=' + result[i]['vremeOdrzavanjaCasa'] + " selected='selected'>" + result[i]['vremeOdrzavanjaCasa'] + '</option>');
                        var varArray = hours[i];
                        console.log('varArray = ' + varArray);
                        var tmp = '';
//
                        for (j = 0; j < result.length; j++) {

                            var varDatabase = result[j]['vremeOdrzavanjaCasa'];

                            if (varArray == varDatabase) {
//                            var hour2 = new Option(varDatabase, varDatabase, true, true);
//                            sel.options.add(hour2);
                                tmp = 'disabled';
                            }

                        }
                        $(sel).append('<option ' + tmp + ' value=' + varArray + '>' + varArray + '</option>');




                    }


                },
                error: function () {
                    console.log('error');
                }
            });
        });
    });
//END OF CALENDAR
//calculating PRICE begining
    $(document).ready(function () {
        var predmet;
        var pocetnaPredmet;
        var tipCasa;
        var pocetnaTipCasa;
        var trajanjeCasa;
        var pocetnaTrajanjeCasa;
        var cena;
        var baza = 1000;
        var valuta = " dinara";
        $("input[name='predmet'").change(function () {
            if (document.getElementById('klavir').checked) {
//                 predmet = document.getElementById('klavir').value;
                pocetnaPredmet = 500;
            } else if (document.getElementById('teorija').checked) {
//                 predmet = document.getElementById('teorija').value;
                pocetnaPredmet = 0;
            }

            cena = baza + pocetnaPredmet + pocetnaTipCasa + pocetnaTrajanjeCasa + valuta;
            document.getElementById('cena').innerHTML = cena;
            console.log(cena);
            console.log(pocetnaPredmet);
            console.log(pocetnaTipCasa);
            console.log(pocetnaTrajanjeCasa);
        });
        $("input[name='tipCasa'").change(function () {
            if (document.getElementById('prekoSkajpa').checked) {
//                 tipCasa = document.getElementById('prekoSkajpa').value;
                pocetnaTipCasa = 0;
            } else if (document.getElementById('kodProfesora').checked) {
//                 tipCasa = document.getElementById('kodProfesora').value;
                pocetnaTipCasa = 200;
            }

            cena = baza + pocetnaPredmet + pocetnaTipCasa + pocetnaTrajanjeCasa + valuta;
            document.getElementById('cena').innerHTML = cena;
            console.log(cena);
            console.log(pocetnaPredmet);
            console.log(pocetnaTipCasa);
            console.log(pocetnaTrajanjeCasa);
        });
        $("input[name='trajanjeCasa'").change(function () {
            if (document.getElementById('30min').checked) {
//                 trajanjeCasa = document.getElementById('30min').value;
                pocetnaTrajanjeCasa = 0;
            } else if (document.getElementById('45min').checked) {
//                 trajanjeCasa = document.getElementById('45min').value;
                pocetnaTrajanjeCasa = 300;
            } else {
//                 trajanjeCasa = document.getElementById('60min').value;
                pocetnaTrajanjeCasa = 600;
            }
            cena = baza + pocetnaPredmet + pocetnaTipCasa + pocetnaTrajanjeCasa + valuta;
            document.getElementById('cena').innerHTML = cena;
            console.log(cena);
            console.log(pocetnaPredmet);
            console.log(pocetnaTipCasa);
            console.log(pocetnaTrajanjeCasa);
        });
    });
//calculating PRICE end


    $(document).ready(function () {
        $("#months").change(function () {
            $('#days').empty();
            var month = $(this).val();
            var today = new Date();
            var dd = today.getDate();
            var yyyy = today.getFullYear();
            var nextYear = yyyy + 1;
            var numberOfDays = new Date(yyyy, month, 0).getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var nextMonth = mm + 1;
            var select = document.getElementById("year");
            var select2 = document.getElementById("days");
            console.log(nextYear);
            if (month == mm) {
                for (i = dd + 1; i <= numberOfDays; i++) {
                    var day = new Option(i, i);
                    select2.options.add(day);
                }
            } else if (month == 1) {
                dd = 1;
                numberOfDays = new Date(nextYear, month, 0).getDate();
                console.log("number of days = " + numberOfDays);
                $('#year').empty();
                var year = new Option(nextYear, nextYear);
                select.options.add(year);
                for (i = dd; i <= numberOfDays; i++) {
                    var day = new Option(i, i);
                    select2.options.add(day);
                }
            } else if (month == nextMonth) {
                dd = 1;
                for (i = dd; i <= numberOfDays; i++) {
                    var day = new Option(i, i);
                    select2.options.add(day);
                }

            }



//      var id = document.getElementById("meseci").value;

//        $.ajax({
//            type: "GET",
//            url: "../../controllers/Korisnik/.php",
//            data: { dani : id },
//            success : function(response) {
//                $("#dani").html(response);
//            }
//        });  rest controller za codeigniter
        });
    });


//    function daysInMonth(month, year) { // Use 1 for January, 2 for February, etc.
//
//        var datum = new Date(year, month, 0).getDate();
//
//        var today = new Date();
//        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
//        var yyyy = today.getFullYear();
//
//        var month = document.getElementById('meseci').value;
//        var year = document.getElementById('godina').value;
//
//
//
//
//        console.log(datum);
//    }
//
//    daysInMonth(2, 2019);

//    function danasnjiDatum() {
//        var today = new Date();
//
//        var dd = String(today.getDate()).padStart(2, '0');
//        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
//        var yyyy = today.getFullYear();
//
//        today = mm + '/' + dd + '/' + yyyy;
//        
//        
//
//        console.log(today);
//    }

//var d = new Date();
//
//var month = d.getMonth()+1;
//var day = d.getDate();
//
//var output = d.getFullYear() + '/' +
//    (month<10 ? '0' : '') + month + '/' +
//    (day<10 ? '0' : '') + day;
//    
//    console.log(day);


//   function getDaysInMonth(chosenMonth, chosenYear){

//   }

//   console.log(getDaysInMonth(1, 2012));  


// Change style of navbar on scroll
//    window.onscroll = function () {
//        myFunctionOnscroll()
//    };
//    function myFunctionOnscroll() {
//        var navbar = document.getElementById("myNavbar");
//        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
//        } else {
//            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
//        }
//    }

// Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }



//    responsive nav

    function myFunction2() {
        var x = document.getElementById("myTopnav2");
        if (x.className === "topnav2") {
            x.className += " responsive";
        } else {
            x.className = "topnav2";
        }
    }

// muting and unmuting functions

    var x = document.getElementById("audio");

    function muteUnmute() {
        if (x.muted == false) {
            enableMute();
        } else if (x.muted == true) {
            disableMute();
        }

    }

    function enableMute() {
        x.muted = true;
        document.getElementById("buttonMuteUnmute").innerHTML = "<i class='fa fa-volume-off w3-display-middle' style='font-size:24px; color: #bfbfbf'></i>";
    }

    function disableMute() {
        x.muted = false;
        document.getElementById("buttonMuteUnmute").innerHTML = "<i class='fa fa-volume-up w3-display-middle' style='font-size:24px; color: #bfbfbf'></i>";

    }





</script>   


</body>
</html>