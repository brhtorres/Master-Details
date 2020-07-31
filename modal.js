$('.formDep').submit(function(e){
   e.preventDefault();
   let data = $(this).serialize();

   $.post("modal.php", data, function(d){
       console.log(d);
   }, 'json');
 });
