$(document).ready(function(){
	$("#musics").click(function() {
		$('#moment').hide('slow', function() {
		});
		$('#video').hide('slow', function() {
		});
		$('#image').hide('slow', function() {
		});
  		$('#music').show('slow', function() {
		});
  	});
  
  	$("#moments").click(function() {
  		$('#music').hide('slow', function() {
		});
		$('#video').hide('slow', function() {
		});
		$('#image').hide('slow', function() {
		});
  		$('#moment').show('slow', function() {
		});
	});
  
	$("#videos").click(function() {
		$('#music').hide('slow', function() {
		});
		$('#moment').hide('slow', function() {
		});
		$('#image').hide('slow', function() {
		});
  		$('#video').show('slow', function() {
		});
  	});
  
    $("#images").click(function() {
    	$('#music').hide('slow', function() {
		});
		$('#moment').hide('slow', function() {
		});
		$('#video').hide('slow', function() {
		});
  		$('#image').show('slow', function() {
		});
  	});
  
}); 