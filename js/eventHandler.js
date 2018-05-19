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
    
}); //documentReady       