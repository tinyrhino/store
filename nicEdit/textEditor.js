//This file added a text editor panel to all elements with the class name "panel"
//make sure to have an empty div with the ID "NicPanel" where you would like the panel to appear. 


	//added the panel to the 
	bkLib.onDomLoaded(function() {
		
		//create and array of all the IDs with the class name panel
		var arrayOfIds = $.map($(".HTMLTextEditor"), function(n, i){
		return n.id;
		});
	
		//get the length of the array
		var arrayLength = arrayOfIds.length;
		
        var myNicEditor = new nicEditor({fullPanel : true});
		  
		//add link to all elements with a panel class
		for (var j = 0; j < arrayLength; j++) {
			  	
			  myNicEditor.addInstance(arrayOfIds[j]);
			
			  //this shows the panel when the div is selected 
	  		  document.querySelector("#"+arrayOfIds[j]).addEventListener("click", function(){panelDisplay("block", this.id);});
			
			  //this hides the panel if the user deselect the div
			  document.querySelector("#"+arrayOfIds[j]).addEventListener("blur", function() {panelDisplay("none", this.id);});	
			  }
		
		//make the panel float. 
		//myNicEditor.floatingPanel();
		myNicEditor.setPanel('adminBar');
    });
	

	function panelDisplay(visible, divID){
	//this function chnages the style to show the panel 
    	document.querySelector(".nicEdit-panelContain").style.display = visible;
		
		if(visible == "none" && divID){
			var newContent = $("#"+divID).html();
			updateDB(newContent,divID );

			
		}
	}

	//this function sends the data to the cfc to be stored in the database. 
	function updateDB(cv ,divID) {
		
    	 var url = "AJAXSave.php"; //change file to save database changes. 
		 
		 $.post(url, {contentVar: cv, id: divID} ,function(data) {
      		$("#test").html(data).show();
   	 	 });
	}
	
	
	
	
	
	
	
	
	
	
	
	/*------------------------------*/
	
	//this function sends the data to the cfc to be stored in the database. 
	/*This one lets you write HTML to a div named test
	function updateDB(cv) {
    	 var url = "AJAXData.cfm"; //change file to save database changes. 
   		 $.post(url, {contentVar: cv} ,function(data) {
      		 $("#test").html(data).show();
   	 	 });
	}
	*/
	