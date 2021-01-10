
    function openNav() {
        document.getElementById("mySidenav").style.width = "220px";
        document.getElementById("buttonClef").style.visibility = "hidden";

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("buttonClef").style.visibility = "visible";
    }


    function myFunction() {
        var x = document.getElementById("demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }

    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    $(document).ready(function () {
        $("#meseci").change(function () {
            var id = $(this).val();
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

    function daysInMonth(month, year) { // Use 1 for January, 2 for February, etc.

        var datum = new Date(year, month, 0).getDate();
        console.log(datum);
    }

    daysInMonth(2, 2019);

    function danasnjiDatum() {
        var today = new Date();

        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
        
        for(i=mm; i<=mm+1; i++){
            
        }

        console.log(today);
    }

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


