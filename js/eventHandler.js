$(document).ready(function(){
    
    $("#logoutBtn").click( function() {
            window.location.href="logout.php";
        }
    );
    
    $("#insertWorkerBtn").click( function() {
            window.location.href="insertWorker.php";
        }
    );
    
    $("#deleteWorkerBtn").click( function() {
            window.location.href="deleteWorker.php";
        }
    );
    
    $("#homeBtn").click( function() {
            window.location.href="index.php";
        }
    );
    
    $("#meetingBtn").click( function() {
            window.location.href="meeting.php";
        }
    );
    
    $("#search").click( function() {
        
        event.preventDefault();
            
        //Submits and stores score, retrieves average score
        $.ajax({
            type : "POST",
            url  : "findEmployees.php",            
            dataType : "json",
            // data : {"score" : score},            
            success : function(data){
                console.log(data);
                
                for(var i = 0; i < data.length; i++){
                    console.log(i);

                    console.log("First Name: " + data[i]['first_name']);
                    console.log("Last Name: " + data[i]['last_name']);
                    console.log("Job Title: " + data[i]['job_title']);
                }
                
                // if(data !== "empty") {
                    
                //     $("#times").html(data.times);
                //     $("#average").html(data.average);
                //     $("#feedback").css("display", "block");
                //     $("#waiting").html("");                     // Get rid of loading icon
                //     $("input[type='submit']").css("display","");
                    
                //     console.log("Old score: ", score);
                //     score = 0;
                // }
            },
            complete: function(data,status) { //optional, used for debugging purposes
              // alert(status);
            }

        });//AJAX
    });
}); //documentReady       