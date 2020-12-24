
function Dropalert(gid){
	swal({   title: "Are you sure ?",   
    text: "Do you want to drop this group ?",   
    type: "error",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes, Drop it!",
	cancelButtonText: "Cancel", 
	   
    closeOnConfirm: false,   
    closeOnCancel: true }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        swal("Group Droped!", "Your Group has been droped Successfully!", "success"); 
		 
		
		  		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "dropGroup.php?gid="+gid , true);
         var studentData;    
		 
	   xmlhttp.send(studentData);     //it should be converted intro string before passing 
	   xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
				  
				 location.reload();
		 
            }
        }; 
		
	} });     
        
}



function Joinalert(gid,mid){
	swal({   title: "Are you sure ?",   
    text: "Do want to join this group?",   
    type: "info",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes",
	cancelButtonText: "Cancel", 
	   
    closeOnConfirm: false,   
    closeOnCancel: true }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        swal("Request Successfully Send!", "you had requested to join this group successfully!", "success"); 
		
		  		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "joinGroup.php?gid="+gid+"&& mid="+mid , true);
         var studentData;    
		 
	   xmlhttp.send(studentData);     //it should be converted intro string before passing 
	   xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
				  
				 location.reload();
		 
            }
        }; 
		
		
 		
        } 
         });
}



function Leavealert(gid,mid){
	swal({   title: "Are you sure ?",   
    text: "Do you want to leave this group?",   
    type: "error",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes, leave it!",
	cancelButtonText: "cancel", 
	   
    closeOnConfirm: false,   
    closeOnCancel: true }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        swal("group left!", "You have successfully left this group!", "success");  

	  		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "leaveGroup.php?gid="+gid+"&& mid="+mid , true);
         var studentData;    
		 
	   xmlhttp.send(studentData);     //it should be converted intro string before passing 
	   xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
				
			 
				  
				 location.reload();
		 
            }
        }; 
		
		
        } 
            
         });
}


function Cancelre(gid,mid){
	swal({   title: "Are you sure ?",   
    text: "Do you want to cancel joining request?",   
    type: "error",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes, cancel it!",
	cancelButtonText: "cancel", 
	   
    closeOnConfirm: false,   
    closeOnCancel: true }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        swal("requset canceled!", "Reuest is cancelled succsessfully!", "success");  
  
				  		 var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "dropRequestJoin.php?gid="+gid+"&& mid="+mid , true);
         var studentData;    
		 
	   xmlhttp.send(studentData);     //it should be converted intro string before passing 
	   xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
				
			 
				  
				 location.reload();
		 
            }
        }; 
		
		
        } 
         });
}



